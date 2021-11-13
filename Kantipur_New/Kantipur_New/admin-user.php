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
    <div class="tables">
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
                                    <td>'.$row["userNum"].'</td>
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

            <div class="cart-table">
                <h1>User's Order</h1>
                <table>
                    <tr>
                        <th>Cart Id</th>
                        <th>Date</th>   
                        <th>User Id</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                    <?php
                        $sqlcart = "SELECT * FROM cart WHERE status = 1";
                        $res = mysqli_query($conn, $sqlcart);

                        while($rows = $res -> fetch_assoc()){
                            $prd_id = $rows['PrdNo'];
                            $sqlname = "SELECT * FROM product WHERE PrdNo = $prd_id";
                            $res2 = mysqli_query($conn, $sqlname);
                            $row2 = mysqli_fetch_assoc($res2);
                            $prd_name = $row2['prdName'];

                            echo '
                                <tr>
                                    <td>'.$rows["cartId"].'</td>
                                    <td>'.$rows["date"].'</td>
                                    <td>'.$rows["userId"].'</td>
                                    <td>'.$prd_name.'</td>
                                    <td>'.$rows["pQty"].'</td>
                                    <form method="post">
                                        <input type="hidden" value="'.$rows["cartId"].'" name="cartid">
                                        <td class="sub-td"><button type="submit" name="deliver" ';if($rows["delivered"] == 1) echo "disabled"; echo' class="deli-btn">Delivered</button></td>
                                    </form>
                                </tr>
                            ';
                        }  
                    ?>
                </table>
            </div>
        </div>
    
        <?php
            if(isset($_POST['deliver'])){
                $cid = $_POST['cartid'];
                $sqldeli = "UPDATE cart SET delivered = 1 WHERE cartId=".$cid;
                mysqli_query($conn, $sqldeli);
            }

            if(isset($_POST['del'])){
                $uid = $_POST['userid'];
                echo $uid;
                $sqldel = "DELETE FROM user_info WHERE userId=".$uid;
                mysqli_query($conn, $sqldel);
            }