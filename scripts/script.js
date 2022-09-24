$('#delete').click(function(){
    var dataArr  = new Array();
    if($('input:checkbox:checked').length > 0){
       $('input:checkbox:checked').each(function(){
           dataArr.push($(this).attr('id'));
           $(this).closest('.ajax-del').remove();   
       });
       sendResponse(dataArr);
    }else{
      alert('Please select a Product you want to delete ');
    }
 });  



 // for Mass Delete. AJAX - Send data to delete.php
 function sendResponse(dataArr){
     $.ajax({
         type    : 'post',
         url     : 'delete.php',
         data    : {'data' : dataArr},                  
    });
 }