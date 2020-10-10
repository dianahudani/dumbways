<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <title>Dumb Course</title>
</head>
<body class="p-3">

    <?php while($row = mysqli_fetch_array($contents)){
    if($row['courseid']===$_GET['id_course']){
        ?>
        <div class="container p-3">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title mt-1"><?php echo $row['contentname']; ?></h3>
        </div>
        <div class="card-body">
            <h4 class="card-subtitle text-muted mb-3">Author: <?php echo $row['author']; ?></h4>
            <h5 class="card-subtitle  mb-2">Duration: <?php echo $row['duration']; ?></h5>
            <p class="card-text"><b>Type: <?php echo $row['type']; ?></b></p>
            <p class="card-text"><?php echo $row['description']; ?></p>
            <div class="embed-responsive embed-responsive-4by3">
                <iframe height="50%" src=<?php echo str_replace("watch?v=", "embed/", $row['video']); ?>></iframe>
            </div>
            <a href="server.php?del=<?php echo $row['id_content']?>" class="btn btn-danger mt-3 float-right">Delete Content</a>
        </div>
        </div>
        </div>
    <?php } }?>

    
</body>
</html>