<?php
        $content = "Students Applied to ".$compname."\r\n\r\n";

        $result = get_students_list($id);
        $files = array();
        if(mysql_num_rows($result) > 0 ){
            
            $i = 1;
            while($array = mysql_fetch_array($result)) {
                $files[$i-1] = "student_resumes/".$array['rollnum'].".pdf";
                $rollnum = $array['rollnum'];
                $name = $array['name'];
                $institute = $array['institute'];
                $cgpa = $array['cgpa'];
                $list = '
                <tr>
                    <td>'.$i.'</td>
                    <td><a href="studentprofile.php?rollnum='.$rollnum.'">'.$name.'</a></td>
                    <td>'.$rollnum.'</td>
                    <td>'.$cgpa.'</td>
                    <td>'.$institute.'</td>
                </tr> ';
                echo $list;
                $i++;
                
                $content .= "name : ".$name;
                $content .= "\r\nRollnum : ".$rollnum;
                $content .= "\r\nCGPA : ".$cgpa;
                $content .= "\r\nInstitute : ".$institute;
                $content .= "\r\n---------------------------\r\n\r\n";
                
            }
        }
        else {
            echo '<div class="ST-noStudentsdiv">No students</div>';
            $content .= "No Students";

        }

$_SESSION['array'] = $files;
?>