<!DOCTYPE html>
<html>
<body>

<form  method="post" enctype="multipart/form-data">
    @csrf
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
