<?php foreach($comments as $comment) { ?>
<hr>
<div class="row">
  <div class="col-md-12">
    <div class="col-xs-2 user-img">
      <a href="" class="thumbnail">
        <img src="<?php echo base_url(); ?>img/recipes/hot51.png" class="img-responsive" alt="">
      </a>
    </div>
    <div class="col-xs-10">
      <a href=""><?php echo $comment->name; ?></a>
      <small class="pull-right">10 days ago</small>
      <p><?php echo $comment->comment; ?></p>
    </div>
  </div>
</div>
<?php } ?> 