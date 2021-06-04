<?php 
include 'header.php';
?>
<title>Petshops LuLu</title>

<style type="text/css">
	
	canvas {
		width: 900px;
	}

</style>
</head>
<body>


<?php
 
$dataPoints = array( 
	array("y" => 7,"label" => "March" ),
	array("y" => 12,"label" => "April" ),
	array("y" => 28,"label" => "May" ),
	array("y" => 18,"label" => "June" ),
	array("y" => 41,"label" => "July" )
);
 
?>


<body>
<center>
	<br><br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>

</center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
<script type="text/javascript">
	
	window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Vendas mensais"
	},
	axisY: {
		title: "Receita (em R$)",
		includeZero: true,
		prefix: "R$ ",
		suffix:  " mil"
	},
	data: [{
		type: "bar",
		yValueFormatString: "R$ #,##0 mil",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</body>
<?php 
include 'footer.php'
?>