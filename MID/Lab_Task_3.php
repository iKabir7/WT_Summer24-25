<!DOCTYPE html>
<html>
<head>
  <title>JavaScript Basic Concepts</title>
</head>
<body>

  <h1>Welcome to JavaScript Practice</h1>
  <p>Open your browser console to see the results. (Right-click → Inspect → Console)</p>

  <script>
    
    //  1. VARIABLES

    console.log(" VARIABLES");
    var name = "Iqram";
    var age = 25;
    var id = 22461651;
    var institute = "AIUB"
    var isStudent = true;
    console.log("Name:", name);
    console.log("Age:", age);
    console.log("Id:", id);
    console.log("Institute:", institute);
    console.log("Is Student?", isStudent);
   

    //  4. OPERATORS

    console.log("\n OPERATORS");
    var a = 100;
    var b = 30;
    console.log("Addition:", a + b);
    console.log("Subtraction:", a - b);
    console.log("Multiplication:", a * b);
    console.log("Division:", a / b);
    console.log("Remainder:", a % b);


    // 5. CONDITION

    console.log("\n IF / ELSE");
    if (age >= 20) {
      console.log(name + " is an adult.");
    } else {
      console.log(name + " is a minor.");
    }

 

    //  6. LOOPS

    var marks = [90,80,85]
    console.log("\n Marks of Each Subject")
    for (var i=0;i < marks.length;i++)
     
      {
              console.log ("WEB TECHNOLOGIES" + " Marks" + marks [i]);
              console.log ("DATA SCIENCE"  + " Marks" + marks [i]);
              console.log ("MACHINE LEARNING" + " Marks" + marks [i]);
    }
        

            

    //  7. FUNCTIONS

    console.log("\n FUNCTIONS");

    function greetUser(userName) {
      console.log("Hello, " + userName + "!");
    }

    greetUser("Iqramul");
    greetUser("Kabir");

    // We'll add the button below HTML and attach event here

    function showMessage() {
      alert("You clicked the button!");
      console.log("STUDENT RESULTS SHEET.");
      console.log("WEB TECHNOLOGIES = 90");
      console.log("DATA SCIENCE =80");
      console.log("MACHINE LEARNING = 85");
    }
  </script>

  <br><br>

  <button onclick=" showMessage()">Click Me</button>

</body>
</html>
