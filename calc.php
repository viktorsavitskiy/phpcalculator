<!DOCTYPE html>
<html lang ="en">
<head>
<meta charset="utf-8">
<title>Php calculator</title>
<!--Add styles here-->


</head>

<body>
	<div id="wrapper">
<div id="col1">
<h1>Calculator + v2</h1>
	
	
	<form action="calc.php" method="POST">
		<input type="text" name="numbers" placeholder="Enter Math here" /> <br /><br />

		<input type= "submit" name="submit" Value="Submit">
	</form>
</div>
	 <br>
	 <div id="col2">
	<div id="result"><p>Your Answer: <br /><span>
				<?php
				
				// we calculate string
				function calculate_string( $mathString ) {

				    //we get rid of white space from both ends of the string
				    $mathString = trim($mathString);
					//validate
					$mathString = preg_replace('[^0-9\+-\*\/\(\) ]', '', $mathString);
					//here we calculate the string
				    $compute = create_function("", "return (" . $mathString . ");" );
					//here we return the value of the function because functions always return value
				    return $compute();

				}
				//we check if submit is clicked
				if (isset($_POST['submit'])){
					//check if text input is empty
					if(empty($_POST['numbers'])){
						echo '<p>Err</p>';
					}
					 
					
					else {
					

						$string = $_POST['numbers'];
						echo calculate_string($string); 
					
					
						//tried out explode function, created a function to allow explode function mulitple //delimiters insted of just one tried figuring out how to calculate
					
					/*	$num = $_POST['numbers'];
					function multiexplode ($delimiters,$string) {
    
					    $ready = str_replace($delimiters, $delimiters[0], $string);
					    $launch = explode($delimiters[0], $ready);
					    return  $launch;
					}

					
					$exploded = multiexplode(array("+","-","/","*"),$num);

					print_r($exploded);*/
				}
				}	
			?>
		</span></p></div>
	</div>
</div>
	
</body>
</html>