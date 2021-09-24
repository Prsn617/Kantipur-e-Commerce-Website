<?php 
    session_start();
    if($_SESSION['admin'] != 'Admin'){
        header('location:login.php?wtf_bro');
    }
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
            <form action="#" method="POST" enctype="multipart/form-data">
                <h1>Product Form</h1>
                <label for="">Product Position</label>
                <input type="number" name="prdPos">
                <label for="">Product Name</label>
                <input type="text" name="prdName">
                <label for="">Product Price</label>
                <input type="number" name="prdPrice">
                <label for="">Product Image</label>
                <input type="file" name="prdImg">
                <button type="submit" name="upload">Update</button>
            </form>
        </div>

<?php 

  $msg = "";
  $conn = mysqli_connect("localhost", "root", "", "kantipur");
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
    $filename = $_FILES["prdImg"]["name"]; 
    $tempname = $_FILES["prdImg"]["tmp_name"];  
    $imgPos = $_POST["prdPos"];  
    $imgName = $_POST["prdName"];  
    $imgPrice = $_POST["prdPrice"];  
    
    $folder = "images/".$filename;
  
    // Get all the submitted data from the form 
    $sql = "UPDATE product SET prdImg='$filename', prdPrice='$imgPrice', prdName='$imgName' WHERE prdPos=$imgPos";

    // Execute query 
    mysqli_query($conn, $sql);
        
    // Now let's move the uploaded image into the folder: image 
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
        alert("Yes");
    }
    else { 
        $msg = "Failed to upload image";
        alert("No");
    }
    $result = mysqli_query($conn, "SELECT * FROM product");
    $row = mysqli_fetch_assoc($result);
    mysqli_close($conn);
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
            if(isset($_POST['del'])){
                $delsql = 'DELETE FROM user_info WHERE userId='.$_POST['userid'];
                mysqli_query($conn, $delsql);
            }
            if(isset($_POST['adm-logout'])){
                session_destroy();
                session_start();
                header('location:index.php');
            }
            
        ?>
    </main>
</body>
</html>