<?php
session_start();
$urladmin ="https://atnshoptoy-b0aae6053f01.herokuapp.com/admin/";
$urluser ="https://atnshoptoy-b0aae6053f01.herokuapp.com/";

$home = "home.php";
$category = "category.php";
$product = "product.php";
$cart = "cart.php";
$order = "order.php";
$user = "user.php";

////////////////////// Connection ////////////////////
$host = "s29oj5odr85rij2o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username="hx83ekgo3naqui9t";
$password="n2ln5qii0d8e3aiu";
$db= "bmgzz1ld9blyyrcf";
$conn = mysqli_connect($host, $username, $password, $db) or die("Can not connect database " . mysqli_connect_error());

include('theme.php');
