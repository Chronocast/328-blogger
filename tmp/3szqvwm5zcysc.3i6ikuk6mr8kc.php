<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
                <!-- begin -->
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-10">
                            <img name="notepad" src="images/lock.png" class="float-right shrink">
                            <div class="jumbotron">
                                <h2>Welcome back!</h2>
                                <h4>Please login below</h4>
                                   
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row d-block justify-content-center">
                        <div class="p-2">
                            <form action="">
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter Username" name="username"  class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Username</span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group"> 
                                            <input type="password" placeholder="Enter Password" name="password"  class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Password</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                        
                    </div>
                    <div class="row justify-content-center">
                        
                            <button class="btn btn-lg btn-success center-block">Login</button>
                        
                    </div>
                </div>
                <!-- end -->
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>