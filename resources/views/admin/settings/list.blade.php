@extends('.admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            All Settings
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Site Title</th>
                        <th>Logo</th>
                        <th>Favicon</th>
                        <th>About Us</th>
                        <th>Actions</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($settings as $setting)
                        <tr>
                            <td>1</td>
                            <td>{{$setting->site_title}}</td>
                            <td><img src="{{asset($setting->logo)}}" width="100px"></td>
                            <td><img src="{{asset($setting->favicon)}}" width="100px"></td>
                            <td>{{$setting->about_us}}</td>
                            <td>
                                <a href="{{url('edit-settings/'.$setting->id)}}"><i class="fas fa-edit"></i></a>

                                <a href="{{url('delete-settings/'.$setting->id)}}"
                                   onclick="return confirm('Are you sure you want to delete?');"><i
                                        class="fas fa-trash-alt text-danger"></i></a>
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
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });

    </script>
@endsection
