function validate()  
{

   if( document.myForm.Name.value == "" ) 
   {
      alert( "Please provide your name!" );
      document.myForm.Name.focus() ;
      return false;
   }

   if( document.myForm.Email.value == "" )
   {
      alert( "Please provide your Email!" );
      document.myForm.Email.focus() ;
      return false;
   }

   if( document.myForm.Phone.value == "" ||
   isNaN( document.myForm.Phone.value ) ||
   document.myForm.Phone.value.length != 10 )
   {
      alert( "Please provide a phone number in the format ##########." );
      document.myForm.Phone.focus() ;
      return false;
   }

   if( document.myForm.Message.value == "" )
   {
      alert( "Please leave us a message!" );
      return false;
   }
   return( true );
}
