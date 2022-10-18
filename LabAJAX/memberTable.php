<?php
$keyword = $_GET["keyword"];

$conn = mysqli_connect("localhost","root","");

if($conn){
  mysqli_select_db($conn,"blueshop");
  mysqli_query($conn,"SET NAMES utf8");
}
else {
  echo mysqli_errno();
}

$sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
$objQuery = mysqli_query($conn,$sql);
?>

<table>
  <?php while($row = mysqli_fetch_array($objQuery)): ?>
  <tr>
    <td><?php echo $row["username"]?></td>
  </tr>
  <?php endwhile;?>
</table>