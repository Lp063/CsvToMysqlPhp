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
					if($coldata != "" && $coldata != "NULL" && $coldata != NULL){
						if(is_numeric($coldata)){
							$values = $values.",".$coldata;
							$columns = $columns."`".$colHead[$r]."`,";
						}
						else if(!is_numeric($coldata)){
							$coldata = "'".$coldata."'";
							$values = $values.",".$coldata;
							$columns = $columns."`".$colHead[$r]."`,";
						}
					}
				}
				$values = substr($values,1);
				$columns = rtrim($columns,',');
				
				echo"<pre>";print_r($csvfile);echo"</pre><hr>";
				$query = "INSERT INTO `products` (".$columns.") 
					 values(".$values.")";
				unset($csvfile);				//clear array of row
				if(!mysqli_query($con,$query)){
					echo "Error: ".mysqli_error($con);
				}
			}
			fclose($file);
			
	
		}
		if($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
			echo " This file type will be supported soon";
			
		}
	}
?>
