<?php 
session_start();
if (isset($_SESSION["std_id"])) { // the admin_id session variable is set
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="styles.css" rel="stylesheet">
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
      padding: 5px 5px 5px 0;
      display: inline-block;
      font-weight: 500;
      font-size:16px;
    }

    .imginput input {
      display: none;
    }

    .imginput label {
      cursor: pointer;
    }


    .first-col {
      width: 38%;
    }

    .second-col {
      width: 38%;
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
    .button {
    
    /* Green */
    border: none;
    color: white;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    /* Safari */
    transition-duration: 0.4s;
   
  }

  .button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
  }

  </style>
</head>

<body >
  <?php
  include "../class/studentclasses.php";
  include "../class/interface.php";
  $stdid=$_SESSION['std_id'];
  $student = getStudentDetails($stdid);
  $program=getprogram($stdid);
  $dept=getdepartment($stdid);
  $uni=getuni($stdid);
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
          <a href="#"><img src="../public/images/login.png.png" id="pimg"><?php echo $student->get_std_name() ?></a>
        </div>
        <div>
          <button class="openbtn " onclick="openNav()">☰</button>
        </div>
        <img src="../public/images/logo.png" alt="nf" width=70px height=70px>
        <span class="ml-3 text-xl">QUAID-I-AZAM UNIVERSITY ISLAMABAD</span>
      </a>

    </div>
  </header>
  <h1 id="app" class="bg-green-500"> My Profile</h1>
  <form action="../class/logout.php" method="post">
              <button type="submit">Logout</button>
          </form>
  <form>
    <fieldset class=" designfield">
      <br>
      <div class="container">
      
        <div class="first-col">
          <h2 style="font-size: 20px;font-weight:600;">Student Information:</h2>
          <div class="row">
            <div class="col-25">
              <label>Student Name:</label><input type="text" name="Name" size="15 " value="<?php echo $student->get_std_name()?>"  disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label> CNIC:</label><input type="text" name="cnic" size="12 " value="<?php echo $student->get_std_cnic();?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Father Name:</label><input type="text" name="fthrname" size="15" value="<?php echo $student->get_std_father();?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Date of Birth: </label><input type="text" name="dob" size="15" value="<?php echo $student->get_dob();?>" disabled>
            </div>
          </div>
          <h2 style="font-size: 20px;font-weight:600;">Educational Information:</h2>
          <div class="row">
            <div class="col-25">
              <label>University:</label><input type="text" name="prgm" size="15 " value=" <?php echo $uni->get_uni_name() ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Program:</label><input type="text" name="prgm" size="15 " value="<?php echo $program->get_prg_name() ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Department:</label><input type="text" name="prgm" size="15 " value="<?php echo $dept->get_dept_name() ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>RegNo:</label><input type="text" name="regno" size="12 " value="<?php echo $student->get_reg_no()?>" disabled>
            </div>
          </div>
          
        </div>
        <div class="second-col">
          <h2 style="font-size: 20px;font-weight:600;">Biographical Information:</h2>
          <div class="row">
            <div class="col-25">
              <label>Province: </label><input type="text" name="prvnc" size="15" value="<?php echo $student->get_province(); ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Domicile: </label><input type="text" name="domicile" size="15" value="<?php echo $student->get_domicile(); ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Birth-Country: </label><input type="text" name="country" size="15" value="<?php echo $student->get_contry(); ?>" disabled>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label>Religion: </label><input type="text" name="rel" size="15" value="<?php echo $student->get_religion(); ?>" disabled>
            </div>
          </div>
        </div>
        <div class="third-col">
          <h2 style="font-size: 20px;font-weight:600;">Identification Picture:</h2>
          <div class="row">
            <div class="col-25">
            </div>
            <div class="col-75">
              <div class="imginput" style="background-color: white;height:200px;width:180px;">
                <div style="margin-left:25%;margin-top: 15%;">
                  <div>
                    <label for="inputTag" style="margin-top: 20%">
                      Upload Image
                      <input id="inputTag" type="file" />
                    </label>
                  </div>
                  <div style="margin-left:15%;">
                    <label for="file-input">
                      <img src="../public/images/camera.png" alt="nf" width="55px" height="50px" />
                    </label>
                    <input id="file-input" type="file" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </fieldset>
  </form>
<br><br>
  <br><br>
  <hr>
  <h1 id="app" class="bg-green-500"> My Dashboard</h1>
  <form action="../class/logout.php" method="post">
              <button type="submit">Logout</button>
          </form>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-20 mx-auto" style="padding-top: 2rem;padding-bottom: 1rem;">
        <h2 class="sm:text-3xl text-3xl font-medium title-font mb-2 text-gray-900">My Applications:</h2>
      </div>
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Applicant-ID</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Program</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Status</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-3">0948</td>
              <td class="px-4 py-3">HEC Merit Based</td>
              <td class="px-4 py-3">Submitted(Decision Pending)</td>
              <td class="px-4 py-3">05-Dec-2022</td>
              </td>
            </tr>
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">2438</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">EHSAAS</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">Selected(Make Decision)</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">22-Oct-2022</td>
            </tr>
          </tbody>
        </table>
    </div>
  </section>
  <br>
  <hr>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-20 mx-auto" style="padding-top: 2rem;padding-bottom: 1rem;">
        <h2 class="sm:text-3xl text-3xl font-medium title-font mb-2 text-gray-900">My Tasks:</h2>
      </div>
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Program</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Decision</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Last Date to Decide</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-3">EHSAAS</td>
              <td class="px-4 py-3">
                Do you wish to accept this program?
                <button class="button button2 bg-green-500">Accept</button>
                <button class="button button2 bg-red-600">Reject</button>
              </td>
              <td class="px-4 py-3">13-Jan-2022</td>
            </tr>
            <tr>
              <td class="border-t-2 border-gray-200 px-4 py-3">HEC Merit Based</td>
              <td class="border-t-2 border-gray-200 px-4 py-3">You have not been selected yet</td>
              <td class="px-4 py-3">13-Jan-2022</td>
    
            </tr>
          </tbody>
        </table>
        <br><br>
        <p><b>Disclaimer:</b>You can only select one scholarship. If you fail to select one before Last Date to Decide, you are automaically disqualified to pursue it.</p>
    </div>
    </div>
  </section>
  <br>
  <hr>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-20 mx-auto" style="padding-top: 2rem;padding-bottom: 1rem;">
        <h2 class="sm:text-3xl text-3xl font-medium title-font mb-2 text-gray-900">My Complaints:</h2>
      </div>
      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">Complaint-ID</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Description</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Feedback</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-3"><?php echo $row4['cmp_id'] ?></td>
              <td class="px-4 py-3"><?php echo $row4['cmp_desc'] ?></td>
              <td class="px-4 py-3"><?php echo 'not dealed' ?></td>
            </tr>
          
          </tbody>
        </table>
       <br>
    </div>
    </div>
  </section>
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
</body>
</html>

<?php
}
else{
  header("Location: login.php");
}
?>