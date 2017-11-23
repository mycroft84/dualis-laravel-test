<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStore;
use App\Http\Requests\PostStore;
use App\Models\Car;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $term = $request->get('term');
        $orderDir = $this->getOrderDir($request->get('orderDir'));

        $posts = $this->searchPosts($term,$request->get('orderDir'),$request->get('order','title'));

        return view('Posts.index',[
            'posts'=>$posts,
            'term'=>$term,
            'orderDir'=>$orderDir
        ]);
    }

    protected function getOrderDir($dir)
    {
        if (!$dir) return 'asc';

        return ($dir == 'asc') ? 'desc' : 'asc';
    }

    protected function searchPosts($term,$orderDir,$order)
    {
        if (!$term) return Post::orderBy($order,$orderDir)->get();

        return Post::where('name','LIKE','%'.$term.'%')->orderBy($order,$orderDir)->get();
    }

    public function create()
    {
        return view('Posts.create');
    }

    public function update(Post $post)
    {
        return view('Posts.create',[
            'post'=>$post,
        ]);
    }

    public function store(PostStore $request,Post  $post = null)
    {
        if (!$post) {
            $post = new Post();
        }
        $post->title = $request->get('title');
        $post->lead = $request->get('lead');
        $post->text = $request->get('text');
        $post->publish_date = strtotime($request->get('publish_date'));
        $post->save();

        return redirect(route('postsIndex'));
    }

    public function delete(Post $post)
    {
        $post->delete();

        return ['error'=>false];
    }

    public function lists()
    {
        $posts = Post::where('publish_date','<=',time())->get();

        return view('Posts.lists',[
            'posts'=>$posts,
        ]);
    }

    public function details(Post $post)
    {
        $comments = $post->comments()->where('enabled','=',1)->get();

        return view('Posts.details',[
            'post'=>$post,
            'comments'=>$comments
        ]);
    }

    public function comment(CommentStore $request,Post $post)
    {
        $comment = new Comment();
        $comment->email = $request->get('email');
        $comment->text = $request->get('text');
        $comment->post_id = $post->getKey();
        $comment->save();

        return redirect(route('postsDetails',['post'=>$post->getKey()]));
    }

    public function commentList(Post $post)
    {
        $comments = $post->comments()->get();

        return view('Posts.commentList',[
            'post'=>$post,
            'comments'=>$comments
        ]);
    }

    public function commentEnabled(Comment $comment)
    {
        $comment->enabled = !$comment->enabled;
        $comment->save();

        return redirect(route('postsCommentList',['post'=>$comment->post_id]));
    }
}
