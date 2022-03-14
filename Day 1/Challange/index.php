<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

 <?php 
    $cars = array (
        "kiaPicanto" => array
        (
            "picanto" => "Picanto",
            "price" => 47900,
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aut?",
            "place" => "Vienna"
        ),
        "kiaRio" => array
        (
            "rio" => "Rio",
            "price" => 47900,
            "info" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aut?",
            "place" => "Wiener Neustadt"
        )
        );

 ?>
<h1 class="text-center">Car Agency</h1>
<hr>
<p class="container"><b>Find your car</b></p>
<div class="container">
<div class="col">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Kia</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Volvo</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Volkswagen</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Peugot</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
          <br>
          <div class="container">
                    <img src="" alt="">
                    <h3>Name: <?php echo "{$cars["kiaPicanto"]["picanto"]}"; ?></h3>
                    <p>Description: <?php echo "{$cars["kiaPicanto"]["info"]}"; ?></p>
                    <p></p>
                    <ul>
                        <li>Price:<?php echo "{$cars["kiaPicanto"]["price"]}"; ?></li>
                        <li>Location:<?php echo "{$cars["kiaPicanto"]["place"]}"; ?></li>
</ul>
              
                <br>
    
                <div>
                <img src="" alt="">
                    <h3>Name: <?php echo "{$cars["kiaRio"]["rio"]}"; ?></h3>
                    <p>Description: <?php echo "{$cars["kiaRio"]["info"]}"; ?></p>
                    <p></p>
                    <ul>
                        <li>Price:<?php echo "{$cars["kiaRio"]["price"]}"; ?></li>
                        <li>Location:<?php echo "{$cars["kiaRio"]["place"]}"; ?></li>
</ul>

                </div> 
          </div>



      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <div class="container">

          </div>


      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          <div class="container">

          </div>


      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
          <div class="container">

          </div>


      </div>
    </div>
  </div>
</div>

</div>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aut?

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>