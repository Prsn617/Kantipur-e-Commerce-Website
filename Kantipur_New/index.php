<?php 
    include_once 'header.php';
?>

    <main>
        <div class="about-container">
            <div class="about">
                <h1>Special Winter Offer!!</h1>
                <h4>Get upto 20% discounts on all kinds of chocolate products.</h4>
                <a href="products.php"><button>View Products</button></a>
            </div>
        </div>

        <div class="featured-container" id="products">
            <h1>Featured Products</h1>

            <div class="featured-products">
                <div class="featured-img">
                    <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">'; 
                }?>
                        <img src="images/getImage.php?id=11" alt="" srcset="">
                        <label><?php dataFetch(11); echo $GLOBALS['name']; ?></label>
                        <label class="price">Rs. <?php dataFetch(11); echo $GLOBALS['price']; ?></label>
                        <label class="qty">Available: <?php dataFetch(11); echo $GLOBALS['qty']; ?></label>
                        <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
                        <input type="hidden" value="11" name="Pid">
                        <input type="hidden" value="<?php dataFetch(11); echo $GLOBALS['name']; ?>" name="Pname">
                        <input type="hidden" value="<?php dataFetch(11); echo $GLOBALS['price']; ?>" name="Pprice">
                        <button type="submit" name="add-to-cart"<?php dataFetch(11); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                    </form>
                </div>
                    <div class="featured-img">
                    <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">'; 
                }?>
                        <img src="images/getImage.php?id=12" alt="" srcset="">
                        <label><?php dataFetch(12); echo $GLOBALS['name']; ?></label>
                        <label class="price">Rs. <?php dataFetch(12); echo $GLOBALS['price']; ?></label>
                        <label class="qty">Available: <?php dataFetch(12); echo $GLOBALS['qty']; ?></label>
                        <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">                       
                        <input type="hidden" value="12" name="Pid">
                        <input type="hidden" value="<?php dataFetch(12); echo $GLOBALS['name']; ?>" name="Pname">
                        <input type="hidden" value="<?php dataFetch(12); echo $GLOBALS['price']; ?>" name="Pprice">
                        <button type="submit" name="add-to-cart"<?php dataFetch(12); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                    </form>
                </div>
                    <div class="featured-img">
                    <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">'; 
                }?>
                        <img src="images/getImage.php?id=13" alt="" srcset="">
                        <label><?php dataFetch(13); echo $GLOBALS['name']; ?></label>
                        <label class="price">Rs. <?php dataFetch(13); echo $GLOBALS['price']; ?></label>
                        <label class="qty">Available: <?php dataFetch(13); echo $GLOBALS['qty']; ?></label>
                        <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">                       
                        <input type="hidden" value="13" name="Pid">
                        <input type="hidden" value="<?php dataFetch(13); echo $GLOBALS['name']; ?>" name="Pname">
                        <input type="hidden" value="<?php dataFetch(13); echo $GLOBALS['price']; ?>" name="Pprice">
                        <button type="submit" name="add-to-cart"<?php dataFetch(13); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                    </form>
                </div>
                    <div class="featured-img">
                    <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">'; 
                }?>
                        <img src="images/getImage.php?id=14" alt="" srcset="">
                        <label><?php dataFetch(14); echo $GLOBALS['name']; ?></label>
                        <label class="price">Rs. <?php dataFetch(14); echo $GLOBALS['price']; ?></label>
                        <label class="qty">Available: <?php dataFetch(14); echo $GLOBALS['qty']; ?></label>
                        <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">                        
                        <input type="hidden" value="14" name="Pid">
                        <input type="hidden" value="<?php dataFetch(14); echo $GLOBALS['name']; ?>" name="Pname">
                        <input type="hidden" value="<?php dataFetch(14); echo $GLOBALS['price']; ?>" name="Pprice">
                        <button type="submit" name="add-to-cart"<?php dataFetch(14); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <hr>

        <div class="products-container">
            <div class="products-img">
                <?php if(isset($_SESSION["userid"])){
                        echo '<form action="managecart.php" method="post">';
                    }
                    else{
                        echo '<form action="signup.php" method="post">';
                    }?> 
                    <img src="images/getImage.php?id=21" alt="" srcset="">
                    <label><?php dataFetch(21); echo $GLOBALS['name']; ?></label>
                    <label class="price">Rs. <?php dataFetch(21); echo $GLOBALS['price']; ?></label>
                    <label class="qty">Available: <?php dataFetch(21); echo $GLOBALS['qty']; ?></label>
                    <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
                    <input type="hidden" value="21" name="Pid">
                    <input type="hidden" value="<?php dataFetch(21); echo $GLOBALS['name']; ?>" name="Pname">
                    <input type="hidden" value="<?php dataFetch(21); echo $GLOBALS['price']; ?>" name="Pprice">
                    <button type="submit" name="add-to-cart"<?php dataFetch(21); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                </form>
            </div>
            
            <div class="products-img">
                <?php if(isset($_SESSION["userid"])){
                        echo '<form action="managecart.php" method="post">';
                    }
                    else{
                        echo '<form action="signup.php" method="post">'; 
                    }?>
                    <img src="images/getImage.php?id=22" alt="" srcset="">
                    <label><?php dataFetch(22); echo $GLOBALS['name']; ?></label>
                    <label class="price">Rs. <?php dataFetch(22); echo $GLOBALS['price']; ?></label>
                    <label class="qty">Available: <?php dataFetch(22); echo $GLOBALS['qty']; ?></label>
                    <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
                    <input type="hidden" value="22" name="Pid">
                    <input type="hidden" value="<?php dataFetch(22); echo $GLOBALS['name']; ?>" name="Pname">
                    <input type="hidden" value="<?php dataFetch(22); echo $GLOBALS['price']; ?>" name="Pprice">
                    <button type="submit" name="add-to-cart"<?php dataFetch(22); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                </form>
            </div>
            
            <div class="products-img">
                <?php if(isset($_SESSION["userid"])){
                        echo '<form action="managecart.php" method="post">';
                    }
                    else{
                        echo '<form action="signup.php" method="post">'; 
                    }?>
                    <img src="images/getImage.php?id=23" alt="" srcset="">
                    <label><?php dataFetch(23); echo $GLOBALS['name']; ?></label>
                    <label class="price">Rs. <?php dataFetch(23); echo $GLOBALS['price']; ?></label>
                    <label class="qty">Available: <?php dataFetch(23); echo $GLOBALS['qty']; ?></label>
                    <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
                    <input type="hidden" value="23" name="Pid">
                    <input type="hidden" value="<?php dataFetch(23); echo $GLOBALS['name']; ?>" name="Pname">
                    <input type="hidden" value="<?php dataFetch(23); echo $GLOBALS['price']; ?>" name="Pprice">
                    <button type="submit" name="add-to-cart"<?php dataFetch(23); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                </form>
            </div>

            <div class="products-img">
                <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">'; 
                }?>
                    <img src="images/getImage.php?id=31" alt="" srcset="">
                    <label><?php dataFetch(31); echo $GLOBALS['name']; ?></label>
                    <label class="price">Rs. <?php dataFetch(31); echo $GLOBALS['price']; ?></label>
                    <label class="qty">Available: <?php dataFetch(31); echo $GLOBALS['qty']; ?></label>
                    <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num" name="num" class="num">
                    <input type="hidden" value="31" name="Pid">
                    <input type="hidden" value="<?php dataFetch(31); echo $GLOBALS['name']; ?>" name="Pname">
                    <input type="hidden" value="<?php dataFetch(31); echo $GLOBALS['price']; ?>" name="Pprice">
                    <button type="submit" name="add-to-cart"<?php dataFetch(31); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                </form>
            </div>
            
            <div class="products-img">
                <?php if(isset($_SESSION["userid"])){
                        echo '<form action="managecart.php" method="post">';
                    }
                    else{
                        echo '<form action="signup.php" method="post">'; 
                    }?>
                    <img src="images/getImage.php?id=32" alt="" srcset="">
                    <label><?php dataFetch(32); echo $GLOBALS['name']; ?></label>
                    <label class="price">Rs. <?php dataFetch(32); echo $GLOBALS['price']; ?></label>
                    <label class="qty">Available: <?php dataFetch(32); echo $GLOBALS['qty']; ?></label>
                    <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
                    <input type="hidden" value="32" name="Pid">
                    <input type="hidden" value="<?php dataFetch(32); echo $GLOBALS['name']; ?>" name="Pname">
                    <input type="hidden" value="<?php dataFetch(32); echo $GLOBALS['price']; ?>" name="Pprice">
                    <button type="submit" name="add-to-cart"<?php dataFetch(32); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                </form>
            </div>
            
            <div class="products-img">
                <?php if(isset($_SESSION["userid"])){
                        echo '<form action="managecart.php" method="post">';
                    }
                    else{
                        echo '<form action="signup.php" method="post">';
                    }?>             
                    <img src="images/getImage.php?id=33" alt="" srcset="">
                    <label><?php dataFetch(33); echo $GLOBALS['name']; ?></label>
                    <label class="price">Rs. <?php dataFetch(33); echo $GLOBALS['price']; ?></label>
                    <label class="qty">Available: <?php dataFetch(33); echo $GLOBALS['qty']; ?></label>
                    <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
                    <input type="hidden" value="33" name="Pid">
                    <input type="hidden" value="<?php dataFetch(33); echo $GLOBALS['name']; ?>" name="Pname">
                    <input type="hidden" value="<?php dataFetch(33); echo $GLOBALS['price']; ?>" name="Pprice">
                    <button type="submit" name="add-to-cart"<?php dataFetch(33); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
                </form>
            </div>
        </div>
    </main>

    <?php
        function dataFetch(int $id){
            $conn = mysqli_connect("localhost", "root", "", "kantipur");
            $sql = "SELECT * FROM product WHERE prdPos=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            mysqli_close($conn);
            
            $GLOBALS['name'] = $row['prdName'];
            $GLOBALS['price'] = $row['prdPrice'];
            $GLOBALS['qty'] = $row['Quantity'];
        }
    ?>

    <footer>
        <div class="p">
            <p class="social">Social Media: <a href="#">Instagram</a> | <a href="https://www.facebook.com/kantipurchocolatemart">Facebook</a></p>
            <p>Kantipur Chocolate Mart &copy; All Rights Reserved</p>
        </div>
        <div class="feedback">
            <label>Send Us a Feedback</label>
            <textarea name="" id="" rows=3></textarea>
            <button>Send</button>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>