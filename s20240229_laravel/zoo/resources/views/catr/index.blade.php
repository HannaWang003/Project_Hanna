<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat resource list</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'/>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('dogr.index')}}">Dog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('catr.index')}}">Cat</a>
              </li>
            </ul>
          </div>
    </nav>
    <h1 class="text-center">Cat resource list</h1>
            <p>Lorem ipsum dolor sit amet.</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>operate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Amy</td>
                    <td>
                        <a href="">edit</a>
                        <a href="">del</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
   </body>
</html>