function validate() {

        if( document.my_form.uname.value == "" ) {
           alert( "Provide your name." );
           document.my_form.uname.focus() ;
           return false;
        }
  
        if( document.my_form.lpassword.value == "" ) {
           alert( "Provide your Password." );
           document.my_form.lpassword.focus() ;
           return false;
        }
      return true;
  }
function matchpass(){
    var firstpassword=document.my_form.password.value;
    var secondpassword=document.my_form.password2.value;
    
    if(firstpassword==secondpassword){
    return true;
    }
    else{
    alert("Password must be same.");
    return false;
    }
}