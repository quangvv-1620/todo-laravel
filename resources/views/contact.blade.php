<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom styles for this template -->
  <link href="http://getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <h4>
      <?php
        if( isset($mess) ) {
          echo $mess;
        }
      ?>
    </h4>
    <form action="/contacts" method="POST" class="form-horizontal" role="form">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        <div class="form-group">
          <legend>Contact us</legend>
        </div>
    
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" value="<?php if(isset($name)){ echo $name;} ?>">
        </div>
    
    
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" name="email" value="<?php if(isset($email)){ echo $email;} ?>">
        </div>
    
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
    </form>
  </div>
</body>
</html>