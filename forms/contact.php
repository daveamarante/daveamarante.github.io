<script>
  document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault();
    this.contact_number.  value = (Math.random() * 100000) | 0; 
    emailjs.sendForm("service_hjkbw3e", "template_zwsqims", this).then(
      function () {
        // On success
        document.querySelector(".sent-message").style.display = "block";
        document.getElementById("contact-form").reset();
      },
      function (error) {
        // On error
        document.querySelector(".error-message").innerHTML = "An error occurred. Please try again.";
        document.querySelector(".error-message").style.display = "block";
      }
    );
  });
</script>
