
  <section id="contact" style="background-color: white">

    <div class="container container-body">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading" style="color: black">Create your own recipe</h2>
          <h3 class="section-subheading text-muted">2. List the ingredients and quantities required to make the dish.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form method="post" accept-charset="utf-8" action="3" />
            <div class="row">
              <div class="col-md-4">                    
								<div class="col-md-12 col-sm-6 portfolio-item text-center">
            			<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
              			<div class="portfolio-hover">
                			<div class="portfolio-hover-content">
                  			<i class="fa fa-plus fa-3x"></i>
                			</div>
              			</div>
              			<img src="<?php echo base_url(); ?>img/recipes/roundicons.png" class="img-responsive" alt="">
            			</a>
			            <div class="portfolio-caption">
			              <h4><?php echo (!isset($recipename) || empty($recipename)) ? "" : $recipename; ?></h4>
			              <p class="text-muted"><?php echo (!isset($description) || empty($description)) ? "" : $description; ?></p>
			            </div>
          			</div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <textarea class="form-control" name="ingredients" placeholder="List of Ingredients and Quantities"><?php echo (!isset($ingredients) || empty($ingredients)) ? "" : $ingredients; ?></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
            		<div class="col-lg-12 text-right">
                  <div id="success"></div>
                  <a href="<?php echo site_url("recipes/create_recipes/1");?>"><button type="button" class="btn btn-xl">Back</button></a>
                  <button type="submit" class="btn btn-xl">Next</button>
              </div>
            </div>
        	</form>
        </div>
      </div>
    </div>
  </section>

