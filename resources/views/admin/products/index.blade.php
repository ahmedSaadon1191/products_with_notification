@extends('admin.layouts.master')
@section('title')
  المنتجات
@endsection
@section('css')
<!-- Internal Data table css -->
<link href="{{ URL::asset('Admin/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('Admin/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('Admin/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('Admin/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('Admin/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('Admin/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('Admin/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">رفع ملف اكسل </h4>
        </div>
    </div>

</div>
<!-- breadcrumb -->
@endsection
@section('content')

@if (session()->has('Added_Succesfully'))
<script>
    window.onload = function() {
        notif({
            msg: "تم الحفظ بنجاح"
            , type: "success"
        });
    }
</script>
@endif

@if (session()->has('Delete_Succesfully'))
<script>
    window.onload = function() {
        notif({
            msg: "تم الحذف بنجاح"
            , type: "success"
        });
    }
</script>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
















<!-- row -->
<div class="row">
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">

                <div class="row">
                    {{-- strat Button Create --}}
                    <div class="col-4">
                        <a class="modal-effect btn btn-outline-primary mr-1 mb-1" data-effect="effect-scale"
                            data-toggle="modal" href="#add_section">اضافه</a>

                            @include('admin.products.create')
                            <h1>
                                @include('admin.layouts.alerts.success')
                                @include('admin.layouts.alerts.errors')
                            </h1>
                    </div>
                    {{-- End Button Create --}}




                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap text-center">
                        <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th>اسم المنتج</th>
                                    <th>اسم القسم الفرعي</th>
                                    <th>اسم القسم الرئيسي</th>
                                    <th>سعر المنتج</th>
                                    <th>وصف المنتج</th>
                                    <th>الاجرائات</th>
                                </tr>
                        </thead>
                        @if ($products && $products->count() > 0)
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($products as $row)
                            <tr>
                                <td>{{ $i ++}}</td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->sub_category->name}}</td>
                                <td>{{ $row->sub_category->category->name}}</td>
                                <td>{{ $row->price}}</td>
                                <td>{{ $row->discreption}}</td>
                                <td>
                                    <div class="dropdown">
                                        <button aria-expanded="false" aria-haspopup="true"
                                            class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                            id="dropdownMenuButton" type="button">Actions<i
                                                class="fas fa-caret-down ml-1"></i>
                                        </button>

                                        <div class="dropdown-menu tx-13">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#edit_section{{ $row->id }}">
                                                <i class="text-success fas fa-edit"></i>
                                                &nbsp;&nbsp;edit
                                            </a>

                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#delete_section{{ $row->id }}">
                                                <i class="text-danger fas fa-trash-alt"></i>
                                                &nbsp;&nbsp;delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                @include('admin.products.edit')
                                @include('admin.products.delete')
                            </tr>
                        @endforeach
                        @else
                            <h3 class="text-center">
                                لا يوجد منتجات
                            </h3>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('Admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('Admin/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('Admin/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('Admin/plugins/notify/js/notifit-custom.js') }}"></script>

   {{-- GET SUB CATEGORY IN CREATE FORM  --}}
   <script>
    $(document).ready(function()
    {

        $('#category').on('change',function()
             {
                 var cat = $(this).val();
                //  alert(cat);

                 if(cat)
                 {
                     $.ajax(
                        {
                             url:"{{ url('/admin/products/subCategory/') }}/" + cat,
                             type:"GET",
                             dataType:"json",
                             success:function(data)
                             {
                                 $("#sub_category").empty();
                                 $.each(data,function(key,value)
                                 {
                                     $("#sub_category").append('<option value="'+value.id+'">'+value.name+'</option>')
                                 });
                             }
                        });
                 }else
                 {
                     alert('Error');
                 }
             });
        });




</script>

    {{-- CHANGE SUB CATEGORY IN EDIT FORM --}}
  <script>
    //   alert("hello");
       $(document).ready(function()
   {


        $('.category').on('change',function()
             {
                 var cat = $(this).val();
                //  alert(cat);

                 if(cat)
                 {
                     $.ajax(
                        {
                             url:"{{ url('/admin/products/subCategory/') }}/" + cat,
                             type:"GET",
                             dataType:"json",
                             success:function(data)
                             {
                                 $(".sub_category").empty();
                                 $.each(data,function(key,value)
                                 {
                                     $(".sub_category").append('<option value="'+value.id+'">'+value.name+'</option>')
                                 });
                             }
                        });
                 }else
                 {
                     alert('Error');
                 }
             });
        });
  </script>


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
