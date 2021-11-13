<?php 
    session_start();
    if($_SESSION['admin'] != 'Admin'){
        header('location:login.php?wtf_bro');
    }
    $prd_pos = 11;
    $prd_name = "Golbon(1kg)";
    $conn = mysqli_connect("localhost", "root", "", "kantipur");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantipur Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header class="head">
        <div class="logo"><a href="index.php">Kantipur</a></div>
        <nav class="adm-nav">
            <a href="admin.php">Dashboard</a>
            <a href="admin-user.php">Users</a>
            <a href="admin-prd.php">Products</a>
            <form method="post">
                <button name="adm-logout">Log Out</button>
            </form>
        </nav>
    </header>

    <div class="adm-prd">
        <div class="prd-list">
            <h1>Products Details</h1>
            <table>
                <tr>
                    <th>Number</th>
                    <th>Name</th>   
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                <?php
                    $sqlprd = "SELECT * FROM product";
                    $res = mysqli_query($conn, $sqlprd);

                    while($rows = $res -> fetch_assoc()){
                        echo '
                            <tr>
                                <td>'.$rows["prdNo"].'</td>
                                <td>'.$rows["prdName"].'</td>
                                <td>'.$rows["prdPrice"].'</td>
                                <td>'.$rows["Quantity"].'</td>
                            </tr>
                        ';
                    }  
                ?>
            </table>
        </div>
        <div class="product-form">
            <form action="" method="POST">
                <h1>Product Form</h1>
                <label for="">Select the Product</label>
                <select name="prd-id" id="">
                    <?php 
                        $namesql = "SELECT * FROM product";
                        $res = mysqli_query($conn, $namesql);
                        while($namerow = $res -> fetch_assoc()){
                            echo '<option value="'.$namerow["prdNo"].'"> '.$namerow["prdName"].' </option>';
                        }
                    ?>
                </select>
                <input type="submit" value="Go">
            </form>

            <?php
                if(isset($_POST["prd-id"])){
                    $prd_pos = $_POST['prd-id'];
                }
            ?>

            <form method="POST" enctype="multipart/form-data">
                
                <label for="">Product Number</label>
                <input type="number" name="prdPos" min="1" value="<?php echo $prd_pos;?>">
                <label for="">Product Name</label>
                <input type="text" name="prdName" value="<?php dataFetch($prd_pos); echo $GLOBALS['name'];?>">
                <label for="">Product Price</label>
                <input type="number" name="prdPrice" min="1" value="<?php dataFetch($prd_pos); echo $GLOBALS['price'];?>">
                <label for="">Product Quantity</label>
                <input type="number" name="Quantity" min="1" value="<?php dataFetch($prd_pos); echo $GLOBALS['qty'];?>">
                <label for="">Product Image</label>
                <input type="file" name="prdImg" value="">
                <button type="submit" name="upload">Update</button>
                <button type="submit" name="add-items">Add Products</button>
            </form>
        </div>
    </div>    

    <?php 
        function dataFetch(int $id){
            $conn = mysqli_connect("localhost", "root", "", "kantipur");
            $sql = "SELECT * FROM product WHERE prdNo=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $GLOBALS['id'] = $row['Pid'];
            $GLOBALS['name'] = $row['prdName'];
            $GLOBALS['price'] = $row['prdPrice'];
            $GLOBALS['qty'] = $row['Quantity'];
        }

        if (isset($_POST['upload'])) {  
            $filename = $_FILES["prdImg"]["name"]; 
            $tempname = $_FILES["prdImg"]["tmp_name"];  
            $imgPos = $_POST["prdPos"];
            $imgName = $_POST["prdName"];  
            $imgPrice = $_POST["prdPrice"];
            $qty = $_POST["Quantity"];
            $folder = "images/".$filename;
            move_uploaded_file($tempname, $folder);

            $sql = "UPDATE product SET prdNo='$imgPos' prdImg='$filename', prdPrice='$imgPrice', prdName='$imgName', Quantity='$qty' WHERE Pid=$imgPos";
            mysqli_query($conn, $sql);
            $result = mysqli_query($conn, "SELECT * FROM product");
            $row = mysqli_fetch_assoc($result);
        }

        if(isset($_POST['add-items'])){
            $filename = $_FILES["prdImg"]["name"];
            $tempname = $_FILES["prdImg"]["tmp_name"];
            $imgPos = $_POST["prdPos"];
            $imgName = $_POST["prdName"];  
            $imgPrice = $_POST["prdPrice"];
            $qty = $_POST["Quantity"];
            $folder = "images/".$filename;
            move_uploaded_file($tempname, $folder);

            $sqladd = "INSERT INTO product (prdNo, prdImg, prdName, prdPrice, Quantity) VALUES ($imgPos, '".$filename."', '".$imgName."', $imgPrice, $qty)";
            mysqli_query($conn, $sqladd) or die("ERrror chai: ".mysqli_error($conn));
        }
    ?>
