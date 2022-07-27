@extends('layouts.templateMypage')

@section('title', 'talks')

@section('main')
    <main>
        <section id=main-content>
            {{-- ここから↓投稿内容フォーマット↓ --}}
            {{-- 投稿内容　１つ目 --}}
                <div class="content-area">
                    <a href="">
                        {{-- @foreach($lists as $list) --}}
                        {{-- @can('view', $reference) --}}
                        <div class="title-nameBox">
                            <h3 class="title">ここにタイトルが入ります。</h3>
                            <div class="name-area">
                                <p>猫の助け</p>
                                 <p>2022/07/20</p>
                            </div>
                        </div>

                        <div class="tag-area">
                            <h5>タグ</h5>
                            <div class="tag-image">
                                <div class="tag-imageSize">
                                    <img src="{{ asset('image/タグ.png') }}" alt="">
                                </div>
                                <div class="tag-font">
                                    <p>タグ1</p>
                                </div>

                                <div class="tag-imageSize">
                                    <img src="{{ asset('image/タグ.png') }}" alt="">
                                </div>
                                <div class="tag-font">
                                    <p>タグ2</p>
                                </div>

                                <div class="tag-imageSize">
                                    <img src="{{ asset('image/タグ.png') }}" alt="">
                                </div>
                                <div class="tag-font">
                                    <p>タグ3</p>
                                </div>
                            </div>
                        </div>
                        {{-- @endcan --}}
                        {{-- @endforeach --}}
                    </a>
                </div>
                {{-- ↑ここまで↑ --}}



        </section>
    </main>
@endsection
