<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Buat Post</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
		crossorigin="anonymous"></script>
</head>

<body>
	<h1>Buat Post Baru</h1>
	<form method="POST" action="{{url('posts')}}" class="form-control">
    @csrf
		<div class="mb-3">
			<label for="title" class="form-label">Judul</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>
		<div class="mb-3">
			<label for="content" class="form-label">Konten</label>
			<textarea class="form-control" id="content" name="content" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</body>

</html>
