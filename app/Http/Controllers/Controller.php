<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// 1. $query = User::limit(5);
// 2. $items = $query->all();
// 3. $items->lastKey();
// 4. $nextPage = $query->afterKeys($items->lastKey())->limit(5)->all();
// 5. $nextPage = $query->afterKeys($nextPage->lastKey())->limit(5)->all();
// 6. $query = User::where('time', "94861")->get();