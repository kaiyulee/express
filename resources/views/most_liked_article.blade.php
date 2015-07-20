{{--最受喜欢文章--}}
<div class="the-box no-border bg-danger text-center signup-newsletter">
    <h4 class="small-heading more-margin-bottom">POPULAR POST</h4>
    <a href="/article/{{ App\Models\Article::mostLiked()->id }}">
        <h3>{{ App\Models\Article::mostLiked()->title }}</h3>
    </a>
    <p><small>WRITTEN BY <a href="#fakelink">{{ App\Models\Article::mostLiked()->author }}</a></small></p>
    <hr />
    <p><a href="/article/{{ App\Models\Article::mostLiked()->id }}" class="btn btn-danger btn-block">READ MORE</a></p>
</div><!-- /.the-box .no-border -->