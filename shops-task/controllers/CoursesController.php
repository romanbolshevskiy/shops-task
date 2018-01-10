<?php
	include_once ROOT.'/models/Courses.php';
	include_once ROOT.'/components/Pagination.php';


	class CoursesController {

		public function actionCourses($page=1) {
			
		
			$courses_list_all = Courses::getCoursesInTop($page,3); //прості курси незалежні від головних
			//$courses_list_all = Courses::getCourses(); //витягуєм всі прості курси
		

			$url = explode("/", $_SERVER['REQUEST_URI']);
			
			$total = Courses::getCountCourses();//кількість товарів 
			$pagination = new Pagination($total, $page, $count=3,'page-');

			require_once(ROOT . '/views/content/courses/courses.php'); // підключаєм вюшку
			return true;
		}


		public function actionEdit($id) { ///course/edit/2 id=2
			
			$id = intval($id); //10

			$course = Courses::getCourseInfo($id);
		
			$errors = false;

			if (isset($_POST['submit'])) {

				$budni_start = $_POST['start_h_b'];
				$budni_end = $_POST['end_h_b'];
				$saturday_start = $_POST['start_h_sat'];
				$saturday_end = $_POST['end_h_sat'];
				$sunday_start = $_POST['start_h_sat'];
				$sunday_end = $_POST['end_h_sat'];

				
				Courses::update($budni_start, $budni_end, $saturday_start,  $saturday_end, $sunday_start, $sunday_end, $id);
			}
			require_once(ROOT . '/views/content/courses/edit.php');
			return true;
		}


}