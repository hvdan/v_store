<div class="card-body">
    <div class="table">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Last Purchase</th>
                <th scope="col">Total Purchases</th>
                <th scope="col">Tatal paid</th>
                <th scope="col">Balance</th>
                <th scope="col">Acction</th>

            </tr>
            </thead>
            <tbody>
            @forelse ($clients as $client)
                <tr>
                    <td>{{$client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }} $</td>
                    <td>{{ $client->last_purchases }}</td>
                    <td>{{ $client->tatal_paid}}</td>
                    <td>{{ $client->balance }}</td>
                    <td>
                        <button type="button" data-toggle="modal" data-href="{{ route('clients.show',$client->id) }}"
                                data-id="{{ $client->id }}"
                                class="btn-warning orange-alert btn-show btn-sm">Detail
                        </button>
                        |
                        <button type="button" data-toggle="modal" data-href="{{ route('clients.edit',$client->id) }}"
                                data-id="{{ $client->id }}"
                                class="btn btn-success btn-edit btn-sm">Edit
                        </button>
                        |
                        <button type="button" data-toggle="modal" data-target="#ModalDelete{{ $client->id }}"
                                class="btn btn-danger btn-sm">Delete
                        </button>
                        @include('backend.clients.modal.delete')
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5"><p>No users</p></td><td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $clients->links() }}
    </div>
</div>
