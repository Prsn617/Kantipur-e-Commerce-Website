<?php 
    include_once 'header.php';
?>

    <main>
        <div class="form-container">
            <div class="form-box">
                <form action="include/signup.inc.php" method="post">
                    <h1>Sign Up</h1>
                    <label for="">Name</label>
                    <input type="text" name="username" id="">
                    <label for="">E-mail</label>
                    <input type="email" name="email" id="">
                    <label for="">Password</label>
                    <input type="password" name="password" id="">
                    <input type="submit" name="signup-submit" value="Sign Up" class="signSubmit">

                    <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo"<p>Fill in all the fields!</p>";
                            }
                            elseif($_GET["error"] == "invalidemail"){
                                echo"<p>Choose a proper email!</p>";
                            }
                            elseif($_GET["error"] == "emailtaken"){
                                echo"<p>Email already taken!</p>";
                            }
                            elseif($_GET["error"] == "stmtfailed"){
                                echo"<p>Something went wrong!</p>";
                            }
                            elseif($_GET["error"] == "stmtfailed2"){
                                echo"<p>Something went wrong!!!</p>";
                            }
                            elseif($_GET["error"] == "none"){
                                alert("You've Signed Up!");
                            }
                        }
                    ?>
                </form>
            </div>
            <div class="sign">
                <p>Already have an account? <a href="login.php">Log In</a></p>
            </div>
        </div>
    </main>

    <footer>
        <div class="p">
            <p class="social">Social Media: <a href="#">Instagram</a> | <a href="#">Facebook</a></p>
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