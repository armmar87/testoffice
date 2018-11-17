$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


});

function deleteItem(url, method) {
    if (confirm("Դուք ցանկանում եք ջնջել ?")) {
        $.ajax({
            url: url,
            type: method,
            success: function(result) {
                location.reload();
            }
        });
    }
}
