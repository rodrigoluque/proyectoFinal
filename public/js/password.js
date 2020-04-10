$(function(){
    /* var mayus = new RegExp("^(?=.*[A-Z].*[A-Z].*[A-Z])");
     var special= new RegExp("^(?=.*[!@#$%&*].*[!@#$%&*].*[!@#$%&*])");
     var numbers=  new RegExp("^(?=.*[0-9])");
     var lower= new RegExp("^(?=.*[a-z])");
     var len= new RegExp("^(?=.{8,})");*/
 
     var mayus = new RegExp("^(?=.*[A-Z])");
     var special= new RegExp("^(?=.*[!@#$%&*])");
     var numbers=  new RegExp("^(?=.*[0-9])");
     var lower= new RegExp("^(?=.*[a-z])");
     var len= new RegExp("^(?=.{8,})");
 
     
 
 
     var regExp=[mayus,special,numbers,lower,len];
     var elementos= [$("#mayus"),$("#special"),$("#numbers"),$("#lower"),$("#len")];
 
     $("#pwd").on("keyup",function(){
         var pass= $("#pwd").val();
         var check=0;
 
    for (var i = 0; i < 5; i++) {
        if(regExp[i].test(pass)){
            elementos[i].hide();
            check++;
        }
        else{
            elementos[i].show();
        }
     }
 
     if(check>=0 && check<=2){
      
         
         $("#mensaje").removeClass("alert alert-warning");
         $("#mensaje").removeClass("alert alert-success");
         $("#mensaje").text("Muy insegura").addClass("alert alert-danger");
     }
     else if(check>=3 && check<=4){
         
         
         $("#mensaje").removeClass("alert alert-danger");
         $("#mensaje").removeClass("alert alert-success");
         $("#mensaje").text("Poco insegura").addClass("alert alert-warning");
     }
     else if(check==5){
         $("#mensaje").removeClass("alert alert-danger");
         $("#mensaje").removeClass("alert alert-warning");
         $("#mensaje").text("Muy segura").addClass("alert alert-success");
         
     }
 
              
     });
 
 }); 