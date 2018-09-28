<?php

namespace App\Http\Controllers;

use App\Events\TagScanned;
use App\Http\Requests\RfidRequest;
use App\Transformers\TagTransformer;
use Illuminate\Http\JsonResponse;

class TagsController extends Controller
{
    /**
     * @param RfidRequest $request
     * @return JsonResponse
     */
    public function tagRequest(RfidRequest $request)
    {
        event(new TagScanned($request->get('tags')));
        return fractal($request, new TagTransformer())->respond();
    }
}
