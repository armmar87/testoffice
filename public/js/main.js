$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


});

let data = {};

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

function dataRangePickerInit(url) {
    $(function() {
        $('input[name="daterange"]').daterangepicker({
            opens: 'left',
            startDate: moment().startOf('month'),
            endDate: moment().endOf('month'),
            locale: {
                format: 'DD/MM/YYYY'
            }
        }, function(start, end, label) {
            data = {start_date:start.format('YYYY-MM-DD'), end_ate:end.format('YYYY-MM-DD')};
            console.log(url)
            console.log(data)
            sendDataRenge(url, data);
        });
    });
}

function sendDataRenge(url, data) {
    $.post( url, data, function( response ) {
        modalContent.html( response );
    });
}
