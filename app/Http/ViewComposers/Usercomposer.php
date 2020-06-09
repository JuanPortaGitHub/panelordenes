<?php

namespace App\Http\ViewComposers;
use App\User;
use Illuminate\View\View;

class Usercomposer
{
    public function compose (View $view)
    {
        $users=User::all();


    $view->with(['users' => $users]);
    }
}
