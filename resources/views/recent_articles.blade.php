<?php
    $articles = App\Models\Article::recent(3);
?>
<div class="the-box no-border no-margin more-padding">
    <span class="label label-success square">RECENT POST</span>
    <ul class="media-list media-sm media-dotted recent-post">
    @foreach($articles as $article)
      <li class="media">
        <div class="media-body">
          <h4 class="media-heading"><a href="/article/{{ $article->id }}">{{ $article->title }}</a></h4>
            <p>{{ str_limit($article->content, 200, '...') }}</p>
            <p class="text-danger"><small>{{ date('M d , Y', strtotime($article->published_at)) }}</small></p>
        </div>
      </li>
      @endforeach
    </ul>
</div><!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
