<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
                <!-- begin -->
                <div class="container">
                    <div class="row justify-content-center">
                        
                        <div class="col-10">
                            <img name="notepad" src="images/writing.png" class="float-right">
                            <div class="jumbotron">
                                <h2>Become a Blogger!</h2>
                                <h4>Create a new account below</h4>
                                   
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
                                    <div class="p-2 bg-faded">
                                         <div class="input-group">   
                                            <input type="email" placeholder="Enter Email" name="email"  class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Email</span>
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
                                    <div class="p-2 bg-faded">
                                        <div class="input-group"> 
                                            <input type="password" placeholder="Verify Password" name="verify"  class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Verify</span>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <!-- break -->
                        <div class="p-2">
                            <form action="">
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group">
                                            <input type="text" name="upload"  class="form-control" required>
                                            <span class="input-group-addon" id="basic-addon2">Upload File</span>
                                        </div>
                                    </div>
                                    <div class="p-2 bg-faded">
                                         <div class="input-group">   
                                            <span class="input-group-addon form-control">Quick Biography!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        
                                        <textarea name="bio" class="form-control" rows="5"></textarea>
                                        
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                        
                    </div>
                    <div class="row justify-content-center">
                        
                            <button class="btn btn-lg btn-primary center-block">Start Blogging!</button>
                        
                    </div>
                </div>
                <!-- end -->
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>