@extends('.admin.layouts.app')
@section('content')

    <div class="col-lg-8 col-md-8 card mx-auto mt-5 mb-5">

        <div class="card-header">Add Settings</div>
        <div class="card-body">

            <form action="{{url('store-settings')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="inputEmail">Site Title</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="site_title">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Logo</label>
                    <div class="form-label-group">
                        <input type="file" class="form-control" name="logo">

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Favicon</label>
                    <div class="form-label-group">
                        <input type="file" class="form-control" name="favicon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">About Us</label>
                    <div class="form-label-group">
                        <textarea id="editor-ckeditor" cols="80" name="about_us" rows="10"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Facebook Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="fb_link">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Twitter Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="twitter_link">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Pinterest Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="pinterest_link">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Vemio Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="vemio_link">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Youtube Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="youtube_link">
                    </div>
                </div>

                <button type="submit" class="btn btn-success"> Submit</button>

            </form>

        </div>
    </div>

@endsection

@section('script')

    <script>
        CKEDITOR.replace("editor-ckeditor", {height: 300});
    </script>

@endsection
