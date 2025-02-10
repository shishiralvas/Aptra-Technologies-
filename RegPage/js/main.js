function matchpass(){
}


  // Form validation code will come here.
   function validate() {

      if( document.f1.Candidate.value == "" ) {
         alert( "Please provide your name!" );
         document.f1.Candidate.focus() ;
         return false;
      }
      if( document.f1.email.value == "" ) {
         alert( "Please provide your Email!" );
         document.f1.email.focus() ;
         return false;
      }
   /*  if( document.f1.pass.value == "" ) {
         alert( "Please provide your Password!" );
         document.f1.pass.focus() ;
         return false;
      }
      if( document.f1.xpass.value == "" ) {
         alert( "Please repeat your Password!" );
         document.f1.xpass.focus() ;
         return false;
      }*/
      if( document.f1.phone.value == "" ) {
         alert( "Please provide your phone!" );
         document.f1.phone.focus() ;
         return false;
      }
else{


/*var firstpassword=document.f1.pass.value;
  var secondpassword=document.f1.xpass.value;*/
  var na=document.f1.username.value;
  var em=document.f1.email.value;
  var ph=document.f1.phone.value;
/*if(firstpassword==secondpassword){
    return true;
  }else{
  alert("password must be same!");
  return false;
  }*/
  if(na.length!=0){
    var letters = /^[A-Za-z]+$/;
    if((na.match(letters))){
      return true;}
    else{ alert("Name should contain only alphabets");return false;}}





   }}