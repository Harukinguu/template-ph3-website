<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    // private $posts = [
    //     'Title A',
    //     'Title B',
    //     'Title C',
    // ];

    public function index()
    {
        $posts = Post::latest()->get();

        return view('post.post')
            ->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        // Implicit Bindingとは、ルートのモデルバインディングのことです。
        // これを使うと、コントローラーのメソッドの引数にモデルを指定するだけで、
        // モデルのインスタンスを取得することができます。
        // この機能を使うと、コントローラーのメソッド内で、
        // モデルの取得処理を書く必要がなくなります。
        // また、モデルが見つからなかった場合は、
        // 自動的に404エラーが返されるようになります。
        // これにより、コントローラーのメソッド内で、
        // モデルが見つからなかった場合の処理を書く必要がなくなります。
        // この機能を使うには、ルートの定義で、
        // モデルのクラス名を指定する必要があります。
        // 今回の場合は、ルートの定義で、
        // {post}というパラメーターを指定しています。
        // このパラメーターには、Postモデルのインスタンスが渡されます。
        // そのため、コントローラーのメソッドの引数に、
        // Postクラスのインスタンスを指定することで、
        // モデルのインスタンスを取得することができます。   

        // $post = Post::findOrFail($id);

        return view('post.posts.show')
            ->with(['post' => $post]);
    }

    public function create()
    {
        return view('post.posts.create');
    }

    //storeメソッドにデータが渡る前に 
    //PostRequest クラスに書いたバリデーションを実行してくれる仕組み
    public function store(PostRequest $request)
    {

        $post = new Post();
        $post->title = $request->title; // 追加
        $post->body = $request->body; // 追加
        $post->save(); // 追加

        return redirect()
            ->route('post.index');
    }

    public function edit(Post $post)
    {
        return view('post.posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request , Post $post) 
    {
        $post->title = $request->title; // 追加
        $post->body = $request->body; // 追加
        $post->save(); // 追加

        return redirect()
            ->route('post.show' , $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()
            ->route('post.index');
    }
}
