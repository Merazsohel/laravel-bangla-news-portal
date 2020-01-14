@extends('.admin.layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            All Posts
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Title</th>
                        <th>Photo</th>
                        <th>Category</th>
                        <th>Breaking News</th>
                        <th>Time</th>
                        <th>Actions</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$post->title}}</td>
                            <td><img src="{{asset($post->image)}}" width="100px"></td>
                            <td>{{$post -> categoryId}}</td>

                            <td>
                                @if ($post->breakingNews == 0)
                                    <a class="btn btn-danger" href="{{url('nonBreaking-news/'.$post->id)}}">
                                       No
                                    </a>

                                @else
                                    <a class="btn btn-success" href="{{url('breaking-news/'.$post->id)}}">
                                       Yes
                                    </a>
                                @endif
                            </td>

                            <td>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</td>
                            <td>
                                <a href="{{url('edit-post/'.$post->id)}}"><i class="fas fa-edit"></i></a>

                                <a href="{{url('delete-post/'.$post->id)}}"
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
