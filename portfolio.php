<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="assets/images/share.svg" alt="share" class="btn-img">
            SHARE</button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="index.php" class="nav-link">HOME</a>
            <a href="portfolio.php" class="nav-link active">PORTFOLIO</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
      <?php include 'side-profile.php';?>
        <main>
            <section class="portfolio-section">
                <h2 class="section-title">WEB PROJECTS</h2>
                
                <div class="portfolio-wrapper">
                <?php include 'portfolio-grid.php';?>
                </div>

            </section>
            <?php include 'footer.php';?>
        </main>
    </div>
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/entry/jq.entry.min.js"></script>
    <script src="assets/js/live-resume.js"></script>
</body>

</html>





<!---- 
<figure class="portfolio-item hover-box">
                        <img src="assets/images/img_1.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 01</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_1.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 01</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_2.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 02</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_3.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 03</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_4.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 04</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_5.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 05</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_6.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 06</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_7.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 07</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure>
                    <figure class="portfolio-item hover-box">
                        <img src="assets/images/img_8.png" alt="project" class="portfolio-item-img">
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">PROJECT 08</h5>
                            <p class="portfolio-item-description">Branding, Photography</p>
                        </figcaption>
                    </figure> --->