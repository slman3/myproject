<?php

$conn = mysqli_connect('localhost','root','root','wiin');

if(!$conn){echo'Error : ' . mysqli_connect_error();}