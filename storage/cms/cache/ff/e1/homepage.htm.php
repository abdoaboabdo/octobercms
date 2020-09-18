<?php 
use Watchlearn\Movies\Models\Movie;class Cms5f3989218524a012696272_5eaee056baf164b1106d41b9bbf04742Class extends Cms\Classes\PageCode
{

    
public function Onstart(){
        $this['movies']=Movie::take(4)->get();
    }
}
