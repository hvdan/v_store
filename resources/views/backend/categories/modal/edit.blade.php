<div id="ModalUpdate" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-style">
        <div class="modal-content">
            <div class="modal-header modal-header-style">
                <h5 class="modal-title" id="myModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body-main">
                <div class="modal-body data-table">
                    <form id="form_update" enctype="multipart/form-data">
                        {!! method_field('PUT') !!}

                        <div class="box-body">
                            <div class="form-group">
                                <label>Name</label><span style="color: red"> (*)</span>
                                <input value="{{ $category->name }}" type="text" name="name" id="a" class="form-control">

                                <span class="errors name" style="color: red" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button  type="button" class="btn btn-primary btn-update"
                                    data-href="{{ route('categories.update',$category->id) }}">Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
