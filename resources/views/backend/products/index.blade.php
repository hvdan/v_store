@extends('backend.layouts.main')
@section('content')
    <div class="card-style mb-30">
        <div class="title d-flex flex-wrap justify-content-between">
            <div class="left">
                <h2 class="mr-40"> PRODUCTS TABLE </h2>
            </div>
            <div class="right">

                <button href="#" class="main-btn primary-btn btn-hover btn-sm" data-toggle="modal"
                        data-target="#ModalCreate" id="btn_create">
                    <i class="lni lni-plus"></i>
                    New Product
                </button>

            </div>
        </div>
        <div class="table-responsive my-4" id="tbl_result" data-url="{{route('products.list')}}"></div>
    </div>
    @include('backend.products.modal.create')

@endsection
@section('script')
    <script src="{{asset('backend/js/admin/product.js')}}"></script>
@endsection
