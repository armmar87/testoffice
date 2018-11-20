<table id="dataTable" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>@lang('messages.date')</th>
        <th>@lang('messages.title')</th>
        <th>@lang('messages.description')</th>
        <th>@lang('messages.kilo')</th>
        <th>@lang('messages.quantity')</th>
        <th>@lang('messages.price')</th>
        <th>@lang('messages.action')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($expenses as $expense)
        <tr>
            <td>{{$expense->getDate($expense->created_at)}}</td>
            <td>{{$expense->title}}</td>
            <td>{{$expense->description}}</td>
            <td>{{$expense->kilo}}</td>
            <td>{{$expense->quantity}}</td>
            <td>{{$expense->price}}</td>
            <td>
                <a href="{{url('/expenses/' . $expense->id .'/edit')}}" class="btn btn-info btn-xs">
                    <i class="fa fa-2x fa-edit"></i></a>
                <a class="btn btn-danger btn-xs remove" onclick="deleteItem(this,'{{ url('/expenses/' . $expense->id) }}', 'DELETE')">
                    <i class="fa fa-2x fa-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>
    <tfoot>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th><p>Ամբողջը {{$expenses->sum('price')}} Դ</p></th>
        <th></th>
    </tr>
    </tfoot>
</table>
