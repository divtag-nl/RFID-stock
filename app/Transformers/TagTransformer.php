<?php

namespace App\Transformers;

use Illuminate\Http\Request;
use League\Fractal\TransformerAbstract;

class TagTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Request $request)
    {
        return[
            'message' => 'Scan gewoon !',
            'tags' => count($request->tags),
        ];
    }
}
