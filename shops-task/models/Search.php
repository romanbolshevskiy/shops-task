<?php
class Search{

	public static function searchName($word) {
		$db = Database::getConnection();
        $result = $db->prepare("SELECT * FROM shops WHERE (name LIKE '%".$word."%')");
        $result->execute();
		$i = 0;
		while ($row = $result->fetch()) {
		 	$course[$i] = $row;
            $i++;
		}
		return $course;
	}

	public static function searchHour($hour) {
		$db = Database::getConnection();
        $result = $db->prepare("SELECT * FROM shops WHERE (	 ( (hour_start_b <= $hour) and ($hour <=hour_end_b) ) OR ( (hour_start_sat<= $hour) and ($hour <= hour_end_sat)) OR ((hour_start_sunday<= $hour) and ($hour<= hour_end_sunday) ) ) ");
        $result->execute();
		$i = 0;
		while ($row = $result->fetch()) {
		 	$course[$i] = $row;
            $i++;
		}
		return $course;
	}


	public static function searchDay($day) {
		$db = Database::getConnection();
		$days = "пн,вт,ср,чт,пт,сб,нд";
		$pos = strpos($days, $day);

		if ($pos === false) {
		    $result = $db->prepare("SELECT * FROM shops WHERE  ( '$day'='рт' )");	
		} else {
			if($day == "нд"){
				$result = $db->prepare("SELECT * FROM shops WHERE ('$day'=sunday AND ( hour_start_sunday !=0 AND hour_end_sunday != 0 ) )");
			}
			else if($day == "сб"){
				$result = $db->prepare("SELECT * FROM shops WHERE ( '$day'=saturday AND  (hour_start_sat !=0 && hour_end_sat !=0 ) )");
			} 
			else{
				$result = $db->prepare("SELECT * FROM shops WHERE ( hour_start_b !=0 or hour_end_b !=0 ) ");
			}
		}
        
        $result->execute();
		$i = 0;
		while ($row = $result->fetch()) {
		 	$course[$i] = $row;
            $i++;
		}
		return $course;
	}
	

}