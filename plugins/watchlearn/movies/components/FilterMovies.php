<?php

namespace Watchlearn\Movies\Components;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Watchlearn\Movies\Models\Genre;
use Watchlearn\Movies\Models\Movie;

class FilterMovies extends ComponentBase{

    public $movies;
    public $genres;
    public $years;

    /**
     * @inheritDoc
     */
    public function componentDetails()
    {
        return [
            'name'          =>  'Filter Movies',
            'description'   =>  'Filter Movies',
        ];
    }

    public function onRun()
    {
        $this->movies=$this->filterMovies();
        $this->genres = Genre::all();
        $this->years = $this->filterYears();
    }

    public function filterYears() {
        $query = Movie::all();
        $years = [];

        foreach($query as $movie){
            $years[] = $movie->year;
        }

        $years = array_unique($years);
        return $years;
    }
    protected function filterMovies(){
        $year = Input::get('year');
        $genre = Input::get('genre');
        $query = Movie::all();

        if($year){
            $query = Movie::where('year', '=', $year)->get();
        }

        if($genre){
            $query = Movie::whereHas('genres', function($filter) use ($genre){
                $filter->where('slug', '=', $genre);
            })->get();
        }

        if($genre && $year){
            $query = Movie::whereHas('genres', function($filter) use ($genre){
                $filter->where('slug', '=', $genre);
            })->where('year', '=', $year)->get();
        }

        return $query;
    }
}
