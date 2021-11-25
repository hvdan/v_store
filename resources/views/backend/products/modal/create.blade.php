<div id="ModalCreate" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-style">
        <div class="modal-content">
            <div class="modal-header modal-header-style">
                <h5 class="modal-title">Create Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body-main">
                <div class="modal-body data-table">
                    <form id="form_create" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="alert-danger alert d-none error-message">
                                <div></div>
                            </div>
                            <div class="row">
                                    <div>
                                        <label>Name <sup class="text-danger">(*)</sup></label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div>
                                        <label>Category <sup class="text-danger">(*)</sup></label>
                                        <select name="product_category_id" class="custom-select">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <label>Price <sup class="text-danger">(*)</sup></label>
                                        <input type="text" id="price" name="price" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Description<sup class="text-danger">(*)</sup></label>
                                        <textarea name="description" class="form-control"
                                                  rows="3"></textarea>
                                    </div>

                                    <div>
                                        <label>Stock <sup class="text-danger">(*)</sup></label>
                                        <input type="text" id="price" name="stock" class="form-control">
                                    </div>

                                    <div>
                                        <label>Stock Defective<sup class="text-danger">(*)</sup></label>
                                        <input type="text" id="price" name="stock_defective" class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button"  data-href="{{ route('products.store') }}"
                                    class="btn btn-primary btn-create">
                                Submit
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
