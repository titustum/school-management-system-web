<!DOCTYPE html>
<html lang="en-US">
<head>
  <title>CSS Flexbox Container</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Python,Java,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips">
  <meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="http://arabela.com/vendor-assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/boxicons-2.0.7/css/boxicons.min.css')?>">

  <script type="text/javascript" src="http://arabela.com/vendor-assets/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="http://arabela.com/vendor-assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

  <style type="text/css">
    html, body{
      background-color: #fff;
      color: #636b6f;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }
    .full-height{
      width: 100vh;
    }
    .h-10v{
      height: 10vh;
    }
    .h-80v{
      height: 80vh;
    }
    header, footer {
      /*padding-top: 2rem;*/
    }
    .mt-2{
      margin-top: 2rem;
    }
    .mt-y{
      margin-top: 2rem;
      margin-bottom: 2rem;
    }
    .d-flex {
      display: flex;
    }
    .flex-column-start, .flex-column{
      flex-direction: column;
    }
    .flex-column-end{
      flex-direction: column-reverse;
    }
    .flex-end {
      justify-content: flex-end;
    }
    .flex-center {
      justify-content: center;
    }
    .flex-around {
      justify-content: space-around;
    }
    .flex-between {
      justify-content: space-between;
    }
    .w-50{
      width: 50%;
    }
    .w-30{
      width: 30%;
    }
    .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }

    .footer-links a{
      color: blue;
      padding: 0 25px;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: lowercase;
    }
    .form-group{
      padding-top: .3rem;
      padding-bottom: .3rem;
      font-size: 1.3rem;
      box-sizing: border-box;
    }
    .form-group label{
      display: none;
    }
    .form-group input, .form-group select{
      font-size: 18px;
      width: 100%;
      outline: none;
      border-radius: none;
      box-sizing: border-box;
      border: none;
    }
    .form-group .input-div{
      border: 2px solid grey;
      outline: 1px solid green;
    }

    .form-group span.bx{
      padding: 0.2rem;
    }

    .form-group .input-div{
      padding: .5rem;
      border: 1px solid grey;
      border-radius: none;
      box-sizing: border-box;
    }
    .form-group button{
      font-size: 18px;
      width: 100%;
      padding: .5rem;
      box-sizing: border-box;
    }
    .form-title{
      font-size: 2rem;
      font-weight: 500;
      font-family: 'Roboto', sans-serif;
    }
    form{
      /*box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 15%) !important;*/
      border-radius: 3px;
      padding: 2rem;
      box-shadow: 2px -1px 18px 9px rgba(89,110,146,0.52);
      -webkit-box-shadow: 2px -1px 18px 9px rgba(89,110,146,0.52);
      -moz-box-shadow: 2px -1px 18px 9px rgba(89,110,146,0.52);
      /*background-color: #ecf2f3;*/
    }
    .form-title-div{
      padding: 1rem 0;
      font-weight: 700;
    }
  </style>
</head>

<body>
  <header class="header d-flex flex-end h-10v">
    <div class="d-flex flex-around mt-2 links">
      <a href="#">STUDENT PORTAL</a>
      <a href="#">PARENT PORTAL</a>
      <a href="#">ADMIN PORTAL</a>
    </div>
  </header>
  <main class="h-80v d-flex flex-column flex-center">
    <div class="d-flex flex-center">
      <form class="w-30" method="POST" action="<?php echo base_url('home/registerUser');?>">
        <!-- <img src="http://myschool.com/RenderImage/serve/avatar.png" alt="school-logo"> -->
        <div class="form-title-div d-flex flex-center">
          <div class="form-title">NEW STAFF PORTAL</div>
        </div>
        <div class="form-group">
          <label>Mobile No.</label>
          <div class="input-div d-flex">
            <span class="bx bx-phone"></span>
            <input type="number" name="mobile" class="flex-fill" placeholder="MOBILE NUMBER...">
          </div>
        </div>
        <div class="form-group">
          <label>FULL NAMES.</label>
          <div class="input-div d-flex">
            <span class="bx bx-user"></span>
            <input type="text" name="names" class="flex-fill" placeholder="FULLNAMES...">
          </div>
        </div>
        <div class="form-group">
          <label>TYPE OF STAFF.</label>
          <div class="input-div d-flex">
            <span class="bx bx-group"></span>
            <select id="select-dep" name="department" class="flex-fill">
              <option value="">CHOOSE DEPARTMENT</option>
              <option value="maths">MATHEMAITICS</option>
              <option value="humanities">HUMANITIES</option>
              <option value="agric">AGR & BUSINESS</option>
              <option value="examination">EXAMINATION</option>
            </select>
            <!-- <input type="text" name="department" class="flex-fill" placeholder="DEPARTMENT..."> -->
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <div class="input-div d-flex">
            <span class="bx bx-key"></span>
            <input type="password" class="flex-fill" name="new-password" placeholder="NEW PASSWORD...">
          </div>
        </div>
        <div class="form-group">
          <button type="submit" name="register_btn" class="btn btn-info">CREATE ACCOUNT</button>
          <div>
            Already with account?<a href="<?php echo base_url("account");?>" class="ml-1">Signin here!</a>
          </div>
        </div>
    </form>
    </div>
  </main>
  <footer class="header h-10v d-flex flex-column flex-column-end">
    <div class="d-flex flex-column flex-column-end" style="margin-bottom: 1rem">
      <div class="d-flex flex-between footer-links">
        <a href="#">privacy and policies</a>
        <a href="#">&copy; 2020-MySchool</a>
        <a href="#">ADMIN PORTAL</a>
      </div>
    </div>

  </footer>

  <script type="text/javascript">
    var selectDept=$('#select-dep');
    if (selectDept.val()=='') {
      selectDept.css('color', 'blue');
    }
  </script>
</body>
</html>