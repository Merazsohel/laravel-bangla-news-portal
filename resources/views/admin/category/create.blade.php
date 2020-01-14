@extends('.admin.layouts.app')
@section('content')
    <div class="card card-login mx-auto mt-5">

        <div class="card-header">New Category</div>
        <div class="card-body">
            <form action="{{url('store-category')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="inputEmail">Name</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="name">

                    </div>
                    <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Menu Position</label>
                    <div class="form-label-group">
                        <select name="position" class="form-control">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="0">No Position</option>
                        </select>
                    </div>
                    <span class="text-danger">{{$errors->has('position')?$errors->first('position'):''}}</span>
                </div>

                <button type="submit" class="btn btn-success"> Submit</button>

            </form>

        </div>
    </div>
@endsection
