<link rel="stylesheet" href="stylezd.css">
<?php

/*
$con = mysqli_connect("localhost","root“ ,"","project")​
or die( mysqli_connect_error() );
mysqli_query($con,"CREATE TABLE member(​
id INT NOT NULL AUTO_INCREMENT,​
PRIMARY KEY(id),​
nameuser VARCHAR(30),​
email varcha(1100)")​
or die( mysqli_connect_error());
*/

if(isset($_POST['username'])){
	echo "​​<div class='alert'>Thank you for connect us ".$_POST['username']."</div>";

}
if(isset($_POST['usercheck'])){
/*
$query = "INSERT INTO member (nameuser, email) VALUES (' " .$_POST['username']. " ', ' " .$_POST['useremail']. " ') ";​
mysqli_query($con,$query) ​
or die( mysqli_connect_error());

*/
}

?>