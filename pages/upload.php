<h3>Upload Form</h3>
<?php
if(!isset($_POST['uppBtn']))
{
    ?>
<form action = "index.php?page=2" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="myFile">Select file for upload:</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="1024*1024*10"/>
        <input type="file" class="form-control" name="myFile" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary" name="uppBtn">Send File</button>
</form>
<?php
}
else
{
    if (isset($_POST['uppBtn']))
    {
        //errors handling
        if ($_FILES['myFile']['error'] != 0)
        {
            echo "<h3/><span style='color:red;'>Upload Error code: ".$_FILES['myFile']['error']."</span><h3/>";
            exit();           
        }

        if (is_uploaded_file($_FILES['myFile']['tmp_name']))
        {
            move_uploaded_file($_FILES['myFile']['tmp_name'], "./image/".$_FILES['myFile']['name']);
        }
        echo "<h3/><span style='color:green;'>File Upload Successful!</span><h3/>";
    }
}
?>