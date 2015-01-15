<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        
        $students = array();
        
        // create John Doe
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'johndoe@me.com');
        $first->add_email('work', 'jdoe@company.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['jd123']=$first;
        
        // create Einstein
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@me.com');
        $second->add_email('work', 'aeinstein@cern.ch');
        $second->add_grade(95);
        $second->add_grade(85);
        $second->add_grade(90);
        $students['a456']=$second;
        
        // then print off the values for all students
        foreach($students as $student){
            echo $student->toString();
        }
        ?>
    </body>
</html>
