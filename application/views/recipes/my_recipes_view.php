
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
              <h4>Round Icons</h4>
              <p class="text-muted">Graphic Design</p>
            </div>         
          </div>
        </div>

        <div class="col-xs-6">
          <div class="well well-bg">
            <h5>Comments:</h5><hr>
            <div class="form-group">
              <textarea class="form-control" placeholder="Leave your comment here..."></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-right">
              <a class="btn btn-default btn-sm">Leave a Comment</a>
            </div>
            <?php for ($i=0; $i<3; $i++) { ?>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star-empty"></span>
                <a href="">Anonymous</a>
                <span class="pull-right">10 days ago</span>
                <p>This product was great in terms of quality. I would definitely buy another!</p>
              </div>
            </div>
            <?php } ?>   
          </div>
        </div>
        </div>
      </div>

    </section>  

