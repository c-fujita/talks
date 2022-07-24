<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Customer;
use app\Reference;
use app\Reply;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    // 返信作成　　**referencesテーブルのid取得方法確認,返信作成後の画面確認**
    public function createReply(Request $request)
    {
        $request->validate([
            'userName' => 'required|max:1000',
            'newTitle' => 'required|max:100',
            'textBody' => 'required|max:1000',
        ]);

        $user_name = $request->input('userName');
        $title = $request->input('newTitle');
        $body = $request->input('textBody');

        $customer_id = Auth::id();

        DB::table('replies')->insert([
            'user_name' => $user_name,
            'customer_id' => $customer_id,
            'title' => $title,
            'body' => $body,
        ]);

        return redirect('index');
    }

    //返信編集  　**返信作成後の画面は投稿詳細画面かどうか確認**
    public function editReply(Request $request)
    {
        $request->validate([
            'editUserName' => 'required|max:1000',
            'editTitle' => 'required|max:100',
            'editBody' => 'required|max:1000',
        ]);

        $id = $request->input('id');
        $edit_name = $request->input('editUserName');
        $edit_title = $request->input('editTitle');
        $edit_body = $request->input('editBody');

        DB::table('references')
        ->where('id', $id)
        ->edit(['user_name' => $edit_name, 'title' => $edit_title, 'body' => $edit_body, ]);

        return redirect('index');
    }

    //返信削除　　**削除後の画面確認**
    public function delete($id)
    {
        DB::table('replies')
        ->where('id', $id)
        ->delete();

        return redirect('index');
    }
}
