@extends('layouts.app')


@section('menuItem')
    @parent
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#meet-our-team">TEAM</a></li>  
        <li><a href="#testimonials">TESTIMONIALS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
@endsection



@section('content')

    <div class="big-display text-center">
    <div class="company-name">
        <h1 class="border">De <span class="paint">AFTERMATH</span> CONSULTS</h1><br>
        <p>Be Inspired, Experience Quality beyond Business</p>
    </div>
    
<!--  <p>We specialize in blablabla</p> -->
    <div class="shadow-bg">
    </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Us</h2><br>
      <h4>We are a Human Resources and Information Technology consultancy firm birthed with the tenets of delivering exceptional and well-coordinated human resources services while backing it up with modern technological tools for optimal performance to our numerous clients.</h4><br>
      
      <br><a href="#contact" class="btn btn-default btn-lg">Get in Touch</a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8 values">
<!--      <h2>Our Values</h2><br>-->
      <p><strong class='title-c'>MISSION:</strong> To Develop an attitude of quality teamwork, Create an atmosphere that fosters challenges and Accept responsibility for promoting ethical and legal conduct in business practices while staying Committed in our pursuit of uncompromising quality, with Respect and sound Communication within our diverse workforce, thus Seize Opportunities that demonstrate excellent execution, Increase Participation in company and community activities, while keeping a constant Updated repertoire of skills and workforce, striking a balance between our personal and professional lives.</p><br>
      <p><strong class='title-c'>VISION:</strong> To become a partner of choice for Africa’s leading service providers, both governments and non-governmental organisations by helping them develop, build and sustain the best of innovative, dependable and cost-effective Human Resource Consultancy Services to meet their clients’ growing needs through the rapid deployment of new technological techniques.</p>
    </div>
  </div>
</div>


  <div class="container-fluid" id="services">
            <div class="row">
                <div class="title slideanim">
                    <h2 class="text-center">WHAT WE OFFER</h2><br>
                    
                </div>
                
                <div class="row slideanim">
                    <div class="col-md-4">
                        <div class="icon"><i class="fa fa-handshake-o fa-lg" aria-hidden="true" style="font-size:60px;"></i></div>
                        <h4>Human Resources Management</h4>
                        <p>Sales and Customer Service Management| Office Management | Employee Welfare | Administrative Managment | Project Analytics and Management</p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon"><i class="fa fa-briefcase fa-lg" aria-hidden="true" style="font-size:60px;"></i></div>
                        <h4>Consultancy Services</h4>
                        <p>Lorem ipsum| lorem ipsum | lorem ipsum</p>
                    </div>
                    <div class="col-md-4">
                        <div class="icon"><i class="fa fa-certificate fa-lg" aria-hidden="true" style="font-size:60px;"></i></div>
                        <h4>Computer Training</h4>
                        <p>Corps Members | Industrial Attachment | Personal | Corporate</p>
                    </div>
                </div>
                <div class="row no-paddind slideanim">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="icon"><i class="fa fa-desktop fa-lg" aria-hidden="true" style="font-size:60px;"></i></div>
                        <h4>Information Technology (ICT)</h4>
                        <p>Digital Secretariat| Computer Administration | System Engineering | Web and Mobile App Development | Geographic  Information System | Multimedia Management | E-Commerce | System Network Administration</p>
                    </div>
                </div>
            </div>
        </div>

    
    <div class="container-fluid bgimg">
        <div class="caption">
<!--            <span class="border">Abidoye Victor Temitope</span>-->
            
        </div>
<!--        <h1>We work with</h1> <p><span class="bt">speed</span>, <span class="bt">simplicty</span> and <span class="bt">self confidence</span></p>-->
        <div class="m-wk">
            <i class="fa fa-desktop" aria-hidden="true"></i>
        </div>
        <div class="m-wkk"><a href="/training" class="btn btn-primary btn-lg btn-block btn-huge">View our ICT Programmes</a></div>
    </div>

<!--meet our team section-->
<div id="meet-our-team" class="container-fluid text-center bg-grey">
    <div class="container">
        <div class="title">
            <h2>MEET OUR TEAM</h2> <br/>
        </div>
        <div class="row">
        <div class="col-md-4 col-sm-4 img-team">
                <div class="team-member">
                    <div class="team-img">
                        <img src="assets/img/team_1.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <br />
                            <p>Mr Jeffery Osayande Guobadia is, a diploma holder in Computer engineering, B. Eng. Civil Engineering.</p><p>He is an ambitious young man with diverse experiences in the Petroleum industry, Civil Engineering and Construction industry, Management/Administration, Health, Human Resources and Information Technology.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Martin Smith</h5>
                    <span>founder &amp; ceo</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 img-team">
                <div class="team-member">
                    <div class="team-img">
                        <img src="assets/img/team_2.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
<!--                            <h4>Hello World</h4>--><br />
                            <p>Edward is a graduate of Electronics and Computer Technology from the University of Calabar, Calabar. </p><p>He is a prolific ICT consultant, Network Engineer and a digital enthusiast certified by AfriHUB, APTECH and CISCO.</p>
<!--                            <p>His love for IT can be seen in his keen learning and passionate service delivery either in class or on site.</p>-->
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>UTOGBO, EDWARD L</h5>
                    <span>HR Manager</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 img-team">
                <div class="team-member">
                    <div class="team-img">
                        <img src="assets/img/team/img_1.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
<!--                            <h4>I love to design</h4>--><br/>
                            <p>Adeyemo Tolulope Victoria, is a competent meteorologist, a proficient statistical data analyst and a vast instructor at De Aftermath Consults.</p> <p>I work with R Statistical Programming Language, Basic and Advanced Excel, SPSS, Instat and some more.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Adeyemo Tolulope</h5>
                    <span>Data Analyst</span>
                </div>
            </div>

        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 img-team">
                <div class="team-member">
                    <div class="team-img">
                        <img src="assets/img/team/img_3.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
<!--                            <h4>Hi There !</h4>--><br />
                            <p>Uwaezuoke Emmanuel Chukwunazor is a computer and network security professional that studied electrical engineering in the university.</p> <p> He is proficient and experienced in ethical hacking and penetration testing with great passion to impact knowledge.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Uwaezuoke Emmanuel Chukwunazor</h5>
                    <span>founder &amp; ceo</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 img-team">
                <div class="team-member">
                    <div class="team-img">
                        <img src="assets/img/team/img_4.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <br />
                            <p>Treasure has spent some years of accomplishments in the Tech field, with vast experience in conducting ICT trainings, helping a lot in the teaching of the best of modern competitive IT skills to meet its crux state of its demand in our modern day society.</p> 
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/treasurekeyss01"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Udoka Abasi-ibiangake Treasure</h5>
                    <span>HR Manager</span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 img-team">
                <div class="team-member">
                    <div class="team-img">
                        <img src="assets/img/team/img_2.jpg" alt="team member" class="img-responsive">
                    </div>
                    <div class="team-hover">
                        <div class="desk">
                            <br>
                            <p>Awai Tarfa David is an entrepreneur, speaker and Income builder. Tarfa has had experiences working for IPS, ICDI, PMPI, NYSC (SAED TRAINER) Oando and currently De AFTERMATH CONSULTS.</p>
                        </div>
                        <div class="s-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-title">
                    <h5>Awai Tarfa David</h5>
                    <span>Marketing Manager</span>
                </div>
            </div>

        </div>

    </div>
    
</div>  
    
<!--testimonial section-->
<div id="testimonials" class="container-fluid text-center">
        <div class="container" id="testi">
             <div class="title slideanim">
                    <h2>WHAT PEOPLE THINK...</h2> <br>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-sm-offset-1 col-sm-10">
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial slideanim">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.
                                </p>

                                <div class="testimonial-review">
                                    <div class="pic">
                                        <img src="assets/img/dac_4.JPG" alt="" class="img-responsive">
                                    </div>
                                    <h4 class="testimonial-title">
                                        williamson
                                        <small>Web Developer</small>
                                    </h4>
                                </div>
                            </div>

                            <div class="testimonial slideanim">
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec velit dui. Pellentesque volutpat faucibus risus, ac accumsan purus.
                                </p>

                                <div class="testimonial-review">
                                    <div class="pic">
                                        <img src="assets/img/dac_4.JPG" alt="" class="img-responsive">
                                    </div>
                                    <h4 class="testimonial-title">
                                        kristiana
                                        <small>Web Desginer</small>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection