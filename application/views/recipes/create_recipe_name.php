
    <section id="contact" style="background-color: white">
      <div class="container container-body">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading" style="color: black">Create your own recipe</h2>
            <h3 class="section-subheading text-muted">1. Give a name to your fantastic recipe.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form method="post" accept-charset="utf-8" action="2" />
              <div class="row">
                <div class="col-md-6">
                  	<legend class="text-center">Select which best describes your dish.</legend>
            				<?php for ($i=0; $i<9; $i++) { ?>
                    <div class="col-xs-4">
  				            <a id="samplefood<?php echo $i; ?>" href="javascript:void(0)" class="thumbnail <?php echo (isset($recipeimg) && $recipeimg == 'samplefood'.$i) ? "active" : "" ?>" onclick="getRecipeImgId('samplefood<?php echo $i; ?>')">
  				              <img src="<?php echo base_url()."img/samplefoods/samplefood".$i.".jpg"?>" class="img-responsive" alt="">
  				            </a>
  				          </div>
  									<?php } ?>
                  </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo (!isset($recipename) || empty($recipename)) ? "" : $recipename; ?>" placeholder="Recipename" name="recipename" maxlength="25" required>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                      <textarea class="form-control" placeholder="Description" name="description" maxlength="25" required><?php echo (!isset($description) || empty($description)) ? "" : $description; ?></textarea>
                      <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                	<div class="col-lg-12 text-right">
                  	<div id="success"></div>
	                  <a href="<?php echo site_url("recipes");?>"><button type="button" class="btn btn-xl">Cancel</button></a>
	                  <button type="submit" class="btn btn-xl">Next</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
