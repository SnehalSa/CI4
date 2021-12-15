<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./style.css">
 
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
            <div class="card-header">
                <h4> Edit Employee </h4>
                <a href="<?= base_url('employee')?>" class="btn btn-danger float-right btn-sm">Back</a>


        <div class="card-body">
            <form action="<?= base_url('employee/update/'.$employee['id'])?>"method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" value="<?=$employee['first_name'] ?>" class="form-control" placeholder="Enter first Name">
</div>
</div>
<div class="col-md-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="<?=$employee['last_name'] ?>" class="form-control" placeholder="Enter last Name">
</div>
</div>

<div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?=$employee['email'] ?>"class="form-control" placeholder="Enter email">
</div>
</div>
<div class="col-md-6">
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone" value="<?=$employee['phone'] ?>"class="form-control" placeholder="Enter phone number">
</div>
</div>

<div class="col-md-6">
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" value="<?=$employee['designation'] ?>" class="form-control" placeholder="Enter designation">
</div>
</div>
<div class="col-md-6">
                    <div class="form-group">
                      
                    
                        <button type="submit" class="btn-btn-primary px-4">Update Employee</button>
</div>
</div>
           
</form>
        </div>
        </div>
        </div>
        </div>
      </div>

    
</body>
</html>