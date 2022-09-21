<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fStudent form</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $name = $_GET['name'];
    $calss = $_GET['calss'];

} else{
    $id = "";
    $name = "";
    $calss = "";
}



?>
    <div class="container">
        <div class="row justify-content-center m-4">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-body">
                        <form action="operation.php" method="POST">

                            <div class="form-group m-2">
                            <label for="" class="form-label">Enter Student_id</label>
                            <input type="text" name="student_id" id="" class="form-control" value="<?php echo $id ?>">
                            </div>

                              <div class="form-group m-2">
                              <label for="" class="form-label">Enter Student_name</label>
                              <input type="text" name="student_name" id="" class="form-control" value="<?php echo $name ?>">
                              </div>

    

                            <div class="form-group m-2">
                            <label for="" class="form-label">Enter student_Class</label>
                            <input type="text" name="student_calss" id="" class="form-control" value="<?php echo $calss ?>">

                            </div>


                            <button type="submit" name="insert" class="btn btn-success">Save Info</button>
                            <button type="submit" name="update" class="btn btn-info">Update Info</button>
                            
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>