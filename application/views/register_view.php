<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <table class="table table-striped mt-5">
        <thead>
            <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">วันที่สมัค</th>
            <th scope="col">Edit</th>
            </tr>
        </thead>
        <?php
        foreach ($query as $re){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $re->id; ?></th>
            <td><?php echo $re->email; ?></td>
            <td><?php echo $re->password; ?></td>
            <td>@<?php echo $re->date; ?></td>
            <td><button type="button" class="btn btn-sm btn-outline-warning">Edit</button></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
        
    </table>
</body>