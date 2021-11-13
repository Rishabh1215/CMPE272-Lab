<?php
// $con = mysqli_connect('localhost', 'root', '');
// $con = mysqli_connect('localhost', 'pmauser', '#i0QHbk24Z');/
mysqli_select_db($con, 'fitness');

?>

<?php
$sql = "SELECT * FROM user";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$users = $row["first_name"];
while ($row = $result->fetch_assoc()) {
    $users = $users . "," . $row["first_name"];
}
echo $users;
?>