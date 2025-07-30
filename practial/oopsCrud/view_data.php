<?php include "database.php";
// echo print_r();

  /*---Filter Search---*/
  if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
      $fetch_data = $obj->searchData($_GET['search']);
  } else {
      $fetch_data = $obj->getData();
  }

/*---Total Users Count---*/
$obj = new quries();
$total = $obj->totalUsers();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oops Data Fetching</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>

  <style>
    td a{
      text-decoration:none;
    }

    .errormsg{
      text-align:center;
    }

    .errormsg td{
      color:red;
      font-weight: 600;
    }
  </style>

  <body>

  <div class="container">

    <h4>Fetching Data with DataBase using Oops</h4>

    <div class="d-flex justify-content-between mt-5 mb-3 p-2">
      <button class="bg bg-success border-0 rounded"><a class="nav-link text-white px-4 py-2 rounded-2 "  href="add_data.php">Add Data</a></button>
      <h3>Total Users : <?php echo $total; ?></h3>
      <form class="d-flex m-0" role="search">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

<hr>

    <table class="table table-striped table-hover">

        <thead>
            <tr class="bg-info">
                <th scope="col">#</th>
                <th scope="col">User ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php 
              if (!empty($fetch_data)) {
                foreach($fetch_data as $key => $arr) {?>
                <tr>
                    <th><?php echo ++$key?></th>
                    <td><?php echo $arr['id']?></td>
                    <td><?php echo $arr['firstname']?></td>
                    <td><?php echo $arr['lastname']?></td>
                    <td><?php echo $arr['email']?></td>
                    <td><a href="add_data.php?id=<?php echo $arr['id']?>">Edit</a></td>
                    <td><a href="database.php?dltid=<?php echo $arr['id']?>">Delete</a></td>
                </tr>
            <?php }
            }else{
              echo "<tr class='errormsg'><td colspan='7'>No Data Found...</td></tr>";
            }
            
            ?>
        </tbody>

    </table>
    
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>