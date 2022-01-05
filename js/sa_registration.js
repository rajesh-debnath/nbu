var valid_name=false;
var valid_class_roll=false;
var valid_reg_no=false;
var valid_session=false;
var valid_email=false;
var valid_mobile=false;
var valid_pass1=false;
var valid_pass2=false;



function s_a_name(){
  var name=document.getElementById("sa_name").value;
  if (name.length>30 || name=="") {
   document.getElementById("e_n").innerHTML="**Please Fill Up Properly";
   document.getElementById("sa_name").focus();
   document.getElementById("sa_name").style.border="2px solid red";
   document.getElementById("sa_name").style.outline="none";
   valid_name=false;
 }
 else{
  document.getElementById("sa_name").style.border="2px solid green";
  document.getElementById("sa_name").style.outline="none";
  document.getElementById("e_n").innerHTML="";
  valid_name=true;
}
}



function s_a_class_roll(){
  var class_roll=document.getElementById("sa_class_roll").value;
  var check_class_roll = /^\d+$/;
  if (class_roll.length>2 || !check_class_roll.test(class_roll) || class_roll=="") {
   document.getElementById("e_class_roll").innerHTML="**Maximum 2 digit Class Roll";
   document.getElementById("sa_class_roll").focus();
   document.getElementById("sa_class_roll").style.border="2px solid red";
   document.getElementById("sa_class_roll").style.outline="none";
   valid_class_roll=false;
 }
 else{
  document.getElementById("sa_class_roll").style.border="2px solid green";
  document.getElementById("sa_class_roll").style.outline="none";
  document.getElementById("e_class_roll").innerHTML="";
  valid_class_roll=true;
}
}

function s_a_reg_no(){
  var reg_no=document.getElementById("sa_reg_no").value;
  var check_reg_no = /^\d{13}$/;
  if (!check_reg_no.test(reg_no) || reg_no=="" ) {
   document.getElementById("e_reg_no").innerHTML="**Please Fill Up Properly";
   document.getElementById("sa_reg_no").focus();
   document.getElementById("sa_reg_no").style.border="2px solid red";
   document.getElementById("sa_reg_no").style.outline="none";
   valid_reg_no=false;
 }
 else{
  document.getElementById("sa_reg_no").style.border="2px solid green";
  document.getElementById("sa_reg_no").style.outline="none";
  document.getElementById("e_reg_no").innerHTML="";
  valid_reg_no=true;
}
}


function s_a_session(){
  var session=document.getElementById("sa_session").value;
  var check_session = /^([0-9])+\-+([0-9])+$/;
  if (session=="" || !check_session.test(session)) {
   document.getElementById("e_session").innerHTML="**Please Fill Up Properly";
   document.getElementById("sa_session").focus();
   document.getElementById("sa_session").style.border="2px solid red";
   document.getElementById("sa_session").style.outline="none";
   valid_session=false;
 }
 else{
  document.getElementById("sa_session").style.border="2px solid green";
  document.getElementById("sa_session").style.outline="none";
  document.getElementById("e_session").innerHTML="";
  valid_session=true;
}
}
function s_a_email(){
  var email = document.getElementById('sa_email').value;
  var check_mail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (!check_mail.test(email) || email=="") {
    document.getElementById("e_email").innerHTML="**Please Fill Up Properly";
    document.getElementById("sa_email").focus();
    document.getElementById("sa_email").style.border="2px solid red";
    document.getElementById("sa_email").style.outline="none";
    valid_email=false;
  }
  else{
    document.getElementById("sa_email").style.border="2px solid green";
    document.getElementById("sa_email").style.outline="none";
    document.getElementById("e_email").innerHTML="";
    valid_email=true;
  }
}

function s_a_mobile(){
  var mobile = document.getElementById('sa_mobile').value;
  var check_mobile =  /^\d{10}$/;
  if (!check_mobile.test(mobile) || mobile=="") {
    document.getElementById("e_mobile").innerHTML="**Please Fill Up Properly";
    document.getElementById("sa_mobile").focus();
    document.getElementById("sa_mobile").style.border="2px solid red";
    document.getElementById("sa_mobile").style.outline="none";
    valid_mobile=false;
  }
  else{
    document.getElementById("sa_mobile").style.border="2px solid green";
    document.getElementById("sa_mobile").style.outline="none";
    document.getElementById("e_mobile").innerHTML="";
    valid_mobile=true;
  }

}


function s_a_checking1() {
  var upper = false;
  var num = false;
  var spc = false;
  var len=false;
  var pass = document.getElementById('sa_pass1').value;
  for (var i = 0; i < pass.length; i++) {
    var check = pass.charCodeAt(i);
    if(check > 47 && check < 58)
      num = true;

    if(check > 64 && check < 91)
      upper = true;

    if(check == 33 || check == 36 || check == 37 || check == 38 || check == 42 || check == 64)
      spc  = true;

  }


  if(pass.length > 7)
  { 
    len = true;
    document.getElementById('min_char').style.color="green";
  }
  else{
    document.getElementById('min_char').style.color="red";
  }
  if(pass.length < 21)
  { 
    len = true;
    document.getElementById('max_char').style.color="green";
  }
  else{
    document.getElementById('max_char').style.color="red";
  }

  if(num == true)
  { 
    document.getElementById('num').style.color="green";
  }
  else{
    document.getElementById('num').style.color="red";
  }
  if(upper == true)
  { 
    document.getElementById('uc').style.color="green";
  }
  else{
    document.getElementById('uc').style.color="red";
  }

  if(spc == true)
  { 
    document.getElementById('sym').style.color="green";
  }
  else{
    document.getElementById('sym').style.color="red";
  }


  if (len == true && num == true && upper == true && spc == true) {
    valid_pass1=true;
      //document.getElementById('check').type="submit";
    }
    else{
      valid_pass1=false;
    }
  }


  function s_a_checking2(){
    var pass1 = document.getElementById('sa_pass1').value;
    var pass2=document.getElementById("sa_pass2").value;
    if (pass2!=pass1) {
     document.getElementById("e_pass2").innerHTML="**Please Enter The Password Correctly";
     document.getElementById("sa_pass2").focus();
     document.getElementById("sa_pass2").style.border="2px solid red";
     document.getElementById("sa_pass2").style.outline="none";
     valid_pass2=false;
   }
   else{
    document.getElementById("sa_pass2").style.border="2px solid green";
    document.getElementById("sa_pass2").style.outline="none";
    document.getElementById("e_pass2").innerHTML="";
    valid_pass2=true;
  }
}



function validateForm(){
 if (document.getElementById("sa_pic").value=="") {
  document.getElementById("sa_pic").focus();
  document.getElementById("e_pic").innerHTML="**Plesae Select One Image";
}
else{
  document.getElementById("e_pic").innerHTML="";

  if (valid_name==false) {
   s_a_name();
 }
 else{
  if (document.getElementById("male").checked==false && document.getElementById("female").checked==false && document.getElementById("other").checked==false){
    document.getElementById("e_gender").innerHTML="**One opition must be checked out properly";
  }
  else{
    document.getElementById("e_gender").innerHTML="";
    if (document.getElementById("dob").value=="") {
      document.getElementById("dob").focus();
      document.getElementById("dob").style.border="2px solid red";
      document.getElementById("dob").style.outline="none";
      document.getElementById("e_dob").innerHTML="**Please Fill Up Properly";
    }
    else{
      document.getElementById("e_dob").innerHTML="";
      document.getElementById("dob").style.border="2px solid green";
      document.getElementById("dob").style.outline="none";
      if (document.getElementById("sa_course").value=="") {
        document.getElementById("sa_course").focus();
        document.getElementById("sa_course").style.border="2px solid red";
        document.getElementById("sa_course").style.outline="none";
        document.getElementById("e_course").innerHTML="**Please Fill Up Properly";
      }
      else{
        document.getElementById("e_course").innerHTML="";
        document.getElementById("sa_course").style.border="2px solid green";
        document.getElementById("sa_course").style.outline="none";
        if (document.getElementById("sa_semester").value=="") {
          document.getElementById("sa_semester").focus();
          document.getElementById("sa_semester").style.border="2px solid red";
          document.getElementById("sa_semester").style.outline="none";
          document.getElementById("e_semester").innerHTML="**Please Fill Up Properly";
        }
        else{
          document.getElementById("e_semester").innerHTML="";
          document.getElementById("sa_semester").style.border="2px solid green";
          document.getElementById("sa_semester").style.outline="none";
          if (valid_class_roll==false) {
           s_a_class_roll();
         }
         else{
          if (valid_reg_no==false) {
           s_a_reg_no();
         }
         else{
          if (valid_session==false) {
           s_a_session();
         }
         else{
          if (valid_email==false) {
           s_a_email();
         }
         else{
          if (valid_mobile==false) {
           s_a_mobile();
         }
         else{
          if (valid_pass1==false) {
           s_a_checking1();
         }
         else{
          if (valid_pass2==false) {
           s_a_checking2();
         }
         else{
                      document.getElementById("submit").type="submit";
                      document.getElementById("submit").name="submit";
          
         }
          
         }

         }

       }
     }

   }
 }

}

}
}

}
}
}
}

