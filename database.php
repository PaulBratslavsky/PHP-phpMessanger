<?php 

// CONNECT TO MySQL
$localhost  = "localhost";
$user       = "root";
$password   = "root";
$db         = "messages";

$connection = mysqli_connect( $localhost,$user,$password,$db );

// TEST CONNECTION
if ( mysqli_connect_errno() ) {
  // echo 'Failed to Connect!!!' . mysqli_connect_error();

} else {
  // echo 'Connection Established';
}

// QUERY DATA FROM DATABASE
$query    = "SELECT * FROM message";
$results  = mysqli_query($connection, $query); 

// var_dump($results);

/*
$mysqli = new mysqli( $localhost,$user,$password,$db );

// TEST CONNECTION
if ( $mysqli->connect_errno ) {
  echo 'Failed to Connect!!!' . $mysqli->connect_error;

} else {
  echo 'Connection Established';
}

// QUERY DATA FROM DATABASE
$query    = "SELECT * FROM message";
$results  = $mysqli->query($query); 

// QUERY DATA FROM DATABASE
$query    = "SELECT * FROM message";
$results  = $mysqli->query($query); 
*/

?>