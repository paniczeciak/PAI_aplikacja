<?php
include('connect.php');

$id = $_POST['id'];
echo $id;
$sql = "SELECT * FROM address WHERE city_id = '$id'";
$result = mysqli_query($conn,$sql);

$out='';
while ($row = mysqli_fetch_assoc($result)){
    $out .= '<option>'.$row['address'].'</option>';
}
echo $out;

//$output='';
//$sql="SELECT * FROM address WHERE city_id='".$_POST["city_id"]."' ORDER BY address";
//$result = mysqli_query($conn,$sql);
//$output .='<option value="" disabled selected>-Wybierz adres restauracji-</option>';
//while ($restaurant = mysqli_fetch_array($result)) {
//    $output .='<option value="'.$restaurant["id"].'">'.$restaurant["address"].'</option>';
//}
//echo $output;
?>