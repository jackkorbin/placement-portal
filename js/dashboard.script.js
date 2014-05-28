

    
// Counter to count no of companies ( Fetch companies and LOAD MORE ) 
    
    var num = 0; // Number of companies present at this moment.
    var increment = 3; // Change this to change number of companies fetching at a time.
    
    function counter(){
        num += increment;
    }
    function resetcounter(){
        num = 0;
    }
    
 //  to fetch ,filter And Load More companies in mydashboard main content.  
    
    function fetch_companies(user){
        
        var value = $('#filterselect').find("option:selected").attr("value");
        
        if( num === 0 ){
            $('#Ajaxcompanies').html('<img src="images/loading.gif" width="100%">');
        }
        else {
            $('#loadmore').html('Loading..');
        }
        $.ajax({
                type:'POST',

                url:'fetch_companies.php',

                data : {
                value : value,
                    num : num,
                    inc : increment,
                    user : user
                },
                success: function(data){
                    if( num === 0) {
                        $('#Ajaxcompanies').html(data);
                    }
                    else {
                        $('#Ajaxcompanies').append(data);
                        $('#loadmore').html('Load more');
                    }
                    counter();
                }

            });
    }
   

//3. to fetch read more information inside read more.         
    function fetch_details_of_comp(comid){
        $('#readmore').html('<img src="images/loading.gif" width="100%">');
        
        $.ajax({
            type : 'POST',
            url : 'fetch_details_of_comp.php',
            data : {
                id : comid
            },
            success : function(data){
                $('#readmore').html(data);
            }
        });
    }
// to apply and unapply using ajax and change text on button also
          
    function applytoggle(comid){
        
	    $('#'+comid).addClass('btn-danger');  
        $('#'+comid).html('Wait..');
        
            $.ajax({
                type:'POST',

                url:'applytoggle.php',

                data:{
                id : comid
                },
                success: function(app){
                  
                    var app = +(app);
                   if(app === 1){
                       $('#'+comid).removeClass('btn-success');
                       $('#'+comid).removeClass('btn-danger');
                       $('#'+comid).addClass('btn-primary');
                       $('#'+comid).html('Unapply');
                      
                   }
                   else if (app === 0) {
                       $('#'+comid).removeClass('btn-primary');
                       $('#'+comid).removeClass('btn-danger');
                       $('#'+comid).addClass('btn-success');
                       $('#'+comid).html('Apply');
                    }
                    else {
                        $('#'+comid).removeClass('btn-danger');
                        $('#'+comid).addClass('btn-danger');
                        $('#'+comid).html('Reload Page');
                    }

                }

            });
     }

   
    function fetchannouncements(user){
        $('#ann_list').html('<img src="images/loading.gif" width="100%">');
        $.ajax({
            type : 'POST',
            url : 'fetch_announcement.php',
            data : {
                user : user
            },
            success : function(data){
                $('#ann_list').html(data);
                $('#announcement').val('');
            }
            
        });
    }
// Admin -->


   
 
    
    function edit_comp(comid){
        $('#editcomp').html('<img src="images/loading.gif" width="100%">');
        
        $.ajax({
            type : 'POST',
            url : 'fetch_edit_comp.php',
            data : {
                id : comid
            },
            success : function(data){
                $('#editcomp').html(data);
            }
        });
    }
    
    

    function fetch_remove_comp(comid){
        
        $('#removecomp').html('<img src="images/loading.gif" width="100%">');
        $.ajax({
            type : 'POST',
            url : 'fetch_remove_comp.php',
            data : {
                id : comid
            },
            success : function(data){
                
                $('#removecomp').html(data);
            }
        });
        
    }
    function remove_comp(comid){
        
        
        $.ajax({
            type : 'POST',
            url : 'remove_comp.php',
            data : {
                id : comid
            },
            success : function(data){
                $('#div'+comid).hide(500);
            }
        });
        
    }
    function add_announc(){
        var text = $('#announcement').val();
        $.ajax({
            type : 'POST',
            url : 'add_announcement.php',
            data : {
                text : text
            },
            success : function(data){
                fetchannouncements('admin');
            }
            
        });
    }
    function del_ann(id){
        $.ajax({
            type : 'POST',
            url : 'del_announcement.php',
            data : {
                id : id
            },
            success : function(data){
                $('#ann'+id).hide(500);
            }
            
        });
    }


