<?php namespace StudioDevs\Gwent\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateContractsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('studiodevs_gwent_contracts', function(Blueprint $table) {
            $table->id();
            $table->string('fraction');
            $table->integer('counter');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('studiodevs_gwent_contracts');
    }
};
