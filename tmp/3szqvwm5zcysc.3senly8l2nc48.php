<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>

                <!-- begin -->
				
				
				
				
				<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
					rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
					integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
				
                <div class="container bg-info">
                    <div class="row justify-content-center">
                        
                        <div class="col-10">
                            <img name="notepad" src="images/writing.png" class="float-right">
                            <div class="jumbotron">
                                <h2>Become a Blogger!</h2>
                                <h4>Create a new account below</h4>
                                   
                            </div>
                        </div>
                    </div>
					<form action="./validation" method="post" name="account-creation" id="account-creation">
						<div class="d-flex flex-row d-block justify-content-center">  
							<div class="p-2">
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter Username" name="username" id="username" class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Username</span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="username-error"></span>
											</div>
                                        </div>
                                    </div>
                                    <div class="p-2 bg-faded">
                                         <div class="input-group">   
                                            <input type="email" placeholder="Enter Email" name="email" id="email" class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Email</span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="username-error"></span>
											</div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group"> 
                                            <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Password</span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="username-error"></span>
											</div>
                                        </div>
                                    </div>
                                    <div class="p-2 bg-faded">
                                        <div class="input-group"> 
                                            <input type="password" placeholder="Verify Password" name="verify" id="name="verify"" class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Verify</span>
											<div class="alert alert-danger">
												<strong>Error: </strong><span id="username-error"></span>
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
											<input type="text" class="form-control">
											<span class="input-group-addon" id="basic-addon2">Upload File (Coming Soon!)</span>
											<span class="error" id="username-error"></span>
										</div>
									</div>
									<div class="p-2 bg-faded">
										 <div class="input-group">   
											<span class="input-group-addon form-control">Quick Biography!</span>
											<textarea name="bios" class="form-control" rows="5"></textarea>
											<span id="username-error"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<input type="submit" value="Start Blogging!" id="submit" name="submit" class="btn btn-lg btn-primary center-block">
						</div>
						
					</form>
                </div>
                <!-- end -->
			</div>
		</div>
		
		<script src="js/validate.js"></script>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>