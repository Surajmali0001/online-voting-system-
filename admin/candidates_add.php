<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		// Validating input fields
		if(empty($_POST['firstname']) || empty($_POST['lastname'])) {
			$_SESSION['error'] = 'पहला नाम और अंतिम नाम आवश्यक हैं';
			header('location: candidates.php');
			exit; // Stop further execution
		}

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}

		$sql = "INSERT INTO candidates (position_id, firstname, lastname, photo) VALUES ('$position', '$firstname', '$lastname', '$filename')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'उम्मीदवार को सफलतापूर्वक जोड़ा गया';
		}
		else{
			$_SESSION['error'] = 'कुछ गलत हो गया। कृपया पुनः प्रयास करें।';
		}

	}
	else{
		$_SESSION['error'] = 'एड फ़ॉर्म भरें';
	}

	header('location: candidates.php');
?>
