<?php
require_once 'Controller.php';
require_once 'models/Cart.php';
require_once 'models/Product.php';

class CartController extends Controller
{
    private $cartModel;
    private $productModel;

    public function __construct()
    {
        parent::__construct();
        $this->cartModel = new Cart();
        $this->productModel = new Product();
    }

    /**
     * Display cart contents
     */
    public function index()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            $this->setFlash('error', 'Please log in to view your cart.');
            $this->redirect('/login');
            return;
        }

        $userId = $_SESSION['user_id'];
        $cartItems = $this->cartModel->getCartItems($userId);
        $cartSubtotal = $this->cartModel->getCartSubtotal($userId);

        $this->render('public.cart.index', [
            'cartItems' => $cartItems,
            'cartSubtotal' => $cartSubtotal
        ]);
    }

    /**
     * Add a product to cart
     */
    public function add()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            if ($this->isAjax()) {
                $this->json(['success' => false, 'message' => 'Please log in to add items to cart.'], 401);
            } else {
                $this->setFlash('error', 'Please log in to add items to cart.');
                $this->redirect('/login');
            }
            return;
        }

        $userId = $_SESSION['user_id'];
        $productId = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
        $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

        // Validate product exists
        $product = $this->productModel->find($productId);
        if (!$product) {
            if ($this->isAjax()) {
                $this->json(['success' => false, 'message' => 'Product not found.'], 404);
            } else {
                $this->setFlash('error', 'Product not found.');
                $this->redirect('/products');
            }
            return;
        }

        // Add to cart
        $result = $this->cartModel->addItem($userId, $productId, $quantity);

        if ($result) {
            $itemCount = $this->cartModel->getItemCount($userId);

            if ($this->isAjax()) {
                $this->json([
                    'success' => true,
                    'message' => 'Product added to cart.',
                    'cartCount' => $itemCount
                ]);
            } else {
                $this->setFlash('success', 'Product added to cart.');
                $this->redirect('/cart');
            }
        } else {
            if ($this->isAjax()) {
                $this->json(['success' => false, 'message' => 'Failed to add product to cart.'], 500);
            } else {
                $this->setFlash('error', 'Failed to add product to cart.');
                $this->redirect('/products/' . $productId);
            }
        }
    }

    /**
     * Update item quantity in cart (AJAX)
     */
    public function updateQuantityAjax()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            $this->json(['success' => false, 'message' => 'Please log in to update your cart.'], 401);
            return;
        }

        $userId = $_SESSION['user_id'];
        $productId = isset($_POST['product_id']) ? (int)$_POST['product_id'] : 0;
        $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

        // Validate product exists in cart
        $cartItem = $this->cartModel->getCartItemByProduct($userId, $productId);
        if (!$cartItem) {
            $this->json(['success' => false, 'message' => 'Product not found in cart.'], 404);
            return;
        }

        // Update quantity
        $result = $this->cartModel->updateItemQuantity($userId, $productId, $quantity);

        if ($result) {
            $cartItems = $this->cartModel->getCartItems($userId);
            $cartSubtotal = $this->cartModel->getCartSubtotal($userId);
            $item_total = number_format($cartItem['price'] * $quantity, 2);
            $cart_total = number_format($cartSubtotal, 2);


            $this->json([
                'success' => true,
                'message' => 'Cart updated.',
                'item_total' => $item_total,
                'cart_subtotal' => number_format($cartSubtotal, 2),
                'cart_total' => number_format($cartSubtotal, 2) // cart_total and cart_subtotal are the same in this context.
            ]);
        } else {
            $this->json(['success' => false, 'message' => 'Failed to update cart item quantity.'], 500);
        }
    }


    /**
     * Update cart quantities (Form submission)
     */
    public function update_cart_quantity()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            $this->setFlash('error', 'Please log in to update your cart.');
            $this->redirect('/login');
            return;
        }

        $userId = $_SESSION['user_id'];
        $quantities = $_POST['quantities'] ?? [];

        foreach ($quantities as $productId => $quantity) {
            $quantity = max(0, intval($quantity)); // Ensure quantity is not negative
            $this->cartModel->updateItemQuantity($userId, $productId, $quantity);
        }

        $this->setFlash('success', 'Cart quantities updated.');
        $this->redirect('/cart');
    }


    /**
     * Remove item from cart
     */
    public function remove()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            if ($this->isAjax()) {
                $this->json(['success' => false, 'message' => 'Please log in to update your cart.'], 401);
            } else {
                $this->setFlash('error', 'Please log in to update your cart.');
                $this->redirect('/login');
            }
            return;
        }

        $productId = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;
        $userId = $_SESSION['user_id'];

        // Remove item
        $result = $this->cartModel->removeItem($userId, $productId);

        if ($result) {
            $cartSubtotal = $this->cartModel->getCartSubtotal($userId);
            $itemCount = $this->cartModel->getItemCount($userId);

            if ($this->isAjax()) {
                $this->json([
                    'success' => true,
                    'message' => 'Item removed from cart.',
                    'cartSubtotal' => number_format($cartSubtotal, 2),
                    'cartCount' => $itemCount
                ]);
            } else {
                $this->setFlash('success', 'Item removed from cart.');
                $this->redirect('/cart');
            }
        } else {
            if ($this->isAjax()) {
                $this->json(['success' => false, 'message' => 'Failed to remove item from cart.'], 500);
            } else {
                $this->setFlash('error', 'Failed to remove item from cart.');
                $this->redirect('/cart');
            }
        }
    }

    /**
     * Clear entire cart
     */
    public function clear()
    {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            $this->setFlash('error', 'Please log in to clear your cart.');
            $this->redirect('/login');
            return;
        }

        $userId = $_SESSION['user_id'];

        // Clear cart
        $result = $this->cartModel->clearCart($userId);

        if ($result) {
            $this->setFlash('success', 'Cart cleared.');
        } else {
            $this->setFlash('error', 'Failed to clear cart.');
        }

        $this->redirect('/cart');
    }
}