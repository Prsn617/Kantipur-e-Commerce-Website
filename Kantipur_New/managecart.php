<?php
    session_start();

        if(isset($_POST['add-to-cart'])){
            if(isset($_SESSION['cart'])){
                $myItems = array_column($_SESSION['cart'], 'Pname');
                if(in_array($_POST['Pname'], $myItems)){
                    echo"<script>
                        alert('Item already added');
                        window.location.href = 'index.php';
                    </script>";
                }
                else{
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Pname'=>$_POST['Pname'],'Pprice'=>$_POST['Pprice'],'num'=>$_POST['num']);   

                echo"<script>
                    alert('Item added');
                    window.location.href = 'index.php';
                    </script>";
                }
            }
            else{
                $_SESSION['cart'][0] = array('Pname'=>$_POST['Pname'],'Pprice'=>$_POST['Pprice'],'num'=>$_POST['num']);

                echo"<script>
                    alert('Item added');
                    window.location.href = 'index.php';
                </script>";
                
                
            }
        }

        if(isset($_POST['removeItem'])){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['Pname'] == $_POST['itemName']){
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo"<script>
                        alert('Item Removed');
                        window.location.href = 'cart.php';
                        </script>";
                }
            }
        }
    ?>