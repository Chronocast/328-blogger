


    <?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
    
                <div class="container bg-info">
					<form action="./validation" method="post" id="account-creation">
                        <h2>User Info</h2>
						<div class="d-flex flex-row d-block justify-content-center">  
							<div class="p-2">
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2"><?= $username ?></span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="username-error"></span>
											</div>
                                        </div>
                                    </div>
                                    <div class="p-2 bg-faded">
                                         <div class="input-group">   
                                            <span class="input-group-addon" id="basic-addon2"><?= $email ?></span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="email-error"></span>
											</div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group"> 
                                            <span class="input-group-addon" id="basic-addon2"><?= $pw ?></span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="password-error"></span>
											</div>
                                        </div>
                                    </div>
                                </div>
							</div>
						<!-- break -->
							<div class="p-2">
								<div class="d-flex flex-column">
									<div class="p-2 bg-faded">
										 <div class="input-group">   
											<span class="input-group-addon" id="basic-addon2"><?= $bios ?></span>
											<span id="username-error"></span>
										</div>
									</div>
								</div>
							</div>
						</div>

					</form>
                </div>
        
    <?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>