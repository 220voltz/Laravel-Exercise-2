@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ session('username')}}
                </div>
            </div>
            <!-- <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('saveSessionTest') }}">Set Session</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('showSessionTest') }}">Show Session</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('page1') }}">Page 1</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('page2') }}">Page 2</a>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection



