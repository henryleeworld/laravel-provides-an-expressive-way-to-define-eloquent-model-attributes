<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller 
{
    public function show() 
    {
        $userId = 1;
        echo '使用者編號：' . $userId . '，郵件驗證時間：' . User::findOrFail($userId)->email_verified_at->format('Y-m-d H:i:s.u T') . PHP_EOL;
    }
}
