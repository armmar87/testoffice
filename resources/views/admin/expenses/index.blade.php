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
        <div class="col-xs-8">
            <a href="{{route('expenses.create')}}" class="btn btn-primary">@lang('messages.add') <i class="fa fa-plus"></i></a>
        </div>
        <div class="col-xs-4">
            <label>{{__('messages.search_by_date')}}</label>
            <input type="text" name="daterange" class="form-control pull-right"/>
        </div>

    </div>
    <div class="clearfix"></div>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">@lang('messages.expenses')</h3>
                    </div>

                    <div class="box-body table-responsive" id="dataTableBlock">

                        @include('admin.expenses.data-table', compact('expenses'))

                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('js')
    <script>
        dataRangePickerInit('{{url('get-expenses-data-range')}}')
        // dataTableInit()
    </script>
@endsection

