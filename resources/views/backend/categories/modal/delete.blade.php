
{{--<div class="modal fade" id="ModalDelete{{ $category->id }}" tabindex="-1" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-sm">--}}
{{--        <div class="modal-content">--}}
{{--            <form>--}}
{{--                {!! method_field('DELETE') !!}--}}
{{--                <div class="modal-body">--}}
{{--                    <h5 class="text-center text-danger">You want to delete</h5>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" data-toggle="modal" data-target="#ModalDelete{{ $category->id }}"--}}
{{--                            data-href="{{ route('categories.delete', $category->id) }}" class="btn-delete btn btn-primary">--}}
{{--                        Submit--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div id="ModalDelete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Confirmation</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form>
                @csrf
                {!! method_field('DELETE') !!}

                <div class="modal-body">
                    <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" name="ok_button" id="delete" class="btn btn-danger">OK</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

