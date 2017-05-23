<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
		
				<div class="row">
					<div class="col-md-10 col-lg-9">						
						<div class="jumbotron">
							<h2><a href="#">The Blog of <?= $blogger['username'] ?></a></h2>
							<h3><a href="#">Most Recent Blog</a></h3>
							<p>firstLine words words words</p>
						</div>
							<?php foreach (($bloggersBlogs?:[]) as $blog): ?>
								<div class="jumbotron">
									<div>
											<div class="grid_text">
												<h4 class="style1 list"><a href=""><?= $blog['blogName'] ?></a></h4>
												<h5 class="style"><?= $blog['blogDate'] ?></h5>
												<p class="para top"><?= $blog['firstLine'] ?></p>
												<a href="" class="btn1">Click to Reply</a>
											</div>
											<div class="clear"></div>
										</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="col-md-2 col-lg-1">
						<div class="jumbotron">
							<img src='images/Roy.jpg' width="323>
						</div>
					</div>
				</div>
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>