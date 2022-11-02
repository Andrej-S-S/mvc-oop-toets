<?php 
  //include(APPROOT . "/views/includes/head.php" );
  echo $data["title"]; 
?>
<table>
  <thead>
    <th>id</th>
    <th>Name</th>
    <th>Networth</th>
    <th>Age</th>
    <th>Company</th>
    <th>delete</th>
  </thead>
  <tbody>
    <?=$data['richestpeople']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

