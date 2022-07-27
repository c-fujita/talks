
@yield('tamplate')
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
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/da0ee4ce8c.js" crossorigin="anonymous"></script>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <title>talks @yield('title')</title>
</head>

<body>
    <div id="wrap">
        <header>
            <div class="logo-imgSize">
                <img src="{{ asset('image/WebCreate-logo.png') }}" alt="">
            </div>
            <div id="header-wrap">
                <div class="header-searchArea">
                    <a href={{ route('index') }}>
                        <h1>talks</h1>
                    </a>
                    <div class="input-group col-md-12 search-box">
                        {{-- 全体あいまい検索 --}}
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
            </div>

            <div class="menu-imgSize">
                <img src="{{ asset('image/menu-logo.png') }}" alt="">

                <nav class="g-navi">
                    <ul>
                        <li><a href="">新規投稿</a></li>
                        <li><a href="">うぇぶくり</a></li>
                        <li><a href="">ホーム画面</a></li>
                        <li><a href="">お問いわせ</a></li>
                        <li><a href="">ログアウト</a></li>
                        <div class="animation start-home"></div>
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
                            <p class="search-font">コース<br>検索</p>
                        </div>
                    </div>

                    <div class="image-size">
                        <img src="{{ asset('image/猫ぐーたら.png') }}" alt="">
                        <div class="image-size2">
                            <img src="{{ asset('image/吹き出し.png') }}" alt="">
                            <p class="search-font">レッスン<br>検索</p>
                        </div>
                    </div>

                    <div class="image-size">
                        <img src="{{ asset('image/猫ぐーたら.png') }}" alt="">
                        <div class="image-size2">
                            <img src="{{ asset('image/吹き出し.png') }}" alt="">
                            <p class="search-font">タグ検索</p>
                        </div>
                    </div>
                </div>

                <div id="search-area">

                    <div class="input-group col-md-12 search-box">
                        {{-- コース検索 --}}
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="courseSearch"
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
                        {{-- レッスン検索 --}}
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="lessonSearch"
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
                        {{-- タグ検索 --}}
                        <form action="" method="post">
                            <div class="search-box">
                                <input type="text" class="form-control input-lg" name="tagSearch"
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
            @yield('main')


            <aside>
                <section id="side-wrap">
                    <div id="side-menu">
                        <ul class="sub_icon fadeIn_up">
                            <li class="emerge_cap" data-tippy-content="">
                                <a href="/create-form"class="push_sub_icon"><img
                                        src="{{ asset('image/ペンとノート.png') }}" alt=""><br>新規投稿</a>
                            </li>
                            <li class="emerge_cap" data-tippy-content="">
                                <a href={{ route('myPage') }} class="push_sub_icon"><img
                                        src="{{ asset('image/ホーム画面アイコン.png') }}" alt="">
                                    <br>ホーム画面
                                </a>
                            </li>
                        </ul>
                    </div>

                    <section id="ranking" class="fadeIn_up">
                        <!-- ランキング-->

                        <ol class="ranking_list turn">
                            <li><a href="#">
                                    <div class="shine">
                                        <p>１番なんだよね〜そうテストテスち</p>
                                    </div>
                                </a>
                            </li>

                            <li><a href="#">
                                    <div class="shine">
                                        <p>２番人気だよ〜</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">
                                    <div class="shine">
                                        <p>３番人気ですけど何か？不満でもあるの？</p>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">
                                    <p>４番人気の現実に耐えられない今日この頃</p>
                                </a>
                            </li>
                            <li><a href="#">
                                    <p>５番人気なんて生意気なことですね！！</p>
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
                    <a href="">ホーム画面</a>
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
