<?php

class Cart extends Model // بافتراض أن لديك كلاس أب Model للتعامل مع قاعدة البيانات
{
    // ... الدوال الأخرى في الكلاس Cart ...

    /**
     * Get cart subtotal for a user
     *
     * @param int $userId User ID
     * @return float Cart subtotal
     */
    public function getCartSubtotal($userId)
    {
        $sql = "SELECT SUM(c.quantity * p.price) AS subtotal
                FROM cart_items c
                JOIN products p ON c.product_id = p.product_id
                WHERE c.user_id = :user_id";

        $stmt = $this->db->prepare($sql); // بافتراض أن لديك اتصال بقاعدة البيانات $this->db
        $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && $result['subtotal'] !== null) {
            return (float)$result['subtotal'];
        } else {
            return 0.00; // أو قيمة افتراضية أخرى إذا لم يكن هناك عناصر في السلة
        }
    }

    // ... بقية الدوال في الكلاس Cart ...

public function getCartItems($userId)
{
    $sql = "SELECT c.cart_item_id, c.product_id, c.quantity, p.name, p.price, p.image_url -- Add any other product fields you need
            FROM cart_items c
            JOIN products p ON c.product_id = p.product_id
            WHERE c.user_id = :user_id";

    $stmt = $this->db->prepare($sql); // Assuming you have a database connection in $this->db
    $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}