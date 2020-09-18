<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMovies5 extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->binary('published')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_', function($table)
        {
            $table->dropColumn('published');
        });
    }
}
