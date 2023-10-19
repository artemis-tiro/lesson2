<?php

namespace App\Http\Controllers\Sample;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
    public function show()
    {
        return 'Hellow';
    }

    public function showId($id)
    {
        return "Hello {$id}";
    }
}
