<?php include 'labheader.php';
  $labid=$_SESSION['labid'];
if(isset($_POST['testadd'])){
    extract($_POST);

    $q="insert into labtests values (null,'$labid','$test','$desc','$rate')";
    insert($q);
    return redirect('labaddtest.php');
}

?> 
<section id="hero">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
      <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid grey; box-shadow: 2px 4px 16px grey;" >
      <center>
      <h3 class="text-white">Add Laboratory Tests</h3>    
<form action="" method="POST" class="form-group">
        <center>
    <table class="table" style="color: white;">
            <tr>
                <th>Test Name</th>
                <td><input type="text" class="form-control" required name="test" id=""></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><textarea name="desc" class="form-control" required id="" cols="25" rows="4"></textarea></td>
            </tr>
            <tr>
                <th>Test Rate</th>
                <td><input type="numbe" class="form-control" required name="rate" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input class="btn btn-success" type="submit" name="testadd" id=""></td>
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