<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
		
				<div class="row">
					<div class="col">						
						<div class="jumbotron">
							<h2>The Blog of <?= $blogger['username'] ?></h2>
							<h4><a href="">Excerpt from my most recent post:</a></h4>
							<p><?= $recentBlog['firstLine'] ?></p>
						</div>
							<?php foreach (($bloggersBlogs?:[]) as $blog): ?>
								<div class="jumbotron">
									<div>
											<div class="grid_text">
												<h4 class="style1 list"><a href=""><?= $blog['blogName'] ?></a></h4>
												<h5 class="style">Posted: <?= $blog['blogDate'] ?></h5>
												<p class="para top"><?= $blog['firstLine'] ?></p>
											</div>
											<div class="clear"></div>
										</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="col">
						<div class="jumbotron">
							<img class="img-fluid"src="images/Roy.jpg">
							<h3><?= $blogger['username'] ?></h3>
							<p><?= $blogger['bio'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>