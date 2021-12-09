@extends("backend.layout.master")
@section("content")
<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone " >
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp projects-table " >
        <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">ID</th>
            <th class="mdl-data-table__cell--non-numeric">Name</th>
            <th class="mdl-data-table__cell--non-numeric">Email</th>
            <th class="mdl-data-table__cell--non-numeric">Avatar</th>
            <th class="mdl-data-table__cell--non-numeric">Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td class="mdl-data-table__cell--non-numeric">{{$user->id}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{$user->name}}</td>
            <td class="mdl-data-table__cell--non-numeric">{{$user->email}}</td>
            <td> <img src="{{$user->avatar}}"></td>
            <td class="mdl-data-table__cell--non-numeric">{{$user->role->name}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
