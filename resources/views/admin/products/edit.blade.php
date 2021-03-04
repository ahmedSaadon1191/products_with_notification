<!-- Strat Create Services -->
<div class="modal fade" id="edit_section{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل القسم الفرعي {{ $row->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.update',$row->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $row->id }}" class="rowId">

                    {{-- NAME  --}}
                     <div class="row">

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">اسم  المنتج</label>
                                <input class="form-control" type="text" name="name" placeholder="ادخل اسم المنتج " value="{{ $row->name }}">
                                @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- CATEGORY_ID  --}}
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">القسم الرئيسي</label>
                                <select class="form-control category" id="category">
                                    <option value="">اختار القسم الرئيسي</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}" @if ($cat->id == $row->sub_category->category->id)
                                            selected
                                        @endif>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- SUB_CATEGORY_ID  --}}
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">القسم الفرعي</label>
                                <select name="sub_category_id" class="form-control sub_category" id="sub_category">
                                    <option value="{{ $row->sub_category->id }}">
                                        {{ $row->sub_category->name }}
                                    </option>
                                </select>
                                @error("sub_category_id")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- PRICE  --}}
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""> سعر المنتج</label>
                                <input type="number" name="price" placeholder="ادخل سعر المنتج" class="form-control" value="{{ $row->price }}">
                                @error("price")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DISCREPTION  --}}
                        <div class="col-12 text-center">
                            <div class="form-group">
                                <textarea name="discreption"  cols="60" rows="4">
                                    {{ $row->discreption }}
                                </textarea>
                                <label for=""> وصف المنتج (اختياري)</label>
                                @error("discreption")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- IMAGES PRODUCT  --}}
                        <div class="col-12 text-center">
                            <div class="form-group">
                                <label for=""> صور المنتج</label>
                                <input type="file" name="image[]" multiple class="form-control">
                            </div>
                        </div>

                        {{-- SHOW IMAGES PRODUCT SELECTED --}}
                        <div class="col-12 text-center" style="height: 200px; width:200px">
                           @if ($images && $images->count() > 0)
                            @foreach ($images as $image)
                                @if ($image->id ==$row->id)
                                    @foreach ($image->images_product as $photos)
                                            <img src="{{ asset('admin/images/'.$photos->photo) }}" alt="" style="height: 100px; width:100px" class="image{{ $photos->id }}">
                                            <button class="btn btn-danger btn-sm deleteImage" imageId="{{ $photos->id }}" id="deleteImg{{ $photos->id }}">
                                                Delete
                                            </button>
                                    @endforeach
                                @endif
                            @endforeach
                           @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                        <button type="submit" class="btn btn-primary">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Services -->
