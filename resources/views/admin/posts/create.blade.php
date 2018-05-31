@extends('layouts.app')
@section('content')
    @include('admin.includes.errors')
<div class="panel panel-default">
    <div class="panel-heading">
        Create a new post
    </div>

    <div class="panel-body">
        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="feature">Feature Image</label>
                <input type="file" name="feature" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" id="content" cols="5" rows="5"></textarea>
            </div>

            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection