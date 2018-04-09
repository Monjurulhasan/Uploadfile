<?php 
	if (isset($_FILES['file'])) {
		$file = $_FILES['file'];
		$name = $file['name'];
		if (!file_exists('uploads')) {
			mkdir('uploads');
		}
		$destination = 'uploads/' . $name;
		$tmp_name = $file['tmp_name'];
		move_uploaded_file($tmp_name, $destination);
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload file in php</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<div>
			<label for="file">Upload Your file</label>
			<input type="file" name="file" id="file">
		</div>
		<div>
			<button type="submit">Upload</button>
		</div>
	</form>
</body>
</html>