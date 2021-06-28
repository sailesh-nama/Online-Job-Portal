<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />

  <title>JOB PORTAL</title>

  <link rel="index" href="./" title="Home" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
  <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
  <style type="text/css">
    .style1 {
      color: #000066;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <!-- Main -->
  <div id="main" class="box">
    <?php
    include "Header.php"
    ?>
    <?php
    include "menu.php"
    ?>
    <!-- Page (2 columns) -->
    <div id="page" class="box">
      <div id="page-in" class="box">
        <!-- Content -->
        <div id="content">
          <!-- Article -->
          <div class="article">
            <h2><span><a href="#">Welcome To Control Panel</a></span></h2>

            <?php
            $ID = $_GET['EmpId'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "nishal", "Nishal1337", "job");

            // Specify the query to execute
            $sql = "select * from employer_reg where EmployerId ='" . $ID . "'  ";
            // Execute query
            $result = mysqli_query($con, $sql);
            // Loop through each records 
            $row = mysqli_fetch_array($result)
            ?>
            <table width="100%" border="1" cellspacing="2" cellpadding="2">
              <tr>
                <td>ID:</td>
                <td><?php echo $row['EmployerId']; ?></td>
              </tr>
              <tr>
                <td>Company Name:</td>
                <td><?php echo $row['CompanyName']; ?></td>
              </tr>
              <tr>
                <td>Contact Person:</td>
                <td><?php echo $row['ContactPerson']; ?></td>
              </tr>
              <tr>
                <td>Address:</td>
                <td><?php echo $row['Address']; ?></td>
              </tr>
              <tr>
                <td>City:</td>
                <td><?php echo $row['City']; ?></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><?php echo $row['Email']; ?></td>
              </tr>
              <tr>
                <td>Mobile:</td>
                <td><?php echo $row['Mobile']; ?></td>
              </tr>
              <tr>
                <td>Area of Work:</td>
                <td><?php echo $row['Area_Work']; ?></td>
              </tr>
              <tr>
                <td><strong><a href="ApprovEmp.php?EmpId=<?php echo $row['EmployerId']; ?>">Approv Employer</a></strong></td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <?php
            mysqli_close($con);
            ?>

            <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->
        </div> <!-- /content -->

        <?php
        include "right.php"
        ?>

      </div> <!-- /page-in -->
    </div> <!-- /page -->
    <?php
    include "footer.php"
    ?>
  </div> <!-- /main -->

</body>

</html>