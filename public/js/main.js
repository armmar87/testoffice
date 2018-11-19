$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


});

let data = {};
let dataTableBlock = $('#dataTableBlock');

function deleteItem(target, url, method) {
    let element = $(target).parents('tr');
    if (confirm("Դուք ցանկանում եք ջնջել ?")) {
        $.ajax({
            url: url,
            type: method,
            success: function(result) {
                element.hide(2000, function () {
                    element.remove()
                });
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
        console.log(response)
        dataTableBlock.html( response.content );
    });
}

function dataTableInit() {
    $('#dataTable').DataTable({
        'responsive'  : true,
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "order": [[0, 'asc']],
        // "columnDefs": [
        //     { "width": "15%", "targets": 0 }
        // ],
        "language": {
            "sEmptyTable": "Տվյալները բացակայում են",
            "sProcessing": "Կատարվում է...",
            "sInfoThousands":  ",",
            "sLengthMenu": "Ցուցադրել _MENU_ արդյունքներ մեկ էջում",
            "sLoadingRecords": "Բեռնվում է ...",
            "sZeroRecords": "Հարցմանը համապատասխանող արդյունքներ չկան",
            "sInfo": "Ցուցադրված են _START_-ից _END_ արդյունքները ընդհանուր _TOTAL_-ից",
            "sInfoEmpty": "Արդյունքներ գտնված չեն",
            "sInfoFiltered": "(ֆիլտրվել է ընդհանուր _MAX_ արդյունքներից)",
            "sInfoPostFix":  "",
            "sSearch": "Փնտրել",
            "oPaginate": {
                "sFirst": "Առաջին էջ",
                "sPrevious": "Նախորդ էջ",
                "sNext": "Հաջորդ էջ",
                "sLast": "Վերջին էջ"
            },
            "oAria": {
                "sSortAscending":  ": ակտիվացրեք աճման կարգով դասավորելու համար",
                "sSortDescending": ": ակտիվացրեք նվազման կարգով դասավորելու համար"
            }
        }
    });
}
