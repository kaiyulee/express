<?php
    $comments = App\Models\Article::comments(1);
?>
<div class="the-box no-border">
    <h4 class="small-heading more-margin-bottom">RECENT COMMENTS</h4>
    <ul class="media-list media-xs media-dotted">
    @foreach($comments as $comment)
      <li class="media">
        <a class="pull-left" href="#fakelink">
          <img class="media-object" src="{{ asset('/img/avatar/avatar.jpg') }}" alt="Avatar">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><a href="#fakelink">{{ $comment->written_by }}</a> at
          <a href="/article/{{ $comment->referer_article }}">{{ $comment->article_title }}</a></h4>
          <p class="date"><small>{{ date('M d, h:i:s A', strtotime($comment->created_at)) }}</small></p>
          <p class="small">{{ $comment->body }}</p>
        </div>
      </li>
     @endforeach
    </ul>
</div><!-- /.the-box .no-border -->
