
<section id="contact" style="background-color: white">

  <div class="container container-body">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading" style="color: black">Create your own recipe</h2>
        <h3 class="section-subheading text-muted">3. Describe clearly, step by step, how this recipe should be prepared.</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <form method="post" accept-charset="utf-8" action="preview" />
          <div class="row">
            <div class="col-md-4">                  
	            <div class="col-xs-12 portfolio-item text-center">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fa fa-plus fa-3x"></i>
                    </div>
                  </div>
                  <img src="<?php echo base_url()."img/samplefoods/". $recipeimg .".jpg"; ?>" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4><?php echo (!isset($recipename) || empty($recipename)) ? "" : $recipename; ?></h4>
                  <p class="text-muted"><?php echo (!isset($description) || empty($description)) ? "" : $description; ?></p>
                </div>
              </div>
            </div>

            <div class="col-md-8">
           		<div class="form-group">
                <input type="text" class="form-control" placeholder="Step 1" value="<?php echo (!isset($step1) || empty($step1)) ? "" : $step1; ?>" name="step1" required>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Step 2" name="step2">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Step 3" name="step3">
                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="col-lg-12 text-right">
                <div id="success"></div>
                <a href="<?php echo site_url("recipes/create_recipe/2");?>"><button type="button" class="btn btn-xl">Back</button></a>
                <button type="submit" class="btn btn-xl">Next</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
