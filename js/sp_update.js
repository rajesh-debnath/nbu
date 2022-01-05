

function validateForm(){
  var father=document.getElementById("father").value;
  if (father== "" || father.length>30) {
   document.getElementById("e_father").innerHTML="**Please, Fill Up properly";
   document.getElementById("father").focus();
   document.getElementById("father").style.border="2px solid red";
   document.getElementById("father").style.outline="none";
 }
 else{
  document.getElementById("father").style.border="2px solid green";
  document.getElementById("father").style.outline="none";
  document.getElementById("e_father").innerHTML="";
  var mother=document.getElementById("mother").value;
  if (mother== "" || mother.length>30) {
   document.getElementById("e_mother").innerHTML="**Please, Fill Up properly";
   document.getElementById("mother").focus();
   document.getElementById("mother").style.border="2px solid red";
   document.getElementById("mother").style.outline="none";
 }
 else{
  document.getElementById("mother").style.border="2px solid green";
  document.getElementById("mother").style.outline="none";
  document.getElementById("e_mother").innerHTML="";
  var address=document.getElementById("address").value;

  if(address=="" || address>100){
    document.getElementById("e_address").innerHTML="**Please, Fill Up properly";
    document.getElementById("address").focus();
    document.getElementById("address").style.border="2px solid red";
    document.getElementById("address").style.outline="none";
  }
  else{
    document.getElementById("address").style.border="2px solid green";
    document.getElementById("address").style.outline="none";
    document.getElementById("e_address").innerHTML="";
    var mobile = document.getElementById('mobile').value;
    var check_mobile = /^\d{10}$/;
    if (!check_mobile.test(mobile)) {
      document.getElementById("e_mobile").innerHTML="**Please, Fill Up properly";
      document.getElementById("mobile").focus();
      document.getElementById("mobile").style.border="2px solid red";
      document.getElementById("mobile").style.outline="none";
      
    }
    else{

      document.getElementById("mobile").style.border="2px solid green";
      document.getElementById("mobile").style.outline="none";
      document.getElementById("e_mobile").innerHTML="";
      var email = document.getElementById('email').value;
      var check_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!check_mail.test(email)) {
        document.getElementById("e_email").innerHTML="**Please, Fill Up properly";
        document.getElementById("email").focus();
        document.getElementById("email").style.border="2px solid red";
        document.getElementById("email").style.outline="none";
      }
      else{
        document.getElementById("email").style.border="2px solid green";
        document.getElementById("email").style.outline="none";
        document.getElementById("e_email").innerHTML="";
        document.getElementById("submit").type="submit";
        document.getElementById("submit").name="submit";

      }

    } 
  }
}
}
}

