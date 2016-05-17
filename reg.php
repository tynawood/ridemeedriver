<?php //data.php
 error_reporting(E_ALL ^ E_DEPRECATED);
$db_hostname = 'localhost';
$db_database = 'kolabo8c_baja';
$db_username = 'kolabo8c_bajaman';
//$db_username = 'ofm';
//$db_password = 'obuasi@1';
$db_password = 'bajaman';

// Connect to server.
$db_server = mysql_connect($db_hostname, $db_username, $db_password)
    or die("Unable to connect to MySQL: " . mysql_error());
  
// Select the database.
mysql_select_db($db_database)
    or die("Unable to select database: " . mysql_error());
  
     $images_dir = "photos";


/*function upload_img(){
	
	if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
		$path="../img/".time()."_".$_FILES['image']['name'];
		if(move_uploaded_file($_FILES['image']['tmp_name'],$path)){
			
		}
	}
	return $path;
}
*








/*function upload_eventimg(){
	$path="pdf/1.pdf";
	if(isset($_FILES['newspaper_complete']) && !empty($_FILES['newspaper_complete']['tmp_name'])){
		$path="../pdf/".time()."_".$_FILES['newspaper_complete']['name'];
		if(move_uploaded_file($_FILES['newspaper_complete']['tmp_name'],$path)){
			
		}
	}
	return $path;
}
*/


// Get values from form
    if (isset($_POST['submit']))
        
       
       /* $nimage = $_FILES['news_image'] ;
        //print_r($nimage);
        $nheader = $_FILES['news_image']['news_header'] ;
        $nimage = addslashes(file_get_contents($_FILES['news_image']['tmp_name'])) ; 
     */
        $newsheadersadqdqd = $_POST['news'];
$username = $_POST['username'];
$email = $_POST['email'];
$pinny    =hash($_POST['password']);
$bookid = "0";	



//$eheader        = $_POST['event_header'];
//$eimage        = $_POST['event_image'];
//$edate        = $_POST['event_date'];
//$esubmission       = $_POST['event_submission_date'];
//$nimage    = upload_img();
//$ncomplete   = upload_eventimg();

// Insert data into mysql
$sql="INSERT INTO login (username,email,password,book_id)
VALUES ( '".mysql_real_escape_string($username)."','$email','".mysql_real_escape_string($pinny)."','$bookid')";



$result = mysql_query($sql); 
	
// if successfully insert data into database, displays message "Successful".
if($result){
header('Location:http://richardakita.com/hapnin/log.html');
}
else {
echo "ERROR";
}
	//	}
// close mysql
mysql_close();
?> 