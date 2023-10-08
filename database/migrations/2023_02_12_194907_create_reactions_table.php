<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//se importa el modelo donde están las constantes  
use App\Models\Reaction;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();
            //traemos los valores que definimos como constates en el modelo reaction 
            $table->enum('value',[Reaction::LIKE,Reaction::DISLIKE]);
            //los usuario darán like o dislike, y están relacionado a esta tabla
            $table->unsignedBigInteger('user_id');
            // Se define como polimórficas
            $table->unsignedBigInteger('likeable_id');
            $table->string('likeable_type');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reactions');
    }
};
