<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    /**
     * PostsController constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    /**
     *Выводит записи блога на главной с пагинацией
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index', compact('posts'));
    }

    /**
     * Выводит отдельный пост на странице
     *
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Создание поста
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Валидирует данные из формы отправки нового поста, сохраняет пост в
     * базу, и возвращает на главную страницу.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $this->validate(request(), [
            'title' => 'required|min:2',
            'body' => 'required|min:2'
        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        return redirect('/');
    }
}
