<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Artikel</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('index')}}">Artikel-ku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Artikel <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User</a>
                </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 30px;">
        <div class="card">
        <h5 class="card-header">{{$news->title}}</h5>
        <div class="card-body">
            <a href="/artikel/edit/{{$news->id}}" class="btn btn-primary">Edit</a>
            <p class="card-text">{{$news->deskripsi}}</p>
            
        </div>
        </div>
        </div>
    </body>
</html>