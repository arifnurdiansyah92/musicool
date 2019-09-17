<?php namespace Andev\Musicool\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndevMusicoolCategoryGallery extends Migration
{
    public function up()
    {
        Schema::create('andev_musicool_category_gallery', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andev_musicool_category_gallery');
    }
}
