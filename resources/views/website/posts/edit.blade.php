@extends('website.layouts.master')
@section('css')
@section('title')
    تعديل مقال
@stop

@section('content')
    <div class="container" style="margin-bottom: 10%; margin-top:5%; direction:rtl !important;">
        <h3 class="text-center">انشاء مقال جديد</h3>
        <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="floatingPassword" style="float: right;">عنوان المقال</label>
                <input type="text" class="form-control"  placeholder="اضافة عنوان المقال" name="title" value="{{ $post->title }}">
                @error("title")
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="floatingTextarea2" style="float: right">وصف المقال</label>
                <textarea class="form-control" placeholder="اضافة وصف المقال"  style="height: 100px" name="discreption">
                    {{ $post-> discreption}}
                </textarea>
                @error("discreption")
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


              {{-- IMAGES POST  --}}
              <div class="col-12 text-center">
                <div class="form-group">
                    <label for=""> صور المقال</label>
                    <input type="file" name="image[]" multiple class="form-control">
                </div>
            </div>

            {{-- SHOW IMAGES POSTS SELECTED --}}
            <div class="col-12>
               @if ($post->ImagesPost && $post->ImagesPost->count() > 0)
                @foreach ($post->ImagesPost as $image)
                <img src="{{ asset('admin/images/'.$image->photo) }}" alt="" style="height: 100px; width:100px" class="image{{ $image->id }}">
                <button class="btn btn-danger btn-sm deleteImage" imageId="{{ $image->id }}" id="deleteImg{{ $image->id }}">

                @endforeach
               @endif
            </div>
            <button type="submit" class="btn btn-success" style="float: right">تعديل المقال</button>

        </form>
    </div>
@endsection


@section('js')

{{-- DELETE IMAGES PRODUCT FROM EDIT FORM --}}
<script>

    $(document).ready(function()
    {
        $('.deleteImage').on('click',function(e)
             {
                e.preventDefault();
                 var imgId = $(this).attr('imageId');
                //  alert(imgId);

                 if(imgId)
                 {
                     $.ajax(
                        {
                             url:"{{ url('/admin/products/imageId/') }}/" + imgId,
                             type:"get",
                             dataType:"json",
                             success:function(data)
                             {
                               if (data.status == true)
                               {
                                    $('.image' + imgId).remove();
                                    $('#deleteImg' + imgId).remove();
                               }
                             }
                        });
                 }else
                 {
                     alert('Error');
                 }
             });
        });
  </script>
@endsection
