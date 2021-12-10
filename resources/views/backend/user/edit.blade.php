

@extends('backend.layout.master')
@section('content')

    <form method="post" enctype="multipart/form-data">
        @csrf
        <div style="margin-top:50px;margin-left: 200px ">
            <table class="table table-dark" style="width: 700px;height: 500px">
                <tr>

                    <td><input style="width: 700px" type="text" name="name" value="{{$user->name}}" class="alert alert-primary" role="alert" >
                        @error('name')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>

                    <td><input style="width: 700px" type="email" name="email" value="{{$user->email}}" class="alert alert-primary" role="alert">
                        @error('email')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <select style="margin-left: 15px;margin-bottom: 30px;width: 250px" class="custom-select"
                                name="role_id" >
                            <option value="">Role</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div style="margin-left: 200px">
            <a href="{{route('users.list')}}" class="btn btn-primary">Back</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>

@endsection

