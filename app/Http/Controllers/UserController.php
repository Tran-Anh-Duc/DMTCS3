<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
//    protected $userRepository;
//    public function __construct(UserRepository $userRepository)
//    {
//        $this->userRepository = $userRepository;
//    }

    public function index()
    {
        $users = User::all();
//        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }


}
