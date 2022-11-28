<?php include 'pharmheader.php';

$pharma_id=$_SESSION['pharmid'];?> 
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
<h2>View Payments</h2>
<table class="table"> 
    <tr align="center">
        <th>Medicine </th>
        <th>Description </th>
        <th>Rate</th>

        <th>Expiery Date </th>

        <!-- <th>Amount </th>

        <th>Payment Date </th> -->
     
    
    </tr>
    <?php 
    echo  $q="select * from `medicines` inner join `medicineprescription` using (medicine_id) inner join `booking` on `booking`.`booking_id`=`medicineprescription`.book_id where  patient_id='$userid' and book_id='$bid' and pharma_id='$pharma_id' and medicineprescription.status='Payment Completed'";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['medicinename']?></td>
       <td><?php echo $r['desc']?></td>
       <td><?php echo $r['rate']?></td>
       <td><?php echo $r['expirydate']?></td>
          


     
    </tr>
   <?php } ?>
   
</table>




<?php include 'footer.php' ?> 