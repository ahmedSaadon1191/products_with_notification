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
                <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf



                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Category Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
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
