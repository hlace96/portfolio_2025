<aside>
        <div class="profile-img-wrapper">
          <img src="assets/images/photo.jpeg" alt="profile">
        </div>
        <h1 class="profile-name">Heather Lace Toledo</h1>
        <div class="text-center">
          <span class="badge badge-white badge-pill profile-designation">Web Developer / Web Designer</span>
        </div>
        <nav class="social-links">
          <a href="https://www.linkedin.com/in/heathertoledo/" target="_blank" class="social-link">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="mailto:hlacetoledo96@gmial.com" target="_blank" class="social-link">
            <i class="fa fa-envelope"></i>
          </a>
        </nav>
        <div class="widget">
          <br>
          <h5 class="widget-title">personal information</h5>
          <div class="widget-content">
          <p>AGE: <span id="age"></span> years old</p>
            <script>
            function calculateAge(birthYear, birthMonth, birthDay) {
                let today = new Date();
                let birthDate = new Date(birthYear, birthMonth - 1, birthDay);
                
                let ageYears = today.getFullYear() - birthDate.getFullYear();
                let ageMonths = today.getMonth() - birthDate.getMonth();
                let ageDays = today.getDate() - birthDate.getDate();

                // Adjust if birthday hasn't occurred yet this month
                if (ageDays < 0) {
                ageMonths--;
                }
                if (ageMonths < 0) {
                ageYears--;
                ageMonths += 12;
                }

                let ageDecimal = ageYears + (ageMonths / 12);
                
                return ageDecimal.toFixed(1); // Show 1 decimal place (e.g., 29.5)
            }
            document.getElementById("age").textContent = calculateAge(1996, 2, 1);
            </script>
            <p>BIRTHDAY : 01 February 1996</p>
            <p>PHONE : +63 9357 010 0036</p>
            <p>MAIL : hlacetoledo96@gmail.com</p>
            <p>LOCATION : Philippines, 2016</p>
            <a href="assets/files/heather_cv.pdf" download target="_blank" class="btn btn-download-cv btn-primary rounded-pill">
              <img src="assets/images/download.svg" alt="download" class="btn-img">DOWNLOAD CV </a>
            <a href="assets/files/heather_cover_letter.pdf" download target="_blank" class="btn btn-download-cv btn-primarydark mt-1 rounded-pill">
              <img src="assets/images/download.svg" alt="download" class="btn-img">COVER LETTER</a>
          </div>
        </div>
        <div class="widget card">
          <div class="card-body">
            <div class="widget-content">
              <h5 class="widget-title card-title">SPOKEN LANGUAGES</h5>
              <p>
                <b>English</b> : fluent
              </p>
              <p>
                <b>Filipino</b> : fluent
              </p>
              <br>
              <h5 class="widget-title card-title">TIME AVAILABILITY FOR A CALL/INTERVIEW</h5>
              <p>9AM-12PM (GMT+8)</p>
              <p>1PM-5PM (GMT+8)</p>
            </div>
          </div>
        </div>
        <!-- <div class="widget card"><div class="card-body"><div class="widget-content"><h5 class="widget-title card-title">EfDUCATION</h5><span class="badge badge-primary">2014 - 2018</span><h6 class="time-line-item-title">Bachelor of Science<br> in Information Technology (BSIT)</h6><p class="time-line-item-subtitle">Don Honorio Ventura State University</p><p class="time-line-item-subtitle awards">Sccccccccccccccccccccccccpccecial Awards:</p><p class="time-line-item-subtitle">Programmer of the Year (2018)</p><p class="time-line-item-subtitle">Best in Mobile Application Development</p><p class="time-line-item-subtitle">Best Thesis</p></div></div></div> -->
      </aside>