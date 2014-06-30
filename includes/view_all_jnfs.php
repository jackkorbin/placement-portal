<?php
        
        $result = get_jnf_list();
        
        if(mysql_num_rows($result) > 0 ){
            
            $i = 1;
            while($array = mysql_fetch_array($result)) {
        
               
                $list = '
                <tr>
                    <td>'.$i.'</td>
                    <td>'.$array['Organization'].'</td>
                    <td>'.$array['name'].'</td>
                    
                    <td>'.$array['contact_number'].'</td>
                    <td>'.$array['email'].'</td>
                    <td>'.format_date($array['added_on']).'</td>
                    <td><a href="view_jnf.php?id='.$array['id'].'">Click to View full</td>
                </tr> ';
                echo $list;
                $i++;

                
            }
        }
        else {
            

        }

?>