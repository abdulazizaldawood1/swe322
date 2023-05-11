<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lab #5</title>
</head>

<body>
<?php
//class creation 
class Courses {
private $courseCode;
private $courseName;
private $courseDescription;
private $grade;

//set and get methods for each varabile 
public function setCourseCode($courseCode) {
$this->courseCode = $courseCode;
}
public function getCourseCode() {
return $this->courseCode;
}
public function setCourseName($courseName) {
$this->courseName = $courseName;
}
public function getCourseName() {
return $this->courseName;
}
public function setCourseDescription($courseDescription) {
$this->courseDescription = $courseDescription;
}
public function getCourseDescription() {
return $this->courseDescription;
}
public function setGrade($grade) {
$this->grade = $grade;
}
public function getGrade() {
return $this->grade;
}
public function isA() {
if($this->grade == "A+") {
return true;
} else {
return false;
}
}
public function getCourseDetails() {
return "Course Code: " . $this->courseCode . "<br>Course Name: " . $this->courseName . "<br>Course Description: " . $this->courseDescription . "<br>Grade: " . $this->grade;
}
}

//creation of three objects which's courses
$course1 = new Courses();
$course1->setCourseCode("CIS 322");
$course1->setCourseName("Web Advanced Design");
$course1->setCourseDescription("Back-end development");
$course1->setGrade("A+");
$course2 = new Courses();
$course2->setCourseCode("NES 485");
$course2->setCourseName("Ethical Hacking");
$course2->setCourseDescription("Secure systems againest hackers");
$course2->setGrade("B");
$course3 = new Courses();
$course3->setCourseCode("NES 483");
$course3->setCourseName("Digital Forensices");
$course3->setCourseDescription("Investgation the digital evidences");
$course3->setGrade("C");
// assigan an array 
$courses = array($course1, $course2, $course3);

//table creation
echo "<table>";
echo "<tr><th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Grade</th></tr>";
foreach($courses as $course) {
if($course->isA()) {
echo "<tr style='background-color: yellow'>";
} else {
echo "<tr>";
}
echo "<td>" . $course->getCourseCode() . "</td><td>" . $course->getCourseName() . "</td><td>" . $course->getCourseDescription() . "</td><td>" . $course->getGrade() . "</td></tr>";
}
echo "</table>";
?>
</body>
</html>