<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="tel:+918983111971"><strong>CALL</strong> +91 898 311 1971</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/people/Shikshan-Hakka-Manch/100066497348495/" target="_blank"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-github"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="index.php?link=notice">NOTICE</a></li>
            <?php /*?><li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="index.php?link=research">RESEARCH</a></li><?php */?>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="index.php?link=donation">DONATION</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="index.php?link=scholarship">SCHOLARSHIP</a></li>
            <?php /*?><li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal" data-toggle="modal" data-target="#loginModal">LOGIN</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal" data-toggle="modal" data-target="#signupModal">REGISTER</a></li><?php */?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.php?link=home"><img src="images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item <?php if ($_GET['link']== 'home'){ ?> active<?php } ?> ">
              <a class="nav-link" href="index.php?link=home">Home</a>
            </li>
<!--            <li>
              <a class="nav-link" href="index.php?link=home">Home</a>
            </li>-->
            <li class="nav-item <?php if ($_GET['link']== 'about'){ ?> active<?php } ?> @@about">
              <a class="nav-link" href="index.php?link=about">About</a>
            </li>
            <li class="nav-item <?php if ($_GET['link']== 'courses'){ ?> active<?php } ?> @@courses">
              <a class="nav-link" href="index.php?link=courses">COURSES</a>
            </li>
            <li class="nav-item <?php if ($_GET['link']== 'events'){ ?> active<?php } ?>@@events">
              <a class="nav-link" href="index.php?link=events">EVENTS</a>
            </li>
            <li class="nav-item <?php if ($_GET['link']== 'ourtrainers'){ ?> active<?php } ?>@@ourtrainers">
              <a class="nav-link" href="index.php?link=ourtrainers">OUR TRAINERS</a>
            </li>
            <li class="nav-item <?php if ($_GET['link']== 'admission'){ ?> active<?php } ?>@@admission">
              <a class="nav-link" href="index.php?link=admission">ADMISSION</a>
            </li>
            <?php /*?><li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php?link=teacher">Teacher</a></li>
                <li><a class="dropdown-item" href="index.php?link=teacherinnr">Teacher Single</a></li>
                <li><a class="dropdown-item" href="index.php?link=notice">Notice</a></li>
                <li><a class="dropdown-item" href="index.php?link=noticeinnr">Notice Details</a></li>
                <li><a class="dropdown-item" href="index.php?link=research">Research</a></li>
                <li><a class="dropdown-item" href="index.php?link=scholarship">Scholarship</a></li>
                <li><a class="dropdown-item" href="index.php?link=coursesdtl">Course Details</a></li>
                <li><a class="dropdown-item" href="index.php?link=eventsinnr">Event Details</a></li>
                <li><a class="dropdown-item" href="index.php?link=bloginnr">Blog Details</a></li>
                
                <li class="dropdown-item dropdown dropleft">
                  <a class="dropdown-toggle" href="#" id="navbarDropdownSubmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sub Menu
                  </a>
                  <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownSubmenu">
                    <li><a class="dropdown-item" href="#!">Sub Menu 01</a></li>
                    <li><a class="dropdown-item" href="#!">Sub Menu 02</a></li>
                    <li><a class="dropdown-item" href="#!">Sub Menu 03</a></li>
                  </ul>
                </li>
              </ul>
            </li><?php */?>
            <li class="nav-item <?php if ($_GET['link']== 'contact'){ ?> active<?php } ?>@@contact">
              <a class="nav-link" href="index.php?link=contact">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
	if ($_GET['link']== 'about')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">About Us</li>
                </ul>
                <p class="text-lighten mb-0">Established in the year 2018 Manch started its work through slums and government schools has now obtain a recognisation as NGO working for educational upliftment of the socity. </p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'courses')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Courses</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'coursesdtl')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Courses Detail</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'events')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Events</li>
                </ul>
                <p class="text-lighten mb-0">SHIKSHAN HAKKA MANCH  commenced the execution of the project supported by MAHILA ARTHIK VIKAS MAHAMANDAL, PUNE on 15th of August. The screening camp was organised at Mominpura, Pune. 355 beneficiaries were screened for refractive errors.  300 beneficiaries were prescribed refractive glasses. 175 patients received refractive glasses at the camp site. Number of cataract patients were identified at the camp and and were suggested cataract surgery.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'eventsinnr')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Events Detail</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'admission')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Admission</li>
                </ul>
                <p class="text-lighten mb-0">Empower Your Future with Shikshan Hakka Manch Coaching Programs!
                <br>
At Shikshan Hakka Manch, we are committed to nurturing talent and providing quality education to deserving students. Our coaching programs are designed to help you excel academically and achieve your dreams. Discover how you can join our coaching classes and take the first step towards a brighter future.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'bloginnr')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Blog Detail</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'notice')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Notice</li>
                </ul>
                <p class="text-lighten mb-0">Stay Informed with the Latest Updates!
                <br>
Welcome to the Shikshan Hakka Manch Notices and Announcements page. Here, you will find all the latest updates on new admissions, parent meetings, and other important information. We are committed to keeping our community informed and engaged. Check this section regularly to stay up to date with all our announcements.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'noticeinnr')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Notice Detail</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'donation')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Donation</li>
                </ul>
                <p class="text-lighten mb-0">Donations are exempted from income tax under section 80G</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'scholarship')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Scholarship</li>
                </ul>
                <p class="text-lighten mb-0">Shikshan Hakka Manch, we believe that education should be accessible to all, regardless of financial constraints. Our scholarship programs are designed to support deserving students and help them achieve their academic dreams. Our merit-based scholarships reward academic excellence and outstanding achievements. These scholarships are designed to recognize students who have demonstrated exceptional performance in their studies.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'ourtrainers')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Trainers</li>
                </ul>
                <p class="text-lighten mb-0">At Shikshan Hakka Manch, we pride ourselves on having a team of dedicated and experienced trainers who are passionate about empowering our learners. Our trainers are experts in their respective fields, bringing a wealth of knowledge and practical insights to every session. Here, you'll get to know the talented individuals who are committed to guiding you on your learning journey.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'ourtrainersinnr')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Trainers Detail</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'services')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Services</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'contact')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Contact Us</li>
                </ul>
                <p class="text-lighten mb-0">We’re here to assist you! Whether you have a question, need support, or just want to share your thoughts, we’d love to hear from you. You can reach us through the contact form below, via email, or give us a call. Our team is dedicated to providing prompt and helpful responses.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	else if ($_GET['link']== 'contact_thanks')
	{?>
		<!-- page title -->
        <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb mb-2">
                  <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php?link=home">Home</a></li>
                  <li class="list-inline-item text-white h3 font-secondary nasted">Thank You</li>
                </ul>
                <p class="text-lighten mb-0">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
              </div>
            </div>
          </div>
        </section>
        <!-- /page title -->

	<?php }
	?>
