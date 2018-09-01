@extends('layout')

@section('content')
    @foreach ($thread as $threads)
        <p>スレッド投稿者：{{ $threads->name }} (作成日：{{ $threads->created_at }})</p>
        <p>スレッド本文：{{ $threads->content }}</p>
    @endforeach

    <a href="/thread/{{ $threads->id }}/bbs/create/">スレッドに書き込む</a>
    <!-- {{-- */$bbs_count = 1 /* --}} -->
    @foreach ($bbs as $bbsses)
        <!-- {{ $bbs_count }} -->
        <p>投稿者：{{ $bbsses->name }} ({{ $bbsses->created_at }})</p>
        <p>書き込み本文：{{ $bbsses->content }}</p>
        <!-- {{-- */$bbs_count++/* --}}  -->
    @endforeach

    {{ $bbs->render() }}

    <br><button type="button" onclick="location.href='/thread/{{$threads->category_id}}'">{{ $threads->category->title }}のスレッド一覧へ戻る</button>
@endsection

@section('banner')
    <a href="/">トップ</a>
    <span>→ <a href="/category/{{ $threads->category->category_id }}">{{ $threads->category->title }}</a></span>
    <span>→ <a href="/bbs/{{ $threads->id }}">{{ $threads->content }}</a></span>
@endsection