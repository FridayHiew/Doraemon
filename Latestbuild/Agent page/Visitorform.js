function validate()
{

   var name = document.getElementById("name").value;

		if( document.myForm.name.value == "" )
			{
			 alert( "PLEASE ENTER THE NAME!" );
			 return false;
			}

     openWindow(); 
     return( true );

}
