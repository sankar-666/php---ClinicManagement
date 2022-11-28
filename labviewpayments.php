<?php include 'labheader.php';

$labid=$_SESSION['labid'];
?> 
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
      
        align-items: center;
    }
</style>
<center>
<h2>View Payments</h2>
<table  class="table"> 
    <tr  align="center">
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>

        <th>Gender </th>
        <th>Amount</th>

    
    </tr>
    <?php 
   $q="SELECT * FROM `patients` INNER JOIN `booking` using (patient_id) inner join `testprescription` on `testprescription`.`book_id`=booking.`booking_id` 
  inner join labtests using (lab_test_id) inner join payments on payments.book_id = testprescription.test_pres_id where lab_id='$labid' group by test_pres_id ";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['firstname'].$r['lastname']?></td>
       <td><?php echo $r['phone']?></td>
       <td><?php echo $r['email']?></td>
       <td><?php echo $r['gender']?></td>
       <td><?php echo $r['rate']?></td>
       <!-- <td><a class="btn btn-success" href="labviewlabpayment.php?userid=<?php echo $r['patient_id']?>&bid=<?php echo $r['booking_id']?>">View Payment Details</a></td> -->
 


     
    </tr>
   <?php } ?>
   
</table>




<?php include 'footer.php' ?> 