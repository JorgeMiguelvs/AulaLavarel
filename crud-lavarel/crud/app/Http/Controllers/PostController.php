<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Expr\FuncCall;

class PostController extends Controller
{
    //inserindo dados no bd
    public function create (Request $request )
    {
        $new_post= [
            'title' => 'Jorge',
            'content'=>'Conteúdo',
            'author'=>'Jorge'

        ];

        $post= new Post($new_post);
        //se n utilizar o save() n funciona
        $post ->save();

        dd($post);
    }
// le tudo porem n precisa declarar o new post()
    public function read (Request $request)
    {
        $post = new Post();
        $post = $post->all();

        dd($post);
    }
//metodo de read sem o new post()
    public function all (Request $request)
    {
        $posts = Post::all();
        return $posts;
    }

    public function update (Request $request)
    {   //find - metodo de encotrar pelo id(1)
        $post = Post::Find(1);
        $post ->title = 'Meu titulo atualizado';
        //para salvar sempre usar o metodo save()
        $post->save();
        return $post; 
    }

    // public function update (Request $request)
    // {   //metodo update retorna qtd de linhas afetadas, atualiza tudo q o id for > que 0, no caso tudo
    //     $post = Post::where('id','>','0')->update(
    //         [
    //             'author' => 'desconhecido'
    //         ]
    //         );
    //     return $post; 
    // }

    // deleta todos q o id for > que 0, no caso tudo 
    // public function delete (Request $request)
    // {
    //     $post = Post::where('id','>','0')->delete();
    //     return $post;
    // }

    public function delete(Request $request)
    {
        $post = Post::Find(5);

        if($post)
        {
            $post->delete();
            return 'Deletado com sucesso';
        }
        else
        {
            return 'Não existe usuário com esse Id';
        }
    }

}
