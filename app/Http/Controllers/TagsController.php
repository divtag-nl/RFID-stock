<?php

namespace App\Http\Controllers;

use App\Http\Requests\RfidRequest;
use App\Transformers\TagTransformer;

class TagsController extends Controller
{
    public function tagRequest(RfidRequest $request)
    {
        return fractal($request, new TagTransformer())->respond();
    }
}
