@extends('adminlte::page')

@section('title', 'GUG Office')

@section('content_header')
    <div class="col-xs-12">
        <h1>@lang('messages.expenses')</h1>
    </div>
    <div class="clearfix"></div>
@stop

@section('content')

    <div class="col-xs-8">
        <form action="{{route('expenses.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">@lang('messages.title'):</label>
                <input type="text" name="title" class="form-control @if($errors->has('title'))
                    error-message @endif" id="title" value="{{old('title')}}">
                @if ($errors->has('title'))
                    <span class="help-message-block">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">@lang('messages.description'):</label>
                <textarea type="text" name="description" class="form-control @if($errors->has('description'))
                    error-message @endif" id="description">{{old('description')}}</textarea>
                @if ($errors->has('description'))
                    <span class="help-message-block">{{ $errors->first('description') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="kilo">@lang('messages.kilo'):</label><br>
                <input type="text" name="kilo" class="form-control @if($errors->has('kilo'))
                    error-message @endif" id="kilo" value="{{old('kilo')}}">
                @if ($errors->has('kilo'))
                    <span class="help-message-block">{{ $errors->first('kilo') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="price">@lang('messages.price'):</label><br>
                <input type="text" name="price" class="form-control @if($errors->has('price'))
                    error-message @endif" id="price" value="{{old('price')}}">
                @if ($errors->has('price'))
                    <span class="help-message-block">{{ $errors->first('price') }}</span>
                @endif
            </div>

            {{--<div class="form-group">--}}
                {{--<label for="file">Ֆայլ:</label>--}}
                {{--<input type="file" name="file" class="form-control" id="file">--}}
            {{--</div>--}}

            <button type="submit" class="btn btn-primary">Ավելացնել</button>
        </form>
    </div>

@stop

@section('js')
    <script>
        $(function () {

            let buildingId = getCookie('buildingId');
            $('#residentBuildId').val(buildingId);
        })
    </script>
@stop
