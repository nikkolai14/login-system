<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration and Login System with PHP and MySQL</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="container">
            <div class="col-md-4 col-md-offset-4">
              <?php echo form_open('registration/register'); ?>
                <div class="form-signin">
                  <h2 class="form-signin-heading">Registration</h2>
                  <div class="form-group">
                    <label for="firstname">First Name</label>
                    <?php 
                      $inputState = (form_error('firstname')) ? 'input-error' : '' ;
                    ?>              
                    <input type="txt" class="form-control <?php echo $inputState; ?>" id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>">
                    <?php echo form_error('firstname', '<span class="error-msg">', '</span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <?php 
                      $inputState = (form_error('lastname')) ? 'input-error' : '' ;
                    ?>                   
                    <input type="txt" class="form-control <?php echo $inputState; ?>" id="lastname" name="lastname" value="<?php echo set_value('lastname'); ?>">
                    <?php echo form_error('lastname', '<span class="error-msg">', '</span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <?php 
                      $inputState = (form_error('email')) ? 'input-error' : '' ;
                    ?>                   
                    <input type="email" class="form-control <?php echo $inputState; ?>" id="email" name="email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email', '<span class="error-msg">', '</span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <?php 
                      $inputState = (form_error('password')) ? 'input-error' : '' ;
                    ?>                     
                    <input type="password" class="form-control <?php echo $inputState; ?>" id="password" name="password" value="<?php echo set_value('password'); ?>">
                    <?php echo form_error('password', '<span class="error-msg">', '</span>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <?php 
                      $inputState = (form_error('confirmPassword')) ? 'input-error' : '' ;
                    ?>               
                    <input type="password" class="form-control <?php echo $inputState; ?>" id="confirmPassword" name="confirmPassword" value="<?php echo set_value('confirmPassword'); ?>">
                    <?php echo form_error('confirmPassword', '<span class="error-msg">', '</span>'); ?>
                  </div>
                  <button class="btn btn-lg btn-danger btn-block" type="submit">Register</button>
                </div>
              </form>
            </div>            
          </div>
      </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>