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
										<form method="POST" action="./blogPage" id="sender">
											<input type='hidden' name="<?= $blog ?>" value="<?= $blog ?>" />
										</form>
										<h4><div class="hylianLink" id="submit" onClick="indexRoutingLink();"><?= $blog['blogName'] ?></h4>
										<h5>Posted: <?= $blog['blogDate'] ?></h5>
										<p><?= $blog['firstLine'] ?></p>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="col">
						<div class="jumbotron">
							<img class="img-fluid"src="images/RoyRedLion.PNG">
							<h3><?= $blogger['username'] ?></h3>
							<p><?= $blogger['bio'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>