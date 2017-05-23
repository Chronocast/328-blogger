<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>

		
				<!---start-content---->
			
				<div class="row">
					<div class="col">
						<div class="jumbotron">
							<div class="navbar-brand-logo">
								<img class="img-fluid tiny"src="images/RoyRedLion.PNG">
								<h3><?= $blog['blogName'] ?></h3>
								<p><?= $blog['blogContent'] ?></p> 
								</div>
								<div class="artical-links">
								<ul>
									<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
									<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
									<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
								</ul>
							 </div>
							 <div class="clear"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!---end-content---->


<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>