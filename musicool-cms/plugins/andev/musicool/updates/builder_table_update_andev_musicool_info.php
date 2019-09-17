<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndevMusicoolInfo extends Migration
{
    public function up()
    {
        Schema::table('andev_musicool_info', function($table)
        {
            $table->text('tagline');
        });
    }
    
    public function down()
    {
        Schema::table('andev_musicool_info', function($table)
        {
            $table->dropColumn('tagline');
        });
    }
}
