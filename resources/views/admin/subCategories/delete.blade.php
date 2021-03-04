<!-- Deleted Sections -->
<!-- Modal -->
<div class="modal fade" id="delete_section{{ $row->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">حزف القسم  {{ $row->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form action="{{ route('data_delete','test') }}" method="post">
                    @method('DELETE')
                    @csrf

                    <p class="h4 text-danger">هل انت متاكد من حذف القسم</p>
                    <input type="hidden" name="id" value="{{$row->id}}">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                <button type="submit" class="btn btn-danger">نعم</button>
            </div>

            </form> --}}

        </div>
    </div>
</div>
