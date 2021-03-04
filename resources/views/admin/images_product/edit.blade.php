<!-- Strat Create Services -->
<div class="modal fade" id="edit_section{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل صوره المنتج {{ $row->product->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="{{ asset('/Admin/images/'.$row->photo) }}" alt="" style="height: 100px; width:100px">
                </div><br><br>

                <form action="{{ route('imagesProduct.update',$row->id) }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">اختار المنتج</label>
                               <select name="product_id" class="form-control">
                                   <option value="">اختار المنتج</option>
                                   @foreach ($products as $pro)
                                        <option value="{{ $pro->id }}"@if ($row->product->id == $pro->id)
                                            selected
                                        @endif>
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
</div>
<!-- End Create Services -->
