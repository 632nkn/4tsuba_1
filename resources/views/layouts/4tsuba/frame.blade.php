<html>
<!-- head読み込み -->
@include('layouts.4tsuba.parts.head')

<body>
    <!-- header読み込み -->
    @include('layouts.4tsuba.parts.header')

    <!-- コンテンツ -->
    <div class="container-fluid">
        <div class="row">
            <!-- 左サイドバー -->
            <div class="col-sm-3">
                <!-- ★サイドバー固定 ただしスマホ表示は固定しない-->
                <div class="sticky-top">
                    <!-- スレッド作成ボタン -->
                    <div class="row">
                        <a href="{{ url('/threads/create') }}" class="btn btn-primary mt-1 btn-lg btn-block">
                            <i class="fas fa-plus"></i>
                            <i class="fas fa-clipboard"></i>
                            <span class="d-sm-none d-xl-inline">&nbsp;&nbsp;スレッドを作成する</span>
                            <span class="d-none d-lg-inline d-xl-none">&nbsp;&nbsp;スレッド作成</span>
                            <span class="d-none d-sm-inline d-lg-none"></span>
                        </a>
                    </div>
                    <!-- スレッド作成ボタン終了 -->
                    <!-- 各種メニュー -->
                    <button type="button" onclick="location.href='{{ url('/threads') }}'" class="btn btn-light mt-1 btn-lg d-sm-block">
                        <i class="fas fa-home"></i>
                        <span class="d-none d-lg-inline">&nbsp;&nbsp;ホーム</span>
                    </button>
                    <button type="button" class="btn btn-light mt-1 btn-lg d-sm-block">
                        <i class="fas fa-bell"></i>
                        <span class="d-none d-lg-inline">&nbsp;&nbsp;&nbsp;通知</span>
                    </button>
                    <button type="button" class="btn btn-light mt-1 btn-lg d-sm-block">
                        <i class="fas fa-cogs"></i>
                        <span class="d-none d-lg-inline">&nbsp;&nbsp;設定</span>
                    </button>
                    <button type="button" class="btn btn-light mt-1 btn-lg d-sm-block">
                        <i class="fas fa-door-open"></i>
                        <span class="d-none d-lg-inline">&nbsp;&nbsp;ログアウト</span>
                    </button>
                    <!-- 各種メニュー終了 -->
                </div>
            </div>
            <!-- 左サイドバー終了 -->
            <!-- 右コンテンツ -->
            <div class="col">
                @yield('content')
            </div>
            <!-- 右コンテンツ終了 -->
        </div>
    </div>
    <!-- コンテンツ終了 -->
</body>

</html>