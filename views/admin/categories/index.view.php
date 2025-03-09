<?php require_once 'views/layout/admin/header.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>All Categories</title>
</head>
<body>

<div class="container py-3">
<h1>All Categories</h1>

<!-- Example: Display users in a table -->
<?php if (!empty($categories)): ?>
    <p>
    <a class="btn btn-primary" href="/categories/create">Create New Category</a>
</p>
    <table class="table table-bordered table-striped text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= htmlspecialchars($category['id']) ?></td>
                <td><?= htmlspecialchars($category['name']) ?></td>
                <td>
                    <!-- Edit link (GET) -->
                    <a class="btn btn-warning" href="/categories/<?= $category['id'] ?>/edit">Edit</a>
                    &nbsp;|&nbsp;

                    <!-- Delete form (simulating DELETE via _method) -->
                    <form action="/categories/<?= $category['id'] ?>" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    
<?php else: ?>
    <p>No categories found.</p>
<?php endif; ?>
</div>

<?php
require_once 'views/layout/admin/footer.php'
?>

</body>
</html>