		
				<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
			
				<!-- These are our grid blocks 	---->

							
		<div class="card-columns">
			<!-- begin block -->
			<?php foreach (($recentBlogs?:[]) as $blog): ?>
			<div class="card">
				<img class="card-img-top img-fluid" src='images/Roy.jpg'> 
				<div class="card-block">
					<h4 class="card-title"><?= $blog['username'] ?></h4>
					<p class="card-text">Something from my latest blog: <?= $blog['firstLine'] ?></p>
					<form action='./bloggerPage' method='POST'>
						<input type='hidden' name='blogger' value='<?= $blog['username'] ?>' />
						<input class='btn btn-primary' type='submit' value='View my blogs!'>
					</form>
				</div>
			</div>
			<?php endforeach; ?>
			<!-- end block -->
		</div>
						
				<!-- End of grid blocks -->

		<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>
		
		