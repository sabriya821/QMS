<!doctype html>
<html lang="en">


<head>
    <?php include 'web-layouts/auth-login/auth-head.php';?>

    </head>

    <body style="background-color: #025d4c;">
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-white p-4">
                                            <h5 class="text-white">Welcome Back !</h5>
                                            <p>Sign in to continue to FOMS.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="<?php echo $url;?>assets/images/title.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 bg-white"> 
                                <div class="auth-logo">
                                    <a href="#" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo $url;?>assets/images/title.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="#" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="<?php echo $url;?>assets/images/title.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form id="login-form" class="form-horizontal" onsubmit="return login()">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input class="form-control" placeholder="Enter username" type="email" placeholder="Email" name="txt_uname" id="txt_uname" required>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input name="txt_pwd" id="txt_pwd" required type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button id="but_submit" name="but_submit" class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->
        <!-- JAVASCRIPT -->
        <?php include 'web-layouts/auth-login/auth-script.php';?>
        <script type="text/javascript">
            $(document).ready(function(){

                $("#but_submit").click(function(){
                    var username = $("#txt_uname").val().trim();
                    var password = $("#txt_pwd").val().trim();

                    if( username != "" && password != "" ){
                        $.ajax({
                            url:'checkUser.php',
                            type:'post',
                            data:{username:username,password:password},
                            success:function(response){
                                var msg = "";
                                if(response == 1){
                                    window.location = "index.php";
                                }else{
                                    msg = "Invalid username and password!";
                                }
                                $("#message").html(msg);
                            }
                        });
                    }
                });

            });
        </script>
    </body>

</html>
