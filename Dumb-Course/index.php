<?php include('server.php'); ?>
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

      <h1 class="text-center p-2">Dumb Course</h1>
    

      <div class=mb-2>
        <button type="button" class="btn btn-info float-right mr-2" name="addcourse" data-toggle="modal" data-target="#addCourse">Add Course</button>

        <div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form style="margin:0 auto;" class="p-3" method="post" action="server.php" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="titleform">Course Name</label>
                    <input type="text" class="form-control" id="titleform" name="coursename">
                  </div>
                  <div class="form-group">
                    <label for="titleform">Author Name</label>
                    <select class="selectpicker form-control" name="authorname">
                    <?php 
                      while($row = mysqli_fetch_array($authors)){ ?>
                      <option value=<?php echo $row['id']?>><?php echo $row['name']?> </option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="titleform">Description</label>
                    <textarea type="text" class="form-control" id="titleform" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="titleform">Duration</label>
                    <input type="text" class="form-control" id="titleform" name="duration">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Thumbnail</label>
                    <input type="file" class="form-control-file" name="thumbnail">
                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary float-right" name="courseSubmit">Add Course</button>
                    <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-info float-right mr-2" data-toggle="modal" data-target="#addAuthor">Add Author</button>

        <!-- Modal -->
        <div class="modal fade" id="addAuthor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form style="margin:0 auto;" class="p-3" method="post" action="server.php">

                  <div class="form-group">
                    <label for="titleform">Author Name</label>
                    <input type="text" class="form-control" id="titleform" name="authorname">
                  </div>

                  <div>
                    <button type="submit" class="btn btn-primary float-right" name="authorSubmit">Add Author</button>
                    <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-info float-right mr-2" name="addContent" data-toggle="modal" data-target="#addContent">Add Content</button>
          <!-- Modal -->
          <div class="modal fade" id="addContent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form style="margin:0 auto;" class="p-3" method="post" action="server.php" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="titleform">Content Name</label>
                    <input type="text" class="form-control" name="contentname">
                  </div>
                  <div class="form-group">
                    <label for="titleform">Course Name</label>
                    <select class="selectpicker form-control" name="coursename">
                    <?php 
                      while($row = mysqli_fetch_array($courses)){ ?>
                      <option value=<?php echo $row['id']?>><?php echo $row['name']?> </option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="titleform">Type</label>
                    <input type="text" class="form-control" name="contenttype">
                  </div>
                  <div class="form-group">
                    <label for="titleform">Video Link</label>
                    <input type="text" class="form-control" name="videolink">
                  </div>
                  

                  <div>
                    <button type="submit" class="btn btn-primary float-right" name="contentSubmit">Add Content</button>
                    <button type="button" class="btn btn-secondary float-right mr-2" data-dismiss="modal">Close</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container mt-5">
        <div class="row">
          <?php 
            while($row = mysqli_fetch_array($results)){ ?>
            <div class="col-sm-4">
              <div class="card-columns-fluid p-1">
                <div class="card" style="width: 18rem;height: 30rem;">
                  <img class="card-img-top" style="height: 15vw;" src="images/<?php echo $row['thumbnail'] ?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $row['name'] ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['author']; ?></h6>
                      <p class="card-text"><?php echo $row['description'] ?></p>
                      <a href="content.php?id_course=<?php echo $row['id']?>" class="btn btn-info col">Details</a>
                    </div>
                </div>
              </div>
            </div>
          <?php
            }
          ?>
        </div>
      </div>
  </body>
</html>