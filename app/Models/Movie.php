<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

    protected $table = 'movies';

    protected $fillable = [
        'id',
        'planned',
        'viewed',
        'poster_path',
        'adult',
        'overview',
        'release_date',
        'genre_ids',
        'external_id',
        'original_title',
        'original_language',
        'title',
        'backdrop_path',
        'popularity',
        'vote_count',
        'video',
        'vote_average',
    ];

    public function setGenreIdsAttribute($value) {
        $this->attributes['genre_ids'] = json_encode($value);
    }

    public function getGenreIdsAttribute() {
        return json_decode($this->attributes['genre_ids']);
    }
}
