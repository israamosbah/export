<?php
$ user name = $_REQUEST['user name'];
$ last name = $_REQUEST['last name'];
$ E-mail = $_REQUEST['E-mail'];
$ password = $_REQUEST['password'];

if(isset($_post['btntest']))
(
	$host ="localhost";
	$user ="root";
	$password ="";
	$db ="bis_level_four";

	$conn = mysqi_connect($host,$user,$password,$db);
	$insert ="insert into studentbisinfon values ('$user name','$last name','$E-mail','$password')";
)
mysqi_query($conn,$insert)

if($conn){
	echo("<h1 style='color:green;'>your registration is done !</h1>");

}

else{
	echo("<h1 style='color:red'>your registration is failed!</h1>");
}
