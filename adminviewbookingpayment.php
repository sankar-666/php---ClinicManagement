<?php include 'adminheader.php' ?> 
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
<h2>View Booking Payments</h2>
<table class="table"> 
    <tr align="center">
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>

        <th>Gender </th>

        <th>Amount </th>

        <th>Payment Date </th>
     
    
    </tr>
    <?php 
  $q="SELECT * FROM `patients` INNER JOIN `booking` USING (patient_id) INNER   JOIN SCHEDULE USING (schedule_id) where patient_id='$pid' and booking_id='$bid'";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['firstname'].$r['lastname']?></td>
       <td><?php echo $r['phone']?></td>
       <td><?php echo $r['email']?></td>
       <td><?php echo $r['gender']?></td>
       <td><?php echo $r['feeamount']?></td>
       <td><?php echo $r['date']?></td>
         

     
    </tr>
   <?php } ?>
   
</table>




<?php include 'footer.php' ?> 