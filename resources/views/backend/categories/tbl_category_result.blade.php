<div class="card-body">
    <div class="table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Updated at</th>
                <th scope="col">Acction</th>

            </tr>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <a href="">Detail</a>
                        |
                        <button type="button" data-toggle="modal" data-href="{{ route('categories.edit',$category->id) }}"
                                data-id="{{ $category->id }}"
                                class="btn btn-success btn-edit btn-sm">Edit
                        </button>

                        |
                        <button type="button" data-toggle="modal" data-target="#ModalDelete{{ $category->id }}"
                                class="btn btn-danger btn-sm">Delete
                        </button>
                        @include('backend.categories.modal.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"><p>No users</p></td><td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
