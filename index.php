<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./dist/css/globalStyles.css">
    <title>Askiladd</title>
</head>

<body>
    <?php include './components/_navbar.php';?>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '<div class="alert alert-success mx-4 mt-3" role="alert">
        <h4 class="alert-heading">Hello!</h4>
        <h5 class="alert-heading">'.$_SESSION['username'].'</h5>
        <p>Aww yeah, you successfully logged in now shall we get started.</p>
        </div>';
    }
    else{
        echo '<div class="alert alert-success mx-4 mt-3" role="alert">
        <h4 class="alert-heading">Hello there!</h4>
        <h5 class="alert-heading">Login if already a user or Signup now</h5>
        </div>';
    }
    ?>
    <div class="container">
        <h1 class='text-center mt-3'>Catogories</h1>
        <div class="underline mx-auto"></div>
    </div>
    <div class="container">
        <div class="row">
        <?php include './components/_catogories.php'?>
        </div>
    </div>
    <?php include './components/_footer.php'?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>