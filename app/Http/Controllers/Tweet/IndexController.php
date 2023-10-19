<?php

namespace App\Http\Controllers\Tweet;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        return 'Single Action!';
    }
}
