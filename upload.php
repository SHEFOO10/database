<?php 
 include '/app/connection.php';
$conne = new connection();
$conne->selectdb();
#connection string
$conn = mysqli_connect($conne->servername,$conne->username,$conne->password,$conne->data);
 
if (isset($_POST["submit"])){
     #retrieve file title,
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    print_r($_FILES);
     #upload directory path
    $uploads_dir = 'images';
    #TO move the uploaded file to specific location
    
    if (move_uploaded_file($tname, $uploads_dir.'/'.$pname)){
        echo "success";
    }else {
        echo "failed move!";
    }
}
        

    
    if ($_FILES["file"]["error"] === 4){
        echo "not uploaded";
    }else{
    #sql query to insert into database
            $sql = "INSERT into file(url) VALUES('$pname')";
        
            if(mysqli_query($conn,$sql)){
        
            echo "File Sucessfully uploaded";
            }
            else{
                echo "Error";
            }
  } 
  $unlink = unlink("/app/images");
  if ($unlink){
    echo "unlinked sucessfullly";
}else {
    echo "failed";
} ?>
<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 <?php
 $sql = "SELECT * FROM file"; 
 $ree = mysqli_query($conn, $sql);
 if (mysqli_num_rows($ree) > 0){
     while($images =mysqli_fetch_assoc($ree)) { ?>
     <img src="<?php echo $images['url'];?>" alt="shefoo">
 
<?php }}?>

</form>
 
</body>
</html>
