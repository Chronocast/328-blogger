<?php
    // define variables and set to empty values
    $usernameErr = $emailErr = $pwErr = $verifyErr = "";
    $username = $email = $pw = $verify = $bios = "";
    
    if (empty($_POST["username"])) {
      $nameErr = "Userame is required";
    } else {
      $name = test_input($_POST["username"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
        $usernameErr = "Only letters and white space allowed"; 
      }
    }
    
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format"; 
      }
    }
    
    if (empty($_POST["bios"])) {
      $bios = "";
    } else {
      $bios = test_input($_POST["bios"]);
    }
    
    if (empty($_POST["password"])) {
      $emailErr = "Password is required";
    } else {
      $pw = test_input($_POST["password"]);
      // check if e-mail address is well-formed
      if ($pw !== $verify) {
        $emailErr = "Password not the same"; 
      }
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>
    <include href="pages/header.html" />
    
                <div class="container bg-info">
					<form action="./validation" method="post" id="account-creation">
                        <h2>User Info</h2>
						<div class="d-flex flex-row d-block justify-content-center">  
							<div class="p-2">
                                <div class="d-flex flex-column">
                                    <div class="p-2 bg-faded">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">{{ @username }}</span>
											<div class="alert alert-danger">
												<span id="username-error">{{ $usernameErr }}</span>
											</div>
                                        </div>
                                    </div>
                                    <div class="p-2 bg-faded">
                                         <div class="input-group">   
                                            <span class="input-group-addon" id="basic-addon2">{{ @email }}</span>
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
                                            <span class="input-group-addon" id="basic-addon2">{{ @pw }}</span>
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
											<span class="input-group-addon" id="basic-addon2">{{ @bios }}</span>
											<span id="username-error"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <?php
                           //if (!empty($_POST["username"]) or !empty($_POST["username"])
                            //or !empty($_POST["username"]) or !empty($_POST["username"]))
                            //{
                            echo '
                                <div class="row justify-content-center">
                                    <a href="./createAccount" class="btn btn-lg btn-primary center-block"></a>
                                </div>';
                            //}
                        ?>
					</form>
                </div>
        
    <include href="pages/footer.html" />