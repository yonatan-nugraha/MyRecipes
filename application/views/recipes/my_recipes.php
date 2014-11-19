
    <section id="portfolio">
      <div class="container container-body">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">My Recipes List</h2>
            <h3 class="section-subheading text-muted">Create more of your very own recipes <a href="<?php echo site_url("recipes/create_recipes/1");?>">here</a>.</h3>
          </div>
      </div>
      <div class="row">
				<?php for ($i=0; $i<3; $i++) { ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a href="<?php echo site_url("recipes/view_recipes");?>" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fa fa-plus fa-3x"></i>
              </div>
            </div>
            <img src="<?php echo base_url(); ?>img/recipes/golden.png" class="img-responsive" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Secret Coffee</h4>
            <p class="text-muted">Secret Coffee</p>
          </div>
        </div>
        <?php } ?>            
      </div>
    </section>
