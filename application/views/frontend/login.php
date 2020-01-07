<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Login</title>

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_user/css/bootstrap.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_user/css/all.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap" rel="stylesheet">

    <!-- My Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets_user/css/mystyle.css">

	<style>
		.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
}
/*.login-form-1 h3{
    text-align: center;
    color: #333;
}*/
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}

.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}

	</style>
</head>
<body>
	<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <figure class="figure">
					  <img src="<?php echo base_url()?>assets_user/img/logo_umsida.jpg" class="figure-img img-fluid rounded" alt="...">
					  <figcaption class="figure-caption"><h4>DIREKTORAT PENGELOLAHAN ASET & PERLENGKAPAN</h4></figcaption>
					</figure>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>LOGIN</h3>
                    <form>
                        <div class="form-group">
                            <label for="email" class="text-white">Email / Username</label>
                            <input type="text" class="form-control" placeholder="Your Email *" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-white">Password</label>
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" id="password" />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Login</button> | 
                            <button class="btn btn-danger">Back to Home</button>
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>assets_user/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_user/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_user/js/bootstrap.js"></script>

    <!-- Font Awesome -->
    <script src="<?php echo base_url(); ?>assets_user/js/all.js"></script>
</body>
</html>