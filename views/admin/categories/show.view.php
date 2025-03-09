<?php
require_once 'views/layout/admin/header.php'
?>


<div class="container mt-4">
    <h1 class="text-center">product</h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card p-3">
                <h5 class="card-title"><?= $product['name'] ?></h5>
            </div>
        </div>
    </div>
</div>

<?php
require_once  'views/layout/admin/footer.php';
?>