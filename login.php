<?php include 'publicheader.php';

if(isset($_POST['btn'])){

    extract($_POST);
    
    
    $q="select * from login where username='$uname' and password='$pasw'";
    $res=select($q);
    if (sizeof($res) > 0){
        $_SESSION['lid']  = $res[0]['login_id'];
        $lid=$_SESSION['lid'];
    if ($res[0]['usertype'] == 'admin'){
        alert("Login Successfully");
        return redirect("adminhome.php");
    } else if($res[0]['usertype'] == 'staff'){
        $q="select * from staff where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['sid']=$val[0]['staff_id'];
            alert("Login Successfully");
            return redirect("staffhome.php");
        }
    }
    else if($res[0]['usertype'] == 'patient'){
        $q="select * from patients where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['pid']=$val[0]['patient_id'];
            $pid=$_SESSION['pid'];
            alert("Login Successfully");
            return redirect("patienthome.php");
        }
    }

    else if($res[0]['usertype'] == 'lab'){
        $q="select * from laboratory where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['labid']=$val[0]['lab_id'];
            $labid=$_SESSION['labid'];
            alert("Login Successfully");
            return redirect("labhome.php");
        }
    }

    else if($res[0]['usertype'] == 'pharmacy'){
        $q="select * from pharmacy where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['pharmid']=$val[0]['pharma_id'];
            $pharma_id=$_SESSION['pharmid'];
            alert("Login Successfully");
            return redirect("pharmhome.php");
        }
    }
}
}
?> 


<section id="hero">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center" style="display: flex;align-items: center;justify-content:center">
          <div data-aos="zoom-out" style="width: 400px;box-sizing: content-box;padding: 50px; border: 2px solid lightblue ; box-shadow: 2px 4px 16px lightblue;" >
          
          <style>
input[type='text']{
  color: red;
  
}
label{
  color: black;
  font-weight: 500;
  font-size:medium;
  font-family: serif;
  
}
tr{
  border-bottom: 1px solid transparent;
}
input[type='submit']{
  width: 120px !important;
}
input[type='text'],input[type='password'],input[type='submit']{
  border-radius: 1px !important;
}
#loghead{
  font-weight: 800;
  font-size: 50px !important;
  font-family: "Montserrat", sans-serif;
  font-family: "Open Sans", sans-serif;
  text-shadow: black -1px 0,
                #D5D5D1 2px 0;
}

          </style>
          
          <center>
    <h2  class="text-white" id="loghead">Login</h2>
<form  method="post" >
    <table class="table" >
      
      
      <tr >
        <td class="form-floating mb-3" >

          <input type="text" class="form-control" id="uname" required name="uname" placeholder="username" >
          <label  for="uname">Username</label>
        </td>
      </tr>
       

     <tr>
       
        <td  class="form-floating ">
        <input type="password" class="form-control" required name="pasw" placeholder="Password" id="passw">
        <label  for="passw">Password</label>
      </td>
      </tr>
           
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-secondary" name="btn" id=""></td>
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
        <use xlink:href="#wave-path" x="50" y="9" fill="lightblue">
      </g>
    </svg>

  </section><!-- End Hero -->





<?php include 'footer.php' ?> 