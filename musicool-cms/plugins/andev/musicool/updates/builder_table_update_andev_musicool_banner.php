<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndevMusicoolBanner extends Migration
{
    public function up()
    {
        Schema::table('andev_musicool_banner', function($table)
        {
            $table->dropColumn('slogan');
            $table->dropColumn('status');
        });
    }
    
    public function down()
    {
        Schema::table('andev_musicool_banner', function($table)
        {
            $table->text('slogan')->nullable()->default('NULL');
            $table->smallInteger('status')->default(0);
        });
    }
}
