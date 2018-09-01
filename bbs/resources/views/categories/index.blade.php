@extends('layout')

@section('content')
    <h4>カテゴリー画面</h4>
    <!-- <p>{{ $category[0]->title }}</p> -->
    <!-- ブロック要素にするためにpタグで囲んでいます。 -->
    @foreach ($category as $categories)
        <p><a href="/thread/{{ $categories->id }}">{{ $categories->title }}</a></p>
    @endforeach

    <!-- @if(strpos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))
        <br><button type="button" onclick="history.back()">前へ戻る</button>
    @endif -->

    <br><button type="button" onclick="location.href='/'">トップへ戻る</button>
@endsection