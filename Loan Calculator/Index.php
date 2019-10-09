<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#t1
		{
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			border-left:2px solid black;
			border-right:2px solid black;
			box-shadow: 10px 5px 5px black;
			background-color: lightgreen;
			margin-right: 500px;
			margin-left: 600px;
			height: 400px;
			border-spacing: 100px;
		}
		input
		{
			border-bottom: 3px solid black;
			border-top: none;
			border-bottom: none;
			border-right: none;
			border-left: none;
			background-color: rgb(154,172,180);
			box-shadow: 10px 5px 5px black;
		}
	</style>
</head>
<body>
<form method="get" action="Calculator.php">
<table id="t1">
	<center><h2><i>Installment Calculator</i></h2></center>
	<tr><th>Loan Amount : </th><td id="b1"><input type="number" name="loan"></td></tr>
	<tr><th>Interest % :</th><td id="b1"><input type="number" name="interest"></td></tr>
	<tr><th>Period :</th><td id="b1"><input type="number" name="period"></td></tr>
	
	<tr><td><input type="Submit" name="calc" value="CALCULATE"></td><td><input type="Submit" name="details" value="DETAILS"></td></tr>
</table>
</form>
</body>
</html>