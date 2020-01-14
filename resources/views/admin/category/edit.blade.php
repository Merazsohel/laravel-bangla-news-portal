@extends('.admin.layouts.app')
@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Update Category</div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="post">
                @csrf

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                        <label for="inputEmail">Name</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Menu Position</label>
                    <div class="form-label-group">
                        <select name="position" class="form-control">
                            <option value="{{$category->position}}">{{$category->position}}</option>
                            @foreach($categories as $category)
                            <option value="{{$category->position}}">{{$category->position}}</option>
                           @endforeach

                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-success"> Submit</button>

            </form>

        </div>
    </div>
@endsection
