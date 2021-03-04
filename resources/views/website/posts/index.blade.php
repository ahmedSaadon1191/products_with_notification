@extends('website.layouts.master')
@section('css')
@section('title')
    All Posts
@stop

@section('content')



    <div class="container" style="margin-bottom: 10%; margin-top:10%">

        <div class="create" style="margin-bottom: 5%">
           <a href="{{ route('posts.create') }}">
            <button class="btn btn-primary">
                اضافة مقال جديد
            </button>
           </a>
        </div>

        <div class="create">
           <a href="{{ route('posts.softDelete') }}">
            <button class="btn btn-warning">
                عرض المقاللات الغير مفعلة
            </button>
           </a>
        </div>

        @if ($posts && $posts->count() > 0)
            @foreach ($posts as $post)
            <div class="bs-component">
                <div class="card mb-3">
                  <h3 class="card-header">{{ $post->title }}</h3>
                  <div class="card-body">
                    <h6 class="card-subtitle text-muted">{{ $post->user->name }}</h6>
                  </div>

                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @if ($post->ImagesPost && $post->ImagesPost->count() > 0)
                            @foreach ($post->ImagesPost as $image)
                                <div class="carousel-item">
                                    <img src="{{ asset('/Admin/images/'.$image->photo) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>


                  {{-- <svg xmlns=" {{ asset('/Admin/images/'.$post->ImagesPost) }}" class="d-block user-select-none" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                    <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                  </svg> --}}

                  <div class="card-body">
                        <p class="card-text">{{ $post->discreption }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">حالة المقال : <span class="btn btn-danger btn-sm">{{ $post->status() }}</span></li>
                    </ul>
                   @if ($post->user->id  == auth()->user()->id)
                        <div class="card-body">
                            <a href="{{ route('posts.edit',$post->id) }}" class="card-link btn btn-primary btn-sm">تعديل المقال</a>
                            <a href="{{ route('posts.forceDelete',$post->id) }}" class="card-link btn btn-danger btn-sm">حزف المقال</a>
                        </div>
                   @endif
                  <div class="card-footer text-muted">
                    2 days ago
                  </div>
                </div>

            </div><br><br>
            @endforeach
        @endif


@endsection

@section('js')
@endsection
