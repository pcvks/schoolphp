
<!DOCTYPE html>
<html>
<head>
	<title>Select Province, District, and Village in Laos</title>
</head>
<body>
	<form method="post" action="">
		<label for="province">Select a province:</label>
		<select name="province" id="province" onChange="getDistricts()">
			<option value="">--Select a province--</option>
			<option value="Attapeu">Attapeu</option>
			<option value="Bokeo">Bokeo</option>
			<option value="Bolikhamsai">Bolikhamsai</option>
			<option value="Champasak">Champasak</option>
			<option value="Houaphanh">Houaphanh</option>
			<option value="Khammouane">Khammouane</option>
			<option value="Luang Namtha">Luang Namtha</option>
			<option value="Luang Prabang">Luang Prabang</option>
			<option value="Oudomxay">Oudomxay</option>
			<option value="Phongsaly">Phongsaly</option>
			<option value="Salavan">Salavan</option>
			<option value="Savannakhet">Savannakhet</option>
			<option value="Vientiane Capital">Vientiane Capital</option>
			<option value="Vientiane Province">Vientiane Province</option>
			<option value="Xayabouly">Xayabouly</option>
			<option value="Xekong">Xekong</option>
			<option value="Xiangkhouang">Xiangkhouang</option>
		</select>
		<br><br>
		<label for="district">Select a district:</label>
		<select name="district" id="district" onChange="getVillages()">
			<option value="">--Select a district--</option>
		</select>
		<br><br>
		<label for="village">Select a village:</label>
		<select name="village" id="village">
			<option value="">--Select a village--</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
    include("./includes/db.php");
	if(isset($_POST['submit'])){
		$province = $_POST['province'];
		$district = $_POST['district'];
		$village = $_POST['village'];
		echo "You have selected the province: " . $province . ", the district: " . $district . ", the village: " . $village;
	}
	?>

	<script type="text/javascript">
		function getDistricts(){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('district').innerHTML = xmlhttp.responseText;
				}
			}
			var province = document.getElementById('province').value;
			xmlhttp.open('GET', 'get_districts.php?province='+province, true);
			xmlhttp.send();
		}

		function getVillages(){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
					document.getElementById('village').innerHTML = xmlhttp.responseText;
				}
			}
			var district = document.getElementById('district').value;
			xmlhttp.open('GET', 'get_villages.php?district='+district, true);
			xmlhttp.send();
		}
	</script>
</body>
</html>
