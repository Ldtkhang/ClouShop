<div class="jumbotron">
  <div class="container text-center">
    <h1 class="brand-heading">STORE TOYS</h1>

    <!-- Form tìm kiếm -->
    <form method="get" action="">
      <input type="text" name="keyword" placeholder="Enter search keywords">
      <input type="submit" value="Search">
    </form>

  </div>
</div>

<?php
///////////////////////////// SEARCH ////////////////////////////////////////////
$host = "z5zm8hebixwywy9d.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="tvdg82gjvsolpgib";
$password="r2bxbt5hwwfdv3gw";
$db= "eqy8f5w4zth4rwz9";
$conn = mysqli_connect($host,$username,$password,$db) or die("Can not connect database".mysqli_connect_error());

// Hàm tìm kiếm sản phẩm
function searchProduct($keyword, $conn)
{
    $sql = "SELECT * FROM `product` WHERE proname LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);
    $products = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
    }
    return $products;
}

// Kiểm tra xem có yêu cầu tìm kiếm hay không //

if (isset($_GET["keyword"])) {
    $keyword = $_GET["keyword"];

    //tiềm kiếm sản phẩm//

    $searchResults = searchProduct($keyword, $conn);

    // Hiển thị kết quả tìm kiếm //

    if (count($searchResults) > 0) {
        echo " Search Results '{$keyword}':<br>";
        foreach ($searchResults as $result) {
            echo 
            "Name: " . $result["proname"]. ",
            Price: $" . $result["proprice"]. ",
            Quantity: ". $result["proquantity"].
            "<br>";
        }
    } else {
        echo "No results were found'{$keyword}'";
    }
}
?>