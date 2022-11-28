<?php include 'adminheader.php';

if(isset($_POST['addtest'])){
    extract($_POST);
    // alert($bid);
    $q="insert into testprescription values(null,'$bid','$testval','$desc','pending','pending')";
    insert($q);
    return redirect("adminviewbookedpatients.php");
}

if(isset($_POST['addmed'])){
    extract($_POST);
    // alert($bid);
    $q="insert into medicineprescription values(null,'$mid','$med',curdate(),'$meddesc','pending')";
    insert($q);
    return redirect("adminviewbookedpatients.php");
 
}
?>
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>

<?php if(isset($_GET['mid'])){?>


    <form action="" method="POST">
            <center>
                <h3>Add Medicine Details</h3>    
        <table>
            <tr>
                <th>Select Medicine</th>
                <td>
                    <select name="med" id="">
                    <?php 

$q="select * from medicines";
$res=select($q);

$i=1;
foreach ($res as $r) {
?>
                        <option value="<?php echo $r['medicine_id'] ?>"><?php echo $r['medicinename'] ?></option>

                        <?php }?>
                    </select>
                </td>
            </tr>
                <tr>
                    <th>Medicine Description</th>
                    <td><textarea class="form-control" required name="meddesc" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="addmed" id=""></td>
                </tr>
            </table>
        </form>

    <?php }else{?>

<?php if(isset($_GET['bid'])){?>

        <form action="" method="POST">
            <center>
                <h3>Add Lab Test details</h3>    
        <table>
        <tr>
                <th>Select Medicine</th>
                <td>
                    <select name="testval" id="">
                    <?php 

$q="select * from labtests";
$res=select($q);

$i=1;
foreach ($res as $r) {
?>
                        <option value="<?php echo $r['lab_test_id'] ?>"><?php echo $r['test_name'] ?></option>

                        <?php }?>
                    </select>
                </td>
            </tr>
                <tr>
                    <th>Details</th>
                    <td><textarea class="form-control" required name="desc" id="" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn btn-secondary" type="submit" name="addtest" id=""></td>
                </tr>
            </table>
        </form>


        <br>
        <br>
        <br>
        <h5>View Reports</h5>
        <table style="width: 400px;" class="table"> 
            <tr style="background-color: lightgrey;">
                <th>Prescription</th>
                <th>Report of Prescription</th>
            </tr>
            <?php 

            $q="select * from  testprescription where book_id='$bid'";
            $res=select($q);

            $i=1;
            foreach ($res as $r) {
            ?>
            <tr align="center">
            <td><?php echo $r['lab_pres_desc']?></td>
       <td><?php echo $r['report_desc']?></td>
            </tr>
            <?php }?>
        </table>

    <?php }else{?>
<center>
    <h2>Booked Patients</h2>
<table style='width:1400px;margin-bottom: 50px;' class="table"> 
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
        <th>Fee </th>
    
    </tr>
    <?php 
   $q="SELECT * FROM `schedule` INNER JOIN booking USING (schedule_id) INNER JOIN patients USING (patient_id) where status='Payment Completed'";
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
     


       <td><a class="btn btn-warning" href="?mid=<?php echo $r['booking_id'] ?>">Add Medicines</a></td>
       <td><a class="btn btn-primary"  href="?bid=<?php echo $r['booking_id'] ?>">Lab Test</a></td>
       <td><a class="btn btn-primary"  href="admin_view_med_details.php?mmid=<?php echo $r['booking_id'] ?>">View Medicines</a></td>
   </tr>
   <?php } ?>
   <?php }?>
   <?php }?>
   
</table>

<?php include 'footer.php' ?> 