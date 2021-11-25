const METHOD_POST = "POST";
const METHOD_GET = "GET";
const METHOD_DELETE = "DELETE";

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//show image
function showImage(event) {
    let image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};

function showImageUpdate(event) {
    let image = document.getElementById('output1');
    image.src = URL.createObjectURL(event.target.files[0]);
}

function callAjaxFormData(url, method = METHOD_GET, data = null) {
    return $.ajax({
        data: data,
        method: method,
        url: url,
        contentType: false,
        processData: false
    })
}

function callAjax(url, method = METHOD_GET, data = null) {
    return $.ajax({
        data: data,
        method: method,
        url: url
    })
}

//show errors
function showErrorMessage(errors) {
    $('.error-message').find('ul').html('');
    $('.error-message').removeClass('d-none');
    $.each(errors, function (key, value) {
        $('.error-message').find('div').append('<p>' + value + '</p>');
    })
}

//result
function resultSuccess(data) {
    $("#tbl_result").empty();
    $('#tbl_result').append(data);
}

//reset form
$(document).on("click", '#btn_create', function () {
    $("#form_create").trigger("reset");
    $("#image").val("");
    $("#output").remove();
    $("#bl_output").append("<img height='120' width='120' id='output'>")
    $(".error-message ").addClass('d-none');
})

//remove image
$(document).on('click', '.remove-image', function () {
    $("#image").val("");
    $("#output").remove();
    $("#bl_output").append("<img height='120' width='120' id='output'>")
})

//check all
$(document).ready(function () {
    $("#select_all").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
    $('.chk').on('click', function () {
        if ($('.checked:checked').length == $('.checked').length) {
            $('#select_all').prop('checked', true);
        } else {
            $('#select_all').prop('checked', false);
        }
    });
});
