<?php
	return array(
		
		
	
		//search 	
		'/find/' => 'find/index',
		'/sort/' => 'sort/index',
		
		//chat
		'/update-chat/'=> 'chat/chatUpdate',
		'/get-messages/'=> 'chat/getChatMessages',
		'/chat/'=> 'chat/index',


	
		'/courses/page-([0-9]+)' => 'courses/courses/$1', //actionCourses ContentController
		
		'/courses/([a-z0-9-]+)' => 'courses/one/$1', //actionCourses ContentController
		
		'/courses/' => 'courses/courses', //actionCourses ContentController
		
		'/course/create' => 'courses/create', //actionCreate CourseController
		'/course/edit/([0-9]+)' => 'courses/edit/$1', 
		'/course/delete/([0-9]+)' => 'courses/delete/$1', //actionCreate CourseController
		
		'/contact' => 'site/contact', //actionContact sITEController


		'/' => 'site/index' , //  actionIndex в SiteController
	
	);