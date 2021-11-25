@extends('backend.layouts.main')
@section('content')
    <div class="card-style mb-30">
        <div class="title d-flex flex-wrap justify-content-between">
            <div class="left">
                <h2 class="mr-40"> CATEGORIES TABLE </h2>
            </div>
            <div class="right">

                <button href="#" class="main-btn primary-btn btn-hover btn-sm" data-toggle="modal"
                   data-target="#ModalCreate" id="btn_create">
                    <i class="lni lni-plus"></i>
                    New Category
                </button>

            </div>
        </div>
        <div class="table-responsive my-4" id="tbl_result" >
            <div class="card-body">
                <div class="table">
                    <table class="display" id="table">
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('backend.categories.modal.create')
    @include('backend.categories.modal.delete')

@endsection
@section('css')
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    url_dataTable = '{!! route('categories.data') !!}';
</script>
<script src="{{asset('backend/js/admin/productCategory.js')}}"></script>

@endsection
