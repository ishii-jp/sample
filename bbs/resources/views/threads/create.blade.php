<h3>新規スレッド作成画面</h3>
<div>
    {{ Form::open(['url' => "/category/{$empty_category->id}/thread", 'method' => 'post']) }}
        <label>投稿者名</label>
        <input type="text" name="name" placeholder="投稿者名">
        <label>スレッド内容</label>
        <textarea cols="30" name="content" placeholder="スレッドの内容" rows="10"></textarea>
        <input type="submit" value="投稿">
    {{ Form::close() }}
</div>

<a href="/thread/{{ $empty_category->id }}">スレッド一覧へ戻る</a>