<?php include 'adminheader.php';
extract($_GET);


?>

<div  style="width: 100%;height: 350px;background-image: url('assets/img/stc.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<center>
    <h3 style="font-size: 30px;">View Medicines Here</h3>
    <table style="width:900px" class="table">
        <tr align="center">
            <th>Name</th>
            <th>Discription</th>
            <th>Exp date</th>
            <th>Rate</th>
        </tr>
        <?php 
  $q="SELECT * FROM medicines INNER JOIN `medicineprescription` USING(medicine_id)INNER JOIN `booking` ON `booking`.`booking_id`=`medicineprescription`.`book_id` WHERE `booking_id`='$mmid'";

  $res=select($q);


        $i=1;
        foreach ($res as $r) { 
            
            ?>
            <tr align="center">

            <td><?php echo $r['medicinename']?></td>
            <td><?php echo $r['desc']?></td>
            <td><?php echo $r['expirydate']?></td>
            <td><?php echo $r['rate']?></td>
            </tr>
            <?php }?>
    </table>

    
   </center>





<?php include 'footer.php' ?> 
       
