@extends('layouts.template')

@section('title', 'talks 新規投稿画面')


@section('main')
    <main>
        <section id=main-content>


            {{-- ここから↓投稿内容フォーマット↓ --}}
            {{-- 投稿内容　１つ目 --}}
            <div id="create-from" class="content-area">
                <div class='container'>
                    <h2 class='page-header'>新しく投稿をする</h2>
                    <form id="form" class="topBefore">

                        <input id="name" type="text" placeholder="名前">
                        <input id="title" type="text" placeholder="タイトル">
                        <textarea id="message" type="text" placeholder="投稿内容"></textarea>
                        <input id="tag1" type="text" placeholder="タグ１">
                        <input id="tag2" type="text" placeholder="タグ１">
                        <input id="tag3" type="text" placeholder="タグ１">

                        <input id="submit" type="submit" value="確認" data-target="Modal">

                        <div id="modal-area" data-target="Modal">
                            <div class="modal-inner">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">入力内容の確認</h5>
                                </div>

                                <div class="post-area">
                                    <div>
                                        <p class="text-muted">タイトル</p>
                                        <p class="px-2" id="modalTitle"></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
        </section>
    </main>
@endsection
