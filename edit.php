<?php


session_start();


require 'config.php';


if (isset($_GET['id'])) {

    $book = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);

}


if(isset($_POST['submit'])){


    $collection->updateOne(

        ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],

        ['$set' => ['name' => $_POST['name'], 'detail' => $_POST['detail'],]]

    );


    $_SESSION['success'] = "Book updated successfully";

    header("Location: index.php");

}


?>


<!DOCTYPE html>

<html>

<head>

    <title>PHP & MongoDB - CRUD Operation Tutorials - ItSolutionStuff.com</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body>


<div class="container">

    <h1>Create Book</h1>

    <a href="index.php" class="btn btn-primary">Back</a>


    <form method="POST">

        <div class="form-group">

            <strong>Name:</strong>

            <input type="text" name="name" value="<?php echo $book->name; ?>" required="" class="form-control" placeholder="Name">

        </div>

        <div class="form-group">

            <strong>Detail:</strong>

            <textarea class="form-control" name="detail" placeholder="Detail" placeholder="Detail"><?php echo $book->detail; ?></textarea>

        </div>

        <div class="form-group">

            <button type="submit" name="submit" class="btn btn-success">Submit</button>

        </div>

    </form>

</div>


</body>

</html>