<html>
<a href="profile.php"> Go to Homepage </a></br>
</html> 

<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " is being analyzed";
    
echo passthru("\n". 'flawfinder ' . $target_path); 
} else{
    echo "There was an error uploading the file, please try again!";
}
?>

