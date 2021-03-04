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
                <form action="{{ route('sub_Categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">اسم القسم الفرعي</label>
                                <input class="form-control" type="text" name="name" placeholder="ادخل اسم القسم الفرعي">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">القسم الرئيسي</label>
                                <select name="category_id" class="form-control">
                                    <option value="">اختار القسم الرئيسي</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}">
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
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
