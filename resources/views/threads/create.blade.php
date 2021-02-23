<!-- 親テンプレート読み込み -->
@extends('layouts.4tsuba.frame')

@section('title', 'スレッド作成')

@section('content')
<div class="row">
    <div class="col-lg-7">
        <h2>スレッドを作成する</h2>
        <form action='{{ route('thread_store') }}' method='post' enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="スレッドタイトルを書く">
            </div>
            <div class="form-group">
                <textarea rows="10" cols="60" name="body" class="form-control" placeholder="本文を書く"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="d-none" id="thread_image" accept="image/jpeg, image/jpg, image/png">
                <label for="thread_image" class="btn btn-primary">画像を選択</label>
            </div>
            <button type="submit" class=" btn btn-primary btn-lg">スレッドを作成する</button>
        </form>
    </div>
    <div class="col-lg-5 col-xl-4">
        <div class="create_card bg-primary">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">スレッド作成のヒント</h4>
                    <div class="card-text">
                        <strong class="d-block">わかりやすいタイトル</strong>
                        <small>スレッド内容をイメージしやすいタイトルをつけましょう</small>
                        <strong class="d-block">スレッドに合った画像</strong>
                        <small>画像はスレッドのトップ画像として表示されます</small>
                        <strong class="d-block">具体的な本文</strong>
                        <small>具体的な本文を書くことで、多くの人がコメントしやすくなります</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-auto"></div>
</div>
@endsection