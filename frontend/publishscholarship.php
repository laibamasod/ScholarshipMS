<?php 

session_start();
if (isset($_SESSION["addlogin_id"])) { // the admin_id session variable is set
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholarship Management System</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      overflow: auto;
      font-family: 'Times New Roman', Times, serif;
    }
    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }
    
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      overflow-y: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 18px;
      color: #f1f1f1;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {

      color: #c5eecc80;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 30px;
      cursor: pointer;
      background-color: white;
      color: black;
      padding: 10px 15px;
      border: none;
      font-weight: bold;
    }

    .openbtn:hover {
      background-color: #c5eecc80;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
    }

    #pimg {
      width: 40px;
      height: 40px;
      margin-top: 7%;
      margin-left: 15%;
    }

    #autofilled {
      padding-top: 1%;
      display: inline;
    }

    #app {
      padding: 0.5em;
      font-size: 15px;
      color: white;

    }

    .button {
    
      /* Green */
      border: none;
      color: white;
      padding: 10px 25px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s;
      /* Safari */
      transition-duration: 0.4s;
     
    }

    .button2:hover {
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .documents label {
      padding: 5px;
      display: inline-block;
    }

    .fileuload {
      margin-left: 10%;
      ;
    }

    .filelabels {
      padding: 2px;
      width: 50px;
    }

    .designfield {
      background-color: #EAEDED;
    }

  

    #playbuttons button {
      border: none;
      background-color: transparent;
      width: fit-content;
      height: fit-content;
      cursor: pointer;
      position: relative;

    }

    #playsbutton {
      width: fit-content;
      height: fit-content;
    }

    #plays {
      margin-left: 1%;
      display: flex;
    }

    #fimgs {
      display: flex;
      flex-direction: column;
    }

  

    #linkto {
      position: relative;
      top: -20%;
      display: inline-block;
      margin-left: 70%;
      margin-top: 10%;
    }

    #link {
      color: blue;
    }

    #profile {
      width: 15%;
      display: flex;
      margin-left: 15%;
    }

    #pimg {
      width: 40px;
      height: 40px;
      margin-top: 7%;
      margin-left: 15%;
    }

    .container {
      display: flex;
    }

    .first-col {
      width: 35%;
    }

    .second-col {
      width: 35%;
    }

    .third-col {
      width: 40%;
    }

    input[type=text],
    input[type=number],
    select,
    input[type=date] {
      width: 70%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
    }

    .imginput input {
      display: none;
    }

    .imginput label {
      cursor: pointer;
    }

   
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<?php
  include "../class/database.php";
  $database_object = new database();
  $row1 = $database_object->view_admin($_SESSION["addlogin_id"]);
 
  ?>
  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }
  </script>
  <div id="main">
    <header class="text-gray-600 body-font" style="margin-top: -1%;">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
          <div id="mySidebar" class="sidebar bg-green-500">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
            <a href="admindashboard.php">Home</a>
            <a href="publishscholarship.php">Add Scholarship</a>
            <a href="#">View on Going scholarships</a>
            <a href="#">View Complaints</a>
            <a href="#">Generate Report</a>
            <a href="#"><img src="../public/images/login.png.png" id="pimg"><?php echo $row1['admin_name']?></a>
          </div>
      <div>
        <button class="openbtn " onclick="openNav()">☰</button>
      </div>
      <img src="../public/images/logo.png" alt="nf" width=70px height=70px>
      <span class="ml-3 text-xl">QUAID-I-AZAM UNIVERSITY ISLAMABAD</span>
      </a>
  </div>
  </header>
  <h1 id="app" class="bg-green-500"> Publish Scholarship</h1>
 
  <form action="../action/publish_action.php" method="POST">
    <fieldset class=" designfield">
      <div class="container" style="margin: 1%;">
        <div class="first-col">
          <div class="row">
            <div class="col-25">
              <label> Scholarship Name:</label>
            </div>
            <div class="col-75">
              <input type="text" onchange="validateName()" name="Name" size="15"
                placeholder="Ehsaas Undergraduate Scholarship" id="schlname"required>
            </div>
            <label id="errorName"></label>
          </div>
          <div class="row">
            <div class="col-25">
              <label> Scholarship Program:</label>
            </div>
            <div class="col-75">
              <select name="prgms" id="prg s" style="padding: 10px;">
                <option value="sel">Select</option>
                <option value="BS">BS</option>
                <option value="MS">MS</option>
                <option value="BSLateral">BS Lateral</option>
                <option value="PHD">PHD</option>
              </select>
            </div>
            <label id="errorprgm"></label>
          </div>
          <div class="row">
            <div class="col-25">
              <label> Scholarship Amount:</label>
            </div>
            <div class="col-75">
              <input type="text" id="schlam" onchange="validateamount()" name="amount" size="15" placeholder="30000.00">
            </div>
            <label id="erroramount"></label>
          </div>
          <div class="row">
            <div class="col-25">
              <label> Description:</label>
            </div>
            <div class="col-75">
              <textarea style="vertical-align:top;border:1px solid black;" cols="40" rows="5" value="address" name="schldes">
            </textarea>
            </div>
          </div>
          <label id="errordesc"></label>
        </div>
        <div class="second-col">
          <div class="row">
            <div class="col-25">
              <label> Scholarship Sponsors:</label>
            </div>
            <div class="col-75">
              <input type="text" onchange="ValidateSponsor()" id="schlsponsor" name="sponsors" size="15"
                placeholder="HEC" />
            </div>
            <label id="errorSName"></label>
          </div>

          <div class="row">
            <div class="col-25">
              <label>Duration in Years: </label>
            </div>
            <div class="col-75">
              <input type="number" onchange="Validateduration()" id="schldur" name="duration" size="15" min="1" max="5" placeholder="5 years" required/> <br>
            </div>
            <label id="errorduration"></label>
          </div>
          <div class="row">
            <div class="col-25">
              <label> Scholarship Paid:</label>
            </div>
            <div class="col-75">
              <select name="prgms_pay" id="prg s" style="padding: 10px;">
                <option value="sel">Select</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
                <option value="quarterly">Quaterly</option>
                <option value="sixmonths">After 6</option>
              </select>
            </div>
            <label id="errorpaid"></label>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Deadline: </label>
            </div>
            <div class="col-75">
              <input type="date" onchange="validateDate()" id="schldeadline" name="dead" size="15" max="5"
                placeholder="01-01-2023" /> <br>
            </div>
            <label id="errordead"></label>
          </div>
        </div>
        <div class="third-col">

          <div class="row">
            <div class="col-25">
              <label> Scholarship Category:</label>
            </div>
            <div class="col-75">
              <select name="category" id="category" style="padding: 10px;">
                <option value="sel">Select</option>
                <option value="need">Need Based</option>
                <option value="merit">Merit Based</option>
              </select>
            </div>
            <label id="errorcat"></label>
          </div>

          <div class="third-col">
          <h2 style="font-size: 20px;">Identification Picture:</h2>
          <div class="row">
            <div class="col-25">
            </div>
            <div class="col-75">
              <div class="imginput" style="background-color: white;height:200px;width:180px;">
                <div style="margin-left:25%;margin-top: 15%;">
                  <div>
                    <label for="inputTag" style="margin-top: 20%">
                      Upload Image
                      <input id="inputTag" type="file" name="image"/>
                    </label>
                  </div>
                  <div style="margin-left:15%;">
                    <label for="file-input">
                      <img src="../public/images/camera.png" alt="nf" width="55px" height="50px" />
                    </label>
                    <input id="file-input" type="file" name="image"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div>
            <br>
          <button class="button button2 bg-green-500">Finish</button>
        </div>
        </div>
      </div>
   
    </fieldset>
  </form>
<footer class="text-white body-font bg-green-500">
    <div
      class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col"
      style="padding-top: 2em;padding-bottom: 2em;">
      <hr style="color:black;">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
          <img src="../public/images/logo.png" alt="nf" width=70px height=70px>
          <span class="ml-3 text-xl">QAU</span>
        </a>
      </div>
      <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Admin Portal</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-gray-600" href="#">Publish Scholarship</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-600" href="#">Provide Feedback</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-600" href="#">View Available Scholarships</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-600 text-sm text-center sm:text-left">© 2022 LaibaAmna —
          <a href="http://qau.edu.pk/" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@QAU</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-white" href="#">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-white" href="#">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
              viewBox="0 0 24 24">
              <path
                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
              </path>
            </svg>
          </a>
          <a class="ml-3 text-white" href="#">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
        </span>
      </div>
    </div>

  </footer>
  <script type="text/javascript">
    function validateName() {
      var n = document.getElementById("schlname").value;
      let errorName = document.getElementById("errorName");

      var regEx = /^[A-Za-z]+$/;
      if (n.match(regEx)) {
        errorName.innerHTML = "";
      }
      else {
        errorName.innerHTML = "Please enter a valid Name";
        errorName.style.color = "red";


      }
    }
    function Validateduration() {
      var n = document.getElementById("schldur").value;
      let errorName = document.getElementById("errorduration");
      if(n>=1&&n<=5)
      {
        errorName.innerHTML = "";
      }
      else {
        errorName.innerHTML = "Please enter a valid duration";
        errorName.style.color = "red";


      }
    }
    function ValidateSponsor() {
      var n = document.getElementById("schlsponsor").value;
      let errorName = document.getElementById("errorSName");

      var regEx = /^[A-Za-z]+$/;
      if (n.match(regEx)) {
        errorName.innerHTML = "";
      }
      else {
        errorName.innerHTML = "Please enter a valid Sponsor Name";
        errorName.style.color = "red";


      }
    }
    function validateamount() {
      var n = document.getElementById("schlam").value;
      let errorName = document.getElementById("erroramount");

      var regEx = /^[0-9]+$/;
      if (n.match(regEx)) {
        errorName.innerHTML = "";
      }
      else {
        errorName.innerHTML = "Please enter a valid Amount in Integer";
        errorName.style.color = "red";


      }
    }
    function validateDate() {
      let date = new Date().toLocaleDateString();
      var n = document.getElementById("schldeadline").value;
      let errorName = document.getElementById("errordead");


      if (n > DATE(date)) {
        errorName.innerHTML = "";
      }
      else {
        errorName.innerHTML = "Please select a valid Date";
        errorName.style.color = "red";


      }
    }
  </script>
</body>

</html>
<?php
}
else{
  header("Location: login.php");
}
?>