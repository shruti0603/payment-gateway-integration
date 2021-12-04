<!DOCTYPE html>
<html>
<head>
	<title>instamojo</title>
	<h1 align="center" style="font-size:90px;color:white;font-family:Ink Free;">Thank You</h1>
<style>
label{
width:240px;
display:inline-block;
}
</style>
</head>
<body style="background-image:url('img/IMG-20190610-WA0007.jpg');height:100vh; width:100%;background-repeat: repeat-y;background-size: 100% 100%;background-attachment: fixed;s">

	<h2 style="color:#6da552"> Thank You, Payment success!!</h2>

	
<?php
include 'instamojo/Instamojo.php';
// write your own API key and Auth Token
$api = new Instamojo\Instamojo('test_3146bcda92c0d3f7817139a0475','test_dd4b7eda094e89351522e254bb3','https://test.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
try{
	$response = $api->paymentRequestStatus($payid);
	echo "<h4>Payment ID: " .$response['payments'][0]['payment_id']."</h4>";
	echo "<h4>Payment Name: " .$response['payments'][0]['donor_name']."</h4>";
	echo "<h4>Payment Email: " .$response['payments'][0]['donor_email']."</h4>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	?>

	<?php
}
catch(Exception $e){
	print('Error: ' .$e->getMessage());

}
?>
</body>
</html>
