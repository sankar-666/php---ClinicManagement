<?php include 'adminheader.php';

if(isset($_POST['rep'])){
    extract($_POST);

    $q="update complaint set reply='$rply' where complaint_id='$cid'";
    update($q);
    return redirect('adminviewcomplaints.php');
}
?>
<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>

<?php if(isset($_GET['cid'])) {?>

    <form action="" method="POST">
            <center>
                <h3>Reply Complaint</h3>    
        <table>
            
                <tr>
                    <th>Reply</th>
                    <td><textarea class="form-control" required name="rply" id="" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="rep" id=""></td>
                </tr>
            </table>
        </form>

    <?php }else{?>

<center>
    <h2>View Complaints</h2>
<table style='width:1200px' class="table"> 
    <tr align="center">
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>

        <th>Gender </th>

        <th>Complaint </th>

        <th>Date</th>
        <th>Reply</th>
    
    
    </tr>
    <?php 
  $q="SELECT * from complaint inner join patients using (patient_id)";
  $res=select($q);


		$i=1;
		foreach ($res as $r) { 
            
            ?>
            <tr align="center">

                <td><?php echo $r['firstname'].$r['lastname']?></td>
                <td><?php echo $r['phone']?></td>
                <td><?php echo $r['email']?></td>
                <td><?php echo $r['gender']?></td>
            <td><?php echo $r['complaint']?></td>
            <td><?php echo $r['date']?></td>

            <?php if($r['reply'] == 'reply pending'){?>
                <td><a class="btn btn-primary" href="?cid=<?php echo$r['complaint_id']?>">Reply Now</a></td>

                <?php }else{
                    ?>
                <td><?php echo $r['reply']?></td>       

                    <?php }?>
            
            </tr>
            <?php }?>
            <?php }?>
   
</table>

<?php include 'footer.php' ?> 