<?php include 'patientheader.php';

extract($_GET);
// $bookid = $bid;

if (isset($_POST['btnn'])){
    extract($_POST);
    echo $q="insert into payments values(null,'$bid','$amount',curdate(),'medicine payment')";
    insert($q);
    $q="update medicineprescription set status='Payment Completed' where med_pres_id='$bid'";
    update($q);
    alert('Paid successfully');
    return redirect('patientmedicinedetails.php');
}

?> 

<section id="hero">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
      <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid black; box-shadow: 2px 4px 16px white;" >
      <center>
   <h1>Make Payment</h1>
   <form action="" method="POST">

   <table class="table text-white">
    <tr>
        <th>Amount </th>
        <td><input type="text" class="form-control" required value=" <?php echo $amount ?>" name="amount" id=""></td>
    </tr>
    <tr>
        <th>Ac/No </th>
        <td><input type="text" class="form-control" required name="" id=""></td>
    </tr>
    <tr>
        <th>Expiry date </th>
        <td><input type="text" class="form-control" required name="" id=""></td>
    </tr>
    <tr>
        <th>CVV* </th>
        <td><input type="text" class="form-control" required name="" id=""></td>
    </tr>
    <tr>
        <th> </th>
        <td align="center" colspan="2"><input type="submit" class="btn btn-primary" name="btnn" id=""></td>
    </tr>
   </table>
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



<?php include 'footer.php' ?> 