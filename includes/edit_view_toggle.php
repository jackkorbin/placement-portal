<?php

if( $pc == 0 || ALLOW_PROFILE_EDIT == true ){    
        echo '
            
                  <div class="thumbnail mpp-divs">
                      <div class="form-group">
                          <label class="mpp-labelname">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="'.$name.'">
                      </div>
                      
                      

                      

                      <div class="form-group">
                          <label class="mpp-labelname">Sex</label>
                            <select class="form-control" name="sex" >
                              <option '; if($sex == "Male") {echo 'selected'; } echo '>Male</option>
                              <option '; if($sex == "Female") {echo "selected"; } echo '>Female</option>
                              <option '; if($sex == "Other") {echo "selected"; } echo '>Other</option>
                            </select>
                      </div>

                      
                      
                      <div class="form-group">
                          <label class="mpp-labelname">Institute</label>
                        <select class="form-control" name="institute">
                          <option '; if($institute == "IIITA") {echo "selected"; } echo'>IIITA</option>
                          <option '; if($institute == "RGIT") {echo "selected"; } echo'>RGIT</option>
                        </select>
                      </div>
                      
                      
                      




                      <div class="form-group">
                          <label class="mpp-labelname">Btech/Mtech</label>
                        <select class="form-control" name="course">
                          <option '; if($course == "Btech") {echo "selected"; } echo'>Btech</option>
                          <option '; if($course == "Mtech") {echo "selected"; } echo'>Mtech</option>
                        </select>
                      </div>
                      
                      <div class="form-group">
                          <label class="mpp-labelname">IT/ECE</label>
                        <select class="form-control" name="stream">
                          <option '; if($stream == "IT") {echo "selected"; } echo'>IT</option>
                          <option '; if($stream == "ECE") {echo "selected"; } echo'>ECE</option>
                        </select>
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">10th CGPA/percentage</label>
                          <input type="text" name="tenth" class="form-control" id="" placeholder="" value="'.$tenth.'">
                      </div>
                      
                      <div class="form-group">
                          <label class="mpp-labelname">12th percentage</label>
                          <input type="text" name="twelth" class="form-control" id="" placeholder="" value="'.$twelth.'">
                      </div>




                      <div class="form-group">
                          <label class="mpp-labelname">College CGPA</label>
                          <input type="text" name="cgpa" class="form-control" id="" placeholder="Avrage till now" value="'.$cgpa.'">
                      </div>
                  </div>
        ';
}
else {

        $details = getuserProfileDetails($rollnum);
        
        $name = check_input($details['name']);
        $birthDate = check_input($details['birthdate']);
        $sex = check_input($details['sex']);
        $alternateEmail = check_input($details['alternateEmail']);
        $currentsem = check_input($details['currentSemester']);
        $institute = check_input($details['institute']);
        $cgpa = check_input($details['cgpa']);
        $phoneNum = check_input($details['phoneNum']);
    
    
        $course = check_input($details['course']);
        $stream = check_input($details['stream']); 
        $tenth = check_input($details['tenth']);
        $twelth = check_input($details['twelth']);
            
        echo '
      
                   <div class="thumbnail mpp-divs">
                          <div class="form-group">
                              <label class="vpp-labelname">Roll num</label>
                              <div class="vpp-content-text">'.$rollnum.'</div>
                          </div>

                          <div class="form-group">
                              <label class="vpp-labelname">Name</label>
                              <div class="vpp-content-text">'.$name.'</div>
                          </div>
                          
                        

                          

                          <div class="form-group">
                              <label class="vpp-labelname">Sex</label>
                              <div class="vpp-content-text">'.$sex.'</div>
                          </div>

                          

                          <div class="form-group">
                              <label class="vpp-labelname">Institute</label>
                              <div class="vpp-content-text">'.$institute.'</div>
                          </div>
                          
                          <div class="form-group">
                              <label class="vpp-labelname">Btech/Mtech</label>
                              <div class="vpp-content-text">'.$course.'</div>
                          </div>
                          
                          <div class="form-group">
                              <label class="vpp-labelname">IT/ECE</label>
                              <div class="vpp-content-text">'.$stream.'</div>
                          </div>
                          
                          
                          <div class="form-group">
                              <label class="vpp-labelname">CGPA</label>
                              <div class="vpp-content-text">'.$tenth.'</div>
                          </div>
                          
                          <div class="form-group">
                              <label class="vpp-labelname">CGPA</label>
                              <div class="vpp-content-text">'.$twelth.'</div>
                          </div>

                          
                          <div class="form-group">
                              <label class="vpp-labelname">CGPA</label>
                              <div class="vpp-content-text">'.$cgpa.'</div>
                          </div>
                  </div>
        ';
}

?>