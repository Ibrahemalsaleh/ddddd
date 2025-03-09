<?php require_once 'views/layout/admin/header.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>All Users</title>
</head>
<body>

<div class="container py-3">
<h1>All Users</h1>

<!-- Example: Display users in a table -->
<?php if (!empty($users)): ?>
    <p>
    <a class="btn btn-primary" href="/users/create">Create New User</a>
</p>
    <table class="table table-bordered table-striped text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['user_id']) ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <!-- Edit link (GET) -->
                    <a class="btn btn-warning" href="/users/<?= $user['user_id'] ?>/edit">Edit</a>
                    &nbsp;|&nbsp;

                    <!-- Delete form (simulating DELETE via _method) -->
                    <form action="/users/<?= $user['user_id'] ?>" method="POST" style="display:inline;">
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
    <p>No users found.</p>
<?php endif; ?>
</div>

<?php
require_once 'views/layout/admin/footer.php'
?>

</body>
</html>
