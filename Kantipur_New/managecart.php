<?php
    session_start();

        if(isset($_POST['add-to-cart'])){
            if(isset($_SESSION['cart'])){
                $myItems = array_column($_SESSION['cart'], 'Pname');
                if(in_array($_POST['Pname'], $myItems)){
                    echo"<script>
                        console.log(document.referrer);
                        alert('Item already added');
                        if(document.referrer === 'http://localhost:8080/Kantipur_New/products.php'){
                            window.location.href = 'products.php';
                        }
                        else{
                            window.location.href = 'index.php';
                        }
                        </script>";
                }
                else{
                    $count = count($_SESSION['cart']);
                    $_SESSION['cart'][$count] = array('Pid'=>$_POST['Pid'],'Pname'=>$_POST['Pname'],'Pprice'=>$_POST['Pprice'],'num'=>$_POST['num']);
                    
                    $conn = mysqli_connect("localhost", "root", "", "kantipur");
                    $pid = $_POST['Pid'];
                    $pqty = (int)$_POST['num'];
                    $uid = $_SESSION["userid"];
                    $date = date("j M y");

                    dataFetch($pid);
                    $stock = $GLOBALS['qty'] - $_POST['num'];
                    $actual_pid = $GLOBALS['id'];

                    
                    $sqlqty = "UPDATE product SET Quantity='$stock' WHERE prdPos=$pid";
                    $sqlcart = "INSERT INTO cart (date, userId, Pid, pQty, status) VALUES('".$date."', ".$uid.", ".$actual_pid.", ".$pqty.", 0);";
                    mysqli_query($conn, $sqlqty);
                    mysqli_query($conn, $sqlcart) or die(mysqli_error($conn));;
                    mysqli_close($conn);

                    echo"<script>
                        console.log(document.referrer);
                        alert('Item added');
                        if(document.referrer === 'http://localhost:8080/Kantipur_New/products.php'){
                            window.location.href = 'products.php';
                        }
                        else{
                            window.location.href = 'index.php';
                        }
                        </script>";
                }
            }
            else{
                $_SESSION['cart'][0] = array('Pid'=>$_POST['Pid'],'Pname'=>$_POST['Pname'],'Pprice'=>$_POST['Pprice'],'num'=>$_POST['num']);

                $conn = mysqli_connect("localhost", "root", "", "kantipur");
                $pid = $_POST['Pid'];
                $pqty = (int)$_POST['num'];
                $uid = $_SESSION["userid"];
                $date = date("j  M Y ");

                dataFetch($pid);
                $stock = $GLOBALS['qty'] - $_POST['num'];
                $actual_pid = $GLOBALS['id'];

                
                $sqlqty = "UPDATE product SET Quantity='$stock' WHERE prdPos=$pid";
                $sqlcart = "INSERT INTO cart (date, userId, Pid, pQty, status) VALUES('".$date."', ".$uid.", ".$actual_pid.", ".$pqty.", 0);";
                mysqli_query($conn, $sqlqty);
                mysqli_query($conn, $sqlcart) or die(mysqli_error($conn));
                mysqli_close($conn);

                echo"<script>
                    console.log(document.referrer);
                    alert('Item added');
                    if(document.referrer === 'http://localhost:8080/Kantipur_New/products.php'){
                        window.location.href = 'products.php';
                    }
                    else{
                        window.location.href = 'index.php';
                    }
                    </script>";
            }
        }

        if(isset($_POST['removeItem'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['Pname'] == $_POST['itemName']){
                    $pid = $value['Pid'];
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);

                    $conn = mysqli_connect("localhost", "root", "", "kantipur");
                    dataFetch($pid);
                    $stock = $GLOBALS['qty'] + $value['num'];
                    $sql2 = "UPDATE product SET  Quantity='$stock' WHERE prdPos=$pid";
                    mysqli_query($conn, $sql2);
                    mysqli_close($conn);

                    echo"<script>
                        alert('Item Removed');
                        window.location.href = 'cart.php';
                        </script>";
                }
            }
        }

        function dataFetch(int $id){
            $conn = mysqli_connect("localhost", "root", "", "kantipur");
            $sql = "SELECT * FROM product WHERE prdPos=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            mysqli_close($conn);
            
            $GLOBALS['name'] = $row['prdName'];
            $GLOBALS['price'] = $row['prdPrice'];
            $GLOBALS['qty'] = $row['Quantity'];
            $GLOBALS['id'] = $row['Pid'];
        }
    ?>