<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>File Upload Example</title>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
	<div style="margin-bottom: 20px;">
		<label>Upload File</label>
		<input type="file" name="profileimg" />
	</div>
	<div>
		<button type="submit">Upload File</button>
	</div>
</form>

</body>
</html>