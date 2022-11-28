<?php include 'adminheader.php' ?>
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
   th{
       background: lightgrey !important;
    }
</style>
<center>
    <h2>View Payments</h2>
<table style='width:1300px' class="table"> 
    <tr align="center">
        <th>Name </th>
        <th>Amount </th>
       

       
        <th >Payment Type </th>
        <th></th>
        <th></th>
        <th></th>
    
    </tr>
    <?php 
  $q="SELECT *,concat(firstname,' ',lastname) as name FROM `booking` INNER JOIN `patients` USING (patient_id)";
  $res=select($q);


//   echo $q="select concat(firstname,' ',lastname) as name,paymenttype,amount from payments inner join `medicineprescription` on `medicineprescription`.med_pres_id=payments.book_id inner join booking on `medicineprescription`.book_id=`booking`.booking_id inner join `patients` using (patient_id)
//  union 
//  select concat(firstname,' ',lastname) as name,paymenttype,amount from payments inner join `testprescription` on `testprescription`.test_pres_id=payments.book_id inner join booking on `testprescription`.book_id=`booking`.booking_id inner join `patients` using (patient_id)
//  union
//  select concat(firstname,' ',lastname) as name,paymenttype,amount from payments inner join `booking` on `booking`.booking_id=payments.book_id inner join schedule using (schedule_id) inner join `patients` using (patient_id)";
//   $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
       <td><?php echo $r['name']?></td>
       <td><?php echo $r['phone']?></td>
       <td><?php echo $r['email']?></td>
            <td><a class="btn btn-success" href="adminviewbookingpayment.php?bid=<?php echo $r['booking_id'] ?>&pid=<?php echo $r['patient_id'] ?>">Booking Payment</a></td>
            <td><a class="btn btn-primary" href="adminviewmedicinepayment.php?bid=<?php echo $r['booking_id'] ?>&pid=<?php echo $r['patient_id'] ?>">Medicine Payment</a></td>
            <td><a class="btn btn-danger" href="adminviewlabpayment.php?bid=<?php echo $r['booking_id'] ?>&pid=<?php echo $r['patient_id'] ?>">Lab Payment</a></td>


     
    </tr>
   <?php } ?>
   
</table>

<?php include 'footer.php' ?> 