<?php 
    session_start();
    if($_SESSION['admin'] != 'Admin'){
        header('location:login.php?wtf_bro');
    }
    $prd_pos = 11;
    $prd_name = "Golbon(1kg)";
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
        <nav class="nav">
            <form method="post">
                <button name="adm-logout">Log Out</button>
            </form>
        </nav>
    </header>
    <main class="admin-main">
        <div class="product-form">
            <form action="" method="POST">
            <h1>Product Form</h1>
                <label for="">Select the Product Id</label>
                <select name="prd-id" id="">
                    <option value="11"><?php dataFetch(11); echo $GLOBALS['name']; ?></option>
                    <option value="12"><?php dataFetch(12); echo $GLOBALS['name']; ?></option>
                    <option value="13"><?php dataFetch(13); echo $GLOBALS['name']; ?></option>
                    <option value="14"><?php dataFetch(14); echo $GLOBALS['name']; ?></option>
                    <option value="21"><?php dataFetch(21); echo $GLOBALS['name']; ?></option>
                    <option value="22"><?php dataFetch(22); echo $GLOBALS['name']; ?></option>
                    <option value="23"><?php dataFetch(23); echo $GLOBALS['name']; ?></option>
                    <option value="31"><?php dataFetch(31); echo $GLOBALS['name']; ?></option>
                    <option value="32"><?php dataFetch(32); echo $GLOBALS['name']; ?></option>
                    <option value="33"><?php dataFetch(33); echo $GLOBALS['name']; ?></option>
                    <option value="41"><?php dataFetch(41); echo $GLOBALS['name']; ?></option>
                    <option value="42"><?php dataFetch(42); echo $GLOBALS['name']; ?></option>
                    <option value="43"><?php dataFetch(43); echo $GLOBALS['name']; ?></option>
                    <option value="51"><?php dataFetch(51); echo $GLOBALS['name']; ?></option>
                    <option value="52"><?php dataFetch(52); echo $GLOBALS['name']; ?></option>
                    <option value="53"><?php dataFetch(53); echo $GLOBALS['name']; ?></option>
                    <option value="61"><?php dataFetch(61); echo $GLOBALS['name']; ?></option>
                    <option value="62"><?php dataFetch(62); echo $GLOBALS['name']; ?></option>
                    <option value="63"><?php dataFetch(63); echo $GLOBALS['name']; ?></option>
                    <option value="71"><?php dataFetch(71); echo $GLOBALS['name']; ?></option>
                    <option value="72"><?php dataFetch(72); echo $GLOBALS['name']; ?></option>
                    <option value="73"><?php dataFetch(73); echo $GLOBALS['name']; ?></option>
                </select>
                <input type="submit" value="Go">
            </form>

            <?php
                if(isset($_POST["prd-id"])){
                    $prd_pos = $_POST['prd-id'];
                }
            ?>

            <form method="POST" enctype="multipart/form-data">
                
                <label for="">Product Id</label>
                <input type="number" name="prdPos" value="<?php dataFetch($prd_pos); echo $GLOBALS['id'];?>">
                <label for="">Product Name</label>
                <input type="text" name="prdName" value="<?php dataFetch($prd_pos); echo $GLOBALS['name'];?>">
                <label for="">Product Price</label>
                <input type="number" name="prdPrice" value="<?php dataFetch($prd_pos); echo $GLOBALS['price'];?>">
                <label for="">Product Quantity</label>
                <input type="number" name="Quantity" value="<?php dataFetch($prd_pos); echo $GLOBALS['qty'];?>">
                <label for="">Product Image</label>
                <input type="file" name="prdImg" value="">
                <button type="submit" name="upload">Update</button>
            </form>
        </div>

<?php 

  $conn = mysqli_connect("localhost", "root", "", "kantipur");

  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["prdImg"]["name"]; 
    $tempname = $_FILES["prdImg"]["tmp_name"];  
    $imgPos = $_POST["prdPos"];  
    $imgName = $_POST["prdName"];  
    $imgPrice = $_POST["prdPrice"];
    $qty = $_POST["Quantity"];
    
    $folder = "images/".$filename;
  
    $sql = "UPDATE product SET prdImg='$filename', prdPrice='$imgPrice', prdName='$imgName', Quantity='$qty' WHERE prdPos=$imgPos";
    mysqli_query($conn, $sql);
    $result = mysqli_query($conn, "SELECT * FROM product");
    $row = mysqli_fetch_assoc($result);
  }

?>
        <div class="user-table">
            <h1>User's Info</h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Reward</th>
                    <th></th>
                </tr>
                <?php
                    $sql2 = "SELECT * FROM user_info";

                    $res = mysqli_query($conn, $sql2);
                    while($row = $res -> fetch_assoc()){
                        echo '
                            <tr>
                                <td>'.$row["userId"].'</td>
                                <td>'.$row["userName"].'</td>
                                <td>'.$row["userEmail"].'</td>
                                <td>'.$row["userReward"].'</td>
                                <form method="post">
                                    <input type="hidden" value="'.$row["userId"].'" name="userid">
                                <td class="sub-td"><button type="submit" name="del" class="upd-btn">Delete</button></td>
                                </form>
                            </tr>
                        ';
                    }
                
                ?>
            </table>
        </div>
        
        <?php 
            if(isset($_POST['adm-logout'])){
                session_destroy();
                echo "
                    <script>
                        window.location.href = 'index.php';
                    </script>    
                ";
            }

            if(isset($_POST['del'])){
                $delsql = 'DELETE FROM user_info WHERE userId='.$_POST['userid'];
                mysqli_query($conn, $delsql);
            }

            function dataFetch(int $id){
                $conn = mysqli_connect("localhost", "root", "", "kantipur");
                $sql = "SELECT * FROM product WHERE prdPos=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                
                $GLOBALS['id'] = $row['Pid'];
                $GLOBALS['name'] = $row['prdName'];
                $GLOBALS['price'] = $row['prdPrice'];
                $GLOBALS['qty'] = $row['Quantity'];
        }
        ?>