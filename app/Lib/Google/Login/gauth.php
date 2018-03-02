<?php
session_start();

require_once('settings.php');
require_once('google-login-api.php');

// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);

		echo '<pre>';print_r($user_info); echo '</pre>';

		// Now that the user is logged in you may want to start some session variables
		$_SESSION['logged_in'] = 1;

		// You may now want to redirect the user to the home page of your website
		// header('Location: home.php');
		
		// connect to database
		/*$mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);
		if ($mysqli->connect_error) {
			die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}*/
	 
		//Kiểm tra xem nếu user này đã tồn tại, sau đó nên login tự động
		/*$result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user->id");
		$user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist
		*/
		//show user picture
		echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';
	 
		if($user_count) // Nếu user tồn tại thì show thông tin hiện có
		{
			echo 'Welcome back '.$user->name.'! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
		}
		else //Ngược lại tạo mới 1 user vào database
		{ 
			echo 'Hi '.$user->name.', Thanks for Registering! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
			/*$statement = $mysqli->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");
			$statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
			$statement->execute();*/
			echo $mysqli->error;
		}
		exit;
		}
	catch(Exception $e) {
		echo $e->getMessage();
		exit();
	}
}
//Nếu sẵn sàng kết nối, sau đó lưu session với tên access_token
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else { // Ngược lại tạo 1 link để login
	echo '23452524' . $client;
    $authUrl = $client->createAuthUrl();
}

?>