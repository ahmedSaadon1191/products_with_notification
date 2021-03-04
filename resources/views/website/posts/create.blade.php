@extends('website.layouts.master')
@section('css')
@section('title')
    Create New Post
@stop

@section('content')
    <div class="container" style="margin-bottom: 10%; margin-top:5%; direction:rtl !important;">
        <h3 class="text-center">انشاء مقال جديد</h3>
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            {{-- POST TITLE  --}}
            <div class="form-group">
                <label for="floatingPassword" style="float: right;">عنوان المقال</label>
                <input type="text" class="form-control"  placeholder="اضافة عنوان المقال" name="title">
                @error("title")
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- POST DESCREPTION  --}}
            <div class="form-group">
                <label for="floatingTextarea2" style="float: right">وصف المقال</label>
                <textarea class="form-control" placeholder="اضافة وصف المقال"  style="height: 100px" name="discreption"></textarea>
                @error("discreption")
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- POST IMAGES  --}}
            <div class="form-group">
                <label for="" style="float: right"> صور المقال</label>
                <input type="file" name="image[]" multiple class="form-control" style="float: right; margin-bottom:5%;">
            </div>

            <button type="submit" class="btn btn-success" style="float: right">اضافة مقال</button>

        </form><br><br><br><br>
    </div>
@endsection


@section('js')
@endsection
