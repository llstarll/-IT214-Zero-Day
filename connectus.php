<DOCTYPE html>
<html>
<head>
<style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-color:#6abadeba;  
    font-family: 'Arial';  
} 
.connect{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #000080;  
        border-radius: 15px ;  
          
}
.thank{
	width: 382px;  
         margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

h2{  
    text-align: center;  
    color: #6abadeba;  
    padding: 20px;  
}
label{  
    color: #6abadeba;  
    font-size: 17px;  
}
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}
#ema{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}
#send{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
  
  
}
span{  
    color: white;  
    font-size: 17px;  
}
.alert {
  padding: 20px;
  background-color: #2Ecc40;
  color: white;
}
</style>
</head>

<body>
<div class="connect">
<form action='' method ='POST'>
<h2>Connect us</h2 <br/>
<label>Name<br/><input type='text' name='username' id="Unname"><br/></label>

<label>Email <br/><input type='email' name='useremail' id="ema" placeholder='e@example.com'><br/></label>

<label> Write your message : <br/>
<textarea rows = "5" cols = "50" name = "description" >
   Message ...
         </textarea><br/>
	</label>
<label><br/><input type='submit' name='submit' value='send' id="send"><br/></label><br/>
<input type="checkbox" id="check" name="usercheck">    
        <span>I want receive mail messages </span>
</form>
</div>
</body>
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
</html>
