<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<?php
require_once 'views/layout/admin/header.php'
?>

<div class="container mt-4">
     <div class="d-flex justify-content-center align-items-start vh-100 mt-5">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg p-4 rounded">
            <h3 class="text-center mb-4">Add Product</h3>
            <form action="/products/create" method="POST">
                <div class="mb-3">
                    <label for="productName" class="form-label fw-bold">Product Name</label>
                    <input name="name" type="text" class="form-control" id="productName" placeholder="Enter product name" required>
                </div>

                <div class="mb-3">
                    <label for="productPrice" class="form-label fw-bold">Price ($)</label>
                    <input name="price" type="number" class="form-control" id="productPrice" placeholder="Enter price" required>
                </div>

                <div class="mb-3">
                    <label for="productImage" class="form-label fw-bold">Image URL</label>
                    <input name="product_image_url" type="text" class="form-control" id="productImage" placeholder="Enter image URL" required>
                </div>

                <div class="mb-3">
                    <label for="productDescription" class="form-label fw-bold">Description</label>
                    <textarea name="description" class="form-control" id="productDescription" rows="3" placeholder="Enter product description" required></textarea>
                </div>

                <button type="submit" class="btn w-100" style="background-color: #198754; border-color: #198754; color:white">Add Product</button>

            </form>
        </div>
    </div>
</div>
</div>
</div>
 
   

<?php 
require_once  'views/layout/admin/footer.php';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
