<?php
include 'conn.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list students</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
 <!-- <tr>
    <td>1</td>
    <td>filsan</td>
    <td>cs141</td>
 </tr>                   
 <tr>
    <td>2</td>
    <td>geedi</td>
    <td>cs141</td>
 </tr>                   
 <tr>
    <td>3</td>
    <td>faarax</td>
    <td>cs143</td>
 </tr>                    -->

                    <tbody>
                        <?php
                        $query = "select *from students";
                        $result = $conn->query($query);
                        $htmltable = "";

                        if($result){

                             $htmltable .= "<tr>";
                            while($row = $result->fetch_assoc()){
                                $htmltable .= "<td>" . $row['id'] . "</td>";
                                $htmltable .= "<td>" . $row['name'] . "</td>";
                                $htmltable .= "<td>" . $row['calss'] . "</td>";

                                $update_link ="form.php?" ."id=" .$row['id'] . "&name=" .$row['name'] ."&calss=" .$row['calss'];
                                $delete_link="operation.php?" ."id=" .$row['id'];
                                
                                $htmltable .= "<td>" .'<a href="'.$update_link.'" class="btn btn-success p-1 m-1">Update</a>
                                <a href="'.$delete_link.'" class="btn btn-danger p-1 m-1">Delete</a>'."</td>";
                                 $htmltable .= "</tr>";


                            } echo $htmltable;


                        } else{
                            $conn->error;
                        }



                    ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>