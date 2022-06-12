<?php
    require ('config.php');
    session_start();


    $roll = $_SESSION['Roll_No'];

?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>

    <div class="container">
        <div class="row">
                <form action="pdfgenerate1.php" method="post">
                    <label>Click the below button to generate your PDF.</label><br>
                    <label style="background-color: yellow;">Kindly 
                    <label style="color: red;">download</label> 
                     and 
                    <label style="color: red;">save</label> 
                    the PDF in your Device.</label>
                    <hr>
                    <button type="submit" name="genpdf" class="btn btn-success">Generate PDF</button>
                </form>
        </div>
    </div>




</body>
</html>
