<?php include 'adminheader.php' ?> 
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
<h2>View Medicine Payments</h2>
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
  $q="SELECT * FROM `patients` INNER JOIN `booking` using (patient_id) inner join `medicineprescription` on `medicineprescription`.`book_id`=booking.`booking_id` 
  inner join medicines using (medicine_id) inner join payments on payments.book_id = medicineprescription.med_pres_id  where patient_id='$pid' and booking_id='$bid' AND paymenttype='medicine Payment'";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['firstname'].$r['lastname']?></td>
       <td><?php echo $r['phone']?></td>
       <td><?php echo $r['email']?></td>
       <td><?php echo $r['gender']?></td>
       <td><?php echo $r['amount']?></td>
       <td><?php echo $r['paymentdate']?></td>
         

     
    </tr>
   <?php } ?>
   
</table>




<?php include 'footer.php' ?> 