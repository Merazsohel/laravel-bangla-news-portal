@extends('.admin.layouts.app')
@section('content')

    <div class="col-lg-8 col-md-8 card mx-auto mt-5 mb-5">

        <div class="card-header">Update Settings</div>
        <div class="card-body">

            <form action="{{url('update-settings/'.$setting->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="inputEmail">Site Title</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="site_title" value="{{$setting->site_title}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Logo</label>
                    <div class="form-label-group">
                        <img src="{{asset($setting->logo)}}" width="200px">
                        <input type="file" class="form-control" name="logo">

                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Favicon</label>
                    <div class="form-label-group">
                        <img src="{{asset($setting->favicon)}}" width="200px">
                        <input type="file" class="form-control" name="favicon">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">About Us</label>
                    <div class="form-label-group">
                        <textarea id="editor-ckeditor" cols="80" name="about_us" rows="10">{{$setting->about_us}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Facebook Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="fb_link" value="{{$setting->fb_link}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Twitter Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="twitter_link" value="{{$setting->twitter_link}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Pinterest Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="pinterest_link" value="{{$setting->pinterest_link}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Vemio Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="vemio_link" value="{{$setting->vemio_link}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Youtube Link</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="youtube_link" value="{{$setting->youtube_link}}">
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
