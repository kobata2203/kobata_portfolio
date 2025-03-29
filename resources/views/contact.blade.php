<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ - TAKAHIRO KOBATA'S ポートフォリオ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

<body>
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
                    <li class="nav-item">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('contact') }}">お問い合わせ</a>
                    </li>
                </ul>
            </div>
        </nav>    
    </header>

    <div class="container px-4 px-lg-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">お問い合わせ</h2>
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">お名前 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">メールアドレス <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">件名 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">メッセージ <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5">送信する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; 小畑制作室 2025</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const hamburger = document.querySelector('#js-hamburger');
        const nav = document.querySelector('.navbar-collapse');
        
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            nav.classList.toggle('active');
            
            const isExpanded = nav.classList.contains('active');
            hamburger.setAttribute('aria-expanded', isExpanded);
        });
    </script>
</body>

</html>