@extends('app')

@section('content')
<!-- Begin breadcrumb -->
<ol class="breadcrumb default square rsaquo sm">
    <li><a href="/"><i class="fa fa-home"></i></a></li>
    <li class="active"></li>
</ol>
<!-- End breadcrumb -->

<!-- BEGIN COMMENT FORM -->
<div class="the-box no-border">
    <h4 class="small-heading more-margin-bottom">LEAVE COMMENT</h4>
    <form role="form">
        <div class="form-group">
        <input type="text" class="form-control input-lg rounded bold-border" placeholder="NAME">
        </div>
        <div class="form-group">
        <input type="email" class="form-control input-lg rounded bold-border" placeholder="@ddress">
        </div>
        <div class="form-group">
        <input type="url" class="form-control input-lg rounded bold-border" placeholder="Http://">
        </div>
        <div class="form-group">
        <textarea class="form-control input-lg rounded bold-border no-resize" style="height: 200px;" placeholder="Your comments here"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-send"></i>SEND</button>
        </div>
    </form>
</div><!-- /.the-box .no-border -->
<!-- /.END COMMENT FORM -->

<!-- BEGIN COMMENT WIDE -->
<div class="the-box no-border">
    <h4 class="small-heading more-margin-bottom">24 COMMENTS</h4>
    <ul class="media-list media-sm media-dotted">
      <li class="media">
        <a class="pull-left" href="#fakelink">
          <img class="media-object img-circle" src="assets/img/avatar/avatar.jpg" alt="Avatar">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><a href="#fakelink">Elizabeth Owens</a></h4>
          <p class="date"><small>yesterday</small></p>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <p class="comment-action">
          <a data-toggle="tooltip" title="25 likes" class="btn btn-xs btn-default btn-square"><i class="fa fa-thumbs-up"></i> 25</a> 
          <a data-toggle="tooltip" title="5 shares" class="btn btn-xs btn-default btn-square"><i class="fa fa-share-square-o"></i> 5</a> 
          <a data-toggle="tooltip" title="Reply comment" class="btn btn-xs btn-default btn-square"><i class="fa fa-reply"></i></a> 
          </p>
        </div>
      </li>
      <li class="media">
        <a class="pull-left" href="#fakelink">
          <img class="media-object img-circle" src="assets/img/avatar/avatar.jpg" alt="Avatar">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><a href="#fakelink">Frank Oliver</a></h4>
          <p class="date"><small>yesterday</small></p>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <p class="comment-action">
          <a data-toggle="tooltip" title="25 likes" class="btn btn-xs btn-default btn-square"><i class="fa fa-thumbs-up"></i> 25</a> 
          <a data-toggle="tooltip" title="5 shares" class="btn btn-xs btn-default btn-square"><i class="fa fa-share-square-o"></i> 5</a> 
          <a data-toggle="tooltip" title="Reply comment" class="btn btn-xs btn-default btn-square"><i class="fa fa-reply"></i></a> 
          </p>
            <ul class="media-list">
              <li class="media">
                <a class="pull-left" href="#fakelink">
                  <img class="media-object img-circle" src="assets/img/avatar/avatar.jpg" alt="Avatar">
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#fakelink">Mya Weastell</a></h4>
                  <p class="date"><small>3 hours ago</small></p>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  <p class="comment-action">
                  <a data-toggle="tooltip" title="25 likes" class="btn btn-xs btn-default btn-square"><i class="fa fa-thumbs-up"></i> 25</a> 
                  <a data-toggle="tooltip" title="5 shares" class="btn btn-xs btn-default btn-square"><i class="fa fa-share-square-o"></i> 5</a> 
                  <a data-toggle="tooltip" title="Reply comment" class="btn btn-xs btn-default btn-square"><i class="fa fa-reply"></i></a> 
                  </p>
                </div>
              </li>
              <li class="media">
                <a class="pull-left" href="#fakelink">
                  <img class="media-object img-circle" src="assets/img/avatar/avatar.jpg" alt="Avatar">
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="#fakelink">Carl Rodriguez</a></h4>
                  <p class="date"><small>7 hours ago</small></p>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                  <p class="comment-action">
                  <a data-toggle="tooltip" title="25 likes" class="btn btn-xs btn-default btn-square"><i class="fa fa-thumbs-up"></i> 25</a> 
                  <a data-toggle="tooltip" title="5 shares" class="btn btn-xs btn-default btn-square"><i class="fa fa-share-square-o"></i> 5</a> 
                  <a data-toggle="tooltip" title="Reply comment" class="btn btn-xs btn-default btn-square"><i class="fa fa-reply"></i></a> 
                  </p>
                </div>
              </li>
            </ul>
        </div>
      </li>
      <li class="media">
        <a class="pull-left" href="#fakelink">
          <img class="media-object img-circle" src="assets/img/avatar/avatar.jpg" alt="Avatar">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><a href="#fakelink">Nikita Carter</a></h4>
          <p class="date"><small>April 20, 2014 @10:45:45</small></p>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <p class="comment-action">
          <a data-toggle="tooltip" title="25 likes" class="btn btn-xs btn-default btn-square"><i class="fa fa-thumbs-up"></i> 25</a> 
          <a data-toggle="tooltip" title="5 shares" class="btn btn-xs btn-default btn-square"><i class="fa fa-share-square-o"></i> 5</a> 
          <a data-toggle="tooltip" title="Reply comment" class="btn btn-xs btn-default btn-square"><i class="fa fa-reply"></i></a> 
          </p>
        </div>
      </li>
      <li class="media">
        <a class="pull-left" href="#fakelink">
          <img class="media-object img-circle" src="assets/img/avatar/avatar.jpg" alt="Avatar">
        </a>
        <div class="media-body">
          <h4 class="media-heading"><a href="#fakelink">Craig Dixon</a></h4>
          <p class="date"><small>April 19, 2014 @01:17:45</small></p>
          Cras sit amet nibh libero, in gravida nulla.Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
          <p class="comment-action">
          <a data-toggle="tooltip" title="25 likes" class="btn btn-xs btn-default btn-square"><i class="fa fa-thumbs-up"></i> 25</a> 
          <a data-toggle="tooltip" title="5 shares" class="btn btn-xs btn-default btn-square"><i class="fa fa-share-square-o"></i> 5</a> 
          <a data-toggle="tooltip" title="Reply comment" class="btn btn-xs btn-default btn-square"><i class="fa fa-reply"></i></a> 
          </p>
        </div>
      </li>
    </ul>
</div><!-- /.the-box .transparent .full -->
<!-- END COMMENT WIDE -->
@stop
