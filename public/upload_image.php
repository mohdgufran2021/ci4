<?php
if (isset($_POST['submit']))
{
    $dir = 'upload';
    $file_types = array('jpg', 'png', 'jpeg', 'svg');
    $filename = basename($_FILES['File']['name']);
    $filesize = $_FILES['File']['size'];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $error = 0;
    $str = '';

    if (!in_array($filetype, $file_types))
    {
        $error = 1;
        $str .= 'Invalid File Type';
    }

    elseif ($filesize<=20000)
    {
        $error = 1;
        $str .= 'Invalid File Size';
    }

    if ($error == 1)
    {
       echo $str;
    }
    else
    {
        if (move_uploaded_file($_FILES['File']['tmp_name'], $dir.'/'. $filename))
        {
        echo 'Image Successfully Uploaded';

        }
        else{
            echo 'Do Not Found';
        }
    }



}

?>



<html>
<head>
    <title>Form</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="File">

    <input type="submit" name="submit" value="Submit"><br><br><br>

</form>

</body>
</html>

