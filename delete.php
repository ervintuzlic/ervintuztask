<?php 
    $connection  = mysqli_connect('localhost','root', '' , 'ervintuz'); 
    $userObj  = mysqli_query($connection , 'SELECT * FROM `products`');
    
    if(isset($_POST['data'])){
	    $dataArr = $_POST['data'] ; 

	    foreach($dataArr as $Id){
	    	mysqli_query($connection , "DELETE FROM products where Id='$Id'");
	    }
    }
?>

