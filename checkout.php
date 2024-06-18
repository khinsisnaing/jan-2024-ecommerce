<?php include 'component/header.php'; ?>

<div class="container p-3">

    <h1>Checout Your Product</h1>

    <form action="actions/checkout.php" method="post">
        <div class="mb-3">
            <label for="name"> Name: </label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="name"></input>
        </div>

        <div class="mb-3">
            <label for="email"> Email: </label>
            <input type="email" class="form-control" placeholder="Enter Your Email" name="email"></input>
        </div>

        <div class="mb-3">
            <label for="address"> Address: </label>
            <input type="text" class="form-control" placeholder="Your Address" name="address"></input>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary"> Checkout </label>
        </div>

        
    </form>


</div>