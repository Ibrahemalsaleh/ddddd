<?php
require_once "views/layout/public/header.php";
?>

<div class="container py-5">
    <h1>Your Shopping Cart</h1>

    <?php if (empty($cartItems)): ?>
        <div class="alert alert-info">
            Your cart is empty. <a href="/">Continue shopping</a>.
        </div>
    <?php else: ?>
        <div class="card">
            <div class="card-header bg-light">
                <div class="row font-weight-bold">
                    <div class="col-md-2">Product</div>
                    <div class="col-md-4">Description</div>
                    <div class="col-md-2">Price</div>
                    <div class="col-md-2">Quantity</div>
                    <div class="col-md-2">Total</div>
                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <form id="update-cart-form" action="?page=update_cart_quantity" method="post">
                        <ul class="list-group mb-3">
                            <?php foreach ($cartItems as $item): ?>
                                <li class="list-group-item d-flex justify-content-between lh-sm cart-item" data-product-id="<?php echo htmlspecialchars($item['product_id']); ?>">
                                    <div>
                                        <h6 class="my-0"><?php echo htmlspecialchars($item['name']); ?></h6>
                                        <small class="text-muted">Price: <?php echo htmlspecialchars(number_format(<span class="math-inline">item\['price'\], 2\)\); ?\></span></small>
                                    </div>
                                    <div class="text-end">
                                        <input type="number"
                                               name="quantities[<?php echo htmlspecialchars($item['product_id']); ?>]"
                                               value="<?php echo htmlspecialchars($item['quantity']); ?>"
                                               min="0"
                                               class="form-control form-control-sm quantity-input"
                                               style="width: 70px;"
                                               data-product-id="<?php echo htmlspecialchars($item['product_id']); ?>">
                                        <span class="text-muted item-total"><?php echo htmlspecialchars(number_format($item['price'] * <span class="math-inline">item\['quantity'\], 2\)\); ?\></span></span>
                                        <a href="?page=remove_cart_item&product_id=<?php echo htmlspecialchars($item['product_id']); ?>" class="btn btn-danger btn-sm remove-item-btn">Remove</a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (USD)</span>
                                <strong id="cart-subtotal"><?php echo htmlspecialchars(number_format(<span class="math-inline">cartSubtotal, 2\)\); ?\></span></strong>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update Quantities</button>
                            <div>
                                <a href="?page=checkout" class="btn btn-success">Checkout</a>
                                <a href="?page=clear_cart" class="btn btn-danger">Clear Cart</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-8">
                        <a href="/products" class="btn btn-outline-primary">Continue Shopping</a>
                        <form action="/crt/clear" method="post" class="d-inline">
                            <button type="submit" class="btn btn-outline-danger ml-2">Clear Cart</button>
                        </form>
                    </div>
                    <div class="col-md-4 text-right">
                        <h5>Subtotal: $<span id="cart-total-footer"><?= number_format($cartTotal, 2) ?></span></h5>
                        <a href="/checkout" class="btn btn-success btn-lg mt-2">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const quantityInputs = document.querySelectorAll('.quantity-input');

    quantityInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            const productId = this.dataset.productId;
            const quantity = this.value;
            const cartItem = this.closest('.cart-item');
            const itemTotalSpan = cartItem.querySelector('.item-total');
            const cartSubtotalSpan = document