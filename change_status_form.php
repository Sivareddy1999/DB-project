<?php

$id = $_GET["id"];




?>

<html>

<head>
<link rel="stylesheet" href="styles.css" />
</head>

<body>
<div class="container">
    
  <div class="row justify-content-center">
<div class="col-sm-4"></div>
  <div class="col-sm-7">
   <div class="card">
     <h2 class="card-title text-center">Change Status Form</h2>
      <div class="card-body py-sm-4">
       <form _lpchecked="1" action="change_status.php" method="post">
          <div class="form-group">
             <input type="text" class="form-control" id="new_status" name="new_status" placeholder="New Status">
        </div>
        
        <div class="form-group">
            <input type="number" class="form-control" id="empid" name="empid" placeholder="<?php echo $id; ?>" value ="<?php echo $id; ?>" readonly>
        </div>
        <div class="d-flex flex-row align-items-center justify-content-between">
          <input type="submit" class="form-control" id="submit" name="submit
          " placeholder="Add Student">
                                <button class="btn btn-primary">Clear</button>
          </div>
       </form>
     </div>
  </div>
    </div>
</div>

</div>

</body>

</html>


