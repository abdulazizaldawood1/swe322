<!DOCTYPE html>
<html>
	<body>
	<?php

	<h1>This is the names of the students:</h1>
	
	$classmates = array ("Abdulaziz", "Nawaf", "Fatima");
	echo"<ul>";
	foreach($classmates as $classmate) {
	echo "<li>"$classmate"</li>"
	}
	echo "</ul>;
	#This the first part 
	
	
	<h2>This is the courses names and its requirment</h2>
	
	$course = array ("SWE322" => "Advanced web design", "NES485"=> "Ethical Hacking", "NES424"=> "IoT", 
	echo <table>; 
	echo"<tr><th>Courses code</th> <th>course Name</th></tr>"; 
		foreach($course as $courseKey => $courseValue) {
				echo "<tr><td> $courseKey </td><td> $courseValue </td><tr>";
			
	}
	echo "</table>"; 
	#this marks the end of the second part
	
	$req = array (
		array("Laptop", "Asus", "MSI"),
		array("CPU", "AMD", "INTEL"),
		array("GPU", "AMD", "Nvidida")
		);
	
	echo "<p> I am looking for a ".$req[0][1]." ".$req[0][0]." with ".$req[1][1]." ".$req[1][0]." and ".req[2][2]." ".$req[2][0]." </p>";
	
	?>
	</body>
</html>