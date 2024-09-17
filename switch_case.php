<?php
 $day = "Tuesday";
 switch ($day) 
 {
	case "Monday":
		echo "Start of the week";
		break;
	
	case "Tuesday":
	
	case "Wednesday":
	
	case "Thursday":
		echo "Midweek";
		break;
	
	case "Friday":
		echo "End of the week";
		break;
	
	default:
		echo "Invalid day";
		break;
}
?>