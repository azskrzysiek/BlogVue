@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <h1 class="title">Dashboard</h1>
            </div>
            <div class="card-content">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <p>You are logged in!</p>
        </div>
    </div>
</div>
@endsection
