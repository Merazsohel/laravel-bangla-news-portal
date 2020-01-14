@extends('.admin.layouts.app')
@section('content')
    <div class="col-lg-8 col-md-8 card mx-auto mt-5 mb-5">

        <div class="card-header">Update News</div>
        <div class="card-body">
            <form action="{{url('update-post/'.$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="inputEmail">Title</label>
                    <div class="form-label-group">
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">

                    </div>

                </div>

                <div class="form-group">
                    <label for="inputEmail">Description</label>
                    <div class="form-label-group">
                        <textarea class="ckeditor" cols="80" id="editor-ckeditor" name="description" rows="10">{{$post->description}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Image</label>
                    <div class="form-label-group">
                        <img src="{{asset($post->image)}}" width="200px">
                        <input type="file" class="form-control mt-2" name="image">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Category</label>
                    <div class="form-label-group">
                        <select name="categoryId" class="form-control">

                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $post->categoryId == $category->id ? 'selected="selected"' : '' }} >{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Featured Position</label>
                    <small>(Only for featured post)</small>
                    <div class="form-label-group">
                        <select name="featuredPosition" class="form-control">

                            <option value="{{$post->featuredPosition}}">
                                @if ($post->featuredPosition == '1st')
                                    1st
                                @elseif( $post->featuredPosition == '2nd')
                                    2nd
                                @elseif($post->featuredPosition == '3rd')
                                    3rd
                                @elseif($post->featuredPosition == '4th')
                                    4th
                                @endif
                            </option>

                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                        </select>
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
