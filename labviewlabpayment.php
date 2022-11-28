<?php include 'labheader.php';

$labid=$_SESSION['labid'];?> 
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

      

        <!-- <th>Amount </th>

        <th>Payment Date </th> -->
     
    
    </tr>
    <?php 
     $q="select * from `labtests` inner join `testprescription` using (lab_test_id) inner join `booking` on `booking`.`booking_id`=`testprescription`.book_id where  patient_id='$userid' and book_id='$bid' and lab_id='$labid' and testprescription.test_status='Payment Completed'";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['test_name']?></td>
       <td><?php echo $r['desc']?></td>
       <td><?php echo $r['rate']?></td>
    
          


     
    </tr>
   <?php } ?>
   
</table>




<?php include 'footer.php' ?> 