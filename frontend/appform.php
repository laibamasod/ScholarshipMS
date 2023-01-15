<?php 
session_start();
if (isset($_SESSION["std_id"])) { // the std_id session variable is set
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <style>
     .container {
      display: flex;
      margin-left: 5%;
    }
    .designfield {
      background-color: #EAEDED;
      border: 0.5px solid black;
    }
body{
  overflow-y: auto;
  overflow-x: hidden;
  margin: 0;
  padding: 0;
}
  
    input[type=text],
    input[type=number],
    select,
    input[type=date] {
      width: 70%;
      padding: 10px;
      resize: vertical;
      cursor:text;
    }

    .designfield {
      background-color: #EAEDED;
    }

    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
      font-weight: 500;
    }

    .imginput input {
      display: none;
    }

    .imginput label {
      cursor: pointer;
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

    .row {
      display: inline;
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

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 18px;
      }
    }
    #app {
      padding: 0.5em;
      font-size: 15px;
      color: white;

    }
    #autofilled
    {
        padding-top:1%;
        display: inline;
    }
   
   
    .button {
  background-color: #45B39D; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  float:right;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
 .documents label{
    padding: 5px;
    display: inline-block;
 }
 
 .fileuload
 {
    margin-left: 10%;;
 }
 .filelabels
 {
    padding: 2px;
    width:50px;
 }
 .designfield
 {
    background-color:#EAEDED  ;
 }
 .designfield legend
 {
   
    color: white;
    font-size: 18px;
    width:max-content;
 }
 
      #fimgs
      {
        display: flex;
        flex-direction:column;
      }
     
   
       #pimg
       {
        width:40px;
        height:40px;
        margin-top:7%;
        margin-left: 15%;
       }
       .container
       {
        display: flex;
       }
       .first-col
       {
          width:35%;
       }
       .second-col
       {
        width:35%;
       }
       .third-col
       {
        width:40%;
       }
       input[type=text],input[type=number],select{
  width: 70%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
#app {
            padding: 0.5em;
            font-size: 15px;
            color: white;

        }
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
#profile h3{
  color: white;
}
#qau h2
{
color:white;
}
#mydiv1,#mydiv2
{
  opacity:0.4;
}
#mydiv1 input,#mydiv2 input
{
  pointer-events:none;
}

   </style>
</head>
<body>
  <script>
    $(document).ready(function(){
    $("#show1").click(function()
    {
      $("#mydiv1").css("opacity","1");
      location.href='#mydiv1';
      $("#show2").dialog();
      $("#show2").prop('disabled', false);
    }
    );
    $("#show2").click(function()
    {
      $("#mydiv2").css("opacity","1");
      location.href='#mydiv2';
      $("#show3").dialog();
      $("#show3").prop('enabled', true);
    }
    );
    $("#show3").click(function()
    {
     
      location.href='../frontend/docs.php';
    }
    );
  });
    </script>
<?php
  include "../class/database.php";
  $database_object = new database();
  $row1 = $database_object->view_student($_SESSION["std_id"]);
  $row2 = $database_object->view_student_semester($_SESSION["std_id"]);
  $row3 = $database_object->view_student_program($_SESSION["std_id"]);
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
          <a href="../frontend/dashboard.php">DashBoard</a>
          <a href="../frontend/schl.php">Scholarships</a>
          <a href="../frontend/complaint.php">Contact Us/Make a Complaint</a>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <a href="#"><img src="../public/images/login.png.png" id="pimg">Laiba Masood</a>
        </div>
        <div>
          <button class="openbtn " onclick="openNav()">☰</button>
        </div>
        <img src="../public/images/logo.png" alt="nf" width=70px height=70px>
        <span class="ml-3 text-xl">QUAID-I-AZAM UNIVERSITY ISLAMABAD</span>
      </a>

    </div>
  </header>
  <h1 id="app" class="bg-green-500"> Application Form:</h1>
    <br>
<form >  
  <fieldset class=" designfield">
    <legend class="bg-green-500">Personal Information:</legend>
    <div class="container">
      <div class="first-col">

        <div class="row">
          <div class="col-25">
            <label> Name:</label>  
          </div>
          <div class="col-75">
            <input type="text" name="Name" size="15" value="<?php echo $row1["std_name"] ?>" disabled>  
          </div>
        </div>
        
        <div class="row">
          <div class="col-25">
            <label> CNIC: </label>
          </div>
          <div class="col-75">
            <input type="text" name="cnic" size="15" max="15" value="<?php echo $row1["std_cnic"] ?>" disabled/> <br> <br> 
          </div>
        </div>
      
        <div class="row">
          <div class="col-25">
            <label> Current Semester: </label>  
          </div>
          <div class="col-75">
            <input type="text" name="CurrentSemester" size="15" max="2" value="
            <?php 
            $d1 = $row1['admission_date'];// Pull your date from the db
            $date = new DateTime($d1); // Creates month number
            $yearadd = $date->format('Y');
            $monthadd=$date->format('n');
            $d2 = $row2['current_sem_date'];// Pull your date from the db
            $date = new DateTime($d2); // Creates month number
            $yearsem = $date->format('Y');
            $monthsem=$date->format('n'); 
            $sessionadd="";
            $sessionsem="";
            $curr;
            if($monthadd ||$monthsem >=2&&$monthadd<=8 ||$monthsem )
            {
              $sessionadd="Spring";
            }
            if($monthadd ||$monthsem ==9 || $monthadd ||$monthsem ==10 || $monthadd ||$monthsem ==11 || $monthadd ||$monthsem ==12 || $monthadd ||$monthsem ==1  )
            {
              $sessionadd="Fall";
            }
            $diff=$yearsem-$yearadd;
            $sem_cal=($diff-1)*2;
            if($sessionadd=='Spring')
            {
              $curr=$sem_cal+2;
            }
            if($sessionadd=='Fall')
            {
              $curr=$sem_cal+1;
            }
           echo $curr;
            ?>"  placeholder="have to checked" disabled/> <br> <br> 
          </div>
        </div>
      </div>
      <div class="second-col">
        <div class="row">
          <div class="col-25">
            <label> Father Name:</label>   
          </div>
          <div class="col-75">
            <input type="text" name="FatherName" size="15" value="<?php echo $row1["father_name"] ?>" disabled/>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label> Program: </label>    
          </div>
          <div class="col-75">
            <input type="text" name="Program" size="15" max="5" value="<?php echo $row3["prg_name"] ?>" disabled/> <br> <br>  
          </div>
        </div>

      </div>
      <div class="third-col">

        <div class="row">
          <div class="col-25">
            <label> Registration No: </label>  
          </div>
          <div class="col-75">
            <input type="text" name="RegistrationNo" size="15" max="11" value="<?php echo $row1["reg_no"] ?>" disabled/> 
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label> CGPA: </label>        
          </div>
          <div class="col-75">
            <input type="text" name="CGPA" size="15" max="4" value="<?php echo $row1["CGPA"] ?>" disabled/>  
          </div>
        </div>

      </div>
    </div>
   
    </fieldset>
        <fieldset class="designfield">
          <legend class="bg-green-500">Contact Information:</legend>
          <div class="container">
            <div class="first-col">
              <div class="row">
                <div class="col-25">
                  <label> Permanent Address: </label>
                </div>
                <div class="col-75">
                  <textarea style="vertical-align:top;" cols="50" rows="5" value="address" ></textarea>   <br> <br>  
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label>   Phone :  </label>  
                </div>
                <div class="col-75">
                  <input type="text" name="country code"  value="+92" size="2" style="width:5%"/>   
                  <input type="text" onchange="validatePhone()"id="phone"name="phone" size="10" style="width:70%"/> <br> <br>  
                </div>
                <label id="errorphone" ></label>
              </div>
            </div>
            <div class="second col">
              <div class="row">
                <div class="col-25">
                  <label> Mailing  Address: </label>  
                </div>
                <div class="col-75">
                  <textarea style="vertical-align:top;" cols="50" rows="5" value="address" >  
                  </textarea><input type="checkbox"><label>Same as Above</label><br><br>
                </div>
             </div>
             
             <div class="row">
              <div class="col-25">
                <label> Email: </label> 
              </div>
              <div class="col-75">
                <input type="text" onchange="ValidateEmail()" id="email"name="fthrcnic" size="30" max="50" placeholder="amnamuzaffar2002@gmail.com" /> <br> <br>
              </div>
              <label id="erroremail"></label>
            </div>
           </div>
           </div>
           
          <button class="button button2 bg-green-500" id="show1">Procced to Next</button>
    </fieldset>

    <fieldset id="mydiv1" class="designfield">
        <legend class="bg-green-500">Family Information:</legend>
        <div class="container">
          <div class="first-col">
                  <div class="row">
                    <div class="col-25">
                      <label>  Father/Guardian CNIC: </label>         
                    </div>
                    <div class="col-75">
                      <input type="text" onchange="ValidateCnic()" data-inputmask="'mask': '99999-9999999-9'"  id="cnic" name="fthrcnic" size="15" max="15" placeholder="37405-3094381-2" /> <br> <br> 
                    </div>
                    <label id="errorfcnic"></label>      
                  </div>
                  
                  <div class="row">
                    <div class="col-25">
                      <label>  Mother Name: </label>         
                     
                    </div>
                    <div class="col-75">
                      <input type="text" onchange="ValidateName()"id="mname" name="name" size="15" max="15" placeholder="Farhat Muzaffar" /> <br> <br> 
                    </div>
                    <label id="errorname"></label>
                  </div>

                  <div class="row">
                    <div class="col-25">
                      <label> Father/Guardian Salary :</label>         
                     
                    </div>
                    <div class="col-75">
                      <select>  
                        <option value="Select">Select</option>
                        <option value="15000-20000">15000-20000</option>  
                        <option value="20000-40000">20000-40000</option>  
                        <option value="40000-60000">40000-60000</option>  
                        <option value="Above 60000">Above 60000</option>  
                        </select>  
                    </div>
                    <label id="errorsal"></label>
                  </div>
          </div>
          <div class="second-col">
            <div class="row">
              <div class="col-25">
                <label>Father/Guardian Education :  </label>
               
              </div>
              <div class="col-75">
                <select name="edu" id="edu">
                  <option value="sel">Select</option>
                  <option value="msc">MSC</option>
                  <option value="bsc">BSC</option>
                  <option value="ma">MA</option>
                  <option value="ba">BA</option>
                  <option value="fsc">FSC</option>
                  <option value="fa">FA</option>
                  <option value="matric">Matric</option>
                </select>
                <br>
              </div>
              <label id="erroredu"></label><br>
            </div>
            <div class="row">
              <div class="col-25">
                <label>  Mother CNIC: </label>         
               
              </div>
              <div class="col-75">
                <input type="text" onchange="ValidatemCnic()"id="mcnic"name="fthrcnic" size="15" max="15" placeholder="37405-3094381-2" /> <br> <br> 
              </div>
              <label id="errormcnic"></label>
            </div>
            <div class="row">
              <div class="col-25">
                <label> No of Siblings: </label>         
              </div>
              <div class="col-75">
                <input type="number" name="fthrcnic" size="15" min="0" placeholder="0" /> <br> 
              </div>
              <label id="errorsib"></label>
            </div>
          </div>
          <div class="third-col">
            <div class="row">
              <div class="col-25">
                <label>Father/Guardian Occupation :  </label>
              </div>
              <div class="col-75">
                <select name="occs" id="occs">
                  <option value="sel">Select</option>
                  <option value="gp">Government Employee</option>
                  <option value="af">Armed Forces</option>
                  <option value="pj">Private Job</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <label id="errorfocc"></label><br>
            </div>
            <div class="row">
              <div class="col-25">
                <label>Mother Occupation :  </label>
               
              </div>
              <div class="col-75">
                <select name="occs" id="occs">
                  <option value="sel">Select</option>
                  <option value="gp">Government Employee</option>
                  <option value="af">Armed Forces</option>
                  <option value="pj">Private Job</option>
                  <option value="other">House Wife</option>
                </select>
              </div>
              <label id="errormocc"></label>
            </div>
          </div>
        </div>
     <button class="button button2 bg-green-500"  id="show2"  disabled>Procced to Next</button>
  </fieldset>


  <fieldset  id="mydiv2" class="designfield" >
    <legend class="bg-green-500">Financial Status:</legend>
     <div class="container">
      <div class="first-col">
        <div class="row">
          <div class="col-25">
                  <label>House Type:</label>
          </div>
          <div class="col-75">
            <select name="housetype" id="type">
              <option value="sel">Select</option>
              <option value="sf">Single Family</option>
              <option value="th">Town House</option>
              <option value="mf">Multi Family</option>
              <option value="bunglow">Bunglow</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
             <label>Average of last 6 months utility bill:</label>
          </div>
          <div class="col-75">
            <input type="text" onchange="validateBill()" id="bill" name="avg" size="15" min="0" placeholder="10000.00" /> <br> <br>
          </div>
          <label id="errorbill"></label>
        </div>
      </div>
      <div class="second-col">
        <div class="row">
          <div class="col-25">
              <label>House Details:</label>
             
          </div>
          <div class="col-75">
            <input type="radio" id="house"><label for="house">Own</label>
              <input type="radio" id="house"><label for="house">Rented</label>
          </div>
        </div>
        <div class="row">
          <div class="col-25">
              <label>Other Source of Income?</label>
             
          </div>
          <div class="col-75">
            <input type="radio" id="income"><label for="income">Yes</label>
              <input type="radio" id="income"><label for="income">No</label>
          </div>
        </div>
      </div>
      <div class="third-col">
        <div class="row">
          <div class="col-25">
             <label>House Rent:</label>
          </div>
          <div class="col-75">
            <select>  
              <option value="Select">Select</option>
              <option value="15000-20000">15000-20000</option>  
              <option value="20000-40000">20000-30000</option>  
              <option value="40000-60000">30000-40000</option>  
              <option value="Above 60000">Above 40000</option>  
              </select>  
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label>    Any property own</label>
          </div>
          <div class="col-75">
            <input type="radio" value="yes" name="prpty"/><label for="prpty">Yes</label>
            <input type="radio"  value="no" name="prpty"/><label for="prpty">No</label>
          </div>
        </div>
        
      </div>
     </div>
     <button class="button button2 bg-green-500" id="show3" disabled>Proceed to Next</button>  
  </fieldset>

           
 </form> 
 </div>
 <footer class="text-white body-font bg-green-500">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col" style="padding-top: 2em;padding-bottom: 2em;">
    <hr style="color:black;">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <img src="../public/images/logo.png" alt="nf" width=70px height=70px>
        <span class="ml-3 text-xl">QAU</span>
      </a>
    </div>
    <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Scholarship Portal</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-white hover:text-gray-600" href="#">My Profile</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-600" href="#">Register Complaint</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-600" href="#">Contact Us!</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">Help&Support</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-white hover:text-gray-600" href="#">Terms and Services</a>
          </li>
          <li>
            <a class="text-white hover:text-gray-600" href="#">FAQs</a>
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
<script>
  function validatePhone(){
    let phone=document.getElementById("phone").value;
    let errorp = document.getElementById("errorphone");
    if((phone.length!=11 )||!(checksyntax(phone)))
    {
       
            errorp.innerHTML = "Please enter a valid phone(11 Digits)";
            errorp.style.color = "red";
    }
    else{
      
            errorp.innerHTML = "";   
    }
}
function checksyntax(num)
{
    for(i = 0; i<num.length; i++){
        if(i==0||i==6)
        {
            continue;
        }
        if(!(num[i]>=0 && num[i]<=9)){
            
            return false;
        }
     
    }

    return true;
}
function validateBill() 
  {
    var n=document.getElementById("bill").value;
    let errorName = document.getElementById("errorbill");
   
  var regEx =/^[0-9]+$/;
   if(n.match(regEx))
     {
           errorName.innerHTML = "";
     }
   else
     {
      errorName.innerHTML = "Please enter a valid Bill in Integer";
      errorName.style.color = "red";
     
     
  }
}
function ValidateName() 
  {
    var n=document.getElementById("mname").value;
    let errorName = document.getElementById("errorname");
   
  var regEx = /^[A-Za-z]+$/;
   if(n.match(regEx))
     {
           errorName.innerHTML = "";
     }
   else
     {
      errorName.innerHTML = "Please enter a valid  Name";
      errorName.style.color = "red";
     
     
  }
}
function ValidateEmail() 
  {
    var n=document.getElementById("email").value;
    let errorName = document.getElementById("erroremail");
   
  var regEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(n.match(regEx))
     {
           errorName.innerHTML = "";
     }
   else
     {
      errorName.innerHTML = "Please enter a valid  Email";
      errorName.style.color = "red";
     
     
  }
}
function ValidatefCnic() 
  {
    var n=document.getElementById("cnic").value;
    let errorName = document.getElementById("errorfcnic");
   
  var regEx = /\d{5}-\d{7}-\d/;
   if(n.match(regEx))
     {
           errorName.innerHTML = "";
     }
   else
     {
      errorName.innerHTML = "Please enter a valid  CNIC(00000-0000000-0)";
      errorName.style.color = "red";
     
     
  }
}
function ValidatemCnic() 
  {
    var n=document.getElementById("mcnic").value;
    let errorName = document.getElementById("errormcnic");
   
  var regEx = /\d{5}-\d{7}-\d/;
   if(n.match(regEx))
     {
           errorName.innerHTML = "";
     }
   else
     {
      errorName.innerHTML = "Please enter a valid  CNIC(00000-0000000-0)";
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