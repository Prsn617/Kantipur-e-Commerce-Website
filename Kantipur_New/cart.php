<?php 
    include_once 'header.php';
?>

    <div class="cart-container">
        <div class="cart-heading">
            <h1>My Cart</h1>
        </div>
        <div class="cart-items">
            <div class="cart-products">
            <?php 
            $count = 0;
            $total = 0;
            if(isset($_SESSION['cart'])){
                $count = count($_SESSION['cart']);
                if($count == 0){
                    echo"<style> 
                            .cart-items{
                                display:none;
                            }

                            .empty-msg{
                                display: block;
                            }
                        </style>";
                }
                else{
                    echo"<style>
                            .cart-items{
                                display: flex;
                            }

                            .empty-msg{
                                display:none;
                            }
                        </style>";
                }
                ?>
                <table>
                    <tr>
                        <th>S.N.</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Qty.</th>
                        <th></th>
                    </tr>
                    <?php
                        if(isset($_SESSION["cart"])){
                            foreach($_SESSION["cart"] as $key => $value){
                                $sn = $key+1;
                                $total = $total + ($value['Pprice'] * $value['num']);
                                if($total < 500){
                                    $delivery = 75;
                                }
                                elseif($total >= 500 || $total < 1000){
                                    $delivery = 50;
                                }
                                else{
                                    $delivery = 0;
                                }
                                $ttotal = $total + $delivery;
                                echo'
                                <tr>
                                    <td>'.$sn.'</td>
                                    <td>'.$value["Pname"].'</td>
                                    <td>'.$value["Pprice"].'</td>
                                    <td>'.$value["num"].'</td>
                                    <td>
                                        <form action="managecart.php" method="post">
                                            <button class="remove" name="removeItem">Remove</button>
                                            <input type="hidden" name="itemName" value="'.$value["Pname"].'">
                                        </form>
                                    </td>
                                </tr>
                                ';
                            }
                        }
            }

                echo'</table>
            </div>
            <div class="price-total">
                <h3>Total:</h3>
                <h5>Rs. '.$total.'</h5>'?>
                <form action="https://uat.esewa.com.np/epay/main" method="POST">
                    <input value="<?php echo $ttotal ?>" name="tAmt" type="hidden">
                    <input value="<?php echo $total ?>" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="<?php echo $delivery ?>" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="12332hjhjhj1" name="pid" type="hidden">
                    <input value="http://localhost:8080/Kantipur_new/sucess.php?q=su" type="hidden" name="su">
                    <input value="http://localhost:8080/Kantipur_new/sucess.php?q=fu" type="hidden" name="fu">
                    <input value="Pay with e-Sewa" type="submit" class="eSubmit">
                </form>
            </div>
        </div>
        
        <div class="empty-msg">
            <h3>Your cart is empty</h3>
        </div>
    </div>


</body>
</html>