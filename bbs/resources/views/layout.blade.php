<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ユニバーサルスタジオジャパン掲示板</title>
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
    <header class="header">
      <div class="header__bar row">
        <h3 class="grid-6"><a href="/">ユニバーサルスタジオジャパン掲示板</a></h3>
        <p>公式ユニバーサルスタジオジャパンHPは<a href="https://www.usj.co.jp/" target="_blank"><strong>こちら</strong><a></p>
      </div>
    </header>
    @yield('banner')
    @yield('content')

    <h3>総合注目のスレッドランキング</h3>
    {{-- */$ranking_count = 1/* --}}
    @foreach($total_ranking as $total_rank)
      <p class="ranking_no">{{ $ranking_count}}位</p>
      <p>カテゴリ　{{ $total_rank->thread->category->title }}</p>
      <span>スレッド　<a href="/bbs/{{ $total_rank->id }}">{{ $total_rank->thread->content }}</a></span>
      {{-- */$ranking_count++/* --}}
    @endforeach
    <footer><p>ユニバーサルスタジオジャパン掲示板</p></footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        $(function() {
            $("#page-top a").click(function() {
                $('html,body').animate({
                    scrollTop: 0
                }, 'fast');//この場所に数値を入れるとミリ秒単位で移動のスピードを調整できます
                return false;
            });
        });
    </script>
    <p id="page-top"><a href="#">ページトップに戻る↑</a></p>
  </body>
</html>