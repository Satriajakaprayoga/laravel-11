<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $namaUser = "aisya";
        $users = $this->userService->getUserList($namaUser, 10);
        return $users;
    }

    public function dataUser()
    {
        $dataUser = $this->userService->getFormattedUserData(3);
        return $dataUser;
    }
}
