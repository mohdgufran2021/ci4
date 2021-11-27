<?php
if (isset($_REQUEST['submit']))
    {
        echo '<pre>';
        print_r($_FILES);
    }

?>



<html>
<head>
    <title>Form</title>
</head>
<body>

<form action="form.php" method="post" enctype="multipart/form-data">

    <input type="file" name="File">

<input type="submit" name="submit" value="Submit"><br><br><br>

</form>

</body>
</html>
