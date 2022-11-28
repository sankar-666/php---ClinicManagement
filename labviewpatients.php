<?php include 'labheader.php';

if(isset($_POST['reply'])){
    extract($_POST);

    $q="update testprescription set report_desc='$desc' where test_pres_id='$mid'";
    update($q);
    return redirect("labviewpatients.php");
}

?> 
<center>




<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>


<?php if(isset($_GET['mid'])){?>

<form action="" method="POST">
        <center>
            <h3>Reply to Prescription</h3>    
    <table>
            <tr>
                <th>Reply</th>
                <td><textarea class="form-control" required name="desc" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2" ><input type="submit" class="btn btn-secondary" name="reply" id=""></td>
            </tr>
        </table>
    </form>


<?php }else{?>



<?php if(isset($_GET['pid'])){?>

<table style="width: 400px;" class="table"> 
            <tr style="background-color: lightgrey;">
                <th>Prescription</th>
                <th>Report of Prescription</th>
            </tr>
            <?php 

            $q="select * from  testprescription where book_id='$pid'";
            $res=select($q);

            $i=1;
            foreach ($res as $r) {
            ?>
            <tr align="center">
            <td><?php echo $r['lab_pres_desc']?></td>
       <td><?php echo $r['report_desc']?></td>
                <td><a class="btn btn-success" href="?pid&mid=<?php echo $r['test_pres_id']?>">reply</a></td>
    </tr>
            <?php }?>
        </table>

       

<?php }else{?>


    <h2>View Patients</h2>
<table style='width:1300px' class="table"> 
    <tr>
        <th>index No</th>
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>House name</th>
        <th>Place</th>
        <th>Gender </th>
        <th>Blood group </th>
        <th>Dob </th>
       
    
    </tr>
    <?php 
  $q="SELECT * FROM `schedule` INNER JOIN booking USING (schedule_id) INNER JOIN patients USING (patient_id) where status='Payment Completed'";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
         <td><?php echo $i ?></td>
       <td><?php echo $r['firstname'].$r['lastname'] ?></td>
       <td><?php echo $r['phone'] ?></td>
       <td><?php echo $r['email'] ?></td>
       <td><?php echo $r['housename'] ?></td>
       <td><?php echo $r['place'] ?></td>
       <td><?php echo $r['gender'] ?></td>
       <td><?php echo $r['bloodgroup'] ?></td>
       <td><?php echo $r['dob'] ?></td>
       <td>
        <a class="btn btn-primary" href="?pid=<?php echo $r['booking_id'] ?>">View Prescription</a>
       </td>
    </tr>
    <?php
 $i++;
 }?>
   
</table>
<?php }?>
<?php }?>

<?php include 'footer.php' ?> 