<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Graduate School Coordinator Admin Sign-In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/todc-bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body { padding-top: 40px; padding-bottom: 40px; }
      a { color: #15c; text-decoration: none; }
      a:hover { color: #15c; text-decoration: underline; }
      form,
      label,
      input[type=text],
      input[type=checkbox],
      input[type=password] {
        margin: 0;
      }

      .signin {
        width: 335px;
        margin: 0 auto;
      }
      .signin-box {
        padding: 20px 25px 15px;
        background: #f1f1f1;
        border: 1px solid #e5e5e5;
      }
      .signin-box h2 {
        font-size: 16px;
        font-weight: normal;
        line-height: 17px;
        height: 16px;
        margin: 0 0 19px;
      }

      .signin-box input[type=checkbox] {
        vertical-align: bottom;
      }
      .signin-box input[type=text],
      .signin-box input[type=password] {
        width: 100%;
        font-size: 15px;
        color: black;
        line-height: normal;
        height: 32px;
        margin: 0 0 20px;
        box-sizing: border-box;
      }
      .signin-box input[type=submit] {
        margin: 0 20px 15px 0;
      }

      .signin-box label {
        color: #222;
        margin: 0 0 5px;
        display: block;
        font-weight: bold;
        font-size: 13px;
      }

      .signin-box label.remember {
        display: inline-block;
        vertical-align: top;
        margin: 9px 0 0;
        line-height: 1;
        font-size: 13px;
      }

      .signin-box .remember-label {
        font-weight: normal;
        color: #666;
        line-height: 0;
        padding: 0 0 0 5px;
      }

      .signin-box ul {
        list-style: none;
        line-height: 17px;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div class="container">

      <div class="signin">
        <div class="signin-box">
          <h2 class="form-signin-heading"> Graduate School Coordinator Admin Sign in</h2>

          <form>
            <fieldset>
              <label for="username">Username</label>
              <input type="text" class="input-block-level" name="username" id="username">
              <label for="passwd">Password</label>
              <input type="password" class="input-block-level" name="passwd" id="passwd">

              <input type="submit" class="btn btn-primary" value="Sign in">
             <label class="remember">
                <input type="checkbox" name="rememberMe" value="yes">
                <strong class="remember-label">Stay signed in</strong>
              </label>
            </fieldset>
          </form>

          <ul>
            <li>
              <a id="link-forgot-pwd" href="#">Can't access your account?</a>
            </li>
          </ul>
        </div>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
