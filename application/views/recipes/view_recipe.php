
    <section id="portfolio">
      <div class="container container-body">

        <div class="col-xs-6">
          <div class="col-xs-12 portfolio-item">
            <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img src="<?php echo base_url(); ?>img/recipes/roundicons.png" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php echo $recipename; ?></h4>
              <p class="text-muted"><?php echo $description; ?></p>
            </div>         
          </div>
        </div>

        <div class="col-xs-6">
          <div class="well well-bg">
            <h5>Comments:</h5><hr>
            <div class="form-group">
              <textarea id="commenttxtarea" class="form-control" placeholder="Leave your comment here..."></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-right">
              <a id="commentbtn" class="btn btn-default btn-sm">Leave a Comment</a>
            </div>
            <div id="comments">
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
            </div>  
          </div>
        </div>
        </div>
      </div>

    </section>

