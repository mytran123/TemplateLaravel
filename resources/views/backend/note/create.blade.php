{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Enter new note">--}}
{{--    <select name="category" id="">--}}
{{--        <option value="">Choose category note</option>--}}
{{--        <option value="Work">Work</option>--}}
{{--        <option value="Lear">Lear</option>--}}
{{--        <option value="Family">Family</option>--}}
{{--        <option value="Friend">Friend</option>--}}
{{--    </select>--}}
{{--    <input type="text" name="description" placeholder="Enter description">--}}
{{--    <button type="submit">Add new note</button>--}}
{{--    <a href="{{ route('notes.index') }}">Back</a>--}}
{{--</form>--}}

@extends("backend.layout.master")
@section("title-content","ADD NEW CREATE")
@section("content")
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Note</h6>
        </div>

        <div class="card-body">
            <form method="post" action="{{route('notes.create')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{ old('name') }}">
                    @error('name')
                    <p class="text text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <input type="text" name="category" class="form-control" id="exampleInputPassword1" placeholder="Enter Category" value="{{ old('category') }}">
                    @error('category')
                    <p class="text text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" value="{{ old('description') }}">
                    @error('description')
                    <p class="text text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="{{route('notes.index')}}" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection

