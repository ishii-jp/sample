<h4>スレッド書込み画面</h4>

<div>
    {{ Form::open(['url' => "/thread/{$thread->id}/bbs", 'method' => 'post']) }}
        <label>投稿者名</label>
        <input type="text" name="name" placeholder="投稿者名">
        <label>書込み内容</label>
        <textarea cols="30" name="content" placeholder="書込み内容" rows="10"></textarea>
        <input type="submit" value="投稿">
    {{ Form::close() }}
</div>

<a href="/bbs/{{ $thread->id }}">{{ $thread->content }}のスレッドへ戻る</a>