<!-- Strat Create Sections -->
<div class="modal fade" id="add_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" id="createForm">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">اسم  المنتج</label>
                                <input class="form-control" type="text" name="name" placeholder="ادخل اسم المنتج ">
                                @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">القسم الرئيسي</label>
                                <select class="form-control" id="category">
                                    <option value="">اختار القسم الرئيسي</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">القسم الفرعي</label>
                                <select name="sub_category_id" class="form-control" id="sub_category">
                                    <option value="">اختار القسم الفرعي</option>

                                </select>
                                @error("sub_category_id")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for=""> سعر المنتج</label>
                                <input type="number" name="price" placeholder="ادخل سعر المنتج" class="form-control">
                                @error("price")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <div class="form-group">
                                <textarea name="discreption"  cols="60" rows="4"></textarea>
                                <label for=""> وصف المنتج (اختياري)</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">صور المنتج</label>
                                <input type="file" name="image[]" multiple class="form-control photo" id="photo">
                            </div>
                        </div>


                        <div class="col-12 div_image_preview" id="div_image_preview">
                            <img src="{{ url('C:\fakepath\download.jfif') }}" alt="" class="image_preview" style="height: 100px">
                            <button class="button_preview">
                                Delete
                            </button>
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

    <!-- End Create Sections -->
