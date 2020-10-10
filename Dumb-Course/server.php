<?php 

    //initialize variables
    $id = 0;
    $title = "";
    $author = "";
    $content = "";

    //connect to mysql database
    $db = mysqli_connect('localhost', 'root', '', 'dumbcourse');

    //if submit button is clicked
    if(isset($_POST['authorSubmit'])){

        $name = $_POST['authorname'];

        $query = "INSERT INTO Author (name) VALUES ('". $name ."')";
        mysqli_query($db, $query);
        echo "<script>";
        echo "alert('Author Added Successfuly!');";
        echo "window.location = 'index.php';"; // redirect with javascript, after page loads
        echo "</script>";
    }

    if(isset($_POST['contentSubmit'])){

        $name = $_POST['contentname'];
        $video = $_POST['videolink'];
        $type = $_POST['contenttype'];
        $course = $_POST['coursename'];

        $query = "INSERT INTO Content (name, video_link, type, id_course) VALUES ('$name', '$video', '$type', '$course')";
        mysqli_query($db, $query);
        echo "<script>";
        echo "alert('Content Added Successfuly!');";
        echo "window.location = 'index.php';"; // redirect with javascript, after page loads
        echo "</script>";
    }


    if(isset($_POST['courseSubmit'])){

        $coursename = $_POST['coursename'];
        $authorname = $_POST['authorname'];
        $description = $_POST['description'];
        $duration = $_POST['duration'];
        $thumbnail = $_FILES['thumbnail']['name'];
    

    
        $query = "INSERT INTO Course (name, description, id_author, duration, thumbnail) VALUES ('$coursename', '$description', '$authorname', '$duration', '$thumbnail')";
        mysqli_query($db, $query);
        mysqli_error($db);
        $name       = $_FILES['thumbnail']['name'];  
        $temp_name  = $_FILES['thumbnail']['tmp_name'];
        if(isset($name) and !empty($name)){
            $location = 'images/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo "<script>";
                echo "alert('Course added Successfuly');";
                echo "window.location = 'index.php';"; // redirect with javascript, after page loads
                echo "</script>";
            }
        } else {
            echo 'You should select a file to upload !!';
        }

    }

    if(isset($_GET['del'])){
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM Content WHERE id = $id");
        echo "<script>";
        echo "alert('Deleted Successfuly');";
        echo "window.location = 'content.php';"; // redirect with javascript, after page loads
        echo "</script>";

    }


    //get records
    $results = mysqli_query($db, "SELECT Course.name AS name, description, Author.name AS author, Course.id AS id, thumbnail FROM Course, Author WHERE Course.id_author = Author.id ORDER BY id DESC");
    $authors = mysqli_query($db, "SELECT * FROM Author ORDER BY id");
    $courses = mysqli_query($db, "SELECT name, id FROM Course ORDER BY id");
    $contents = mysqli_query($db, "SELECT cn.name AS contentname, description, cn.video_link AS video, type, cs.name AS coursename, thumbnail, duration, a.name AS author, cs.id AS courseid, cn.id AS id_content FROM Course cs INNER JOIN Author a on a.id = cs.id_author INNER JOIN Content cn on cn.id_course = cs.id");
?>
