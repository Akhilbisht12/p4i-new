<!--Footer-->
<footer>
  <div class="container py-5">
    <div class="row footer-row g-3">
      <div class="col-12 d-flex justify-content-center">
        <div class="logo-row d-lg-none">
          <img src="./assets/images/logo.png" class="logo" alt="" />
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="logo-row tablet d-none d-md-block">
          <img src="./assets/images/logo.png" class="logo" alt="" />
        </div>
        <div class="container">
          <h2 class="heading-font blue-font mb-4">
            We would Love to hear from you
          </h2>
          <p class="text-font-bold text-footer mb-5">
            Send us some details about your investment<br />
            goals or your social imapct firm<br />
            <span class="text-font fw-light">
              Feel free to ask questions about our proecess.<br/> We'll get
              back to you within the week</span>
          </p>
          <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                        <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;"><?php echo $_SESSION['success_message']; ?></div>
                        <?php
                        unset($_SESSION['success_message']);
                    }
                    ?>
          <div class="contact-form">
            <form action="mail.php" method="post">
              <input
                type="text"
                name="fullname"
                id="fullname"
                placeholder="Fullname*"
                class="form-control p-2 my-2 me-2"
              />
              <div class="row g-2">
                <div class="col">
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control p-2 my-1 me-2"
                    placeholder="Email ID"
                    aria-label="Email ID"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    id="phn"
                    name="phone"
                    class="form-control p-2 my-1 me-5"
                    placeholder="Phone No."
                    aria-label="Phone number"
                  />
                </div>
              </div>
              <textarea
                class="form-control my-2"
                rows="4"
                name="message"
                id="enq"
                placeholder="Give us a little information about yourself and your inquiry..."
              ></textarea>
              <div class="check-box">
                <div class="form-check font form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="formOption"
                    value="Investor"
                    id="investor"
                  />
                  <label class="form-check-label" for="investor"
                    >Investor</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="formOption"
                    value="Social Impact Firm"
                    id="socialImpact"
                    checked
                  />
                  <label class="form-check-label" for="socialImpact"
                    >Social Imapact Firm</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="formOption"
                    id="Other"
                    value="Other"
                  />
                  <label class="form-check-label" for="">Other</label>
                </div>
              </div>
              <div class="w-100 d-flex align-items-center">
              <button class="submit-btn my-4 fw-bold" >Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="row h-100">
          <div class="col-12 justify-content-center">
            <img src="./assets/images/mapimg.png" alt="" class="mapimage" />
          </div>
          <div class="col-12">
            <div class="social-cont my-3">
              <div>
                <div class="fw-bold font fs-2 text-center">Follow Us</div>
                <div
                  class="social-icons d-flex justify-content-evenly my-2"
                >
                  <img
                    class=""
                    src="./assets/images/facebook.png"
                    alt=""
                    srcset=""
                  />
                  <img
                    class=""
                    src="./assets/images/insta.png"
                    alt=""
                    srcset=""
                  />
                  <img
                    class=""
                    src="./assets/images/linked-in.png"
                    alt=""
                    srcset=""
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="creatives">
      <p class="text-font-bold">
        Copyrights Reserved 2015 PARTNERSHIPS FOR IMPACT | Design with love
        by
        <a
          target="_blank"
          class="text-warning text-decoration-none"
          href="https://www.littlebiggestdesign.com/"
          >Little Biggest Design Company LLP</a
        >
      </p>
    </div>
  </div>
  <div class="landscape">
    <img src="./assets/images/Landscape.png" alt="" />
  </div>
</footer>
<!--Footer Ends here-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
  });
</script>
</body>
</html>