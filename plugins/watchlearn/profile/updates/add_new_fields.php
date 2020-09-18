<?php
namespace Watchlearn\Profile\Updates;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{

    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('facebook')->nullable();
            $table->text('bio')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn(['facebook','bio']);
        });
    }

}
