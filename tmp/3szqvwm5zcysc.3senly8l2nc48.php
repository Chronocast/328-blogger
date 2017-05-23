<?php echo $this->render('pages/header.html',NULL,get_defined_vars(),0); ?>
                <!-- begin -->
                <div class="container">
                    <div class="row">
                        <div class="col-10">						
                            <div class="jumbotron">
                                <h2>Beccome a Blogger!</h2>
                                <h4>Create a new account below</h4>
                                
        
                                <img src="images/writing.png" class="float-right">   
                            </div>
                        </div>
                    
            
                        </div>
                    <!-- form start -->
                        <form action="">
                            <!-- top side -->
                            <div class="d-flex flex-column">
                                <div class="p-2">
                                    <!-- left side -->
                                    <div class="d-flex flex-row d-block bg-faded">
                                        <div class="p-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter Username" name="username" aria-describedby="basic-addon1">
                                                <span class="input-group-addon" id="basic-addon1">Username</span>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Enter Email" name="email" aria-describedby="basic-addon2">
                                                <span class="input-group-addon" id="basic-addon2">Email</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end top left forms -->
                                
                                    <!-- bottom left side -->
                                    <div class="d-flex flex-row d-block bg-faded">
                                        <div class="p-2">
                                            <div class="input-group">
                                                <input type="password" class="form-control" placeholder="Enter Password" name="password" aria-describedby="basic-addon3">
                                                <span class="input-group-addon" id="basic-addon3">Password</span> 
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="input-group">
                                                <input type="password" class="form-control" placeholder="Verify Password" name="verify" aria-describedby="basic-addon3">
                                                <span class="input-group-addon" id="basic-addon4">Verify</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end bottom left side -->
                                </div>
                            </div>
                            
                            <!-- top right side -->
                        
                            <div class="d-flex flex-row-reverse d-block ">
                                <div class="p-2">
                                    <!-- right side -->
                                    <div class="d-flex flex-column">
                                        <div class="p-2">
                                            <div class="input-group">
                                                <input type="file" name="profile"><button class="">Upload Photo</button> 
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="d-inline-flex p-2">Quick Biography</div> 
                                        </div>
                                    <br>
                                        <div class="p-2">
                                            <label>Quick Biography</label> 
                                        </div>
                                        <div class="p-2 bg-faded">
                                            <input type="password" placeholder="Verify Password" name="verify" required><label>Verify</label> 
                                        </div>
                                    <button class="btn btn-lg btn-primary btn-signin">Start Blogging!</button>
                            
                        </div>
					
                    </div>
                </form>
            <!-- end -->
			</div>
		</div>
														
<?php echo $this->render('pages/footer.html',NULL,get_defined_vars(),0); ?>