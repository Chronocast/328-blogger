		
				<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
				<!-- These are our grid blocks 	---->
				<div class="col-sm-9 wrapper">
					<div class="container">
						<div class="row">
							<div class="content">
								<!-- begin block -->
								<?php foreach (($recentBlogs?:[]) as $blog): ?>
									<div class="col-sm-3">
										<div class="align-center">
											<form action='./bloggerPage' method='POST'>
												<img src='images/Roy.jpg' width='282' height='333'>
												<input type='hidden' name='blogger' value='<?= $blog['username'] ?>' />
												<h3><a href='#'><?= $blog['username'] ?></a></h3>
												<span><input class='btn btn-default' type='submit' value='View my blogs!'></span>
												<p>Something from my latest blog: <?= $blog['firstLine'] ?></p>
											</form>
										</div>
									</div>
								<?php endforeach; ?>
								<!-- end block -->
							</div>
						</div>	
					</div>
				</div>
				<!-- End of grid blocks -->
			</div>
		</div>
		
		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>
		
		