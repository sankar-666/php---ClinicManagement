<?php include 'pharmheader.php';
$pharma_id=$_SESSION['pharmid'];
if(isset($_POST['testadd'])){
    extract($_POST);

    $q="insert into medicines values (null,'".$_SESSION['pharmid']."','$test','$desc','$dt','$rate')";
    insert($q);
    return redirect('pharmaddmeddetails.php');
}

if(isset($_GET['mid'])){
    extract($_GET);

     $q="delete from medicines where medicine_id='$mid'";
    delete($q);
    return redirect("pharmaddmeddetails.php");
}

if(isset($_POST['updates'])){
    extract($_POST);

    $q="update medicines set medicinename='$test', `desc`='$desc', expirydate='$dt', rate='$rate' where medicine_id='$uid' ";
    update($q);
    return redirect('pharmaddmeddetails.php');
}


// if(isset($_GET['uid'])){
//     extract($_GET);

//      $q="delete from medicines where medicine_id='$mid'";
//     delete($q);
   
// }
?> 
<section id="hero">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
      <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid grey; box-shadow: 2px 4px 16px grey;" >
      <center>

      <?php if(isset($_GET['uid'])){?>
        <h3 class="text-white">Update Medicine Details</h3>    
<form action="" method="POST">
<?php 
  $q="SELECT * from medicines where medicine_id='$uid' ";
  $res=select($q);


		$i=1;
		?>
    <table class="table text-white" >
            <tr>
                <th>Medicine Name</th>
                <td><input type="text" value="<?php echo $res[0]['medicinename']?>"  required class="form-control" name="test" id=""></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><input type="text" name="desc" value="<?php echo$res[0]['desc']?>" class="form-control"></textarea></td>
            </tr>
            <tr>
                <th>Expeiry Date</th>
                <td><input type="date" value="<?php echo $res[0]['expirydate']?>" required class="form-control" name="dt" id=""></td>
            </tr>
            <tr>
                <th>Medicine Rate</th>
                <td><input type="numbe" value="<?php echo $res[0]['rate']?>" required class="form-control" name="rate" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input class="btn btn-secondary" type="submit" name="updates" value="update" id=""></td>
            </tr>
        </table>
    
    </form>

        <?php }else{?>
      <h3 class="text-white">Add Medicine Details</h3>    
<form action="" method="POST">
   
    <table class="table text-white" >
            <tr>
                <th>Medicine Name</th>
                <td><input type="text" required class="form-control" name="test" id=""></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><textarea name="desc" required class="form-control" id="" cols="25" rows="4"></textarea></td>
            </tr>
            <tr>
                <th>Expeiry Date</th>
                <td><input type="date" required class="form-control" name="dt" id=""></td>
            </tr>
            <tr>
                <th>Medicine Rate</th>
                <td><input type="numbe" required class="form-control" name="rate" id=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input class="btn btn-primary" type="submit" name="testadd" id=""></td>
            </tr>
        </table>
    </form>
    <?php }?>
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
    <h3 style="font-size: 30px;">View medicines here</h3>
    <table style="width:900px" class="table">
        <tr align="center">
            <th>Name</th>
            <th>discription</th>
            <th>Exp date</th>
            <th>Rate</th>
        </tr>
        <?php 
  $q="SELECT * from medicines where pharma_id='$pharma_id' ";
  $res=select($q);


		$i=1;
		foreach ($res as $r) { 
            
            ?>
            <tr align="center">

            <td><?php echo $r['medicinename']?></td>
            <td><?php echo $r['desc']?></td>
            <td><?php echo $r['expirydate']?></td>
            <td><?php echo $r['rate']?></td>
            <td><a class="btn btn-success" href="?uid=<?php echo $r['medicine_id']?>">update</a></td>
            <td><a class="btn btn-danger" href="?mid=<?php echo $r['medicine_id']?>">Delete</a></td>
            </tr>
            <?php }?>
    </table>

    
   





<?php include 'footer.php' ?> 