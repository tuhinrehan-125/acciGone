<?php

namespace App\Http\Controllers;

use Facade\Ignition\SolutionProviders\LazyLoadingViolationSolutionProvider;
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

// 1. Latitude 
// 2. Longitude 
// 3. Altitude
// 4. speed
// 5. accx
// 6. accy
// 7. accz
// 8. gyrox
// 9. gyroy
// 10. gyroz
// 11. roll
// 12. pitch
// 13. yaw
// 14. engine
// 15. ac
// 16. break
// 17. sonar1
// 18. sonar2
// 19. sonar3
// 20. sonar4
// 21. battery