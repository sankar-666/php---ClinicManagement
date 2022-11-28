<?php include 'patientheader.php';
    $pid=$_SESSION['pid'];
    extract($_GET);


if(isset($_GET['sid'])){
extract($_GET);
$q="insert into booking values(null,'$sid','$pid','pending')";
insert($q);

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
    <h2>View Timings</h2>
<table style='width:800px' class="table "> 
    <tr align="center">
        <th>Index No</th>
        <th>Start time </th>
        <th>End Time </th>
        <th>Date </th>
        <th>Fee </th>
        
       
    
    </tr>
    <?php 
  $q="    SELECT * FROM `schedule`  WHERE schedule_id NOT IN (SELECT schedule_id FROM `booking`)";
  $res=select($q);
	
		$i=1;
		foreach ($res as $r) { ?>
    <tr align="center">
    <td><?php echo $i ?></td>
       <td><?php echo $r['starttime']?></td>
       <td><?php echo $r['endtime'] ?></td>
       <td><?php echo $r['date'] ?></td>
       <td><?php echo $r['feeamount'] ?></td>
   
            <td><a class="btn btn-success" href="?sid=<?php echo $r['schedule_id'] ?>">Book</a></td>
           
    </tr>   
    <?php
 $i++;
 }?>
   
</table>

<?php include 'footer.php' ?> 