@extends('backend.layouts.main')
@section('content')
    <div class="card-style mb-30">
        <div class="title d-flex flex-wrap justify-content-between">
            <div class="left">
                <h2 class="mr-40"> CATEGORY TABLE </h2>
            </div>
            <div class="right">

                <button href="#" class="main-btn primary-btn btn-hover btn-sm" data-toggle="modal"
                   data-target="#ModalCreate" id="btn_create">
                    <i class="lni lni-plus"></i>
                    New Category
                </button>

            </div>
        </div>
        <div class="table-responsive my-4" id="tbl_product_result" data-url="{{route('categories.list')}}"></div>
    </div>
    @include('backend.categories.modal.create')



@endsection
@section('script')
<script src="{{asset('backend/js/admin/productCategory.js')}}"></script>
@endsection
