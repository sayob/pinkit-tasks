<!DOCTYPE html>
<html>
<head>
<title>Grading</title>
<style>
    body{background-color:#C0C0C0;}
    form {width: 300px; margin: auto; padding-top: 100px; }        
    input {padding: 8px 3px; width: 100%; }        
    #button {width: 70%; margin-left:60px; background-color:#808080;}
    table{margin:auto; padding-top:200px;}
        
</style>
</head>

<body>

	<?php
	

	function getgrade($score) {
  	switch ($score) {
  		case $score > 79 && $score <= 100:
  			echo "A";
  			break;
  		case $score > 69 && $score <= 79:
  			echo "B";
  			break;
  		case $score > 59 && $score <= 69:
  			echo "C";
  			break;
  		case $score > 49 && $score <= 59:
  			echo "D";
  			break;
      case $score > 39 && $score <= 49:
  			echo "E";
  			break;
      case $score >= 0 && $score <= 39:
  			echo "F";
  			break;
  		default:
  			echo "invalid number";
  	}
       
  }
	?>

<table>
<tr>
<form method="post">
<td><input type="number" name="num" placeholder="enter the score" required></td>
<td><input value="<?php
		  if(isset($_POST['submit'])) {
            $score = $_POST['num'];
            echo getgrade($score);}?>" readonly></td>
<td><input type="submit" name="submit" id="button" value="submit"></td>
</form>
</tr>
</table>  
</body>
</html>
