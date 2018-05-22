<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::find(2);
        $comment1 = new Comment();
        $comment1->text = "Estupenda página para visualizar y realizar tus ofertas, recomendable 100%!!";
        $comment1->User()->associate($user1);
        $comment1->save();

        $user2 = User::find(3);
        $comment2 = new Comment();
        $comment2->text = "Muy contento con todo el equipo!";
        $comment2->User()->associate($user2);
        $comment2->save();

        $comment3 = new Comment();
        $comment3->text = "Otro comentario :P";
        $comment3->User()->associate($user1);
        $comment3->save();
        
    }
}
