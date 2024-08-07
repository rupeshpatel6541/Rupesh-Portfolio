

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rupesh Patel Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">



<style>

/*======================================
//--//-->   ABOUT
======================================*/

.about-mf .box-shadow-full {
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.about-mf .about-img {
  margin-bottom: 2rem;
}

.about-mf .about-img img {
  margin-left: 10px;
}


.skill-mf .progress {
  /* background-color: #cde1f8; */
  margin: .5rem 0 1.2rem 0;
  border-radius: 0;
  height: .7rem;
}

.skill-mf .progress .progress-bar {
  height: .7rem;
  background-color: #ffbd39;
}


/* Animation styles */
#typing-animation {
  position: relative;
  font-size: 30px;
  font-weight: bold;
  color: rgb(255, 255, 255);
  overflow: hidden;
  white-space: nowrap;
  animation: typing 3s steps(20, end) infinite;
}

#typing-animation:before {
  content: "";
  /* position: absolute; */
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: #ccc;
  animation: typing-cursor 0.5s ease-in-out infinite;
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

@keyframes typing-cursor {
  from {
    width: 5px;
  }
  to {
    width: 0;
  }
}


/* project image zoom effect */

.zoom-effect {
  overflow: hidden;
  transition: transform 0.3s ease-out;
}

.zoom-effect:hover {
  transform: scale(1.1);
}


</style>


  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Rupesh's &nbsp; Portfolio</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#project-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>



	  
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	       <div class="slider-item ">
	      	<div class="overlay"></div>
	         <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/Rupesh_bg3.png);">
	          	 <div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm <span>Rupesh Kumar Patel</span></h1>

						<!-- Element to contain animated typing -->
						<span id="typing-animation"></span>

						<script>

						// Initialize the typing animation
						const typingAnimationElement = document.getElementById('typing-animation');

						// Create an array of typing text
						const typingTexts = [
						'Engineer  ',
						'Fresher  ',
						'Student   ',
						];

						// Create a function to display the typing animation for a given text
						function playTypingAnimation(text) {
						// Loop through each character and add it to the element
						for (let i = 0; i < text.length; i++) {
							setTimeout(() => {
							typingAnimationElement.textContent += text[i];
							}, i * 200); // Increase the delay to slow down the typing animation
						}

						// Once the animation is complete, reset the text and start over
						setTimeout(() => {
							typingAnimationElement.textContent = '';
							playTypingAnimation(typingTexts[(typingTexts.indexOf(text) + 1) % typingTexts.length]);
						}, text.length * 200);
						}

						// Start the typing animation loop
						playTypingAnimation(typingTexts[0]);

						</script>

						<br>
						<br>
			            <h2>I am a Fresher</h2>
						<!-- <h2 class="d-flex" style="margin-bottom: 0">With over 5 years of experience</h2> -->
						<!-- <br> -->
			            <p><a href="#" class="btn btn-primary py-3 px-4">Hire Me</a> 
							<a href="#contact-section" class="btn btn-white btn-outline-white py-3 px-4">Contact Me</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
		</div>
    </section>



    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
			<div class="row">
				<div class="row d-flex align-items-stretch">
				<!-- <div class="row d-flex"> -->
					<div class="col-md-6 col-lg-5 d-flex">
						<div class="img-about img d-flex align-items-stretch">
							<div class="overlay">
								<div class="row">
									<div class="col-sm-6 col-md-5">
									  <div class="about-img">
										<img src="images/about_me.png" class="img-fluid rounded b-shadow-a" alt="">
									  </div>
									</div>
									<!-- Details next to profile image -->
									<div class="col-sm-6 col-md-7">
									  <div class="about-info">
										<p><span class="title-s">Name: </span> <span>Rupesh Kumar Patel</span></p>
										<p><span class="title-s">Date Of Birth: </span> <span>07-05-2001</span></p>
										<p><span class="title-s">Experience: </span> <span>Fresher</span></p>
										<p><span class="title-s">Address: </span> <span>Birgunj, Parsa, Nepal</span></p>
									  </div>
									</div>
								  </div>

								<div class="skill-mf">
									<p class="title-s">Skills</p>
									<span>HTML & CSS</span> <span class="pull-right">80%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="80" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>JavaScript</span> <span class="pull-right">75%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>Java & Oops Concept</span> <span class="pull-right">78%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="78" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>MySQL & Database</span> <span class="pull-right">83%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="83" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									
									<span>Wordpress</span> <span class="pull-right">80%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									<span>ReactJs & NodeJs</span> <span class="pull-right">65%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="65" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
									<span>Bootstrap + Jquery</span> <span class="pull-right">63%</span>
									<div class="progress">
										<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="63" aria-valuemin="0"
											aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								
								<h1 class="big">About</h1>
								<h2 class="mb-4">About Me</h2>
								
								<p>Throughout my academic career, I have acquired knowledge and skills in programming languages including C/C++, HTML, JavaScript, CSS, MYSQL Database, 
									Basic Java and Oops Concept etc. My course work and project have provided me with a solid foundation in both front-end and Back-end development. 
									One of my significant projects involved developing a dynamic web application using HTML, JavaScript, CSS and MYSQL Database to manage user data efficiently.</p>
								<ul class="about-info mt-4 px-md-0 px-2">
									<li class="d-flex"><span>Profile:</span> <span>Computer Science &amp; Engineering</span></li>
									<li class="d-flex"><span>Domain:</span> <span>Web Development, Front-end, Software Development &amp; Full Stack Development</span></li>
									<li class="d-flex"><span>Education:</span> <span>Bachelor of Engineering</span></li>
									<li class="d-flex"><span>Language:</span> <span>English, Hindi & Nepali</span></li>
									<li class="d-flex"><span>Other Skills:</span> <span>C/C++, Excel, GitHub, ChatGPT, Advanced Microsoft Office &amp; Internet & E-Mailing</span></li>
									<li class="d-flex"><span>Certificates:</span> <span>Fundamentals of Digital Marketing, Contribution for Nation (Nepal Agency) &amp; Microsoft Championship powered by Microsoft</span></li>
									<li class="d-flex"><span>Interest:</span> <span>Listening Music, Travelling, Ridding & Interacting with New Peoples</span></li>
									
								</ul>
							</div>
						</div>


						<div class="counter-wrap ftco-animate d-flex mt-md-3">
							<div class="text">
								<p class="mb-4">
									<span class="number" data-number="05">0</span> <span>+</span>
									<span>&nbsp; Projects completed</span>
								</p>
								<p><a href="https://www.linkedin.com/in/rupesh-patel-713584218/" class="btn btn-primary py-3 px-3">LinkedIn</a>
								<a href="https://github.com/rupeshpatel6541" class="btn btn-primary py-3 px-3">GitHub</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>


 <!-- ======= Resume Section ======= -->
	
    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Resume</h1>
            <h2 class="mb-4">Resume</h2>
            <p>“Passionate and dedicated student eager to bring my skills and enthusing to a forwardthinking
				company. Technologically savvy with a can-do attitude, I am committed to
				learning new programs and contributing to the company's success”.</p>
          </div>
        </div>

		
		<section id="resume" class="resume">
			<div class="container">
		
			  <div class="section-title">
				<h2>Resume</h2>
				<p>Check My Resume</p>
			  </div>
		
			  <div class="row">
				<div class="col-lg-6">
				  <h3 class="resume-title">Sumary</h3>
				  <div class="resume-item pb-0">
					<h4>Rupesh Patel</h4>
					<p><em>Recently Passed out with B-Tech Computer Science and Engineering with strong programming skills in languages such as C/C++, HTML, JavaScript & CSS,
						MySQL, Databse & RDBMS, Oops Concetps, DSA, ReactJs & Bootstrap wth Jquery
						and experience in Web development through internships and group projects. 
						Adept at designing security awareness programs and operating systems and achieved 
						a grade point average of 7.9 in computer science & Engineering courses.</em></p>
					<p>
					<ul>
					  <li>Birgunj, Parsa, Nepal</li>
					  <li>(+91) 63981-41979</li>
					  <li>rupeshpatel6541@gmail.com</li>
					</ul>
					</p>
				  </div>
		
				  <h3 class="resume-title">Experience</h3>
				  <div class="resume-item">
					<h4>Web Development</h4>
					<h5>07/2023 - 08/2023</h5>
					<p><em>Cairo Vision Pvt. Ltd. Bengaluru</em></p>
					<p>During my one-month internship as a Web Developer at Cairo Vision Pvt. Ltd.
						 Where I have learned, Worked and created a Nepal Tourism Website.</p>
				  </div>
				  
				</div>
				<div class="col-lg-6">
				  <h3 class="resume-title">Educations</h3>
				  <div class="resume-item">
					<h4>Bachelor of Technology</h4>
					<h5>2020 - 2024</h5>
					<p><em>Guru Ram Dass Institute of Management and Technology, Dehradun, Uttarakhand </em></p>
					<p>
					<ul>
					  <li>specialist Course : B-tech Computer Science and Engineering</li>
					  <li>University : Veer Madho Singh Bhandari Uttarakhand Technical University(VMSBUTU), Dehradun, Uttarakhand, India</li>
					  <li>Passed With 75.59% and 7.9 CGPA</li>
					  <li>Batch Year : 2024</li>
					</ul>
					</p>
				  </div>
				  <div class="resume-item">
					<h4>Diploma in Computer Engineering</h4>
					<h5>2016 - 2020</h5>
					<p><em>Birgunj Institutte of Technology, Birgunj, Parsa, Nepal</em></p>
					<p>
					<ul>
					  <li>specialist Course : Diploma in Computer Engineering</li>
					  <li>University/Borad : CTEVT, Nepal</li>
					  <li>Passed with 69% and CGPA 7</li>
					  <li>Batch Year: 2020</li>
					</ul>
					</p>
				  </div>
				</div>
			  </div>
		
			</div>
		  </section>



    		<div class="row justify-content-center mt-5">
    			<div class="col-md-6 text-center ftco-animate">
    				<p><a href="https://drive.google.com/file/d/1U_T9_ROn5q7jRRA-2g2QPQC-QGM8g3yB/view?usp=sharing" class="btn btn-primary py-4 px-5">Download CV</a></p>
    			</div>
    		</div>
    	</div>
    </section>

   


	

    <section class="ftco-section" id="project-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Projects</h1>
            <h2 class="mb-4">Projects</h2>
            <p>Below are the sample of Project which iis Developed by HTML, CSS & JavaScript, ReactJs, NodeJs, MySql Database etc.</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="https://github.com/rupeshpatel6541/KBC-Quiz-Game-Web-App" class="block-20 zoom-effect" style="background-image: url('images/kbc.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">

                <h3 class="heading"><a href="https://github.com/rupeshpatel6541/KBC-Quiz-Game-Web-App">KBC Quiz Game Web Application using ReactJs</a></h3>
                <p>The main objective of the KBC Quiz Game Web Application system is to manage all the details and provides the searching
					facilities based on various factors.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="https://github.com/rupeshpatel6541/Nepal-Tourism/tree/my-new-branch" class="block-20 zoom-effect" style="background-image: url('images/nepal_tourism.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">

                <h3 class="heading"><a href="https://github.com/rupeshpatel6541/Nepal-Tourism/tree/my-new-branch">Nepal Tourism using HTML, CSS, JavaScript & MySQL Database</a></h3>
                <p>The aim of this project is to provide a better guide for those interested in learning more about Nepal.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="https://github.com/rupeshpatel6541/ATM--Machine" class="block-20 zoom-effect" style="background-image: url('images/atm.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">

                <h3 class="heading"><a href="https://github.com/rupeshpatel6541/ATM--Machine">ATM Machine System using C programming</a></h3>
                <p>The objective of this Project is provided the facilities of Cash Withdrawal, Deposited Money, Check Balance, Pin Change and
					Funds Transfer to the user.</p>
              </div>
            </div>
          </div>
        </div>
	<br>
		<!-- added justify-content-center to center align the last two projects -->
		<div class="row d-flex justify-content-center">  
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
				<a href="https://github.com/rishabhnmishra/sales_forecasting/tree/main" class="block-20 zoom-effect" style="background-image: url('images/curd.png');">
				</a>
				<div class="text mt-3 float-right d-block">
  
				  <h3 class="heading"><a href="https://github.com/rishabhnmishra/sales_forecasting/tree/main">React-Curd Operation usig ReactJs, NOdeJs, API, with MySQL Database </a></h3>
				  <p>Create, Update, Read & Delete. When we are building APIs, we want our models to provide four basic types of functionality.</p>
				</div>
			  </div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
				<a href="https://github.com/rupeshpatel6541/Fyle-Assign" class="block-20 zoom-effect" style="background-image: url('images/proj_5.jpg');">
				</a>
				<div class="text mt-3 float-right d-block">
  
				  <h3 class="heading"><a href="https://github.com/rupeshpatel6541/Fyle-Assign">Fyle-Project using HTML, CSS & JavaScript</a></h3>
				  <p>Fyle's support and implementation team can help you set up your expense management process with ease. Start saving time and eliminate manual effort. Get a demo.</p>
				</div>
			  </div>
			</div>
		 </div>
	  </div>
    </section>

	




	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    	<div class="container">
				<div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Certificates</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="5">0</strong>
                <span>Complete Projects</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="100">0</strong>
                <span>Happy Peoples</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text">
                <strong class="number" data-number="10">0</strong>
                <span>Cups of coffee</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_hire.jpg)">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for Immediately Joining</h2>
						<p>I am willing to work according to the work hours expected by the company for all employees.</p>
						<p class="mb-0"><a href="#home-section" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>





 <!-- ======= Contact Section ======= -->
 
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>From this page, You can contact with me for any inquiry and required about any information.</p>
          </div>
        </div>

        
      </div>
    </section>
		

	 <!-- ======= Contact Section ======= -->
	 <section id="contact" class="contact">
		<div class="container">
	
		  <div class="section-title">
			<h2>Contact</h2>
			<p>Contact Me</p>
		  </div>
	
		  <div class="row mt-2">
	
			<div class="col-md-6 d-flex align-items-stretch">
			  <div class="info-box">
				<i class="bx icon-map-marker"></i>
				<h3>My Address</h3>
				<p>Bhawanipur-18, Birgunj Manipulacity, Parsa, Nepal 44300</p>
			  </div>
			</div>
	
			<div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
			  <div class="info-box">
				<i class="bx icon-share-alt"></i>
				<h3>Social Profiles</h3>
				<div class="social-links">
				  <a href="#" class="icon-twitter"><i class="bi bi-twitter"></i></a>
				  <a href="https://www.facebook.com/rupeshpatel6541" class="icon-facebook"><i class="bi bi-facebook"></i></a>
				  <a href="https://www.instagram.com/rupeshpatel_6541/" class="icon-instagram"><i class="bi bi-instagram"></i></a>
				  <a href="https://github.com/rupeshpatel6541" class="icon-github"><i class="bi bi-skype"></i></a>
				  <a href="https://www.linkedin.com/in/rupesh-patel-713584218/" class="icon-linkedin"><i class="bi bi-linkedin"></i></a>
				</div>
			  </div>
			</div>
	
			<div class="col-md-6 mt-4 d-flex align-items-stretch">
			  <div class="info-box">
				<i class=" bx icon-envelope"></i>
				<h3>Email Me</h3>
				<p>rupeshpatel6541@gmail.com</p>
			  </div>
			</div>
			<div class="col-md-6 mt-4 d-flex align-items-stretch">
			  <div class="info-box">
				<i class="bx icon-phone"></i>
				<h3>Call Me</h3>
				<p>+91 63981 41979</p>
			  </div>
			</div>
		  </div>
	
		  <form action="<?php $_SERVER["PHP_SELF"];?>" method="POST" role="form" class="php-email-form mt-4">
			<div class="row">
			  <div class="col-md-6 form-group">
				<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
			  </div>
			  <div class="col-md-6 form-group mt-3 mt-md-0">
				<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
			  </div>
			</div>
			<div class="form-group mt-3">
			  <input type="number" class="form-control" name="number" id="number" placeholder="Your Number" required>
			</div>
			<div class="form-group mt-3">
				<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
			  </div>
			<div class="form-group mt-3">
			  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
			</div>
			<div class="my-3">
			  <div class="loading">Loading</div>
			  <div class="error-message"></div>
			  <div class="sent-message">Your message has been sent. Thank you!</div>
			</div>
			<div class="text-center"><button type="submit" name="submit" id="submit">Send Message</button></div>
		  </form>
	
		</div>
	  </section><!-- End Contact Section -->
	




    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>From this page, You can contact with me for any inquiry and required about any information.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/rupesh-patel-713584218/"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/rupeshpatel6541"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/rupeshpatel_6541/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#resume-section"><span class="icon-long-arrow-right mr-2"></span>Resume</a></li>
                <li><a href="#project-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Skills</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Full Stack Development</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>MySQL Database (RDBMS)</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Java & Oops Concetps</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Bhawanipur-18, Birgunj Manipulacity, Parsa, Nepal 44300</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 63981 41979</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">rupeshpatel6541@</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>



<?php 
include('Dbconnect.php');

if(isset($_POST['submit']))
{

$Name = $_POST['name'];
$Email = $_POST['email'];
$Number = $_POST['number'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

$sql="INSERT INTO contact_me  (name,email,number,subject,message) VALUES ('$Name','$Email','$Number','$Subject','$Message')";
if(!mysqli_query($con,$sql))
{
die('error:' . mysqli_error($con));
}


echo "Your data is successfully registered"; 


}

?>