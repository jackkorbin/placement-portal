<?php

if( $pc == 0 || ALLOW_PROFILE_EDIT == true ){    
        echo '
            
                  <div class="thumbnail mpp-divs">
                      <div class="form-group">
                          <label class="mpp-labelname">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="'.$name.'">
                      </div>
                      
                      <div class="form-group">
                          <label class="mpp-labelname">Phone Number</label>
                          <input type="text" name="phoneNum" class="form-control" id="name" placeholder="Name" value="'.$phoneNum.'">
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Birth date</label>
                        <input type="text" name="birthdate" class="form-control" id="filter-date" placeholder="YYYY-MM-DD" value="'.$birthDate.'">
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Sex</label>
                            <select class="form-control" name="sex" >
                              <option '; if($sex == "Male") {echo 'selected'; } echo '>Male</option>
                              <option '; if($sex == "Female") {echo "selected"; } echo '>Female</option>
                              <option '; if($sex == "Other") {echo "selected"; } echo '>Other</option>
                            </select>
                      </div>

                      <div class="form-group"  >
                          <label class="mpp-labelname"> Alternate Email id</label>
                        <input type="email" class="form-control" name="alternateEmail" placeholder="Alternate Email" value="'.$alternateEmail.'">
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Institute</label>
                        <select class="form-control" name="institute">
                          <option '; if($institute == "IIITA") {echo "selected"; } echo'>IIITA</option>
                          <option '; if($institute == "RGIT") {echo "selected"; } echo'>RGIT</option>
                        </select>
                      </div>

                      <div class="form-group">
                          <label class="mpp-labelname">Current semester</label>
                        <select class="form-control" name="currentsem">
                          <option '; if($currentsem == 1) {echo "selected"; } echo'>1</option>
                          <option '; if($currentsem == 2) {echo "selected"; } echo'>2</option>
                          <option '; if($currentsem == 3) {echo "selected"; } echo'>3</option>
                          <option '; if($currentsem == 4) {echo "selected"; } echo'>4</option>
                          <option '; if($currentsem == 5) {echo "selected"; } echo'>5</option>
                          <option '; if($currentsem == 6) {echo "selected"; } echo'>6</option>
                          <option '; if($currentsem == 7) {echo "selected"; } echo'>7</option>
                          <option '; if($currentsem == 8) {echo "selected"; } echo'>8</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label class="mpp-labelname">CGPA</label>
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
                              <label class="vpp-labelname">Phone Number</label>
                              <div class="vpp-content-text">'.$phoneNum.'</div>
                          </div>

                          <div class="form-group">
                              <label class="vpp-labelname">Birth Date</label>
                              <div class="vpp-content-text">'.$birthDate.'</div>
                          </div>

                          <div class="form-group">
                              <label class="vpp-labelname">Sex</label>
                              <div class="vpp-content-text">'.$sex.'</div>
                          </div>

                          <div class="form-group">
                              <label class="vpp-labelname"> Alternate Email id</label>
                              <div class="vpp-content-text">'.$alternateEmail.'</div>
                          </div>

                          <div class="form-group">
                              <label class="vpp-labelname">Institute</label>
                              <div class="vpp-content-text">'.$institute.'</div>
                          </div>

                          <div class="form-group">
                              <label class="vpp-labelname">Current semester</label>
                              <div class="vpp-content-text">'.$currentsem.'</div>
                          </div>
                          <div class="form-group">
                              <label class="vpp-labelname">CGPA</label>
                              <div class="vpp-content-text">'.$cgpa.'</div>
                          </div>
                  </div>
        ';
}

?>