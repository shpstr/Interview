<?php
//    $key=$_GET['key'];
//    $array = array();
//    //$con=mysql_connect("localhost","root","");
//    $con = mysqli_connect("localhost", "root", "", "aci");
//    $query = "select * from user where first_name LIKE '%{$key}%'";
//    $result=  mysqli_query($con, $query);
//    while($row=mysqli_fetch_assoc($result))
//    {
//      $array[] = $row['first_name'];
//    }
//    echo json_encode($array);

$host = "localhost";
$user = "root";
$password = "";
$dbName = "aci";
$db = new mysqli($host,$user,$password,$dbName);
$searchTerm = $_GET['term'];

$query = $db->query("select * from user where first_name like '%".$searchTerm."%' order by first_name ASC");

while($row = $query->fetch_assoc()){
    $data[] = $row['first_name'];
}

echo json_encode($data);
?>