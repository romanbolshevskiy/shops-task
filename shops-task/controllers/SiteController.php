<?php

  include_once ROOT. '/models/Courses.php'; // підключення моделі
  include_once ROOT. '/models/Site.php'; // підключення моделі
  include_once ROOT. '/models/Chat.php'; // підключення моделі

	class SiteController {

		public function actionIndex() {

			$coursesList = Courses::getReccomendsCourses(); // беерм метод з моделі
  

      $coursesAll=Courses::getCourses();

      $data = $_POST;
    
      $shopsAll=Courses::getShops($data['sort']); 
    
    
			require_once(ROOT . '/views/site/index.php'); // підключаєм вюшку
			return true;
		}

  	public function actionContact() {

      $userEmail = '';
      $userText = '';
      $result = false;

        $name = 'user';
        $email = 'email@meta.ua';
      
    	if (isset($_POST['submit'])) {

        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userText = $_POST['userText'];

        $errors = false;

        // Валидация полей
        if (!User::checkEmail($userEmail)) {
            $errors[] = 'Error email';
        }

        if ($errors == false) {
           $adminEmail = 'admin@meta.ua';
           $message = "Text: {$userText}. Email: {$userEmail}";
           $subject = "Subject of message from {$userName}";
           $result = mail($adminEmail, $subject, $message);
           header("Location: /contact/");
        }

    	}

      require_once(ROOT . '/views/site/contact.php');

      return true;
  	}


	}