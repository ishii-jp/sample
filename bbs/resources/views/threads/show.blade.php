@extends('layout')

@section('content')
    <h4>スレッド一覧画面</h4>
    @if (isset($thread[0]))
        @foreach ($thread as $threads)
            <a href="/bbs/{{ $threads->id }}">{{ $threads->content }}</a><label> 投稿者：{{ $threads->name }} ({{ $threads->created_at }})</label><label><br>
        @endforeach

        <a href="/category/{{$threads->category_id}}/thread/create/">新規スレッドを作成する</a>

        <br><button type="button" onclick="location.href='/category/{{ $threads->category->category_id }}'">カテゴリーへ戻る</button>
    @else
        <a href="/category/{{ $empty_thread->id }}/thread/create/">新規スレッドを作成する</a> 
    @endif
@endsection

@section('banner')
    @if (isset($threads))
        <a href="/">トップ</a>
        <span>→ <a href="/category/{{ $threads->category->category_id }}">{{ $threads->category->title }}</a></span>
    @else
        <a href="/">トップ</a>
        <span>→ <a href="/category/{{ $empty_thread->category_id }}">{{ $empty_thread->title }}</a></span>
    @endif

@endsection