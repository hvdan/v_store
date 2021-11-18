$(document).ready(function (){
    function getListCategories() {
        let url = 'categories/list';
        callAjax(url).done(function (data) {
            resultSuccess(data);
        })
    }
    getListCategories();

    $(document).on('click',('#btn-store'), function (e){
        e.preventDefault();
        $(':reset')
        let formData = document.getElementById('form_create');
        let data = new FormData(formData);
        let url = $(this).data("href");
        callAjaxFormData(url,METHOD_POST,data)

            .done(function (data){
                $('#ModalCreate').modal('hide')
                getListCategories()
            })
            .fail(function (errors){
                showErrorMessage(errors.responseJSON.errors);
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
    });

    $(document).on('click','.btn-update',function (e){
        e.preventDefault();
        let formData= document.getElementById('form_update');
        let data = new FormData(formData);
        let url = $(this).data("href");
        callAjaxFormData(url, METHOD_POST, data)
            .done(function (data) {
                $('#ModalUpdate').modal('hide');
                getListProducts();
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






















    // $('#btn-add-category').click(function (event){
    //     event.preventDefault();
    //     let url = $('#add-form-cate').attr('data-url');
    //     let formData =$('#add-form-cate').serialize();
    //     $.ajax({
    //         url:url,
    //         data:formData,
    //         type:"POST",
    //         dataType:'json',
    //         // contenType:'json',
    //         success: function (response){
    //             console.log(response)
    //         }
    //     })
    // })
})
