<!-- Strat Create Services -->
<div class="modal fade" id="edit_section{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل الضمان</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.update',$row->id ) }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <input type="hidden" value="{{ $row->id }}" name="id" class="form-control">
                    <div class="row">
                        <div class="col-12">
                            <label for="">اسم القسم</label>
                            <input value="{{ $row->name }}" type="text"
                                name="name" class="form-control" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
