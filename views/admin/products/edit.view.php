<?php require_once 'views/layout/admin/header.php'
?>
<form action="/categories/<?= $user['id'] ?>/edit" method="POST">
    <!-- Use a hidden input to tell your system to treat it as PUT -->
    <input type="hidden" name="_method" value="PUT" />
    <label for="name">Category Name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" />

    <button type="submit">Update Category</button>
</form>
<?php require_once 'views/layout/admin/footer.php'
?>