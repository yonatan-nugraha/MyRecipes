
<section id="portfolio">
  <div class="container container-body">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Top Recipes</h2>
        <h3 class="section-subheading text-muted">Create your own recipes and win the most favourite place of the week.</h3>
      </div>
  </div>
  <div class="row">
	<?php for ($i=0; $i<6; $i++) { ?>
      <div class="col-md-4 col-sm-6 portfolio-item">
        <a href="<?php echo site_url("recipes/view_recipes");?>" class="portfolio-link" data-toggle="modal">
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
      <?php } ?>            
    </div>
  </div>
</section>
