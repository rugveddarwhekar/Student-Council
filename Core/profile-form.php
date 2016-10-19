 <!DOCTYPE html(lang='en')>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Student Council</title>
</head>
<body>

<nav id="profile-menu" class="trans-menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">
          <li><div class="userView">
            <img class="background" src="../Assets/img/2.jpg">
            <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
            <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="#!"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="Core/edit.php"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><div class="divider"></div></li>

          <li><a href="../default.html"><b> STUDENT COUNCIL</b></a></li>
          <li><a href="../default.html#team-link">Team</a></li>
          <li><a href="../default.html#contact-link">Contact Us</a></li>

      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <a href="../default.html" class="brand-logo center">Student Council</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../logout.php?logout">Log out</a></li>
        <li><a href="default.html#team-link">Team</a></li>
        <li><a href="default.html#contact-link">Contact Us</a></li>
      </ul>


    </div>
  </nav>

<div class="container" style="padding-top: 50px;">
	<div class="row">
	    <form name='form' method="POST" action="testing.php" class="col s12">

		    <?php

		      require_once 'dbconnect.php';
		      ob_start();
		      session_start();

		    ?>



		      <div class="row">

		    	<div class="input-field col s12">
		    	  <input disabled style="font-weight: bolder;" id="icon_prefix" type="text" name="name" id="disabled" value="<?php echo $_SESSION['stud_name'] ?>" class="validate" >
		    	  <label for="icon_prefix">Name</label>
		    	</div>


		        <div class="input-field col s6 ">
		          <input disabled style="font-weight: bolder;" id="icon_prefix" type="text" name="enrollment" id="disabled" value="<?php echo $_SESSION['stud_id'] ?>" class="validate uppercase">
		          <label for="icon_prefix">Enrollment Number</label>
		        </div>

 				<!-- ++++++++++ Unique values ends here  +++++++ -->
				<!-- Never modify names of any of these inputs.They are further linked in testing.php -->
				<!-- Not passing entries of Name and Enrollment number for editing, since they r unique -->
				<!-- consider skills as BRANCH in whole project -->


		        <div class="input-field col s6">
		          <input disabled style="font-weight: bolder;" id="icon_prefix" type="text" name="branch" value="<?php echo $_SESSION['stud_skills'] ?>" class="branch-edit validate">
		          <label for="icon_prefix">Branch</label>
		        </div>

		        <div class="input-field col s12">
		          <input id="icon_prefix" type="email" name="email" value="<?php echo $_SESSION['stud_email'] ?>" class="validate">
		          <label for="icon_prefix">Email</label>
		        </div>

		        <div class="input-field col s12 m6">
		          <input id="icon_telephone" type="tel" name="mobile"  maxlength="10" value="<?php echo $_SESSION['stud_mobile'] ?>" class="validate">
		          <label for="icon_telephone">Mobile Number</label>
		        </div>
		        <div class="input-field col m6 s12">
		          <label for="birthdate">Birth Date</label>
		          <input id="birthdate" type="date" name="dob" value="<?php echo $_SESSION['stud_dob'] ?>" class="datepicker">
		        </div>

		        <div class="input-field col s12 m6">
		          <input id="icon_prefix" type="text" name="year" value="<?php echo $_SESSION['stud_academic_year'] ?>" class="year">
		          <label for="icon_prefix">Year of Study</label>
		        </div>


		        <div class="input-field col m6 s12">
		          <input id="icon_prefix" type="text" name="state" value="<?php echo $_SESSION['stud_state'] ?>" class="state">
		          <label for="icon_prefix">State</label>
		        </div>

<!-- 		        <div class="input-field gender col s12">
		            <span id="male-radio">
		                <input type="radio" name="res" value="Localite" class="with-gap" id="male" />
		                <label for="male">Localite</label>
		            </span>
		            <span>
		                <input type="radio" name="res" value="Hostelite" class="with-gap" id="female" />
		                <label for="female">Hostelite</label>
		            </span>

		        </div> -->


		        <div class="row ">

			          <div class="col s12">
				            <ul class="tabs tab-holder" style="width: 100%;margin: 60px 0px 20px 0px;">
				              <li class="tab col s3"><a href="#technical">Technical</a></li>
				              <li class="tab col s3"><a href="#Social">Social</a></li>
				              <li class="tab col s3"><a href="#Sports">Sports</a></li>
				              <li class="tab col s3"><a href="#Managment">Management</a></li>
				            </ul>
			          </div>

			          <div id="technical" class="col s12">
			          		<p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="web" id="web"  />
			          	      <label for="web">Web Designing and Developing</label>
			          	    </p>

			          	  <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Maintaining this site">
			          	    <input type="checkbox" name="PHP" id="PHP"  />
			          	    <label for="PHP">PHP</label>
			          	  </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="graphics" id="graphics"  />
			          	      <label for="graphics">Photoshop / Illustrator </label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="app" id="app"  />
			          	      <label for="app">App Development </label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Video" id="Video Editing"  />
			          	      <label for="Video Editing">Video Editing</label>
			          	    </p>


			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="animations" id="animations"  />
			          	      <label for="animations">Animations</label>
			          	    </p>
			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Networking" id="Networking"  />
			          	      <label for="Networking"> Computer Networking</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Autocad" id="Autocad"  />
			          	      <label for="Autocad">Autocad</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Katia" id="Katia"  />
			          	      <label for="Katia">Catia</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="CNC" id="CNC"  />
			          	      <label for="CNC">CNC Programming</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="proe" id="proe"  />
			          	      <label for="proe">PROE / CREO</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Hypermesh" id="ansys hypermesh"  />
			          	      <label for="ansys hypermesh">ANSYS Hypermesh</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="KEIL" id="KEIL"  />
			          	      <label for="KEIL">KEIL</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="PROTEUS" id="PROTEUS"  />
			          	      <label for="PROTEUS">PROTEUS</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Maxwell" id="ANSYS Maxwell"  />
			          	      <label for="ANSYS Maxwell">ANSYS Maxwell</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="FEMM" id="FEMM"  />
			          	      <label for="FEMM">FEMM</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Arduino" id="Arduino"  />
			          	      <label for="Arduino">Arduino</label>
			          	    </p>

			          	    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
			          	      <input type="checkbox" name="Rassberry" id="Rassberry Pie"  />
			          	      <label for="Rassberry Pie">Rassberry Pie</label>
			          	    </p>

							<div class="input-field col s12">
							  <input id="high-tech" name="high-tech" type="text" length="300" maxlength="300" class="high-tech">
							  <label for="high-tech">Achivements in Technical</label>
							</div>






			          </div>

			          <div id="Social" class="col s12">
							<p class="col m4 s6">
						      <input type="checkbox" name="act" id="act" />
						      <label for="act">Acting</label>
						    </p>

						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Photography" id="Photography"  />
						      <label for="Photography">Photography</label>
						    </p>


						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="dance" id="dance"  />
						      <label for="dance">Dance</label>
						    </p>

						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Ankering" id="Ankering"  />
						      <label for="Ankering">Ankering / Hosting</label>
						    </p>

						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Singing" id="Singing"  />
						      <label for="Singing">Singing</label>
						    </p>

						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Drama" id="Drama"  />
						      <label for="Drama">Drama</label>
						    </p>

						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Writing" id="Writing"  />
						      <label for="Writing">Writing</label>
						    </p>

						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Poetry" id="Poetry"  />
						      <label for="Poetry">Poetry</label>
						    </p>
						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Drawing" id="Drawing"  />
						      <label for="Drawing">Drawing</label>
						    </p>
						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Decoraction / Design" id="Decoraction / Design"  />
						      <label for="Decoraction / Design">Decoraction / Design</label>
						    </p>
						    <p class="col m4 s6 tooltipped" data-position="bottom" data-delay="50" data-tooltip="I am tooltip">
						      <input type="checkbox" name="Painting" id="Painting"  />
						      <label for="Painting">Painting</label>
						    </p>

						    <div class="input-field col s12">
						      <input id="high-cult" name="high-cult" type="text" length="300" maxlength="300" class="high-cult">
						      <label for="high-cult">Achivements in Cultural</label>
						    </div>

			           </div>

			          <div id="Sports" class="col s12">
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Cricket" id="Cricket"  />
				          	  <label for="Cricket">Cricket</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Badminton" id="Badminton"  />
				          	  <label for="Badminton">Badminton</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Football" id="Football"  />
				          	  <label for="Football">Football</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Chess" id="Chess"  />
				          	  <label for="Chess">Chess</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Kabbadi" id="Kabbadi"  />
				          	  <label for="Kabbadi">Kho-Kho</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="basketball" id="basketball"  />
				          	  <label for="basketball">Basketball</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Vollyball" id="Vollyball"  />
				          	  <label for="Vollyball">Vollyball</label>
				          	</p>

				          	<div class="input-field col s12">
				          	  <input id="high-sport" name="high-sport" type="text" length="300" maxlength="300" class="high-sport">
				          	  <label for="high-sport">Achivements in Sports</label>
				          	</div>

			         </div>

			          <div id="Managment" class="col s12">
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Leader" id="Leader"  />
				          	  <label for="Leader">Leader</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Member" id="Member"  />
				          	  <label for="Member">Member</label>
				          	</p>
			          </div>

		        </div>

		        <div class="input-field col s12" style="margin-bottom: 50px;">
		          <h6 class="edit-head">Member Of</h6>
		          <p class="col m3 s6">
		            <input type="checkbox" name="SAT" id="SAT"  />
		            <label for="SAT">SAT</label>
		          </p>

		          <p class="col m3 s6">
		            <input type="checkbox" name="TNP" id="TNP"  />
		            <label for="TNP">TNP</label>
		          </p>

		          <p class="col m3 s6">
		            <input type="checkbox" name="BAJA" id="BAJA"  />
		            <label for="BAJA">BAJA</label>
		          </p>

		          <p class="col m3 s6">
		            <input type="checkbox" name="ROBOCON" id="ROBOCON"  />
		            <label for="ROBOCON">ROBOCON</label>
		          </p>

		          <p class="col m3 s6">
		            <input type="checkbox" name="E-CELL" id="E-CELL"  />
		            <label for="E-CELL">E-CELL</label>
		          </p>

		          <p class="col m3 s6">
		            <input type="checkbox" name="supra" id="supra"  />
		            <label for="supra">SUPRA</label>
		          </p>

		          <p class="col m3 s6">
		            <input type="checkbox" name="None" id="None"  />
		            <label for="None">None</label>
		          </p>

		        </div>

		        <div class="input-field col s12" style="margin-bottom: 50px;">
		          <input id="future" name="future" type="text" class="future">
		          <label for="future">After GECA (PG / Job..) </label>
		        </div>

		        <div class="input-field col s12">
		          <input id="sugg" name="sugg" type="text" class="sugg">
		          <label for="sugg">Suggestions</label>
		        </div>


			<div class="center update-button">

		        <button class="btn waves-effect waves-light" type="submit" name="update" style="
			    margin-top: 50px;">UPDATE
		          <!-- <i class="material-icons right">send</i> -->
		        </button>
			</div>


		      </div>
	    </form>
	</div>
</div>

</div>
<!-- Modal Structure -->
<div id="modal1" class="modal bottom-sheet">
  <div class="modal-content">
    <h4 class="center gray">Just a Sec !</h4>
    <p class="center gray"> Please fill this carefully, your support is gonna change clg... We are still working hard to add more functionlity to this site... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, fugit.</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>               



<footer class="page-footer white">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="black-text main-footer">The Student Counsil</h5>          
        <p class="black-text footer-geca">Goverment College Of Engeering, Aurangabad<br/>2016-17</p>
        <p class="black-text text-lighten-4">&copy; All Rights Reserved  </p>
      </div>
      <div class="col l6 s12 center footer-links">
        <h5 class="black-text"> </h5>          
        <ul>
            <p>A Concept of Nikhil Badave, Cultural Secretory </p>           
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center">
      <p class="black-text"><i class="material-icons">code</i>with<i class="material-icons" style="color: #f44336">favorite</i>by <span class="ftr"><a class="ftr" href="https://github.com/piratedvirus">Saurabh Kulkarni</a> </span>, SE CSE</p>
    </div>
  </div>
</footer>

<script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
<script src="../Assets/js/materialize.js"></script>
<script src="../Assets/js/init.js"></script>
<script>
	$(document).ready(function(){
	  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
	  $('#modal1').openModal();
	  // $('.modal-trigger').leanModal();
	});

</script>
</body>
</html>
