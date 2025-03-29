<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAKAHIRO KOBATA'S ポートフォリオ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">　TAKAHIRO KOBATA'S ポートフォリオ</a>
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
     <!-- Page content-->
     <div class="container">
        <div class="text-center mt-5">
            <h1>経歴</h1>
            <p class="lead">機械系技術者として機械設計6年・品質管理12年・生産技術6年に従事しました。</p>
            <p class="lead">その後ITエンジニアにキャリアチェンジし現在5年目です。</p>
            <p class="lead">直近はPHP・Laravelでのシステム開発がメイン業務で、作業員管理・工事管理のシステムや</p>
            <p class="lead">総合商社の営業が使用する見積書作成システムなど業務システムを取り扱っています。</p>
            <p class="lead">また、コーポレートサイトの更新などの運用・保守業務も行なっています。</p>
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="https://www.expo2025.or.jp/wp/wp-content/themes/expo2025orjp_2022/assets/img/expo-map-index/main-facilities/grandring/guinness_img01.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">I'm Web Engineer!</h1>
                    <p>2025年の今年は大阪・関西万博が開催されますので全国・全世界から多くの人々が大阪に訪れるでしょう。良い交流が出来ることを願っています。</p>
                    <a class="btn btn-primary" href="https://www.expo2025.or.jp/">大阪・関西万博情報</a>
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
</body>

</html>