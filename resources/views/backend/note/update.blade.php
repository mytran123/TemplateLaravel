{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <h1>Update Note</h1>--}}
{{--    <input type="text" name="name" value="{{$note->name}}">--}}
{{--    --}}{{--    <input type="text" name="category" value="{{$note->category}}">--}}
{{--    <select name="category" id="" value="{{$note->category}}">--}}
{{--        <option value="">Choose category note</option>--}}
{{--        <option value="Work">Work</option>--}}
{{--        <option value="Lear">Lear</option>--}}
{{--        <option value="Family">Family</option>--}}
{{--        <option value="Friend">Friend</option>--}}
{{--    </select>--}}
{{--    <input type="text" name="description" value="{{$note->description}}">--}}
{{--    <input type="submit" name="add" value="Add">--}}
{{--    <a href="{{ route('notes.index') }}">Back</a>--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}


@extends("backend.layout.master")
@section("title-content","UPDATE CREATE")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Note</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('notes.update',$note->id)}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$note->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="{{$note->category}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$note->description}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('notes.index')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
