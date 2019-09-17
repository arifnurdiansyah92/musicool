<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndevMusicoolJaringanKami extends Migration
{
    public function up()
    {
        Schema::table('andev_musicool_jaringan_kami', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('andev_musicool_jaringan_kami', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
