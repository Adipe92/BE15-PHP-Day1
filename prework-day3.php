<?php 
require_once 'actions/db_connect.php';


//for loop

$a=0;

for($i=0; $i<5; $i++){

$a +=10;

}

echo $a;
?>


<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>PHP CRUD</title>
       <?php require_once 'components/boot.php'?>
       <style type="text/css">
           .manageProduct {          
               margin: auto;
           }
           .img-thumbnail {
               width: 70px !important;
               height: 70px !important;
           }
           td {          
               text-align: left;
               vertical-align: middle;

            }
           tr {
               text-align: center;
           }
       </style>
   </head>
   <body>
       <div class="manageProduct w-75 mt-3">   
           <div class='mb-3'>

                <a href= "create.php"><button class='btn btn-primary'type="button" >Add product</button></a>
           </div>
           <p class='h2'>Products</p>

            <table class='table table-striped'>
               <thead class='table-success'>
                   <tr>

                        <th>Picture</th>
                       <th>Name</th>
                       <th>price</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>

                </tbody>
           </table>
       </div>
   </body>
</html>