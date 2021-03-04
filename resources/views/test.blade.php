<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>test upload</title>
</head>

<body>
    <form action="{{ route('uploading_test') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="file" name="testupload">
        </div>

        <button type="submit" class="btn btn-primary">upload</button>
    </form>
</body>

</html>
