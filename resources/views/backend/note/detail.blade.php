{{--<h1>{{ $note->name }}</h1>--}}
{{--<p>{{ $note->category }}</p>--}}
{{--<p>{{ $note->description }}</p>--}}

@extends("backend.layout.master")
@section("title-content","NOTE DETAIL")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Note Detail</h6>
        </div>
        <div class="card-body">
            <form>
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$note->name}}">
                </div>
                <div class="form-group">
                    <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="{{$note->category}}">
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$note->description}}">
                </div>
                <a href="{{route('notes.index')}}" type="button" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection
