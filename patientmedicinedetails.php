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
    <h2>View Medicine Details</h2>
<table class="table"> 
    <tr>
        <th>Index No</th>
        <th>Pharmacy Name </th>
        <th>phone </th>
        <th>Email</th>
        <th>Medicine Name</th>
        <th>Medicine Description</th>
        <th>Expeiry Date</th>
        <th>Rate</th>
        <th>Prescription Date</th>
        <th>Prescription details</th>
        <th>Status</th>
        
       
    
    </tr>
    <?php 
  $q="SELECT *,medicineprescription.status AS st FROM `pharmacy` INNER JOIN `medicines` USING (pharma_id) INNER JOIN `medicineprescription` USING (medicine_id) INNER JOIN `booking` ON `booking`.booking_id=`medicineprescription`.`book_id` WHERE patient_id='$pid'";
  $res=select($q);

  
//   $b=$res['']
		$i=1;
		foreach ($res as $r) { 
            
            ?>
    <tr align="center">
        <td><?php echo $i++ ?></td>
       <td><?php echo $r['pharmacyname']?></td>
       <td><?php echo $r['phone'] ?></td>
       <td><?php echo $r['email'] ?></td>
       <td><?php echo $r['medicinename'] ?></td>
       <td><?php echo $r['desc'] ?></td>
       <td><?php echo $r['expirydate'] ?></td>
       <td><?php echo $r['rate'] ?></td>
       <td><?php echo $r['datetime'] ?></td>
       <td><?php echo $r['med_pres_desc'] ?></td>

   

 <?php 
    if ($r['st']=="pending") 
    {
        ?>

 <td><a class="btn btn-success" href="patientmedpayment.php?bid=<?php echo $r['med_pres_id']?>&med=<?php echo $r['medicine_id']?>&amount=<?php echo $r['rate'] ?>">Make Payment</a></td>
  
        <?php
    }else  {
     ?>
        <td><?php echo $r['st'] ?></td>

     <?php
    }

   ?>

<?php
 }?>
   
</table>

<?php include 'footer.php' ?> 