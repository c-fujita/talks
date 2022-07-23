<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Customer;
use app\Reference;
use Illuminate\Support\Facades\Auth;

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
    //     $courseSearch = $request->input('courseSearch');
    //     $lessonSearch = $request->input('lessonSearch');
    //     $tagSearch = $request->input('tagSearch');

    //     $query = Reference::query();

    //     if (!empty($search)) {

    //         // 全角スペースを半角に変換
    //         $spaceConversion = mb_convert_kana($search, 's');

    //         // 単語を半角スペースで区切り、配列にする
    //         $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

    //         foreach ($wordArraySearched as $search) {
    //             $query->where('user_name', 'like', '%'.$search.'%')
    //                 ->orWhere('title', 'like', '%'.$search.'%')
    //                 ->orWhere('body', 'like', '%'.$search.'%')
    //                 ->orWhere('tag', 'like', '%'.$search.'%');
    //         }
    //     } elseif (!empty($courseSearch)) {

    //         // 全角スペースを半角に変換
    //         $spaceConversion = mb_convert_kana($courseSearch, 's');

    //         // 単語を半角スペースで区切り、配列にする
    //         $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

    //         foreach ($wordArraySearched as $courseSearch) {
    //             $query->where('body', 'like', '%'.$courseSearch.'%');
    //         }
    //     } elseif (!empty($lessonSearch)) {

    //         // 全角スペースを半角に変換
    //         $spaceConversion = mb_convert_kana($lessonSearch, 's');

    //         // 単語を半角スペースで区切り、配列にする
    //         $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

    //         foreach ($wordArraySearched as $lessonSearch) {
    //             $query->where('body', 'like', '%'.$lessonSearch.'%');
    //         }
    //     } elseif (!empty($tagSearch)) {

    //         // 全角スペースを半角に変換
    //         $spaceConversion = mb_convert_kana($tagSearch, 's');

    //         // 単語を半角スペースで区切り、配列にする）
    //         $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

    //         foreach ($wordArraySearched as $tagSearch) {
    //             $query->where('tag', 'like', '%'.$tagSearch.'%');
    //         }
    //     }

    //     $lists = $query->orderBy('updated_at', 'desc')->paginate(20);

    //     return view('index', ['lists'=>$lists]);
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
