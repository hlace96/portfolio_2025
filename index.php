<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
  <body>
    <header>
    <button id="backToTop" class="hide">↑</button>

      <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto" onclick="copyLink()">
        <img src="assets/images/share.svg" alt="share" class="btn-img"> SHARE/COPY LINK </button>
      <script>
        function copyLink() {
          const url = "https://hlctdev.site/";
          navigator.clipboard.writeText(url).then(() => {
            alert("Link copied to clipboard!");
          }).catch(err => {
            console.error("Failed to copy: ", err);
          });
        }
      </script>
      <nav class="collapsible-nav" id="collapsible-nav">
        <a href="index.php" class="nav-link active">HOME</a>
        <a href="portfolio.php" class="nav-link">PORTFOLIO</a>
      </nav>
      <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav" data-target="collapsible-nav">
        <img src="assets/images/hamburger.svg" alt="hamburger">
      </button>
    </header>
    <div class="content-wrapper">
      
    <?php include 'side-profile.php';?>

      <main>
        <section class="intro-section">
          <h2 class="section-title">Hello, I'm Heather Lace Toledo</h2>
          <p style="text-align: justify;">Results-driven Web Developer with 7 years of experience in designing, developing, and maintaining highquality web applications. Proficient in modern front-end and back-end technologies, including HTML, CSS, JavaScript, React and PHP. Experienced in implementing robust APIs, integrating third-party services, and ensuring cross-browser compatibility. Proven track record of success in solving complex technical challenges, optimizing performance, and enhancing user experiences. Adept at collaborating with cross-functional teams and leveraging cutting-edge technologies to deliver innovative and efficient web solutions. <br>
            <br>
            <a href="#get-in-touch" class="btn btn-primary btn-hire-me">HIRE ME</a>
        </section>
        <section class="resume-section">
          <div class="row">
            <div class="col-lg-6">
              <h6 class="section-subtitle">RESUME</h6>
              <h2 class="section-title">EDUCATION</h2>
              <ul class="time-line">
                <li class="time-line-item">
                  <span class="badge badge-primary">2014 - 2018</span>
                  <h6 class="time-line-item-title">Bachelor of Science in Information Technology (B.S.I.T)</h6>
                  <p class="time-line-item-subtitle">Don Honorio Ventura State University (DHVSU) - Sto. Tomas Campus</p>
                  <p class="time-line-item-content">Sto. Tomas, Pampanga, Philippines, 2020 <br>
                    <br>
                  </p>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h6 class="section-subtitle"></h6>
              <h2 class="section-title"></h2>
              <ul class="time-line">
                <p class="time-line-item-subtitle awards">
                  <br>
                  <br>SPECIAL AWARDS :
                </p>
                <a href="assets/files/programmer-of-the-year.pdf" target="_blank" class="time-line-item-subtitle" style="cursor: pointer;" title="Click to view file">Programmer of the Year (2018)</a>
                <br>
                <a href="assets/files/best-in-mobile-app.pdf" target="_blank" class="time-line-item-subtitle" style="cursor: pointer;" title="Click to view file">Best in Mobile Application Development</a>
                <br>
                <a href="assets/files/best-in-thesis.pdf" target="_blank" class="time-line-item-subtitle" style="cursor: pointer;" title="Click to view file">Best Thesis</a>
              </ul>
            </div>
          </div>
        </section>
        <section class="resume-section">
          <div class="row">
            <div class="col-lg-6">
              <h6 class="section-subtitle">RESUME</h6>
              <h2 class="section-title">WORK EXPERIENCE BACKGROUND</h2>
              <ul class="time-line">
                <!-- <li class="time-line-item">
                  <span class="badge badge-primary">2017 - Present</span>
                  <h6 class="time-line-item-title">Freelance Web Developer</h6>
                <p class="time-line-item-subtitle">OpenGov Asia – CIO Network Pte Ltd.</p>
                  <p class="time-line-item-content">I collaborate with clients from various industries across the globe to bring their digital visions to life. With a keen eye for design and a mastery of coding languages including HTML, CSS, and JavaScript, I create visually stunning and highly functional websites that resonate with target audiences. Committed to delivering excellence, I prioritize clear communication, timely project delivery, and ongoing support to ensure client satisfaction and project success.</p>
                </li> -->

                <!-- <li class="time-line-item">
                  <span class="badge badge-primary">2017 - Present</span>
                  <h6 class="time-line-item-title">Freelance Web Developer</h6>
                  </li> -->

                <li class="time-line-item">
                  <span class="badge badge-primary">July 2024 - Feb 2025</span>
                  <h6 class="time-line-item-title">Web Developer</h6>
                  <p class="time-line-item-subtitle">Cloudeberry</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Respond to client website requests via support tickets.</li>
                    <li>Maintain, write code, back up, and update the QR code event management system that I developed.</li>
                    <li>Troubleshoot and resolve website issues to ensure smooth functionality and user experience.</li>
                  </ul>
                  </p>
                </li>

                <li class="time-line-item">
                  <span class="badge badge-primary">September 2022 - Jan 2024</span>
                  <h6 class="time-line-item-title">Web Developer</h6>
                  <p class="time-line-item-subtitle">MediMarketing PH</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Built and maintained responsive web applications using HTML, CSS, JavaScript, Wordpress and Codeigniter.</li>
                    <li>Collaborated with teams to deliver scalable, client-focused web solutions on time.</li>
                    <li>Optimized performance and implemented SEO strategies, boosting speed and user engagement</li>
                    <li>Created, set up, and managed EDMs and newsletters via Mailchimp, Mailjet, and Salesforce.</li>
                    <li>Developed HTML-based presentation guides for Veeva platforms.</li>
                  </ul>
                  </p>
                </li>
                <li class="time-line-item">
                  <span class="badge badge-primary">Jan 2023 - Present</span>
                  <h6 class="time-line-item-title">Web Developer & Web Designer</h6>
                  <p class="time-line-item-subtitle">OpenGov Asia – CIO Network Pte Ltd.</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Developed a fully functional event attendance system for delegates, tailored to the company’s needs, streamlining event management processes.</li>
                    <li>Managed the full lifecycle of a cutting-edge automation project, successfully meeting all milestones.</li>
                    <li>Provided technical expertise, contributing to a 15% reduction in system purchase costs.</li>
                    <li>Maintained the company website and troubleshot technical issues.</li>
                    <li>Managed domain, servers, and hosting services via Azure.</li>
                  </ul>
                  </p>
                </li>
                <li class="time-line-item">
                  <span class="badge badge-primary">Nov 2020 - July 2022</span>
                  <h6 class="time-line-item-title">Web Developer & Website Support Specialist</h6>
                  <p class="time-line-item-subtitle">The Back Room Outsourced Professionals</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Developed, managed, and updated WordPress websites, ensuring functionality, performance, and security.</li>
                    <li>Troubleshot website issues, performed bug fixes, and implemented enhancements to improve user experience.</li>
                    <li>Handled support ticket systems, responding to technical requests via email and one-on-one meetings.</li>
                  </ul>
                  </p>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h6 class="section-subtitle"></h6>
              <h2 class="section-title"></h2>
              <ul class="time-line">
                <br>
                <br>
                <li class="time-line-item">
                  <span class="badge badge-primary">July 2018 - June 2020</span>
                  <h6 class="time-line-item-title">Web Developer</h6>
                  <p class="time-line-item-subtitle">Bonk Marketing Trade and Promotions Inc.</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Developed, managed, and updated static and dynamic websites from scratch using HTML, PHP, CSS, and frameworks.</li>
                    <li>Handled server and hosting configurations, ensuring website uptime and performance.</li>
                    <li>Developed and integrated custom features, optimized website speed, and maintained security protocols.</li>
                  </ul>
                  </p>
                </li>
                <li class="time-line-item">
                  <span class="badge badge-primary">Apr 2018 - June 2018</span>
                  <h6 class="time-line-item-title">IT Staff</h6>
                  <p class="time-line-item-subtitle">BSD Trade Services</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Handled onsite and one-on-one hardware and software technical issues, providing troubleshooting and support.</li>
                    <li>Managed network and office systems to ensure smooth IT operations.</li>
                    <li>Installed, configured, and maintained computers, printers, and other office IT equipment.</li>
                  </ul>
                  </p>
                </li>
                <li class="time-line-item">
                  <span class="badge badge-primary">Oct 2017 - Mar 2018</span>
                  <h6 class="time-line-item-title">IT Desktop Support (Intern)</h6>
                  <p class="time-line-item-subtitle">Teletech Customer Care Management</p>
                  <p class="time-line-item-content">
                  <ul class="work-desc">
                    <li>Handled onsite and one-on-one hardware and software technical issues, assisting employees with troubleshooting.</li>
                    <li>Installed and updated software, including antivirus programs, to ensure system security and performance.</li>
                    <li>Managed IT hardware inventory, tracking allocations and maintenance schedules.</li>
                    <li>Assisted in setting up workstations, configuring network connections, and supporting IT infrastructure.</li>
                  </ul>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <section class="services-section">
          <h6 class="section-subtitle">WHAT I DO</h6>
          <h2 class="section-title">SKILLS</h2>
          <div class="row">
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Web Development</h5>
                <p class="service-description">PHP, JavaScript, HTML, CSS, Bootstrap, XML, React JS</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Website CMS</h5>
                <p class="service-description">WordPress, Duda, SquareSpace, Wix, ClickFunnels</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Mobile Development</h5>
                <p class="service-description">Flutter, Android Studio</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Database Management</h5>
                <p class="service-description">MySQL, Airtable</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Version Control</h5>
                <p class="service-description">GitHub, GitLab</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Debugging & Testing</h5>
                <p class="service-description">Chrome DevTools, BrowserStack</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Design Tools</h5>
                <p class="service-description">Adobe Photoshop, Adobe Illustrator, Figma, Canva, Adobe XD</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">SEO Basics</h5>
                <p class="service-description">Image optimization, alt tags, web structure</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Digital Marketing</h5>
                <p class="service-description">Google Analytics, Google Search Console, Schema Markup</p>
              </div>
            </div>
            <div class="media service-card col-lg-6">
              <div class="service-icon">
                <img src="assets/images/001-target.svg" alt="target">
              </div>
              <div class="media-body">
                <h5 class="service-title">Server Deployment, Hosting & FTP</h5>
                <p class="service-description">AWS, Nginx, Apache, FileZilla, Cyberduck </p>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio-section">
          <h2 class="section-title">PROJECTS</h2>
          <div class="portfolio-wrapper">

          <figure class="portfolio-item hover-box" data-modal="modal-hydroball-v2">
              <img src="assets/images/websites/hydroball-v2/hydroballv2-thumbnail.png" alt="project" class="portfolio-item-img">
              <figcaption class="portfolio-item-details overlay">
                  <h5 class="portfolio-item-title">HYDROBALL WEBSITE VERSION 2</h5>
                  <p class="portfolio-item-description">WordPress, Custom PHP</p>
              </figcaption>
          </figure>

          <?php include 'modals.php';?>


          <figure class="portfolio-item hover-box" data-modal="modal-project-opengov">
              <img src="assets/images/websites/opengovasia/opengov-thumbnail.png" alt="project" class="portfolio-item-img">
              <figcaption class="portfolio-item-details overlay">
                <h5 class="portfolio-item-title">OPENGOVASIA WEBSITE</h5>
                <p class="portfolio-item-description">Wordpress, Custom Theme, Custom PHP</p>
              </figcaption>
            </figure>


            <figure class="portfolio-item hover-box" data-modal="modal-project-starvuu">
              <img src="assets/images/websites/starvuu/starvuu-thumbnail.png" alt="project" class="portfolio-item-img">
              <figcaption class="portfolio-item-details overlay">
                <h5 class="portfolio-item-title">STARVUU ENTERTAINMENT WEBSITE</h5>
                <p class="portfolio-item-description">HTML, CSS, BOOTSTRAP, JAVASCRIPT, PHP</p>
              </figcaption>
            </figure>


            <figure class="portfolio-item hover-box" data-modal="modal-project-vmc">
              <img src="assets/images/websites/vmc/vmc-thumbnail.png" alt="project" class="portfolio-item-img">
              <figcaption class="portfolio-item-details overlay">
                <h5 class="portfolio-item-title">VUUZLE MEDIA CORPORATION WEBSITE</h5>
                <p class="portfolio-item-description">HTML, CSS, BOOTSTRAP, JAVASCRIPT, PHP</p>
              </figcaption>
            </figure>


          </div>
          <br>
          <center>
            <a class="btn btn-download-cv btn-primary rounded-pill" href="portfolio.php">VIEW MORE</a>
          </center>
          <br>
        </section>
        <h6 class="section-subtitle"></h6>
        <h2 class="section-title">FEEDBACK/REVIEWS</h2>
        <section class="testimonial-section">
          <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p class="testimonial-content">Heather shows exemplary skills in web development and has a tireless work ethic. Working with her has always been fun as she exudes positivity while working with the team. She takes on constructive criticisms quite well and translates them to proactive solutions. Her enthusiasm and humor makes it easy for the team to deal with stressful situations professionally.</p>
                <img src="assets/images/jelleine-photo.jpeg" alt="profile" class="testimonial-img">
                <p class="testimonial-name">Jelleine Evangelista | UI/UX Designer</p>
              </div>
              <div class="carousel-item">
                <p class="testimonial-content">Having a career where men dominate the industry, Heather truly stands out! She has a vast knowledge in web development, specifically, back-end development. We've worked together to produce websites in tight deadlines, but she never failed to deliver high-quality output and always on time. Whether it's landing page, business, or e-commerce, Heather would definitely give you a responsive, attractive, and fast-loading websites!</p>
                <img src="assets/images/armie-photo.jpeg" alt="profile" class="testimonial-img">
                <p class="testimonial-name">Armie Galang | Digital Marketing Strategist</p>
              </div>
              <div class="carousel-item">
                <p class="testimonial-content">Heather is an incredibly talented web developer and designer. I’ve had the opportunity to work with her, and she consistently impresses with her technical skills, creativity, and problem-solving abilities. Whether it’s front-end design or back-end development, she approaches every project with precision and dedication. Beyond her skills, what stands out about Heather is her work ethic and positive attitude. She’s organized, always willing to help, and brings great energy to any team. Working with her is not only productive but also genuinely enjoyable. If you’re looking for someone skilled, reliable, and a pleasure to collaborate with, I highly recommend Heather!</p>
                <img src="assets/images/irish-photo.jpeg" alt="profile" class="testimonial-img">
                <p class="testimonial-name">Irish Ramos | Website Specialist</p>
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#testimonialCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#testimonialCarousel" data-slide-to="1"></li>
              <li data-target="#testimonialCarousel" data-slide-to="2"></li>
            </ol>
          </div>
        </section>
        <section class="contact-section" id="get-in-touch">
          <h2 class="section-title">GET IN TOUCH</h2>
          <p class="mb-4">If you’d like to talk about a project, our work or anything else then get in touch.</p>
          <div class="contact-cards-wrapper">
            <div class="contact-card">
              <h6 class="contact-card-title">CALL/VIBER/WHATS APP ME</h6>
              <p class="contact-card-content">
                <a href="tel:+63 9357010036">+63 9357010036</a>
              </p>
            </div>
            
            <div class="contact-card">
              <h6 class="contact-card-title">EMAIL ME</h6>
              <p class="contact-card-content">
                <a href="mailto:hlacetoledo96@gmail.com">hlacetoledo96@gmail.com</a>
              </p>
            </div>
          </div>
        </section>
        <?php include 'footer.php';?>
      </main>
    </div>

    <!-- BACK TO TOP --->
    <script>
        const backToTopButton = document.getElementById("backToTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.add("show");
                backToTopButton.classList.remove("hide");
            } else {
                backToTopButton.classList.remove("show");
                backToTopButton.classList.add("hide");
            }
        });

        backToTopButton.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

    
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/live-resume.js"></script>
  </body>
</html>