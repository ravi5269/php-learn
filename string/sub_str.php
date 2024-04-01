<?php
//syntax : substr(string,start,length)


$demo = "hello world\n";

echo substr($demo,0);//outpup : hello world
echo substr( $demo,1);//output : ello world

echo substr( $demo,2);//

echo substr( $demo,2,9);

$demo2 = "React.js: A JavaScript library for
 building user interfaces, developed by Facebook.
 It's widely used for building 
 single-page applications (SPAs) and dynamic web interfaces.

Vue.js: Another JavaScript framework 
for building interactive web interfaces.
 It's known for its simplicity 
 and ease of integration into existing projects.
Angular: Developed and maintained by Google, 
Angular is a comprehensive JavaScript framework for building
 large-scale web applications.
Backend Development:";



echo substr($demo2,0,83);