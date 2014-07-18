<?php echo '

<div class="container mpp-contentdiv">
          <div class="row">
              
              <div class="col-md-4 ">
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
              </div>
              <div class="col-md-4 ">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="thumbnail mpp-divs">
                              <img class="img-responsive thumbnail vpp-customimg" src="profile_pictures/';

                                               if( file_exists('profile_pictures/'.$rollnum.'.jpg') ) 
                                                   echo $rollnum.".jpg"; 
                                                else echo "defaultpp.jpg"; 
                                    echo '           ">
                              
                          </div>
                      </div>
                      ';
?>