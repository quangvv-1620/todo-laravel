@extends('layouts.app')

@section('content')
<div class="col-md-8 offset-md-2">
  <h4>
    <?php
      if( isset($mess) ) {
        echo $mess;
      }
    ?>
  </h4>
  <form action="/contacts" method="POST" role="form">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <div class="form-group">
      <legend>Contact us</legend>
    </div>

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" value="<?php if(isset($name)){ echo $name;} ?>">
    </div>


    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" value="<?php if(isset($email)){ echo $email;} ?>">
    </div>

    <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection