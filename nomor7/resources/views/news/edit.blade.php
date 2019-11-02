<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Artikel</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Edit Artikel
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{route('edit', $news)}}">
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Judul</label>
                                <input type="text" class="form-control" value="{{$news->title}}" name="title" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                <input type="textarea" class="form-control" name="deskripsi" value="{{$news->deskripsi}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Kategori</label>
                                <select class="form-control" name="user_id" id="exampleFormControlSelect1">
                                <option value="{{$news->user_id}}">{{$news->user_id}}</option>
                                </select>
                            </div>
                            <input type="submit" name="submit" value="Update" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>