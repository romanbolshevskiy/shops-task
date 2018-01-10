<?php


  include_once ROOT. '/models/Courses.php'; 
  include_once ROOT. '/models/Search.php'; 

  class FindController {

    public function actionIndex() {

      $coursesList = Courses::getReccomendsCourses(); 

      $coursesAll = Courses::getCourses();

      $data = $_POST;

      if ($data['name']){
         $found = Search::searchName($data['name']);
      }
      if ($data['day']){
         $found = Search::searchDay($data['day']);
      }
      if ($data['hour']){
         $found = Search::searchHour($data['hour']);
      }

      require_once(ROOT . '/views/site/find.php'); // підключаєм вюшку
      return true;
    }
  }