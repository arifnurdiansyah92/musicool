<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAndevMusicoolBanners extends Migration
{
    public function up()
    {
        Schema::dropIfExists('andev_musicool_banners');
    }
    
    public function down()
    {
        Schema::create('andev_musicool_banners', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('path', 191);
            $table->boolean('is_main');
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
