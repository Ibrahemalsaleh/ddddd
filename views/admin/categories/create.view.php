<?php require_once 'views/layout/admin/header.php' ?>


<div class="container mt-4">
    <h1 class="text-center">Create Category</h1>

    <div class="row">
        <form action="/categories/create" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

<?php require_once 'views/layout/admin/footer.php' ?>

</body>
</html>