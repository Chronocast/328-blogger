		
				<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
				<!-- These are our grid blocks 	---->

				<div class="col">			

						<div class="card-deck">
							<!-- begin card -->
							<?php foreach (($recentBlogs?:[]) as $blog): ?>
							<div class="card mb-4">
								<img class="card-img-top rounded-circle" src='images/RoyRedLion.PNG' width=100px height=100px> 
								<div class="card-block">
									<h4 class="card-title"><?= $blog['username'] ?></h4>
									<p class="card-text">Something from my latest blog: <blockquote><?= $blog['firstLine'] ?></blockquote></p>
									<form action='./bloggerPage' method='POST'>
										<input type='hidden' name='blogger' value="<?= $blog['username'] ?>" />
										<input class='btn btn-primary' type='submit' value='View my blogs!'>
									</form>
								</div>
							</div>
							<!--<div class="w-100 hidden-sm-down hidden-lg-up"><!-- wrap every 3 on md</div>-->
							<!--<div class="w-100 hidden-xs-down hidden-md-up"> wrap every 2 on sm</div>-->
							<!--<div class="w-100 hidden-md-down hidden-xl-up"> wrap every 4 on lg</div>-->
							<!--<div class="w-100 hidden-lg-down"> wrap every 5 on xl</div>-->
							<?php endforeach; ?>
							<!-- end card -->
						</div>

				</div>			
						<!-- End of grid cards -->
			</div>
		</div>

		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>
		
		