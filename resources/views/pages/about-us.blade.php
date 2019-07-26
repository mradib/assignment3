@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 style = "color:red">{{$page->title}}</h3></div>
                    <div class="panel-body">
                        {{$page->content}}
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
