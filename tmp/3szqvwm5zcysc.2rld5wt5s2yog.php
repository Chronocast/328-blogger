<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
		<div class="content">
			<div class="wrap">
				<div class="single-page">
					<div class="single-page-artical">
						<div class="artical-content">

								<div class="comment-section">
									
										<div class="grids_of_2">
											<h2><a href="#">The Blog of <?= $blogger['username'] ?></a></h2>
											
											<h3><a href="#">Most Recent Blog</a></h3>
											
											<p>firstLine words words words</p>
											
											<?php foreach (($bloggersBlogs?:[]) as $blog): ?>
												<div class="grid1_of_2">
													<div class="grid_text">
														<h4 class="style1 list"><a href=""><?= $blog['blogName'] ?></a></h4>
														<h3 class="style"><?= $blog['blogDate'] ?></h3>
														<p class="para top"><?= $blog['firstLine'] ?></p>
														<a href="" class="btn1">Click to Reply</a>
													</div>
													<div class="clear"></div>
												</div>
											<?php endforeach; ?>
										</div>
										
										<div class="clear"></div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>