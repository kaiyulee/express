<div class="the-box bg-info no-border text-center no-margin more-padding">
    <h4>MOST COMMENTED</h4>
    <h2><a href="/article/{{ App\Models\Article::mostCommented()->id }}">{{ App\Models\Article::mostCommented()->title }}</a></h2>
    <p>{{ date('M d , Y', strtotime(App\Models\Article::mostCommented()->published_at)) }}</p>
    <a href="/article/{{ App\Models\Article::mostCommented()->id }}" class="btn btn-primary btn-block">Read more</a>
</div><!-- /.the-box .bg-primary .no-border .text-center .no-margin -->
