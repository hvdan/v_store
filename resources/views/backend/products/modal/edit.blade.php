<div id="ModalUpdate" data-backdrop="static" data-keyboard="false" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-style">
        <div class="modal-content">
            <div class="modal-header modal-header-style">
                <h5 class="modal-title" id="myModalLabel">Update Product</h5>
                <button type="button" class=" btn-exit" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body-main">
                <div class="modal-body data-table">
                    <form id="form_update" enctype="multipart/form-data">
                        {!! method_field('PUT') !!}
                        <div class="modal-body">
                            <div class="alert-danger alert d-none error-message">
                                <div></div>
                            </div>
                            <div class="row">
                                    <div>
                                        <label>Name <sup class="text-danger">(*)</sup></label>
                                        <input value="{{ $product->name }}" type="text" name="name" id="a" class="form-control">
                                    </div>
                                    <div>
                                        <label>Price <sup class="text-danger">(*)</sup></label>
                                        <input value="{{ $product->price }}" type="text" id="price" name="price"
                                               class="form-control">
                                    </div>
                                    <div>
                                        <label>Category <sup class="text-danger">(*)</sup></label>
                                        <select name="category_id" class="custom-select">
                                            <option value="{{ $product->product_category_id }}">{{ $product->category->name }}</option>
                                            @foreach($categories as $category)
                                                @if($category->id != $product->category_id)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Description<sup class="text-danger">(*)</sup></label>
                                        <textarea name="description" class="form-control"
                                                  rows="3">{{ $product->description }}</textarea>
                                    </div>
                                    <div>
                                        <label>Price <sup class="text-danger">(*)</sup></label>
                                        <input value="{{ $product->stock }}" type="text" id="price" name="price"
                                               class="form-control">
                                    </div>
                                    <div>
                                        <label>Price <sup class="text-danger">(*)</sup></label>
                                        <input value="{{ $product->stock_defective }}" type="text" id="price" name="price"
                                               class="form-control">
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-href="{{ route('products.update',$product->id) }}"
                                    class="btn btn-primary btn-update">
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
