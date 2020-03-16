<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>Matrix</h1>
</div>

<div class="container">

    <?php
    foreach ($paineis as $painel){
        echo "<a class='btn btn-primary col-md-4' href='$painel->url'>$painel->nome</a><br><br> ";
    }
    ?>


</div>

</body>
</html>
