<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title> Admin | E Commerce </title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    </head>

<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 border-end border-primary" style="height: 100vh;">
                    <nav class="py-3">
                        <a href="#" class="navbar-brand d-blocl my-3 fw-bold">
                            <i class="bi bi-layout-wtf"></i>
                            E Commerce
                        </a>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="category-index.php" class="nav-link">Category</a></li>
                            
                            <li class="nav-item"><a href="product-index.php" class="nav-link">Product</a></li>
                            <li class="nav-item"><a href="" class="nav-link">Carts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-8 p-5">
                    <h1 class="mb-5">Category</h1>
                    
                    <form action="actions/category-store.php" method="post">
                        <?php if(isset($_GET['error'])): ?>
                            <div class="alert alert-danger">Please Enter All Fields.</div>
                        <?php endif; ?>
                            <input type="text" name="title" placeholder="Enter Category Title ... " class="form-control mb-3" autofocus>
                            <input type="submit" value="Submit" class="btn btn-outline-primary mb-3">
                    </form>
                </div>
            </div>
        </div>