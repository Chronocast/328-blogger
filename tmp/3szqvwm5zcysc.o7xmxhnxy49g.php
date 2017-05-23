		
				<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
				<!-- These are our grid blocks 	---->




				<!-- begin block -->
				<?php foreach (($recentBlogs?:[]) as $blog): ?>
					<div class="card" style="width: 20rem;">
						<div class="card-block">
							<form action='./bloggerPage' method='POST'>
								<img class="card-img-top" src='images/Roy.jpg' width='282' height='333'>
								<input type='hidden' name='blogger' value='<?= $blog['username'] ?>' />
								<h4 class="card-title"><?= $blog['username'] ?></h4>
								<span><input class='btn btn-default' type='submit' value='View my blogs!'></span>
								<p class="card-text">Something from my latest blog: <?= $blog['firstLine'] ?></p>
							</form>
						</div>
					</div>
				<?php endforeach; ?>
				<!-- end block -->



				<!-- End of grid blocks -->
		
		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>
		
		