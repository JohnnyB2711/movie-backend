<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {

    public function getViewed() {
        echo 1;
    }

    public function addViewed(Request $request): Movie {
        $movie = new Movie;
        $movie->fill($request->all());
        $movie->external_id = $request->post('id');
        $movie->viewed = 1;
        $movie->planned = 0;

        $movie->updateOrCreate();

        return $movie;
    }

    public function addPlanned(Request $request): Movie {
        $movie = new Movie;
        $movie->fill($request->all());
        $movie->external_id = $request->post('id');
        $movie->viewed = 0;
        $movie->planned = 1;

        $movie->updateOrCreate();

        return $movie;
    }
}
