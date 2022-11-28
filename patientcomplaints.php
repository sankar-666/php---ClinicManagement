<?php include 'patientheader.php';

$pid=$_SESSION['pid'];

if(isset($_POST['btn'])){

  
    extract($_POST);

    $q="insert into complaint values(null,'". $_SESSION['pid']."','$cmp','reply pending',curdate())";
    insert($q);
    return redirect("patientcomplaints.php  ");
}

?> 
<section id="hero">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
      <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid black; box-shadow: 2px 4px 16px white;" >
      <center>
   <h1 class="text-white">Compaints...?</h1>
   <form action="" method="POST">
    
       <table class="table text-white" >
           <tr>
               <th>Complaint</th>
               <td><input type="text" required class="form-control" name="cmp" id=""></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><input class="btn btn-secondary" type="submit" name="btn" id=""></td>
            </tr>
        </table >
    </form>
      </center>
        </div>
      </div>
    </div>
    
  </div>
</div>

<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
  <defs>
    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
  </defs>
  <g class="wave1">
    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
  </g>
  <g class="wave2">
    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
  </g>
  <g class="wave3">
    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
  </g>
</svg>

</section><!-- End Hero -->

<center>
    <h3 style="font-size: 30px;">View Repley Here,</h3>
    <table style="width:600px" class="table">
        <tr align="center">
            <th>Complaint</th>
            <th>Reply</th>
            <th>Date</th>
        </tr>
        <?php 
  $q="SELECT * from complaint where patient_id='$pid' ";
  $res=select($q);


		$i=1;
		foreach ($res as $r) { 
            
            ?>
            <tr align="center">

            <td><?php echo $r['complaint']?></td>
            <td><?php echo $r['reply']?></td>
            <td><?php echo $r['date']?></td>
            </tr>
            <?php }?>
    </table>




<?php include 'footer.php' ?> 