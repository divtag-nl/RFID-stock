<?php

namespace App\Http\Controllers;

use App\Events\TagScanned;
use App\Http\Requests\RfidRequest;
use App\Location;
use App\Product;
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
        ['a', 'b'];

        [
            'a' => ['location' => 'koelkast', 'product' => null],
            'b' => ['location' => null, 'product' => 'kaas'],
        ];

        $tags =  collect($request->get('tags'));
        $locations = Location::whereIn('tag', $tags)->get()->keyBy('tag');
        $produts = Product::whereIn('tag', $tags)->get()->keyBy('tag');

        $foobar = $tags->mapWithKeys(function ($tag) use ($locations, $produts) {
            return [
                $tag => [
                    'location' => $locations->get($tag),
                    'product' => $produts->get($tag),
                ]
            ];
        });

        event(new TagScanned($foobar));

        return fractal($request, new TagTransformer())->respond();
    }
}
