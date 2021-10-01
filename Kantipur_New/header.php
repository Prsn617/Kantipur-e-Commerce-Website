<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Kantipur Chocolate Mart</title>
</head>
<body class="body">
    <header class="head">
        <div class="logo"><a href="index.php">Kantipur</a></div>
        <nav class="nav">
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="acc">
            <?php
                if(isset($_SESSION["userid"])){
                    echo'<h6><a href="account.php">'.$_SESSION["username"].'</a></h6>';
                }
                else{
                    echo'<h6><a href="login.php">Sign In</a></h6>';
                }

                $count = 0;
                if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                }
            ?>
            <a href="cart.php"><button>
                <span class="material-icons">shopping_cart</span> 
                <?php echo $count ?>
            </button></a>
        </div>

        <input type="checkbox" class="hidden" id="box" onclick="toggler()">
            <label for="box" class="burger"><img src="images/burger.png" height="38px" width="38px"></label>
    </header>

    <hr class="headline">