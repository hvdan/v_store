$(document).ready(function (){

    // function getListCategories() {
    //     let url = 'categories/list';
    //     callAjax(url).done(function (data) {
    //         resultSuccess(data);
    //     })
    // }
    // getListCategories();

    var table = $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax: url_dataTable,
        "order": [[ 0, "desc" ]],
        "autoWidth": true,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name'},
            { data: 'created_at', name:'created_at'},
            { data: 'updated_at', name:'updated_at'},
            { data: 'actions', name: 'actions', orderable: true, searchable: true }
        ]
    });


    $(document).on('click','.btn-create', function (e){
        e.preventDefault();
        $(':reset')
        let formData = document.getElementById('form_create');
        let data = new FormData(formData);
        let url = $(this).data("href");
        callAjaxFormData(url, METHOD_POST, data)
            .done(function (data){
                // getListCategories();
                $('#ModalCreate').modal('hide');
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
        // console.log(data)
        callAjaxFormData(url, METHOD_POST, data)
            .done(function (data) {
                getListCategories();
                $('#ModalUpdate').modal('hide');
            })
            .fail(function (errors) {
                showErrorMessage(errors.responseJSON.errors);
            })

    })

    $(document).on('click', '.btn-delete', function (e){
        data_id=$(this).data("id")
        data_url=$(this).data("href")
        $('#ModalDelete').modal('show')
    })
    $('#delete').click(function (){
        let id = data_id;
        let url = data_url;
        callAjax(url, METHOD_DELETE, id)

    })
    // $(document).on('click', '.btn-delete', function (e){
    //     let id= $(this).data("id");
    //     let url= $(this).data("href")
    //     console.log(id);
    //     console.log(url);
    //     callAjax(url, METHOD_DELETE, id)
    //         .done(function (data) {
    //             getListCategories();
    //         })
    // })

    $('body').on('click', '.relative a', function (e) {
        e.preventDefault();
        let url = $(this).attr('href');

        callAjax(url)
            .done(function (data) {
                resultSuccess(data);
            })
    })

})
