<?php

require_once __DIR__ . "/head.php";


/* Getting demo_viewer table data */
$sql = "SELECT * FROM mytable";
$dogs = mysqli_query($mysqli, $sql);
$dogsArray = array();
while ($row = $dogs->fetch_assoc()) {
	$dogsArray[] = $row;
}
$dogsJSON = json_encode($dogsArray);

?>

<html>

<body class="mainBody">
	<h1>Body</h1>
</body>
<div id="chart"></div>
<div id="chart2"></div>
</html>
<script>
	$(document).ready(function() {
		var data = <?php echo $dogsJSON ?>;
		// Populate series

		popularDogsTop10 = get10PopularDogs(data);
		var processed_json = new Array();
		for (i = 0; i < popularDogsTop10.length; i++) {
			processed_json.push([popularDogsTop10[i].Breed, parseInt(popularDogsTop10[i].max_weight)]);
		}

		var processed_json2 = new Array();
		for (i = 0; i < popularDogsTop10.length; i++) {
			processed_json2.push([popularDogsTop10[i].Breed, parseInt(popularDogsTop10[i].max_height)]);
		}
		// draw chart
		$('#chart').highcharts({
			chart: {
				type: "pie"
			},
			title: {
				text: "Doggos"
			},
			xAxis: {
				allowDecimals: false,
				title: {
					text: "Breed"
				}
			},
			yAxis: {
				title: {
					text: "Popularity"
				}

			},
			colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263'],
			series: [{
					data: processed_json
				}
			],
			credits: false
		});

		$('#chart2').highcharts({
			chart: {
				type: "pie"
			},
			title: {
				text: "Doggos"
			},
			xAxis: {
				allowDecimals: false,
				title: {
					text: "Breed"
				}
			},
			yAxis: {
				title: {
					text: "Popularity"
				}

			},
			colors: ['#82A8D2', '#6AF9C4', '#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263'],
			series: [
				{
					data: processed_json2
				}
			],
			credits: false
		});
	});
</script>