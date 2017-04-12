<?php
	$con=mysqli_connect("localhost","root","","lpexceldb");
	if (mysqli_connect_errno()){						// Check connection
	  	echo "Failed to connect to MySQL: " .mysqli_connect_error();
	  }
	$columH = array();
	$rowQ="select * from products";
	$result_set =  mysqli_query($con,$rowQ);
	//$rowQ="select * from products";
	//$result_set =  mysqli_query($con,$rowQ);
	//while($row = mysqli_fetch_array($result_set))
	//{ echo $row['id'];}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Excel to MySQL</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<style>
		.uploadbox{
			padding-left: 350px;
			padding-right: 350px;
		}
	</style>
	<body>
		<div align="center" class="uploadbox well well-sm">
			<form action="lpimport.php" method="post" name="upload_excel" enctype="multipart/form-data">
				<fieldset>
				<legend>Import CSV/Excel file</legend>
					<div align="center" >
						<div>
							<input type="file" name="file" id="file">
						
							<button type="submit" id="submit" name="Import" data-loading-text="Loading...">Upload</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		<table class="table table-bordered">
			<tr>
				<?php
					$colsQ = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='lpexceldb' AND `TABLE_NAME`='products'";
					$columns = mysqli_query($con,$colsQ);
					while($col = mysqli_fetch_array($columns) ){
						$columnH[]=$col[0];
						echo "<th>".$col[0]."</th>";
					}
				?>
			</tr>
			<?php 
				//echo"<pre>";print_r($columnH);echo"</pre>";
				//$x=count($columH);
				//echo $x;
				echo "<tr>";
				
					while($row = mysqli_fetch_array($result_set)){
						for($y=0;$y<$x;$y++){
						$colval = $columnH[$y];
							echo "<td>".$row[$colval]."</td>";
						}
					}
				
				echo "</tr>";
			?>
		</table>
	</body>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

