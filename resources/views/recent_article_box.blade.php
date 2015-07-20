<?php
    $articles = App\Models\Article::recent(1);
?>
<div class="the-box no-border">
    <h4 class="small-heading more-margin-bottom">RECENT POSTS</h4>
    <ul class="media-list media-xs media-dotted">
    @foreach($articles as $article)
      <li class="media">
        <div class="media-body">
          <h4 class="media-heading"><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h4>
          <p class="date"><small>{{ date('M d , Y @ h A', strtotime($article->published_at)) }}</small></p>
        </div>
      </li>
      @endforeach
    </ul>
</div><!-- /.the-box .no-border -->
