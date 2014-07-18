<?php
        

        $result = get_admin_list();

        if(mysql_num_rows($result) > 0 ){
            
                while($array = mysql_fetch_array($result)) {
                  
                    $rollnum = $array['admRollNum'];
                    $id = $array['id'];
                    $message = "'Are you sure you want to delete this Admin?'";
                    $list = '
                    <tr>
                        <td>'.$id.'</td>
                        
                        <td>'.$rollnum.'</td>
                        
                        <td><a href="manage_admin.php?delete='.$id.'" onClick="return confirm('.$message.')" >Delete</a></td>
                        
                    </tr> ';
                    echo $list;
                    
                }
        }

?>