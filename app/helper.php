<?php
use App\Models\Course;


function getCourses(){
    $Courses = Course::orderBy('title','ASC')->where('status',1)->get();
    return $Courses;
}
?>