<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1> {{$album}} </h1>
  <h2> {{$artist}} </h2>

  <ul>
    @foreach ($tracks as $track)
      <li> {{$track}} </li>
    @endforeach
  </ul>

</body>
</html>