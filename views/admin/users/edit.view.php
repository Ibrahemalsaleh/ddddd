<?php require_once 'views/layout/admin/header.php'
?>
<form action="/users/<?= $user['user_id'] ?>/edit" method="POST">
    <!-- Use a hidden input to tell your system to treat it as PUT -->
    <input type="hidden" name="_method" value="PUT" />
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" />

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" />

    <button type="submit">Update User</button>
</form>
<?php require_once 'views/layout/admin/footer.php'
?>
