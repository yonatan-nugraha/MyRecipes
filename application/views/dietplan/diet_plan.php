
    <section id="team" class="bg-light-gray">
        <div class="container container-body">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">My Diet Plan</h2>
                    <h3 class="section-subheading text-muted">Create your diet plan <a href="<?php echo site_url("recipes/create_recipes/1");?>">here</a>.</h3>
                </div>
            </div>
            <div class="row">
				<?php for ($i=0; $i<6; $i++) { ?>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo base_url(); ?>img/dietplan/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Secret Coffee</h4>
                        <p class="text-muted">Secret Coffee</p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>
