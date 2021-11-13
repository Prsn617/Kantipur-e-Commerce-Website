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