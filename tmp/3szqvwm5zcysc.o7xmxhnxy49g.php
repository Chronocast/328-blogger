
		
		<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
		
		<!---start-content---->
		<div class="content">
			<div class="wrap">
			 <div id="main" role="main">
			      <ul id="tiles">
					
					
			        <!-- These are our grid blocks -->
					<?php foreach (($recentBlogs?:[]) as $blog): ?> 
									<li>
										<form action='./bloggerPage' method='POST'>
											<img src='images/Roy.jpg' width='282' height='333'>
											<div class='post-info'>
												<div class='post-basic-info'>
													<input type='hidden' name='blogger' value='<?= $blog['username'] ?>' />
													<h3><a href='#'><?= $blog['username'] ?></a></h3>
													<span><input class='form-control btn btn-default' type='submit' value='View my blogs!'></span>
													<p>Something from my latest blog: <?= $blog['firstLine'] ?></p>
												</div>
												<div class='post-info-rate-share'>
													<div>
														<span> </span>
													</div>
													<div class='post-share'>
														<span> </span>
													</div>
													<div class='clear'> </div>
												</div>
											</div>
										</form>
									</li>
										
									<!-- end block -->
					<?php endforeach; ?>
			        <!-- End of grid blocks -->
			      </ul>
			    </div>
			</div>
		</div>
		<!---//End-content---->
		
		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>
		
		