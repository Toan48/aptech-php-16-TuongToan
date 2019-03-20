
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    @extends('layouts.homelayout')
    @section('content')
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>category</th>
                <th>content</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->category}}</td>
                <td>{!! $post->content !!}</td>
                <td class="d-flex">
                    <form action="">
                        <button class="btn btn-danger">show</button>
                    </form>
                    <form action="">
                        <button class="btn btn-primary mx-3">edit</button>
                    </form>
                    <form action="">
                        <button class="btn btn-warning">delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>