<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * @var Post
     */
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = DB::table('posts')->paginate(7);

        // iterable test
        /*
        foreach ($posts as $post) {
            dump($post);
        }
        */

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function mutate()
    {
        $posts = $this->post->latest()->paginate(7);

        $posts->items()[0]->title = 'Mutate?';

        return $posts;
    }
}
