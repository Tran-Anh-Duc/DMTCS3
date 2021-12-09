
@extends("backend.layout.master")
@section("content")
<div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone " >
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp projects-table " >
        <thead>
        <tr>
            <th style="text-align: center" class="mdl-data-table__cell--non-numeric">ID</th>
            <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Name</th>
            <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Email</th>
            <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Avatar</th>
            <th style="text-align: center" class="mdl-data-table__cell--non-numeric">Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td style="text-align: center" class="mdl-data-table__cell--non-numeric">{{$user->id}}</td>
            <td style="text-align: center" class="mdl-data-table__cell--non-numeric">{{$user->name}}</td>
            <td style="text-align: center" class="mdl-data-table__cell--non-numeric">{{$user->email}}</td>
            <td style="text-align: center"> <img style="width: 30%" src="{{$user->avatar ?? 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqchnDJ6zreYOFN7Sag4iGQPEhjseY59SfQ-mf9bN2GpE8fcPXGGO3QC0YLVId0xw2zFU&usqp=CAU'}} "></td>
            <td style="text-align: center" class="mdl-data-table__cell--non-numeric">{{$user->role->name}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

