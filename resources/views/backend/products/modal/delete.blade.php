
<div class="modal fade" id="ModalDelete{{ $product->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form>
                {!! method_field('DELETE') !!}
                <div class="modal-body">
                    <h5 class="text-center text-danger">You want to delete</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" data-toggle="modal" data-target="#ModalDelete{{ $product->id }}"
                            data-href="{{ route('products.delete', $product->id) }}" class="btn-delete btn btn-primary">
                        Submit
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
