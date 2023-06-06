<?php




$sql= 'SELECT * FROM users';
$rseult = mysqli_query($conn , $sql);
$users = mysqli_fetch_all($rseult, MYSQLI_ASSOC);

?>