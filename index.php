<?php	
	
	echo($_REQUEST["numero"]);
	
	$port= "COM5";

	exec("MODE $port BAUD=9600 PARITY=n DATA=8 XON=on STOP=1");

	$conexaoArduino = fopen("COM5", "w");
	fwrite($conexaoArduino,$_REQUEST["numero"]);
	//echo fgets($conexaoArduino);
	fclose($conexaoArduino);
?>
<!--html>
	<head>
		<title> Conexão PHP e Arduino </title>
		<style>
			.divImg{
				height: 200px;
				text-align: center;
			}
			.divStyle{
				height: 30px;
				text-align: center;
				font-weight: bold;
			}
		</style>
	<head>
	<body>
		<form action="index.php" method="get">
				<div class="divImg"> 
					<img src="<?//=$source?>"> 
				</div>
				<div class="divStyle"> 
					<label for="lbStatus"><?//=$status?></label> 
				</div>
				<div class="divStyle">
					<input type="submit" name="q" id="btLiga" value="Ligar">
					<input type="submit" name="btDesliga" id="btDesliga" value="Desligar">
				</div>
		</form>
	</body>
</html -->