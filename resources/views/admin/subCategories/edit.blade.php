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
                <form action="{{ route('sub_Categories.update',$row->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <input type="hidden" value="{{ $row->id }}" name="id" class="form-control">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">اسم القسم الفرعي</label>
                                <input class="form-control" type="text" name="name" placeholder="ادخل اسم القسم الفرعي" value="{{ $row->name }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">القسم الرئيسي</label>
                                <select name="category_id" class="form-control">
                                    <option value="">اختار القسم الرئيسي</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}" @if ($cat->id == $row->category->id)
                                            selected
                                        @endif>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>







                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('website/action_btn.close') }}</button>
                        <button class="btn btn-primary">{{ trans('website/action_btn.save') }} </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Services -->
