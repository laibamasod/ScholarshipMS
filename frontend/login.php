<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
     width: 50%;
        overflow: hidden;
        margin: auto;
        padding: auto;
        background: url(../public/images/bg1.jpg);
        background-repeat: no-repeat;
        background-position: absolute;
      background-size: cover;
   
    }

    * {
        box-sizing: border-box
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 50%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }
 
    button:hover {
        opacity: 1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }
.clearfix{
    justify-content: center;
}
    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {

        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
/*    #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
  font-size: 1em;;
}

#message p {
  padding: 10px 35px;
  
}

/* Add a green text color and a checkmark when the requirements are right 
.valid {
  color: green;
}


.invalid {
  color: red;
}

*/
</style>

<body>

    <form action="../action/login_action.php" method="POST" style="border:1px solid #ccc;margin-top: 8em;background-color: white;">
        <div class="container" >
            <h1>Login to SMS Portal</h1>
            <p>Please fill in this form to access your account.</p>
            <hr>

            <label for="email"><b>Email</b></label><label style="display: inline-block;" id="errormail"></label>
            <input type="text" placeholder="Enter Email" id="mail" name="email"  required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw"  required>


            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me &nbsp&nbsp
            </label>

          <a href="#" style="color:white">Forgot Password?</a>

            <div class="clearfix">
          <button type="submit" class="signupbtn" >Login</button>
            </div>
          <!---  <div id="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div>
            -->              
            
        </div>
    </form>
    <script>
        function ValidateEmail() {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var inputText = document.getElementById("mail");
            if (inputText.value.match(mailformat)) {
                document.getElementById("errormail").innerHTML = "";
            }
            else {
                document.getElementById("errormail").innerHTML = " &nbsp&nbspInvalid email address!\n"
                document.getElementById("errormail").style.color = "red";
            }
        }
        var myInput = document.getElementById("psw");
              var letter = document.getElementById("letter");
              var capital = document.getElementById("capital");
              var number = document.getElementById("number");
              var length = document.getElementById("length");
              
              // When the user clicks on the password field, show the message box
              myInput.onfocus = function() {
                document.getElementById("message").style.display = "block";
              }
              
              // When the user clicks outside of the password field, hide the message box
              myInput.onblur = function() {
                document.getElementById("message").style.display = "none";
              }
              
              // When the user starts to type something inside the password field
              myInput.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(myInput.value.match(lowerCaseLetters)) {  
                  letter.classList.remove("invalid");
                  letter.classList.add("valid");
                } else {
                  letter.classList.remove("valid");
                  letter.classList.add("invalid");
                }
                
                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if(myInput.value.match(upperCaseLetters)) {  
                  capital.classList.remove("invalid");
                  capital.classList.add("valid");
                } else {
                  capital.classList.remove("valid");
                  capital.classList.add("invalid");
                }
              
                // Validate numbers
                var numbers = /[0-9]/g;
                if(myInput.value.match(numbers)) {  
                  number.classList.remove("invalid");
                  number.classList.add("valid");
                } else {
                  number.classList.remove("valid");
                  number.classList.add("invalid");
                }
                
                // Validate length
                if(myInput.value.length >= 8) {
                  length.classList.remove("invalid");
                  length.classList.add("valid");
                } else {
                  length.classList.remove("valid");
                  length.classList.add("invalid");
                }
              }
    </script>
</body>

</html>