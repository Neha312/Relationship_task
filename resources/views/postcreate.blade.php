<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="{{ Route('add') }}" method="POST">
        @csrf
        <br>
        @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="container mt-5">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" id="title" class="form-control">
                <span class="text-danger">
                    @error('title')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="container mt-5">
                <div class="form-group">
                    <label for="">Content</label>
                    <input type="text" name="content" id="content" class="form-control">
                    <span class="text-danger">
                        @error('content')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <br>
                <div> <button type="submit" href="{{ url('add') }}" class="btn btn-primary">Submit</button>
                </div>
</body>

</html>
