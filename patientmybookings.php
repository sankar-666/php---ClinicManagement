<?php include 'patientheader.php';
    $pid=$_SESSION['pid'];
    extract($_GET);




?> 
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
    <h2>View Timings</h2>
<table style='width:800px' class="table "> 
    <tr align="center">
        <th>Index No</th>
        <th>Start time </th>
        <th>End Time </th>
        <th>Date </th>
        <th>Fee Amount</th>
        
       
    
    </tr>
    <?php 
  $q="    SELECT * FROM `schedule`  inner join booking using (schedule_id) where patient_id='$pid'";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
    <td><?php echo $i ?></td>
       <td><?php echo $r['starttime']?></td>
       <td><?php echo $r['endtime'] ?></td>
       <td><?php echo $r['date'] ?></td>
       <td><?php echo $r['feeamount'] ?></td>
       <?php if( $r['status'] == 'accepted by staff'){ ?>
            <td><a class="btn btn-success" href="patientpayment.php?sid=<?php echo $r['booking_id'] ?>&amount=<?php echo $r['feeamount'] ?>">Make Payment</a></td>
            <?php }else{?>
                <td> <?php echo $r['status'] ?></td>
                <?php }?>
           
    </tr>   
    <?php
 $i++;
 }?>
   
</table>

<?php include 'footer.php' ?> 