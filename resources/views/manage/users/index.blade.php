@extends('layouts.manage')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column">
                <h1 class="title">Manage Users</h1>
            </div>
            <div class="column is-offset-one-third is-one-third">
                <a href="{{route('users.create')}}" class="button is-primary"><i class="fa fa-user-plus m-r-10"></i>Create User</a>
            </div>
        </div>
        <hr>

    <div class="card">
        <div class="card-content">
            <table class="table is-narrow is-fullwidth">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    
                    <tr>
                        <th>{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->created_at}}</th>
                        <th><a class="button is-outlined" href="{{route('users.edit', $user->id)}}">Edit</a></th>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> {{-- End of a card --}}

    {{$users->links()}}
</div>
    

@endsection