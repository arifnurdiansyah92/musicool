<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndevMusicoolJaringanKami2 extends Migration
{
    public function up()
    {
        Schema::table('andev_musicool_jaringan_kami', function($table)
        {
            $table->smallInteger('is_agen')->default(0);
            $table->smallInteger('is_bengkel')->default(0);
            $table->smallInteger('is_teknisi')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('andev_musicool_jaringan_kami', function($table)
        {
            $table->dropColumn('is_agen');
            $table->dropColumn('is_bengkel');
            $table->dropColumn('is_teknisi');
        });
    }
}
