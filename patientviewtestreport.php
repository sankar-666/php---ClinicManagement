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
    <h2>View Completed Test Report</h2>
<table class="table"> 
    <tr align="center">
        <th>Index No</th>
        <th>Lab Name </th>
        <th>Phone </th>
        <th>Email</th>
        <th>Lab Prescription</th>
        <th>Lab Prescription Report</th>
        <th>Test Name</th>
        <th>Test description</th>
        <th>Test Rate</th>
        <th>Status</th>
        
       
    
    </tr>
    <?php 
  $q="SELECT * FROM `laboratory` INNER JOIN `labtests` USING (lab_id) INNER JOIN `testprescription` USING (lab_test_id) inner join booking on booking.booking_id= testprescription.book_id where patient_id='$pid'";
  $res=select($q);

  
//   $b=$res['']
		$i=1;
		foreach ($res as $r) { 
            
            ?>
    <tr align="center">
        <td><?php echo $i ?></td>
       <td><?php echo $r['labname']?></td>
       <td><?php echo $r['phone'] ?></td>
       <td><?php echo $r['email'] ?></td>
       <td><?php echo $r['lab_pres_desc'] ?></td>
       <td><?php echo $r['report_desc'] ?></td>
       <td><?php echo $r['test_name'] ?></td>
       <td><?php echo $r['desc'] ?></td>
       <td><?php echo $r['rate'] ?></td>
       <?php if($r['test_status'] == 'pending'){?>
       <td><a class="btn btn-success" href="patienttestpayment.php?bid=<?php echo $r['test_pres_id']?>&amount=<?php echo $r['rate'] ?>">Make Payment</a></td>
                <?php }else{?>
                    <td><?php echo $r['test_status'] ?></td>
                    <?php }?>
       <?php }?>
   
</table>

<?php include 'footer.php' ?> 