<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholarship Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Times New Roman', Times, serif;
    }
    #app {
            padding: 0.5em;
            font-size: 15px;
            color: white;

        }
    .container {
      display: flex;
      margin-left: 5%;
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
    #autofilled {
      padding-top: 1%;
      display: inline;
    }

  

    .button {
      background-color: #45B39D;
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
      float: right;
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

    .designfield legend {    
      color: white;
      font-size: 18px;
      width: max-content;
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
    select {
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

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      text-align: center;
    }

    th:nth-child(1) {
      padding: 1px;
      width: 2%;
      border: 1px solid #dddddd;
      text-align: center;
    }

    th:nth-child(2) {
      padding: 1px;
      width: 2%;
      border: 1px solid #dddddd;
      text-align: center;

    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: center;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    #profile h3 {
      color: white;
    }

    #qau h2 {
      color: white;
    }
  </style>
</head>

<body>
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
          <button class="openbtn " onclick="openNav()">???</button>
        </div>
        <img src="../public/images/logo.png" alt="nf" width=70px height=70px>
        <span class="ml-3 text-xl">QUAID-I-AZAM UNIVERSITY ISLAMABAD</span>
      </a>

    </div>
  </header>
  <h1 id="app" class="bg-green-500"> Application Form->Document Uploading</h1>
 
  <form>

    <fieldset class="designfield documents">
      <legend>Documents Section:</legend>
      <table>
        <tr>
          <th scope="col">SerialNo</th>
          <th scope="col">CheckList</th>
          <th scope="col">Documents Required</th>
          <th scope="col">Upload here</th>
        </tr>
        <tr>
          <td>1</td>
          <td><input type="checkbox"></td>
          <td>Student's CNIC</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>2</td>
          <td><input type="checkbox"></td>
          <td>Father's CNIC</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>3</td>
          <td><input type="checkbox"></td>
          <td>Mother's CNIC</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>4</td>
          <td><input type="checkbox"></td>
          <td>Transcript(till current Semester)</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>5</td>
          <td><input type="checkbox"></td>
          <td>Family Certificate</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>6</td>
          <td><input type="checkbox"></td>
          <td>Rent Agreement in case of Rented House</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>7</td>
          <td><input type="checkbox"></td>
          <td>Father/Guardian Income Certificate</td>
          <td><input type="file"></td>
        </tr>
        <tr>
          <td>8</td>
          <td><input type="checkbox"></td>
          <td>Last Month Electricity Bill</td>
          <td><input type="file"></td>
        </tr>
        <td>9</td>
        <td><input type="checkbox"></td>
        <td>Last Month Gas Bill</td>
        <td><input type="file"></td>
        </tr>
        <td>10</td>
        <td><input type="checkbox"></td>
        <td>Last Month Internet Bill</td>
        <td><input type="file"></td>
        </tr>
      </table>

      <button class="button button2 bg-green-500">Submit</button>
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
              <a class="text-white hover:text-gray-600" href="../frontend/dashboard.php">My Profile</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-600" href="../frontend/complaint.php">Register Complaint</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-600" href="../frontend/complaint.php">Contact Us!</a>
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
        <p class="text-gray-600 text-sm text-center sm:text-left">?? 2022 LaibaAmna ???
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