<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('frontEndAsset')}}/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('all.blog') }}" class="btn btn-primary">All Blog</a>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('new.blog') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="">Blog Title : </label>
                        <input type="text" class="form-control" name="blog_title" placeholder="Blog Title"><br>
                        <label class="">Author : </label>
                        <input type="text" class="form-control" name="author" placeholder="Author"><br>
                        <label class="">Category Name : </label>
                        <input type="text" class="form-control" name="category_name" placeholder="Category Name"><br>
                        <label class="">Description : </label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        <label class="">Image : </label>
                        <input type="file" class="form-control" name="image"><br>
                        <input type="submit" value="submit" class="form-control btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>
