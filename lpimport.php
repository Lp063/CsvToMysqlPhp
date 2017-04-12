<?php
	$con=mysqli_connect("localhost","root","","lpexceldb");
	if (mysqli_connect_errno()){						// Check connection
	  	echo "Failed to connect to MySQL: " .mysqli_connect_error();
	  }
	$csvfile = array();							//Array to hold Row data
	$colHead = array();							//Array to hold Column Name from DB
	$colsQ = "SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='lpexceldb' AND `TABLE_NAME`='products'";
	$columns = mysqli_query($con,$colsQ);
	while($col = mysqli_fetch_array($columns) ){
		$colHead[]=$col[0];
	}
	if(($_FILES["file"]["type"] == "text/csv")||($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")){
		if($_FILES["file"]["type"] == "text/csv"){
			$file = fopen($_FILES["file"]["tmp_name"],"r");
			while(! feof($file)){
				$csv = fgetcsv($file, 10000, ","); 		// get row
				$csvfile[]=$csv;				//put row in array
				$rowSize = sizeof($csvfile[0]);
				$columns = "";					//insert array of row to db
				$values ="";
				for($r=0;$r<$rowSize;$r++){			//creating string of values
					$coldata = $csvfile[0][$r];
					if($colHead[$r] == 'id'){
						echo "ID ".$columns."<br>";
						echo $values."<br>";
					}else if($colHead[$r] == "prod_id"){
						echo "PRODID ".$columns."<br>";
						echo $values."<br>";
					}else{
						if($coldata != "" && $coldata != "NULL" && $coldata != NULL){
							if(is_numeric($coldata)){
								$values = $values.",".$coldata;
							}
							else if(!is_numeric($coldata)){
								$coldata = "'".$coldata."'"; // text in quotes
								$values = $values.",".$coldata;
							}
							$columns = $columns."`".$colHead[$r]."`,";
						}
					}
					
				}
				$values = substr($values,1);
				$columns = rtrim($columns,',');
				$query = "INSERT INTO `products` (".$columns.") 
					 values(".$values.")";
				echo $query;
				exit;
				unset($csvfile);				//clear array of row
				if(!mysqli_query($con,$query)){
					echo "Error: ".mysqli_error($con);
				}else{/*
					echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"lpexcel.php\"
					</script>";*/
				}
			}
			fclose($file);
			
	
		}
		if($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
			echo " This file type will be supported soon";
			
		}
	}
?>
