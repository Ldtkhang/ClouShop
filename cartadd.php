<?php
if (isset($_SESSION['usname']) == "") {
    echo '<meta http-equiv="refresh" content="0;URL=?page=login.php"/>';
} else {

    $usid = $_SESSION['usid'];
    $proid = $_GET['id'];

    $sql = "select * from cart where usid='" . $usid . "' and proid='" . $proid . "' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO cart (usid, proid, cartquantity) VALUES('$usid', '$proid',1)";
        mysqli_query($conn, $sql);
        echo '<script>alert ("ADD PRODUCT TO CART SUCCESSFUL")</script>';
        echo '<meta http-equiv="refresh" content="0;URL=?page=shoppingcart.php"/>';
    } else {
        echo '<meta http-equiv="refresh" content="0;URL=?page=shoppingcart.php"/>';
    }
}
