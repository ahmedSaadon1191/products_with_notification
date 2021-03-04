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
                <form action="{{ route('imagesProduct.store') }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">اختار المنتج</label>
                               <select name="product_id" class="form-control">
                                   <option value="">اختار المنتج</option>
                                   @foreach ($products as $pro)
                                        <option value="{{ $pro->id }}">
                                            {{ $pro->name }}
                                        </option>
                                   @endforeach
                               </select>
                               @error("product_id")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">صور المنتج</label>
                                <input type="file" name="image" class="form-control">
                                @error("image")
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
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
