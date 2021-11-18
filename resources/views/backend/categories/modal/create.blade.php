<div id="ModalCreate" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-style">
        <div class="modal-content">
            <div class="modal-header modal-header-style">
                <h5 class="modal-title" id="myModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body-main">
                <div class="modal-body data-table">
                    <form  method="post" id="form_create">

                        <input type="hidden" name="_token" id="token1" value="{{ csrf_token() }}">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Name</label><span style="color: red"> (*)</span>
                                <input type="text" class="form-control name-categories" id="name-cate-add" name="name">

                                <span class="errors name" style="color: red" role="alert">
                                    <strong></strong>
                                </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="btn-store" type="button" class="btn btn-primary"
                                    data-href="{{ route('categories.store') }}">Save
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
