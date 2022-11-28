<?php include 'staffheader.php';




?> 

<div  style="width: 100%;height: 350px;background-image: url('assets/img/bacf.jpg');background-size: cover;margin-bottom: 20px;">

</div>
<style>
    table td{
        height: 70px;
    }
</style>
<center>
    <h2>View Patients</h2>
<table style='width:1300px' class="table"> 
    <tr align="center">
        <th>Index No</th>
        <th>Name </th>
        <th>Phone </th>
        <th>Email </th>
        <th>House name</th>
        <th>Place</th>
        <th>Gender </th>
        <th>Blood group </th>
        <th>DOB </th>
       
    
    </tr>
    <?php 
  $q="select * from patients";
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
    </tr>
    <?php
 $i++;
 }?>
   
</table>

<?php include 'footer.php' ?> 