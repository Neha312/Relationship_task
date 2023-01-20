<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Image Uploader</title>
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-sm-6 mt-4">
            <div class="card p-4">
                <form action="upload-image" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="profile" class="form-control" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        @foreach ($images as $image)
            <div class="col-sm-4">
                <img class="img-thumbnail" src="{{ asset('storage/images/' . $image->name) }}" width="200px"
                    height="200px" alt="">
            </div>
            <a href="{{ route('download.image', $image->id) }}" target="_blank">Download</a>
        @endforeach

    </div>
</body>

</html>
