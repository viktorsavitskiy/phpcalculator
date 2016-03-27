<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="utf-8">
<title>Php calculator</title>
<!--Add styles here-->
<style>

#wrapper{
	width:700px;
	height:300px;
	border:2px solid #000000;
	margin-top:15px;
	margin-right: auto;
	margin-left: auto;
	padding-left: 15px;
	
}

#result{
	font-size:25px;
	width:200px;
	margin-bottom:5px;
	
	
}

#col1{
	margin-top:5px;
	width:300px;
	
	float:left;
}
#col2{
	
	width:300px;
	height:255px;
	padding-left:5px;
	border:2px solid #000000;
	float:right;
	margin-right:75px;
}
span{
	
	color:#ff0000;
}
</style>
</head>

<body>
	<div id="wrapper">
<div id="col1">
<h1>Calculator +</h1>
	
	
	<form action="phpcalculator.php" method="POST">
		<input type="number" name="num1" placeholder="First number" /> <br /><br />
			
			<input type="radio" name="operator" id="add" value="add">Add <br />
			<input type="radio" name="operator" id="subtract" value="subtract">Subtract <br/>
			<input type="radio" name="operator" id="multiply" value="multiply">Multiply <br />
			<input type="radio" name="operator" id="divide" value="divide">Divide <br /><br />
																
		<input type="number" name="num2" placeholder="Second number" /> <br /><br />
		<input type= "submit" name="submit" Value="Submit">
	</form>
</div>
	 <br>
	 <div id="col2">
	<div id="result"><p>Your Answer: <br /><span>
				<?php
				$firstnum = $_POST['num1'];
				$secondnum= $_POST['num2'];
				
				if (isset($_POST['submit'])){
					if($_POST['operator'] == 'add'){
						$answer = $firstnum + $secondnum;
						echo $answer;
					}
					else if($_POST['operator'] == 'subtract'){
						$answer = $firstnum - $secondnum;
						echo $answer;
					} else if($_POST['operator'] =='multiply'){
						$answer = $firstnum * $secondnum;
						echo $answer;
					} else if($_POST['operator'] =='divide'){
						$answer = $firstnum / $secondnum;
						echo $answer;
					} else {
						echo "Err!";
					}
				}
			?>
		</span></p></div>
	</div>
</div>
	
</body>
</html>