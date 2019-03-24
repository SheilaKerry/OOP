  <?php 
  $today=date("d.m.Y");
echo $today ."/n";
   $returnDate = date("d.m.Y", strtotime("$today +1 week"));
    echo $returnDate;
