<?php


namespace App\Http\Controllers;

use App\Models\User;

class LaravelSqlFormatterController extends Controller
{
    public function test()
    {
        User::join('test_table', 't.id', 'tt.test_id')
            ->emailAdmin()
            ->_dd();
    }
}