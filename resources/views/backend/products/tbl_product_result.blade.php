<div class="card-body">
    <div class="table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Stock</th>
                <th scope="col">Stock Defective</th>

            </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }} $</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->stock_defective }}</td>
                    <td>
                        <button type="button" data-toggle="modal" data-href="{{ route('products.show',$product->id) }}"
                                data-id="{{ $product->id }}"
                                class="btn-warning orange-alert btn-show btn-sm">Detail
                        </button>
                        |
                        <button type="button" data-toggle="modal" data-href="{{ route('products.edit',$product->id) }}"
                                data-id="{{ $product->id }}"
                                class="btn btn-success btn-edit btn-sm">Edit
                        </button>
                        |
                        <button type="button" data-toggle="modal" data-target="#ModalDelete{{ $product->id }}"
                                class="btn btn-danger btn-sm">Delete
                        </button>
                        @include('backend.products.modal.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"><p>No users</p></td><td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
</div>
