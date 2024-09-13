<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--css file link-->
    <link rel="stylesheet" href="../style.css">
    <style class="">
      .logo2{
        width: 7%;
        height: 7%;
      }

      .admin_image{
        width: 100px;
        object-fit: contain;
        }
        .footer{
            position:absolute;
            bottom:0;
        }

    </style>
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/box_1.jfif" class="logo2" alt="">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-3 d-flex align-items-center">
                <div class="px-5">
                    <a href=""><img src="../images/box_6.jfif" alt="" class="admin_image"></a>
                    <p class="text-light text-center p-1 my-2">Admin Name</p>
                </div>
                <div class="button text-center p-3 my-3">
                    <button class="my-2"><a href="insert_product.php" class="nav-link text-light my-2 bg-info p-1">Insert Products</a></button>
                    <button class="my-2" ><a href="" class="nav-link text-light bg-info p-1 my-2">View Products</a></button>
                    <button class="my-2"><a href="index.php?insert_category" class="nav-link text-light bg-info p-1 my-2">Insert Categories</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-info p-1 my-2">View Categories</a></button>
                    <button class="my-2"><a href="index.php?insert_brand" class="nav-link text-light bg-info p-1 my-2">Insert Brands</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-info p-1 my-2">View Brands</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-info p-1 my-2">All Orders</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-info p-1 my-2">All Payments</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-info p-1 my-2">List Users</a></button>
                    <button class="my-2"><a href="" class="nav-link text-light bg-info p-1 my-2">Logout</a></button>
                </div>
            </div>
        </div>




        <!--fourth chid-->
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            ?>
        </div>


        <!--last child-->
<div class="bg-info p-3 text-center footer">
  <p> All rights reserved @- Designed by Namrata-2024</p>
</div>


    </div>
    
<!--bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>