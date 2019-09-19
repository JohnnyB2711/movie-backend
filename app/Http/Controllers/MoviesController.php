<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {

    public function getViewed() {
        return Movie::where('viewed', 1)->paginate(20);
    }

    public function getPlanned() {
        return Movie::where('planned', 1)->paginate(20);
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

    public function getViewedAndPlanned(): array {
        $result = [
            'planned' => [],
            'viewed' => [],
        ];
        $Movies = Movie::all();
        foreach ($Movies as $movie) {
            if ($movie->viewed == 1) {
                $result['viewed'][] = $movie->external_id;
            }
            if ($movie->planned == 1) {
                $result['planned'][] = $movie->external_id;
            }
        }

        return $result;
    }
}
