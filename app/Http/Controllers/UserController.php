<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $roleRepository;
    protected $userRepository;
    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }

    public function showFormEdit($id)
    {
        $roles = $this->roleRepository->getAll();
        $user = $this->userRepository->getById($id);
        return view("backend.user.edit", compact("user", "roles"));
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "role_id" => "required|max:1",
        ]);
        $this->userRepository->edit($request, $id);
        toastr()->success("Edit Success");
        return redirect()->route("users.list");
    }

    public function delete($id)
    {
        $this->userRepository->delete($id);
        toastr()->success("Delete Success");
        return redirect()->route("users.list");
    }


}
