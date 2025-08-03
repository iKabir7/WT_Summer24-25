<!DOCTYPE html>
<html>
    <head>
    <title>Blood Donation</title>
    <link rel="stylesheet" href="../CSS/task_3_style.css">
    </head>
    <body>
           <h1 style = "color :Blue;"> Donor Information </h1>
            <section class="form-section">
                <form id="donationForm" onsubmit="return checkFromInputs()">
    
    
           <label> First Name : </label><br>
            <input type = "text" name= "name"><br><br>
  
       
            <label> Last Name : </label><br>
             <input type = "text" name= "name"><br><br>

             <label> Email Address : </label><br>
            <input type = "email" name= "email"><br><br>

            <label> Mobile Number (11 digits) : </label><br>
            <input type = "text" id="number"><br><br>

            <label> Create Password (min 8 Character) : </label><br>
            <input type = "text" id="password"><br><br>

              
            <label> Confirm Password : </label><br>
            <input type = "text" id="password"><br><br>


            
           
           
               <label> Donation Amount : </label><br><br>
                <input type = "radio" name = "des" > None 
                <input type = "radio" name = "des" > 500 BDT
                <input type = "radio" name = "des" > 1000 BDT
                <input type = "radio" name = "des" > 1500 BDT
                <input type = "radio" name = "des" > 2000 BDT
                <input type = "radio" name = "des" > 3000 BDT
                <input type = "radio" name = "des" > Other<br><br>
      

                <label> Payment Method: </label> <br><br>
                <input type = "radio" name = "des" > Bkash 
                <input type = "radio" name = "des" > Nagad
                <input type = "radio" name = "des" > Rocket
                <input type = "radio" name = "des" > Card <br><br>

                <input type="checkbox" name= "terms" > I accept the terms & conditions <br><br>

                <input type = "submit" value = "Submit">
                <input type = "submit" value = "Reset">
</section>
    </body>
</html>



                
                
      
            

           
            