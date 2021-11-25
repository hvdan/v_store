<div class="modal fade" id="ModalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">product information {{$product->name}} </h5>
            </div>
            <div class="modal-body">
                <h4 class="text-bold">
                    <span class="text-medium">Name Product:</span>
                    {{$product->name}}
                </h4>

                <p class="text-sm">
                    <span class="text-medium">Product Category:</span>
                    {{$product->category->name}}
                </p>
                <p class="text-sm">
                    <span class="text-medium">Price:</span>
                    {{$product->price}}$
                </p>
                <p class="text-sm">
                    <span class="text-medium">Stock:</span>
                    {{$product->stock}}
                </p>
                <p class="text-sm">
                    <span class="text-medium">Stock Defective:</span>
                    {{$product->stock_defective}}
                </p>
                <p class="text-sm">
                    <span class="text-medium">Created At:</span>
                    {{$product->created_at}}
                </p>
                <p class="text-sm">
                    <span class="text-medium">Updated At:</span>
                    {{$product->updated_at}}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-exit" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
