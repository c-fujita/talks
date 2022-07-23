<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'talks') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da0ee4ce8c.js" crossorigin="anonymous"></script>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <title>talks</title>
</head>

<body>
    <div id="wrap">
        <header>
            <div class="logo-imgSize">
                <img src="{{ asset('image/WebCreate-logo.png') }}" alt="">
            </div>
            <div id="header-wrap">
                <div class="header-searchArea">
                    <h1>talks</h1>
                    <div class="input-group col-md-12 search-box">
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="search"
                                    placeholder="キーワード" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div id="header-list">
                    <ul>
                        <li><a href="">うぇぶくりへ</a></li>
                        <li><a href="">新規投稿</a></li>
                    </ul>
                </div> --}}
            </div>

            <div class="menu-imgSize">
                <img src="{{ asset('image/menu-logo.png') }}" alt="">

                <nav class="g-navi">
                    <ul>
                        <li><a href="">新規投稿</a></li>
                        <li><a href="">うぇぶくり</a></li>
                        <li><a href="">マイページ</a></li>
                        <li><a href="">お問いわせ</a></li>
                        <li><a href="">ログアウト</a></li>
                    </ul>
                </nav>
            </div>

        </header>

        <section id="search-wrap">
            <div class=search-imageBox>
                <div class="image-area">
                    <div class="image-size">
                        <img src="{{ asset('image/猫ぐーたら.png') }}" alt="">

                        <div class="image-size2">
                            <img src="{{ asset('image/吹き出し.png') }}" alt="">
                            <p class="search-font font-point1">コース<br>検索</p>
                        </div>
                    </div>

                    <div class="image-size">
                        <img src="{{ asset('image/猫ぐーたら.png') }}" alt="">
                        <div class="image-size2">
                            <img src="{{ asset('image/吹き出し.png') }}" alt="">
                            <p class="search-font font-point2">レッスン<br>検索</p>
                        </div>
                    </div>

                    <div class="image-size">
                        <img src="{{ asset('image/猫ぐーたら.png') }}" alt="">
                        <div class="image-size2">
                            <img src="{{ asset('image/吹き出し.png') }}" alt="">
                            <p class="search-font font-point3">タグ検索</p>
                        </div>
                    </div>
                </div>

                <div id="search-area">

                    <div class="input-group col-md-12 search-box">
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="search"
                                    placeholder="キーワード" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        検索
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="input-group col-md-12 search-box">
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="search"
                                    placeholder="キーワード" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        検索
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="input-group col-md-12 search-box">
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="search"
                                    placeholder="キーワード" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info btn-lg" type="submit">
                                        検索
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div id="main-wrap">
            <main>
                <section id=main-content>
                    {{-- ここから↓投稿内容フォーマット↓ --}}
                    {{-- 投稿内容　１つ目 --}}
                    <div class="content-area">
                        <a href="">
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
                        </a>
                    </div>
                    {{-- ↑ここまで↑ --}}
                    {{-- 以下コピペ --}}


                </section>
            </main>

            <aside>
                <section id="side-wrap">
                    <div id="side-menu">
                        <ul class="sub_icon fadeIn_up">
                            <li class="emerge_cap" data-tippy-content="">
                                <a href="#" class="push_sub_icon"><img src="{{ asset('image/ペンとノート.png') }}"
                                        alt=""><br>新規投稿</a>
                            </li>
                            <li class="emerge_cap" data-tippy-content="">
                                <a href="/index" class="push_sub_icon"><img src="{{ asset('image/ホーム画面アイコン.png') }}"
                                    alt="">
                                    <br>ホーム画面へ
                                </a>
                            </li>
                        </ul>
                    </div>

                    <section id="ranking" class="fadeIn_up">
                        <!-- ランキング-->
                        <h2>人気ランキング</h2>
                        <ol class="ranking_list turn">
                            <li><a href="#">
                                    <div class="shine">
                                        <p>１番人気タイトルなんだよね〜</p>
                                    </div>
                                </a></li>

                            <li><a href="#">
                                    <div class="shine">
                                        <p>２番人気</p>
                                    </div>
                                </a></li>
                            <li><a href="#">
                                    <div class="shine">
                                        <p>３番人気</p>
                                    </div>
                                </a></li>
                            <span class="fixed_cancel"></span>
                            <li><a href="#">
                                    <p>４番人気</p>
                                </a></li>
                            <li><a href="#">
                                    <p>５番人気</p>
                                </a>
                            </li>
                        </ol>
                    </section>
                </section>
            </aside>
        </div>

        <footer>
            <div id="footer-wrap">
                <li>
                    <a href="">メンタリング</a>
                </li>
                <li>
                    <a href="">ウィークリー</a>
                </li>
                <li>
                    <a href="">カリキュラム一覧</a>
                </li>
                <li>
                    <a href="">マイページ</a>
                </li>
                <li>
                    <a href="">お問い合わせ</a>
                </li>
                <li>
                    <a href="">運営会社</a>
                </li>
            </div>
            <small>Copyright © Web Create All Rights Reserved.​</small>
        </footer>
    </div>
</body>

</html>
