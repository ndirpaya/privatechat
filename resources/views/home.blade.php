@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Private Chat</div>

                <div class="card-body" id="app">
                    <private-chat :user="{{ auth()->user() }}"></private-chat>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
