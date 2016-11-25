<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hw1_BMI</title>
	</head>
<body>
<?php 
if(!isset($_POST['insure'])) {
	?>
	<form method="POST">
		請輸入身高: <input type="text" name="tall" placeholder="cm"><br>
		請輸入體重: <input type="text" name="weight" placeholder="kg"><br>
		<input type="submit" name="insure" value="確認">
	</form>
	<?php 
}
else {
	$BMI = $_POST['weight']/pow($_POST['tall']/100, 2);
	if ($BMI < 18.5) {
		echo "您的BMI為:";
		echo "<br>";
		echo $BMI;
		echo "<br>";
		echo "體重過輕喔~!";
	} elseif ($BMI < 24) {
		echo "您的BMI為:";
		echo "<br>";
		echo $BMI;
		echo "<br>";
		echo "正常範圍，很健康喔~!";
	} else {
		echo "您的BMI為:";
		echo "<br>";
		echo $BMI;
		echo "<br>";
		echo "異常範圍，該運動囉~!";
	}
}
?>
</body>
</html>
