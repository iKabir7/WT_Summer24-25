function handlesubmit()
{
var name = document.getElementById("Name").value;
var email = document.getElementById("Email").value;
var number = document.getElementById("Number").value;
var password = document.getElementById("Password").value;
//Validation Input
if (name === "" || email ==="" || number === "" || password ==="")
   { alert ("Please Fill the Form");
return false;
   }
  if (id.length !== 5 || isNaN(id))
    {
  alert(" ID must be exactly 5 digits.");
  return false;
  }
alert("Registration Complete \n " +
"name:" +name + "\n" +
"email: " + emmail + "\n" +
"Number:" +number + "\n" +
"Password: " + password + "\n" );    

}
