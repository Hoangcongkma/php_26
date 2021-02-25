<?php

class AuthController extends Controller
{
	public function login()
	{
		sleep(2); // stop in 2s

		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
		$remember = filter_input(INPUT_POST, 'remember');

		$user = User::select('username', 'password')
			->where('username', $username)->first();

		if (count($user) == 1 && password_verify($password, $user->password)) {
			$data = json_encode(['success' => true]);
			$_SESSION['username'] = $username;
		}
		else {
			$data = json_encode([
				'success' => false, 
				'error' => 'Username or password incorrect!'
			]);
		}

		echo $data;
	}

	public function register()
	{
		sleep(2); //stop in 2s;
		
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

		if ($username == null || $password == null || $email == null || $email == false) {
			echo json_encode(['success' => false, 'error' => 'Input is invalid!']);
			return;
		}

		$user = new User();
		$user->username = $username;
		$user->email = $email;
		$user->password = password_hash($password, PASSWORD_DEFAULT);
		$user->save();

		$_SESSION['username'] = $username;
		echo json_encode(['success' => true]);
	}

	public function logout()
	{
		session_destroy();

		header('Location: /');
	}
}