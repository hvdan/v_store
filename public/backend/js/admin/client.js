$(document).ready(function () {
    function getListClients() {
        let url = 'clients/list';
        callAjax(url).done(function (data) {
            resultSuccess(data);
        })
    }

    getListClients();

})
