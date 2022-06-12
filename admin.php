<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form action="export.php" method="post">
    <button type="submit" name="export">
        Export
    </button>
</form>

<form action="adminpdfgenerate.php" method="post">
    <label for="rollno"></label>
    <input type="text" id="rollno" name="rollno" required>
    <button type="submit" name="genpdf">
        Generate PDF
    </button>
</form>

</body>
</html>
