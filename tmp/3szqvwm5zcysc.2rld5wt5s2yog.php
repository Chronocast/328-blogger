		<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
		<div class="content">
					<div class="wrap">
						<div class="single-page">
										<div class="single-page-artical">
											<div class="artical-content">
											<h1><a href="#">The Blog of <?= $blogger['username'] ?></a></h1>
												<div class="single-page">
													<h2><a href="#">Most Recent Blog</a></h2>
														<?php foreach (($bloggersBlogs?:[]) as $blog): ?>
															<div class="artical-content">
																<h2>Blogs:</h2>
																<h3><?= $blog['blogName'] ?></h3>
																<p>Blog Contents: <?= $blog['firstLine'] ?></p> 
																</div>
																
														<?php endforeach; ?>
														<div class="artical-links">
																<ul>
																	<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
																	<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
																	<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
																</ul>
															 </div>
														<div class="clear"> </div>
													
														
													
												
										
		
		
		
		<!---start-content
		<div class="content">
			<div class="wrap">
				<div class="single-page">
								<div class="single-page-artical">
									<div class="artical-content">
										
										<h3><a href="#">Blog Title</a></h3>
										<p>Blog Contents: </p> 
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
		<!---end-content---->


		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>