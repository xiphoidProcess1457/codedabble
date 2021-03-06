<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        padding-top: 5%;
        padding-bottom: 5%;
    }

    table{
      width: 130%;
    }
   
</style>
<body>
    <div class="container">
    <h1 class="display-3 registration-header">LESSONS</h1>
    <table class="table-responsive-xl table-hover table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TITLE</th>
      <th scope="col">CONTENT</th>
      <th scope="col">COURSE</th>
      <th scope="col">DESCRITION</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
  <?php $x = 1;?>
  <?php foreach($lessons as  $item) : ?>
    <tr>
      <th scope="row"><?php echo $x++;?> </th>
      <td><?= $item['title']?></td>
      <td><?= $item['course']?></td>
      <td><?php 
                    $html = new \Html2Text\Html2Text(substr($item ['body'], 0, 50));
                    echo $html->getText();  // Hello, "WORLD"
                ?></td>

      <td><?= $item['description']?></td>
      <td>
      <a class="btn btn-success" href="<?php echo base_url('Admin/edit/'. $item['id']);?>">EDIT</a>  
  </td>
  <td>
      <a class="btn btn-danger" href="<?= base_url('Admin/delete/'.$item['id']);?>">DELETE</a> 
      </td>
    </tr>
    <?php endforeach; ?>
 
   

   
  </tbody>
</table>
    </div>
</body>
</html>

