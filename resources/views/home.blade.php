<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAKAHIRO KOBATA'S ポートフォリオ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .hamburger {
            display: none;
            cursor: pointer;
            padding: 10px;
        }
        
        .hamburger span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
        
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .navbar-collapse {
                display: none;
            }
            
            .navbar-collapse.active {
                display: block;
            }

            .navbar-nav {
                padding: 20px 0;
            }

            .nav-item {
                margin: 10px 0;
            }
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3" id="js-nav">
        <a class="navbar-brand" href="{{ route('home') }}">　TAKAHIRO KOBATA'S ポートフォリオ</a>
        <div class="hamburger" id="js-hamburger" aria-label="メニュー">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('careear') }}">経歴</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('work') }}">小畑制作室</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">プロフィール</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('skillset') }}">スキルセット</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('careearplan') }}">キャリアプラン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </nav>    
</header>
<body>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.expo2025.or.jp/wp/wp-content/themes/expo2025orjp_2022/assets/img/expo-map-index/map-base-center.png" alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">I'm Web Engineer!</h1>
                <p>Webエンジニアとして5年目になります。関西で仕事してます。2025年の今年は大阪・関西万博が開催されますので全国・全世界から多くの人々が大阪に訪れるでしょう。良い交流が出来ることを願っています。</p>
                <a class="btn btn-primary" href="https://www.expo2025.or.jp/">大阪・関西万博情報</a>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0">5つのカードから私を知ってください。</p></div>
        </div>
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">小畑制作室</h2>
                        <p class="card-text">小畑制作室ではHP制作・ウェブサイト構築の事業を取り扱っています。運用・保守についても相談可能です。</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('work') }}">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">経歴</h2>
                        <p class="card-text">機械系技術者として25年。その後Webエンジニアにキャリアチェンジしました。Webエンジニアを始めた当初は思考停止するときもしばしば。奮闘中です。</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('careear') }}">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">プロフィール</h2>
                        <p class="card-text">兵庫県で生まれ育ちました。音楽が趣味でカラオケ好き・DJ活動もしていました。最近、自転車を購入し出かけるときの脚となっています。運動不足解消に一役買っています。</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('profile') }}">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">スキルセット</h2>
                        <p class="card-text">言語：PHP　html　css　bootstrap　Javascript　フレームワーク：Laravel　データベース：MySQL　開発環境：Docker　WSL2</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('skillset') }}">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">キャリアプラン</h2>
                        <p class="card-text">今後、Python・Javaやロボット関連について取り組みを進めていく計画にしています。ゆくゆくはロボットプログラミング教室を開校したいです。</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('careearplan') }}">More Info</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">お問い合わせ</h2>
                        <p class="card-text">私にご興味がございましたら、お気軽にご連絡ください。お待ちしております。</p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="{{ route('contact') }}">More Info</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 小畑制作室 2025</p></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script>
        const hamburger = document.querySelector('#js-hamburger');
        const nav = document.querySelector('.navbar-collapse');
        
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');
            
            // アクセシビリティのためのaria-expanded属性の更新
            const isExpanded = nav.classList.contains('active');
            hamburger.setAttribute('aria-expanded', isExpanded);
        });
    </script>
</body>

</html>