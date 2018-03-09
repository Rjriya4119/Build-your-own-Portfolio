<!DOCTYPE html>
<html>
<head>
	<title>The careers</title>
  <style>
    .work{
  height: auto;
  background-image: url('work.png');
  margin-top: -7%;
}
  </style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<header>
  <div class="container header inner">
    <nav class="navbar">
      <div class="container">
      
            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-left masthead-nav">
            <li style="background-image: url('button.png'); width: 100px; height: 86px; "><a href="#"> About</a></li>
            <li><a href=""> Education</a></li>
            <li><a href="#"> Skills</a></li>
            <li><a href="#"> Experience</a></li>
            <li><a href="#"> Achievement</a></li>
            <li><a href="#"> My Portfolio</a></li>
            <li><a href="#"> Contact Me</a></li>
          </ul>
        </div>
      </div>
      </nav>
      <section>
      <?php
        $id=$_SESSION['id'];
        $conn=mysqli_connect("localhost","root","NO","hackathon");
        $query="select * from users where id=$id";
        $rs=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($rs);

      ?>
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 about">
      <div class="myself">
        <h1 style="font-size: 570%;">
          I <span style="color:#3fcdcf;">AM</span> DESIGNER
        </h1>
        <h2 class="text-right" style="margin-right: 15%; color: #3fcdcf; font-family: pristina; margin-top: -3%;">
          <span style="color:#fff; font-size:36px;">-</span><?php echo $row['name']; ?>
        </h2>
        <p class="justify" style="font-family: Roboto; color: #F1F5F5;">
         <?php echo $row['about']; ?>
        </p>
      </div>
      <div class="self">
      <img src="<?php echo "../profile/".$row['name']."/".$row['profileimage'];?>" class="img-responsive">
        
      </div>
      <div class="cool-button">
        
        <div class="but-2">
          <h4>
            <a href="<?php  echo "../cv/".$row['name']."/".$row['cv'];?>">Download CV</a>>
          </h4>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>

</header>
<section>
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 education">
<h1 class="text-center" style="color: #fff; ">
  EDUCATION
</h1>
<p class="text-center" style="color: #fff; padding-right: 20%; padding-left: 20%;"> 
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
</p>
<div class="stream nav nav-tabs">
  <a data-toggle="tab" href="#10th"><p class="stream-circle" style="margin-left: 6%;" >
    10th 
  </p></a>
  <a data-toggle="tab" href="#inter"><p class="stream-circle " >
    12th
  </p></a>
  <a data-toggle="tab" href="#UG"><p class="stream-circle " >
    UG
  </p></a>
  <a data-toggle="tab" href="#PG"><p class="stream-circle " >
    PG
  </p></a>
</div>
<div class="tab-content">


<?php 
  $a=['10th','inter','UG','PG'];
  $i=0;
  $query10="select * from user_education where id=$id";
  $rs10=mysqli_query($conn,$query10);
  while ($row10 = mysqli_fetch_assoc($rs10)) 
  {
    ?>
    <div id="<?php echo $a[i]; ?>" class="edu-det tab-pane fade in ">
       <div style="width: 40%; float: left;">
         <img src="hat3.png" class="img-responsive">
       </div>
       <div style="width: 60%; float: left;">
         <h3 class="text-left" style="padding-left: 5px;">
           <?php echo $row10['institute']; ?><br>
           <span style="color: black; font-size: 16px; text-align: left;">Year of Passing: <?php echo $row10['year']; ?></span><br>
           <span style="color: #3fcdcf; font-size: 14px; text-align: left;">CPI:</span><span style="font-size: 14px"><?php echo $row10['stream']; ?></span>
         </h3>
         <p class="text-left" style="font-size: 11px;">
         
         </p>
       </div> 
      </div>

    <?php
    $i++;
  }



?>
     <!--  <div id="10th" class="edu-det tab-pane fade in active">
       <div style="width: 40%; float: left;">
         <img src="hat3.png" class="img-responsive">
       </div>
       <div style="width: 60%; float: left;">
         <h3 class="text-left" style="padding-left: 5px;">
           Woodbine Modern School<br>
           <span style="color: black; font-size: 16px; text-align: left;">Year of Passing: 2013</span><br>
           <span style="color: #3fcdcf; font-size: 14px; text-align: left;">CPI:</span><span style="font-size: 14px">10</span>
         </h3>
         <p class="text-left" style="font-size: 11px;">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
         </p>
       </div> 
      </div> -->
        





    <!--   <div id="inter" class="edu-det tab-pane fade in">
       <div style="width: 40%; float: left;">
         <img src="hat3.png" class="img-responsive">
       </div>
       <div style="width: 60%; float: left;">
         <h3 class="text-left" style="padding-left: 5px;">
           Woodbine Modern School<br>
           <span style="color: black; font-size: 16px; text-align: left;">Year of Passing: 2013</span><br>
           <span style="color: #3fcdcf; font-size: 14px; text-align: left;">CPI:</span><span style="font-size: 14px">10</span>
         </h3>
         <p class="text-left" style="font-size: 11px;">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
         </p>
       </div> 
      </div>





      <div id="UG" class="edu-det tab-pane fade in">
       <div style="width: 40%; float: left;">
         <img src="hat3.png" class="img-responsive">
       </div>
       <div style="width: 60%; float: left;">
         <h3 class="text-left" style="padding-left: 5px;">
           IIIT Vadodara<br>
           <span style="color: black; font-size: 16px; text-align: left;">Year of Passing: 2013</span><br>
           <span style="color: #3fcdcf; font-size: 14px; text-align: left;">CPI:</span><span style="font-size: 14px">10</span>
         </h3>
         <p class="text-left" style="font-size: 11px;">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
         </p>
       </div> 
      </div>




      <div id="PG" class="edu-det tab-pane fade in">
       <div style="width: 40%; float: left;">
         <img src="hat3.png" class="img-responsive">
       </div>
       <div style="width: 60%; float: left;">
         <h3 class="text-left" style="padding-left: 5px;">
           Woodbine Modern School<br>
           <span style="color: black; font-size: 16px; text-align: left;">Year of Passing: 2013</span><br>
           <span style="color: #3fcdcf; font-size: 14px; text-align: left;">CPI:</span><span style="font-size: 14px">10</span>
         </h3>
         <p class="text-left" style="font-size: 11px;">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
         </p>
       </div> 
      </div> -->








    </div>
      </div>
    </div>
  </div>
</section>

<!--
skills
-->
<section class="skills">
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1">
      <h1 class="text-center">
        SKILLS
      </h1>
      <?php
            $query1="select * from user_skills where id=$id";
            $rs=mysqli_query($conn,$query1);

            while ($row2 = mysqli_fetch_assoc($rs)) 
            {
            ?>

              <div class="col-md-3 col-sm-6">
                  <div class="progress blue">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <?php
                      $i=$row2['percentage'];

                      if($i==1)
                      {
                        ?>
                          <div class="progress-value">60%</div>

                      <?php
                      }
                      elseif($i==2)
                      {
                        ?>
                          <div class="progress-value">80%</div>
                      <?php
                      }
                      elseif($i==3)
                      {
                        ?>
                            <div class="progress-value">90%</div>
                    <?php
                      }

                      ?>

                      
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="text-center" style="color: black;">
                  <?php echo $row2['skill_name']; ?>
                </h4>
              </div>


            <?php
            }
                           
      ?>
      
    <!--     <div class="col-md-3 col-sm-6">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
        </div> -->
        <!--  <div class="col-md-3 col-sm-6">
            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">90%</div>
            </div>
        </div> -->
      <!--   <div class="col-md-3 col-sm-6">
            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
        </div> -->
      <!--   <div class="col-md-3 col-sm-6">
          <h4 class="text-center" style="color: black;">
            Skill 01
          </h4>
        </div>
 -->


     <!--    <div class="col-md-3 col-sm-6">
          <h4 class="text-center" style="color: black;">
            Skill 01
          </h4>
        </div>
        <div class="col-md-3 col-sm-6">
          <h4 class="text-center" style="color: black;">
            Skill 01
          </h4>
        </div>
        <div class="col-md-3 col-sm-6">
          <h4 class="text-center" style="color: black;">
            Skill 01
          </h4>
        </div> -->
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 experience">
      <h1 class="text-center" style="margin-bottom: 10%;">
        EXPERIENCE
      </h1>
      <?php
        $query3="select * from user_experience where id=$id";
        $rs5=mysqli_query($conn,$query3);
         while ($row5 = mysqli_fetch_assoc($rs5)) 
         {

          ?>

            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="margin-bottom: 10%;">
                  <div class="img-ex">
                    <img src="case2.png" class="img-responsive" style="padding: 25%;">
                  </div>
                  <div class="img-des" style="color: black;">

                    <h3>
                      <?php echo $row5['field']; ?>
                    </h3>
                    <h4>
                      <?php echo $row5['organisation_name']; ?>
                    </h4>
                    <h4>
                      Duration: <?php echo $row5['duration']; ?> months
                    </h4>
                    <p>
                      <?php echo $row5['about']; ?>
                    </p>
                  </div>
          </div>

          <?php
         }
      ?>
     
  <!--     <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12" style="margin-bottom: 10%;">
         <div class="img-ex">
          <img src="case2.png" class="img-responsive" style="padding: 25%;">
        </div>
        <div class="img-des" style="color: black;">
          <h3>
            Web Designing
          </h3>
          <h4>
            Hubilo
          </h4>
          <h4>
            Duration: 3 months
          </h4>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
          </p>
        </div>
      </div> -->
  
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 achievement">
      <h1 class="text-center" style="color: #fff; ">
        ACHIEVEMENTS
      </h1>
      <br>
      <?php
     
      $qry_ach = "SELECT * from user_achievements where id = $id";
      $rs_ach = mysqli_query($conn,$qry_ach);
      $i =0;
      while($fet = mysqli_fetch_array($rs_ach))
      {
    ?>
      <div class="row">
          <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 col-md-offset-<?php echo $i; $i+=3; ?>">
          <div style="width: 40%; float: left;">
            <img src="achieve.png" class="img-responsive" width="80px">
          </div>
          <div style="margin-left: -10%; float: left; margin-top: -4%; color: #fff; width: 60%;">
          <h3 style="color: black;"><?php echo $fet['field']; ?></h3>
          <h4>Position: <?php echo $fet['position']; ?></h4>
          <p><?php $fet['description']; ?></p>
          </div>
      </div>
        </div>
      <?php
        }
      ?>
        <!--<div class="row">
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 col-md-offset-4">
        <div style="width: 40%; float: left;">
          <img src="achieve.png" class="img-responsive" width="80px">
        </div>
          <div style="margin-left: -10%; float: left; margin-top: -4%; color: #fff; width: 60%;">
          <h3 style="color: black;">Inter IIIT Cricket</h3>
          <h4>Position: Gold Medal</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 col-md-offset-7">
        <div style="width: 40%; float: left;">
          <img src="achieve.png" class="img-responsive" width="80px">
        </div>
          <div style="margin-left: -10%; float: left; margin-top: -4%; color: #fff; width: 60%;">
          <h3 style="color: black;">Inter IIIT Cricket</h3>
          <h4>Position: Gold Medal</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
      </div>
      </div>-->
    </div>
  </div>
</section>

<!-- <section>
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 achievement">
      <h1 class="text-center" style="color: #fff; ">
        ACHIEVEMENTS
      </h1>
      <br>
      <div class="row">
      <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12">
        <div style="width: 40%; float: left;">
          <img src="achieve.png" class="img-responsive" width="80px">
        </div>
          <div style="margin-left: -10%; float: left; margin-top: -4%; color: #fff; width: 60%;">
          <h3 style="color: black;">Inter IIIT Cricket</h3>
          <h4>Position: Gold Medal</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 col-md-offset-4">
        <div style="width: 40%; float: left;">
          <img src="achieve.png" class="img-responsive" width="80px">
        </div>
          <div style="margin-left: -10%; float: left; margin-top: -4%; color: #fff; width: 60%;">
          <h3 style="color: black;">Inter IIIT Cricket</h3>
          <h4>Position: Gold Medal</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 col-sm-5 col-lg-5 col-xs-12 col-md-offset-7">
        <div style="width: 40%; float: left;">
          <img src="achieve.png" class="img-responsive" width="80px">
        </div>
          <div style="margin-left: -10%; float: left; margin-top: -4%; color: #fff; width: 60%;">
          <h3 style="color: black;">Inter IIIT Cricket</h3>
          <h4>Position: Gold Medal</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</section> -->

<section>
  <div class="container">
    <div class="col-md-10 col-lg-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 work">
      <h1 class="text-center" style="margin-top: 10%;">
        PORTFOLIO
      </h1>
      <div class="mywork">
      <?php 
        $query8="select * from user_portfolio where id=$id";
        $rs8=mysqli_query($conn,$query8);
         while ($row8 = mysqli_fetch_assoc($rs8)) 
         {
          ?>
               <a href="<?php echo $row8['link']; ?>"> <img src="<?php echo "../upload/".$row8['image'];?>" class="img-responsive"></a>

          <?php
         }

      ?>
        
        
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <div class="col-md-12 col-lg-10 col-sm-10 col-xs-12  contact">
      <h3 class="text-center" style="margin-top: 15%; color: #fff;">
       <p class="get-in-touch text-center">
            Get in touch with us!
          </p>
      </h3>
   <!--      <section id="form_touch">
      <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
          <p class="get-in-touch text-center">
            Get in touch with us!
          </p>
          <hr class="touch_underline"> -->
          <form id="get-form">
              <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 myform-group">
                  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <label for="completeName" class="form_name1" style="width: 100px;">
                    <div class="abstrict">*</div>FIRST NAME</label><br>
                    <input id="firstName" name="firstName" maxlength="200" class="form_name1_field" style="width: 150px;" type="text" required="">
                  </div>
                  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <label for="completeName" class="form_name1" style="width: 100px;">
                    <div class="abstrict">*</div>Last NAME</label><br>
                    <input id="lastName" name="lastName" maxlength="200" class="form_name1_field" style="width: 150px;" type="text" required="">
                  </div>
                </div>
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 myform-group">
                  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <label for="completeName" class="form_name1" style="width: 100px;">
                    <div class="abstrict">*</div>email</label><br>
                    <input id="email" name="email" maxlength="200" class="form_name1_field" style="width: 150px;" type="text" required="">
                  </div>
                  <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <label for="completeName" class="form_name1" style="width: 100px;">
                    <div class="abstrict">*</div>phone number</label><br>
                    <input id="phoneNumber" name="phoneNumber" maxlength="200" class="form_name1_field" style="width: 150px;" type="text" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" required="">
                  </div>
                </div>
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 myform-group">
                  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <label for="completeName" class="form_name1" style="width: 100px;">
                    <div class="abstrict">*</div>Message</label><br>
                    <!-- <input id="companyName" name="companyName" maxlength="200" class="form_name1_field" style="width: 150px;" type="text" required="" height="300px;"> -->
                    <textarea rows="4" cols="50" class="form_name1_field"></textarea>
                  </div>
                  
                </div>
                <div class="col-md-12 col-lg-12 col-xs-12 myform-group-button">
                  <button class="form-started-button" type="submit">Submit</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </section>
    </div>
  </div>
</section>
<section>
<div class="footer-social-icons mynetwork">
    
    <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
</section>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>