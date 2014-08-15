<?php 
        $details = getuserProfileDetails($rollnum);
        
        $name = check_input($details['name']);
        $birthDate = check_input($details['birthdate']);
        $sex = check_input($details['sex']);
        $alternateEmail = check_input($details['alternateEmail']);
        $currentsem = check_input($details['currentSemester']);
        $institute = check_input($details['institute']);
        $cgpa = check_input($details['cgpa']);
        $education = nl2br(check_input($details['education'])); 
        $technicalExp = nl2br(check_input($details['technicalExperience']));
        $projects = nl2br(check_input($details['projects']));
        $areaofint = nl2br(check_input($details['areaOfIntrest']));
        $phoneNum = check_input($details['phoneNum']);

        $course = check_input($details['course']);
        $stream = check_input($details['stream']); 
        $tenth = check_input($details['tenth']);
        $twelth = check_input($details['twelth']);

?>