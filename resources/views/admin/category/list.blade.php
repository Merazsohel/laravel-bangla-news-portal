@extends('.admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            All Category
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Name</th>
                        <th>Menu Position</th>
                        <th>Actions</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->position}}</td>
                            <td>
                                <a href="{{url('edit-category/'.$category->id)}}"><i class="fas fa-edit"></i></a>

                                <a href="{{url('delete-category/'.$category->id)}}" onclick="return confirm('Are you sure you want to delete?');"><i class="fas fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        } );

    </script>
    @endsection
