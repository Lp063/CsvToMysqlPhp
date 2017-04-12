<html>
	<head>
		<meta charset="utf-8">
		<title>Excel to MySQL</title>
	</head>
	<style>
		.uploadbox{
			padding-left: 350px;
			padding-right: 350px;
		}
	</style>
	<body>
		<div align="center" class="uploadbox">
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
	</body>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>

