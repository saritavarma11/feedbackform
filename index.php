<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<style>
* {
padding: 0;
margin: 0;
box-sizing: border-box;
font-family: 'Quicksand', sans-serif;
}

body {
height: 100vh;
width: 100%;
}

.container {
display: flex;
justify-content: center;
align-items: center;
padding: 20px 100px;
min-height: 100vh;
 /*background-image: url("./233.jpg");*/
background-size: cover;
border-radius: 10px;
background-position: center;
z-index: 1;
position: relative;
}

.container:after {
content: '';
position: absolute;
box-sizing: border-box;
left: 0;
top: 0;
right: 0;
bottom: 0;
background-color: #000000;
opacity: 0.7;
z-index: -1;
}

.contact-box {
max-width: 850px;
display: grid;
grid-template-columns: repeat(2, 1fr);
justify-content: center;
align-items: center;
text-align: center;
background-color: #fff;
border-radius:15px;
box-shadow:-5px -5px 10px rgba(255, 255, 255, 0.8),
            5px 5px 6px rgba(0, 0, 0, 0.1);
}

.left {
background: url("./233.jpg") no-repeat center;
background-size: cover;
height: 100%;
border-radius:15px;
}

.right {
padding: 25px 40px;
}

h2 {
position: relative;
color:#1da1f2;
padding: 0 0 10px;
margin-bottom: 15px;
text-transform: uppercase;
}

h2:after {
content: '';
position: absolute;
left: 50%;
bottom: 0;
transform: translateX(-50%);
height: 4px;
width: 50%;
border-radius: 2px;
background-color: #1da1f2;
}

.field {
width: 100%;
border: 2px solid rgba(0, 0, 0,0);
outline: none;
background-color: rgba(230, 230, 230, 0.6);
padding: 0.5rem 1rem;
border-radius: 10px;
font-size: 1.1rem;
margin-bottom: 22px;
transition: .3s;
}

.field:hover {
background-color: rgba(0, 0, 0, 0.1);
}

textarea {
min-height: 150px;
resize: none;
}

.btn {
width: 100%;
border-radius: 10px;
padding: 0.5rem 1rem;
background-color:#1da1f2;
color: #fff;
font-size: 1.1rem;
border: none;
outline: none;
cursor: pointer;
transition: .3s;
}

.btn:hover {
background-color:blue;
}

.field:focus {
border: 2px solid rgba(30, 85, 250, 0.47);
background-color: #fff;
}

@media screen and (max-width: 880px) {
.container {
padding: 5px;
}
.contact-box {
grid-template-columns: 1fr;
}
.left {
height: 0;
}
h2 {
padding:0 0 10px
}
h2::after {
top:34px
}
}
</style>
</head>
<body>
<div class="container">
<div class="contact-box">
<div class="left"></div>
<div class="right">
<h2>Feedback</h2>
<form method="post">
<input type="text" class="field" placeholder="Your Name" name="name">
<input type="text" class="field" placeholder="Your Email" name="email">
<input type="text" class="field" placeholder="Contact No" name="contact">
<textarea placeholder="feedback" class="field" name="feedback"></textarea>
<button class="btn" name="button">Send</button></form>
</div>
</div>
</div>
</body>
<?php
if(isset($_POST['button'])){
	#echo "done";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$feed=$_POST['feedback'];

	$database=mysqli_connect('localhost','root','','feedback');
	if ($database) {
		#echo "done";
	}

	$query="INSERT INTO `contact`(`name`, `mail`, `contact`, `feedback`) VALUES ('$name','$email','$contact','$feed')";
	$INSERT=mysqli_query($database,$query);
	if ($INSERT) {
		#echo "done";
	}
}

?>
</body>
</html>