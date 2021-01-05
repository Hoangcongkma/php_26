<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bài 3</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center">UPLOAD</h2>
		<hr>
		<a href="document-list.php" class="btn btn-success">Đến thư viện</a>
		<br>
		<form action="func_upload.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Tên tài liệu</label>
				<input type="text" name="document-name" class="form-control">
			</div>
			<div class="form-group">
				<label>Chọn tài liệu</label>
				<input type="file" name="files" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Upload</button>
		</form>
	</div>
</body>
</html>