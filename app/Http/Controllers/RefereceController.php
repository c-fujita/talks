<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefereceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //投稿の表示
    // public function index(Request $request)
    // {
    //     $search = $request->input('search');

    //     $query = Post::query();

    //     if (!empty($search)) {
    //         $query->where('contents', 'like', '%'.$search.'%');
    //     }

    //     $list = $query->orderBy('updated_at', 'desc')->paginate(5);

    //     return view('posts.index', ['list'=>$list]);
    // }


    //新規投稿作成画面へ移動
    public function createForm()
    {
        return view('createForm');
    }

    //新規投稿作成後、データを渡してホーム画面へ移動
    public function create(Request $request)
    {
        $request->validate([
            'userName' => 'required|max:100',
            'newPost' => 'required|max:100',
        ]);

        $user_name = $request->input('userName');
        $contents = $request->input('newPost');

        DB::table('posts')->insert([
            'user_name' => $user_name,
            'contents' => $contents
        ]);


        return redirect('/index');
    }

    //投稿編集画面へ移動
    public function editForm($id)
    {
        $post = DB::table('posts')
        ->where('id', $id)
        ->first();
        return view('posts.editForm', ['post' => $post]);
    }

    //投稿編集後、ホーム画面へ
    public function edit(Request $request)
    {
        $request->validate([
            'upUserName' => 'required|max:100',
            'upPost' => 'required|max:100',
        ]);

        $id = $request->input('id');
        $up_name = $request->input('upUserName');
        $up_post = $request->input('upPost');

        DB::table('posts')
        ->where('id', $id)
        ->update(['user_name' => $up_name, 'contents' => $up_post]);

        return redirect('/index');
    }

    //投稿削除
    public function delete($id)
    {
        DB::table('posts')
        ->where('id', $id)
        ->delete();

        return redirect('/index');
    }
}
