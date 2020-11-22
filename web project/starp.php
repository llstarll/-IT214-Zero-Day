<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      body{background: linear-gradient(90deg, #131D47 50%, #5DDADB 50%);}
      .logo{position: relative;
        left:35px;
        top:200px;}
        .SM{
          position: relative;
            left:250px;
            top:120px;}
            .defin{
              font-size: 38px;
              color: #131D47;
              font-size: 15px;
              text-transform: capitalize;
              position: relative;
                left:400px;
                bottom:600px;
                border: 3px solid #5DDADB  ;
                padding: 10px;
                margin: 400px;}
  div.water {
  margin: 5px;
  border: 2px solid #5DDADB;
  width: 100px;
  height: 100px;
  float: left;
  position: relative;
    left:920px;
    bottom:950px;
}
div.water:hover {
  border: 1px solid #131D47;
}
div.water img {  width: 85px;
  height: 85px;
  text-align: center;

}
div.sub {
  color: rgb(0, 94, 167);
  font-family: cursive ;
  text-transform: capitalize;
  font-size: 10px;
  padding: 15px;
  text-align: center;
}
.by{
  color: #131D47;
  position: relative;
  left:980px;
  bottom:10px;

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
.pos{
  position: relative;
  left:180px;
  bottom:600px;
}
    </style>
    <meta charset="utf-8">
    <title>stsrt page</title>
  </head>
  <body>
    <div class="logo" >
    <img src="logo.png" alt="ZeroDayLogo">
    </div>

    <div class="SM">
      <a href="https://linkin.bio/water">
        <img src="logo2.png" alt="watewweb" width="35" height="35">
      </a>

      <a href="https://www.instagram.com/water/?hl=en">
      <img src="insicon.png" alt="instagramAccount" width="30" height="30">
      </a>

      <a href="https://twitter.com/Water?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
        <img src="twicon.png" alt="twitterAccount" width="30" height="30">
      </a>

    </div>

    <div class="defin">
      <h1>Zero Day</h1> The City of Cape Town has introduced the idea of Day Zero to focus everyone’s attention on managing water consumption as tightly as possible by cajoling water consumers into reducing usage. Day Zero is when most of the city’s taps will be switched off – literally.
      The consequences of reaching this point will be far reaching. For one, it will mean residents will have to stand in line to collect 25 litres of water per person per day. The water will be sourced from the remaining supplies that are left in the dams.
			Day Zero isn’t a fixed target. The city moved it out from April 12 to July 9. The reason for this is that a number of factors affect the date. These include how much residents are reducing their demand. There are already signs that water users are saving more. The goal is to achieve an average daily demand of less than 450 million litres which equates to about 50 litres per person per day. The city isn’t there yet, but for the first time figures are consistently closer to 500 million litre per day.
		</div>

    <div class="water">
  <a href="fristpage.html">
    <img src="fristpage.png" alt="fristpage" >
  </a>
  <div class="sub">what will the new world look like?</div>
</div>

<div class="water">
  <a  href="secondpage.html">
    <img src="secondpage.png" alt="secondpage" >
  </a>
  <div class="sub">what will the new world look like?</div>
</div>

<div class="water">
  <a href="thirdpage.html">
    <img src="thirdpage.png" alt="thirdpage" >
  </a>
  <div class="sub">what will the new world look like?</div>
</div>
<div class="pos">


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
</div>
<h4 class="by">by LAYAN  FATIMA  GHADIR</h4>

  </body>
</html>
