$(document).ready(function (){
    function getListProducts() {
        let url = 'products/list';
        callAjax(url).done(function (data) {
            resultSuccess(data);
        })
    }
    getListProducts();

    $(document).on('click','.btn-create', function (e){
        e.preventDefault();
        $(':reset')
        let formData = document.getElementById('form_create');
        let data = new FormData(formData);
        let url = $(this).data("href");
        callAjaxFormData(url, METHOD_POST, data)
            .done(function (data){
                getListProducts();
                $('#ModalCreate').modal('hide');
            })
            .fail(function (errors){
                showErrorMessage(errors.responseJSON.errors);
            })
    })

    $(document).on("click", '.btn-show', function () {
        let id = $(this).data("id");
        let url = $(this).data("href");

        callAjax(url, METHOD_GET, id)
            .done(function (data) {
                $('body').find("#ModalShow").remove();
                $('body').append(data);
                $('#ModalShow').modal('show');
            })
    })

    $(document).on("click", '.btn-edit', function () {
        let id = $(this).data("id");
        let url = $(this).data("href");

        callAjax(url, METHOD_GET, id)
            .done(function (data) {
                $('body').find("#ModalUpdate").remove();
                $('body').append(data);
                $('#ModalUpdate').modal('show');
            })
    })

    $(document).on('click','.btn-update',function (e){
        e.preventDefault();
        let formData= document.getElementById('form_update');
        let data = new FormData(formData);
        let url = $(this).data("href");
        callAjaxFormData(url, METHOD_POST, data)
            .done(function (data) {
                getListProducts();
                $('#ModalUpdate').modal('hide');
            })
            .fail(function (errors) {
                showErrorMessage(errors.responseJSON.errors);
            })

    })

    $(document).on('click', '.btn-delete', function (e){
        let id= $(this).data("id");
        let url= $(this).data("href")
        callAjax(url, METHOD_DELETE, id)
            .done(function (data) {
                getListProducts();
            })
    })


    $('body').on('click', '.relative a', function (e) {
        e.preventDefault();
        let url = $(this).attr('href');

        callAjax(url)
            .done(function (data) {
                resultSuccess(data);
            })
    })

    $(document).on('click', '.btn-exit', function (){
        $('#ModalShow').modal('hide');
        $('#ModalUpdate').modal('hide');
    })
})
