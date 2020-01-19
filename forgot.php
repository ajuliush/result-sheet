<?php
$rand=rand();
$file=fopen('reset_pass.txt', 'a');
fwrite($file, $rand.PHP_EOL);
fclose($file);
// 1. create a form to get username from user
// 2. read the user.csv file and check whether the username match or not 
// 3. if matched then echo the following url 
// 4. otherwise redirect to the login page 
$file=fopen('images/user.csv', 'r');
$a=array();
while ($u= fgetcsv($file)) {
array_push($a, $u[0]);

}
// var_dump($array);exit();
fclose($file);
if(isset($_POST['ok'])){
if (in_array($_POST['username'], $a)) {
	echo $url= '<a href="http://localhost/students_result/get_code.php?code='.$rand.'">http://localhost/students_result/get_code.php?code='.$rand.'</a>';
}
else{


 header('Location: login.php');
}
}

?>
<form action="" method="post">
	<input type="text" name="username"> <br>
	<input type="submit" value="Reset" name="ok">

</form>