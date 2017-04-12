<html>
	<head>
		<meta charset="utf-8">
		<title>Excel to MySQL</title><link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
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
</html>

