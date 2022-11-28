<?php include 'staffheader.php';

if(isset($_GET['bid'])){
    extract($_GET);

    $q="update booking set status='accepted by staff' where booking_id='$bid'";
    update($q);
    return redirect("staffviewbookings.php");
}

if(isset($_GET['did'])){
    extract($_GET);

    $q="update booking set status='rejected by staff' where booking_id='$did'";
    update($q);
    return redirect("staffviewbookings.php");
}

?>
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
    <h2>Booked Patients</h2>
<table style='width:1500px' class="table"> 
    <tr>
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>Blood group </th>
        <th>Gender </th>
        <th>DOB </th>
        <th>Start Time </th>
        <th>End Time </th>
        <th>Date </th>
        <th>Fee Amount </th>
        <th>Status</th>
    
    </tr>
    <?php 
  $q="SELECT * FROM `schedule` INNER JOIN booking USING (schedule_id) INNER JOIN patients USING (patient_id)";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['firstname'].$r['lastname']?></td>
       <td><?php echo $r['phone']?></td>
       <td><?php echo $r['email']?></td>
       <td><?php echo $r['bloodgroup']?></td>
       <td><?php echo $r['gender']?></td>
       <td><?php echo $r['dob']?></td>
       <td><?php echo $r['starttime']?></td>
       <td><?php echo $r['endtime']?></td>
       <td><?php echo $r['date']?></td>
       <td><?php echo $r['feeamount']?></td>
       <td><?php echo $r['status']?></td>
       <?php 
       if ($r['status']=="pending") 
       {
           ?>

        <td><a class="btn btn-primary" onclick="return confirm('Are you sure, Accept this request')" href="?bid=<?php echo $r['booking_id'] ?>">Accept</a></td>
       <td><a class="btn btn-secondary" onclick="return confirm('Are you sure, Deny this request')" href="?did=<?php echo $r['booking_id'] ?>">Reject</a></td>

           <?php
       }
        ?>
      
    </tr>
   <?php } ?>
   
</table>

<?php include 'footer.php' ?> 