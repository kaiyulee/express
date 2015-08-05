<ul class="sidebar-menu">
    <li>
        <a href="/">
            <i class="glyphicon glyphicon-play-circle icon-sidebar"></i>START
        </a>
    </li>
    <li>
        <a href="/categories">
            <i class="glyphicon glyphicon-th icon-sidebar"></i>Categories
        </a>
        <ul class="submenu">
            <?php
                $cats = \App\Models\Category::all();
                $aNum = count(\App\Models\Article::all());
            ?>
            <li><a style="color: #5bc0de;" href="/articles">All Articles <span class="label label-success span-sidebar">{{
            $aNum
            }}</span></a></li>
            @if($cats)
                @foreach($cats as $cat)
                <li><a href="/category/{{ $cat->id }}">{{ $cat->name }}</a></li>
                @endforeach
            @else
                <li><a href="javascript:;">...</a></li>
            @endif
        </ul>
    </li>
    <li>
        <a href="/about">
            <i class="glyphicon glyphicon-headphones icon-sidebar"></i>
            <i class="fa fa-angle-right chevron-icon-sidebar"></i>
            ABOUT
        </a>
    </li>
</ul>

