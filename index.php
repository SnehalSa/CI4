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

 
</head>
<body>




<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <?php
            if(session()->getFlashdata('status'))
            {
                echo "<h4>".session()->getFlashdata('status')."</h4>";
            }
            ?>
            <div class="card">
            <div class="card-header">
                <h4>Employee Data</h4>
                <a href="<?= base_url('employee-add')?>" class="btn btn-primary float-right btn-sm">Add Employee</a>

</div>
        <div class="card-body">
            <table class=" table table-bordered">
                <thead>

                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Designation</th>
                        <th>Created</th>
                        <th>Action</th>
</tr>
</thead>
<tbody>
    <?php foreach($employee as $row):?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['designation'] ?></td>
        <td><?= $row['created_at'] ?></td>
        <td>
            <a href="<?=base_url('employee/edit/'.$row['id'])?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= base_url('employee/delete/'.$row['id'])?>" class="btn btn-danger btn-sm">Delete</a>
        
    </td>


</tr>
<?php endforeach;?>
</tbody>
</table>
        </div>
</div>
</div>
</div>
</div>


    
</body>
</html>