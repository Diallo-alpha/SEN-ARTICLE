<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->text('contenue');
            $table->string('nom_complet_auteur');
            $table->timestamp('date_heure_commentaire');  // Utilisation de timestamp pour la date et l'heure
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commentaires', function (Blueprint $table) {
            if (Schema::hasColumn('commentaires', 'article_id')) {
                // Suppression de la clé étrangère
                $table->dropForeign(['article_id']);
            }
        });

        Schema::dropIfExists('commentaires');
    }
};
