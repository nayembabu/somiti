<html lang="en">
  <head>
    <base href="<?php echo base_url(); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo $this->db->get('settings')->row()->sys_logo; ?>" type="image/ico" />

    <title><?php echo $this->db->get('settings')->row()->sys_title; ?></title>

    <!-- Bootstrap -->
    <link href="include/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="include/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="include/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="include/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="include/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <img class="img-circle" src="<?php echo $this->db->get('settings')->row()->sys_logo; ?>">
            <h1><?php echo $this->db->get('settings')->row()->sys_name; ?></h1>
            <form action="auth/login" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="identity" placeholder="Type Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Type Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log in">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

<!--                 <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div> -->
              </div>
            </form>
          </section>
        </div>
<!-- 
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
 
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>  
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>
  </body>
</html>
