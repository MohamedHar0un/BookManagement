<?php
$connect = mysqli_connect('localhost','root','') or die('there are error connecting to the server');
mysqli_select_db($connect ,"todoapp") or die('there are error connecting to database');
?>