<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Show Files</title>
</head>
<body>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">File</th>
    </tr>
  </thead>
  <tbody>
    @foreach($files as $file)
    <tr>
      <th scope="row">{{$file->id}}</th>
      <td><img src="{{asset('images/'.$file->path)}}" width="100px" height="100px" alt=""></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
