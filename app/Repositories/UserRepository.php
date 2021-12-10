<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\ipl\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function __construct(User $user)
    {
        parent::__construct($user);
    }
    public function edit(\Illuminate\Http\Request $request, $id)
    {
        $data = $request->only("name", "email", "role_id");
        User::query()->findOrFail($id);
        return User::query()->where("id", "=", $id)->update($data);
    }

}
