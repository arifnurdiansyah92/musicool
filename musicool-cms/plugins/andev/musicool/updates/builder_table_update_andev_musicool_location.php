<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndevMusicoolLocation extends Migration
{
    public function up()
    {
        Schema::table('andev_musicool_location', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('andev_musicool_location', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
