<?php 
    include_once 'header.php';
?>

<div class="products-container">

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=41" alt="" srcset="">
            <label><?php dataFetch(41); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(41); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(41); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="41" name="Pid">
            <input type="hidden" value="<?php dataFetch(41); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(41); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(41); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=42" alt="" srcset="">
            <label><?php dataFetch(42); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(42); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(42); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="42" name="Pid">
            <input type="hidden" value="<?php dataFetch(42); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(42); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(42); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=43" alt="" srcset="">
            <label><?php dataFetch(43); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(43); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(43); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="43" name="Pid">
            <input type="hidden" value="<?php dataFetch(43); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(43); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(43); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=51" alt="" srcset="">
            <label><?php dataFetch(51); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(51); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(51); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="51" name="Pid">
            <input type="hidden" value="<?php dataFetch(51); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(51); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(51); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=52" alt="" srcset="">
            <label><?php dataFetch(52); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(52); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(52); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="52" name="Pid">
            <input type="hidden" value="<?php dataFetch(52); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(52); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(52); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=53" alt="" srcset="">
            <label><?php dataFetch(53); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(53); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(53); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="53" name="Pid">
            <input type="hidden" value="<?php dataFetch(53); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(53); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(53); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=61" alt="" srcset="">
            <label><?php dataFetch(61); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(61); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(61); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="61" name="Pid">
            <input type="hidden" value="<?php dataFetch(61); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(61); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(61); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=62" alt="" srcset="">
            <label><?php dataFetch(62); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(62); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(62); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="62" name="Pid">
            <input type="hidden" value="<?php dataFetch(62); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(62); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(62); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=63" alt="" srcset="">
            <label><?php dataFetch(63); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(63); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(63); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="63" name="Pid">
            <input type="hidden" value="<?php dataFetch(63); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(63); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(63); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=71" alt="" srcset="">
            <label><?php dataFetch(71); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(71); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(71); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" name="num" class="num" name="num" class="num">
            <input type="hidden" value="71" name="Pid">
            <input type="hidden" value="<?php dataFetch(71); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(71); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(71); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=72" alt="" srcset="">
            <label><?php dataFetch(72); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(72); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(72); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="72" name="Pid">
            <input type="hidden" value="<?php dataFetch(72); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(72); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(72); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>

    <div class="products-img">
        <?php if(isset($_SESSION["userid"])){
                    echo '<form action="managecart.php" method="post">';
                }
                else{
                    echo '<form action="signup.php" method="post">';
                }?>
            <img src="images/getImage.php?id=73" alt="" srcset="">
            <label><?php dataFetch(73); echo $GLOBALS['name']; ?></label>
            <label class="price">Rs. <?php dataFetch(73); echo $GLOBALS['price']; ?></label>
            <label class="qty">Available: <?php dataFetch(73); echo $GLOBALS['qty']; ?></label>
            <input type="number" value="1" min="1" max="<?php echo $GLOBALS['qty']; ?>" name="num" class="num">
            <input type="hidden" value="73" name="Pid">
            <input type="hidden" value="<?php dataFetch(73); echo $GLOBALS['name']; ?>" name="Pname">
            <input type="hidden" value="<?php dataFetch(73); echo $GLOBALS['price']; ?>" name="Pprice">
            <button type="submit" name="add-to-cart"<?php dataFetch(73); if($GLOBALS['qty']==0)echo"disabled"; ?>>Add to Cart</button>
        </form>
    </div>
</div>

<?php
    function dataFetch(int $id){
        $conn = mysqli_connect("localhost", "root", "", "kantipur");
        $sql = "SELECT * FROM product WHERE prdPos=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        
        $GLOBALS['name'] = $row['prdName'];
        $GLOBALS['price'] =$row['prdPrice'];
        $GLOBALS['qty'] =$row['Quantity'];
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