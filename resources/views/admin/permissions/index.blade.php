@extends('admin.layouts.master')
@section('title')
    المقالات الغير مفعلة
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

                            {{-- @include('admin.products.create') --}}
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
                                <th>عنوان المقال</th>
                                <th>اسم صاحب المقال</th>
                                <th> حالة المقال</th>
                                <th>الاجرائات</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i=0;
                            @endphp
                            @foreach ($posts as $row)
                            <tr class="rowId{{ $row->id }}">
                                <td>{{ $i ++}}</td>
                                <td>{{ $row->title}}</td>
                                <td>{{ $row->user->name}}</td>
                                <td>{{ $row->status()}}</td>

                                <td>
                                    <button class="btn btn-success btn-sm active" rowId="{{ $row->id }}">
                                        موافقة
                                    </button>
                                    <button class="btn btn-danger btn-sm unActive" rowId="{{ $row->id }}">
                                        رفض
                                    </button>
                                    <a href="">
                                        <button class="btn btn-primary btn-sm">
                                            عرض التفاصيل
                                        </button>
                                    </a>
                                </td>

                                @include('admin.categories.edit')
                                @include('admin.categories.delete')
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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


  {{-- ABROVED POST--}}
  <script>

    $(document).ready(function()
    {
        $('.active').on('click',function(e)
             {
                e.preventDefault();
                 var rowID = $(this).attr('rowId');
                //  alert(rowID);

                 if(rowID)
                 {

                     $.ajax(
                        {
                             url:"{{ url('/admin/permissions/abrove/') }}/" + rowID,
                             type:"get",
                             dataType:"json",
                             success:function(data)
                             {
                               if (data.status == true)
                               {
                                    $(".rowId" + rowID).remove();
                                    data.msg.show();
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

  {{-- REFUSED POST--}}
  <script>

    $(document).ready(function()
    {
        $('.unActive').on('click',function(e)
             {
                e.preventDefault();
                 var rowID = $(this).attr('rowId');
                //  alert(rowID);

                 if(rowID)
                 {

                     $.ajax(
                        {
                             url:"{{ url('/admin/permissions/unAbrove/') }}/" + rowID,
                             type:"get",
                             dataType:"json",
                             success:function(data)
                             {
                               if (data.status == true)
                               {
                                    $(".rowId" + rowID).remove();
                                    data.msg.show();
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
