<?php
@include 'technicianheader.php';
@include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script type="text/javascript">
    //update form
</script>
  <script src="js/script.js" defer></script>
  <link rel="stylesheet" type="text/css" href="assets/css/tech.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <!--modal updating here-->
<div class="modal modal-signin position-static d-block bg-white-+ py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document" id="updating">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="fw-bold mb-0">Update</h2>
        <a href=""><button type="button" onclick="updateClose()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></a>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="" action="" method="post">
          <div>
            <center>
          <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="alert alert-danger" style="width: 100%;">'.$error.'</span>';
         };
      };
      ?>
    </center>
    </div>
      <br>
          
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="floatingInput" required placeholder="name@example.com" value="<?php echo $_SESSION['tech_email']?>">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="floatingInput" required placeholder="name@example.com" value="<?php echo $_SESSION['tech_email']?>">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control rounded-3" id="floatingInput" required placeholder="name@example.com" value="<?php echo $_SESSION['tech_email']?>">
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control rounded-3" id="floatingInput" required placeholder="enter password">
            <label for="floatingInput">Password</label>
          </div>
          
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" name="submit" type="submit">Sign In</button>

          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="button" onclick="success()" class="btn btn-primary">Update</button>
          <small class="text-muted"></small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          
          
          <a class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" href="register.php" >Rather Sign Up</a>
        </form>
      </div>
    </div>
</div>
</div>
<div class="container rounded bg-white mt-5 mb-5">

    <div class="row" id="cont">
       
        <div class="col-md-3 border-right">            
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $_SESSION['tech_name']?></span><span class="text-black-50"><?php echo $_SESSION['tech_email']?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form class="loading" id="form">
                
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $_SESSION['tech_name']; ?>"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $_SESSION['tech_phone']?>"></div>
                    
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    
                    
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $_SESSION['tech_email']?>"></div>
                   
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Location</label><input type="text" class="form-control" placeholder="country" value="<?php echo $_SESSION['tech_location']?>"></div>
                    
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary" onclick="success()" name="update" type="button">Save Profile</button></div>


            </div>

        </div>
        
        <div class="col-md-4" id="form2">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>

        <button type="button" onclick="updater()" class="btn btn-primary">Update</button>
    

        </div>
    </div>
    </form>
</div>
</div>
</div>

<link rel="stylesheet" type="text/css" href="assets/css/modal.css">

<div class="mod" id="mod">
    <div class="mod-body">
        <div class="mod-content">
            <i class="fa fa-check"></i>
            <h4>Success</h4>
            <button class="btn btn-success">Ok</button>
        </div>
    </div>
</div>



  </div>
</body>

<style type="text/css">
  body {
    background: ;
}

.form-control:focus {
    box-shadow:inset 35px 35px 73px #bebebe,
            inset -35px -35px 73px #ffffff; ;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
select{
    width: 80%;
    border-radius: 12px;
    padding: 10px;
}
.alert{
    display: none;
    margin-top: 6rem;
    
    
}

</style>
</html>