<?php include "database.php";
// echo print_r();
   if(isset($_GET['id'])){
        $showUpdata = $obj->showDataUpdate($_GET["id"]);
        // print_r( $showUpdata);
    }else{
      $showUpdata = "";
    }
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oops Data Fetching</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>

  <body class="bg-dark text-white">

     <div class="addDataClass d-flex flex-column align-items-center mt-5">

       <h4>Fetching Data with DataBase using Oops</h4>

       <button type="button" class="btn btn-info"><a class="nav-link text-white px-4 py-2 rounded-2 fw-semibold"  href="view_data.php">View all Data</a></button>

   
           <div class="mt-5">
            <?php if(isset($_GET["id"])) {?>
                    <h2>Update Data </h2>
                      <?php } else {?>
                        <h2>Add Data</h2>
            <?php }?>
          </div>
    
        <form style="width: 25%;" action="database.php" method="post">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="firstname" value="<?php if(!empty($showUpdata['firstname'])){echo $showUpdata["firstname"];}?>" class="form-control" id="firstName" placeholder="First Name" required aria-describedby="name">
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="lastname" value="<?php if(!empty($showUpdata['lastname'])){echo $showUpdata["lastname"];}?>" class="form-control" id="lastName" placeholder="Last Name" required aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="<?php if(!empty($showUpdata['email'])){echo $showUpdata["email"];}?>" class="form-control" placeholder="Email" required id="exampleInputPassword1">
            </div>
            <!-- <input type="hidden" name="id" value="<?php echo $_GET['id']?>"> -->
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
            <?php if(isset($_GET["id"])) {?>
              <button type="submit" name="update" class="btn btn-primary">Update</button>
              <?php } else {?>
                <button type="submit" name="submit" class="btn btn-primary">Add Data</button>
              <?php }?>
        </form>
        
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>