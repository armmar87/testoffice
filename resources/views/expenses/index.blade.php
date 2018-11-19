@extends('adminlte::page')

@section('title', 'GUG Office')

@section('content_header')
    <div class="col-xs-12">
        <h1>@lang('messages.expenses')</h1>
    </div>
    <div class="clearfix"></div>
@stop

@section('content')


    <div class="col-xs-12">
        <a href="{{route('expenses.create')}}" class="btn btn-primary">@lang('messages.add') <i class="fa fa-plus"></i></a>
    </div>
    <div class="clearfix"></div>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">@lang('messages.expenses')</h3>
                    </div>

                    <div class="box-body" id="tableBlock">

                        {{--<div class="table-responsive">--}}
                            {{--<table class="table">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th scope="col">#</th>--}}
                                {{--<th scope="col">@lang('messages.date')</th>--}}
                                {{--<th scope="col">@lang('messages.title')</th>--}}
                                {{--<th scope="col">@lang('messages.description')</th>--}}
                                {{--<th scope="col">@lang('messages.kilo')</th>--}}
                                {{--<th scope="col">@lang('messages.price')</th>--}}
                                {{--<th scope="col">@lang('messages.action')</th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($expenses as $expense)--}}
                                {{--<tr>--}}
                                    {{--<th scope="row">1</th>--}}
                                    {{--<td>{{\App\Helper\DateHelper::changeDateFormat($expense->created_at)}}</td>--}}
                                    {{--<td>{{$expense->title}}</td>--}}
                                    {{--<td>{{$expense->description}}</td>--}}
                                    {{--<td>{{$expense->kilo}}</td>--}}
                                    {{--<td>{{$expense->price}}</td>--}}
                                    {{--<td>--}}
                                        {{--<a href="{{url('/expenses/' . $expense->id .'/edit')}}" class="btn btn-info btn-xs">--}}
                                            {{--<i class="fa fa-pencil"></i> @lang('messages.edit') </a>--}}
                                        {{--<a class="btn btn-danger btn-xs remove"--}}
{{--                                           href="{{url('/expenses/' . $expense->id)}}"--}}
                                           {{--onclick="deleteItem('{{ url('/expenses/' . $expense->id) }}', 'DELETE')"--}}
                                           {{--onclick="event.preventDefault();document.getElementById('deleteForm_{{$expense->id}}').submit();"--}}
                                        {{--><i class="fa fa-trash"></i>@lang('messages.remove')</a>--}}
                                        {{--<form id="deleteForm_{{$expense->id}}" action="{{url('/expenses/' . $expense->id)}}" method="POST" style="display: none;">--}}
                                            {{--@csrf--}}
                                            {{--@method('DELETE')--}}
                                        {{--</form>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}

                            {{--</tbody>--}}
                        {{--</table>--}}
                        {{--</div>--}}

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
                                    <td>{{\App\Helper\DateHelper::changeDateFormat($expense->created_at)}}</td>
                                    <td>{{$expense->title}}</td>
                                    <td>{{$expense->description}}</td>
                                    <td>{{$expense->kilo}}</td>
                                    <td>{{$expense->quantity}}</td>
                                    <td>{{$expense->price}}</td>
                                    <td>
                                        <a href="{{url('/expenses/' . $expense->id .'/edit')}}" class="btn btn-info btn-xs">
                                            <i class="fa fa-pencil"></i> @lang('messages.edit') </a>
                                        <a class="btn btn-danger btn-xs remove" onclick="deleteItem('{{ url('/expenses/' . $expense->id) }}', 'DELETE')"
                                        ><i class="fa fa-trash"></i>@lang('messages.remove')</a>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

