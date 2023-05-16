<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\DogsRequest;
use App\Models\Dog;

class DogsController extends Controller
{
    public function __invoke(DogsRequest $request)
    {
        $q = $request->validated('q');

        if ($q) {
            $results = Dog::where('breed', 'like', '%' . $q . '%')->get();
        } else {
            $results = collect();
        }

        return view('dogs', [
            'q' => $q,
            'results' => $results,
        ]);
    }
}
