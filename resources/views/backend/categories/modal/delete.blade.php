
<div id="ModalDelete{{ $category->id }}" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-style">
        <div class="modal-content">
            <div class="modal-header modal-header-style">
                <h5 class="modal-title" id="myModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body-main">
                <div class="modal-body data-table">
                    <form  method="post" id="form_update">
                        {!! method_field('DELETE') !!}
                        <div class="modal-body">
                            <h5 class="text-center text-danger">You want to delete</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-toggle="modal" data-target="#ModalDelete{{ $category->id }}"
                                    data-href="{{ route('categories.destroy', $category->id) }}" class="btn-delete btn btn-danger">
                                Delete
                            </button>
                            <button class="btn btn-secondary waves-effect" data-dismiss="modal" id="btn-store">Close</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

