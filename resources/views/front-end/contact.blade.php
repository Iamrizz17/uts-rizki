@extends('front-end/master')  

@section('title', 'Ask Anything')

@section('konten')

<!-- contact section -->
<section class="contact_section layout_padding-top" style="background-image: url('{{ asset('assets/front-end/images/OOR.jpg') }}'); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="contact-form">
          <div class="heading_container">
            <h2>Ask anything</h2>
          </div>
          <form id="contactForm">
            <input type="text" id="name" placeholder="Full name" />
            <div class="top_input">
              <input type="email" id="email" placeholder="Email" />
              <input type="text" id="phone" placeholder="Phone Number" />
            </div>
            <input type="text" id="message" placeholder="Message" class="message_input" />

            <div class="btn-box" style="margin-bottom: 40px;">
              <button type="button" id="sendBtn">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->



<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- JavaScript untuk validasi dan popup -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("sendBtn").addEventListener("click", function () {
      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const message = document.getElementById("message").value.trim();

      // Validasi sederhana
      if (!name || !email || !phone || !message) {
        Swal.fire({
          icon: 'warning',
          title: 'Oops!',
          text: 'Please fill in all fields.',
        });
        return;
      }

      // Validasi email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        Swal.fire({
          icon: 'error',
          title: 'Invalid Email',
          text: 'Please enter a valid email address.',
        });
        return;
      }

      // Jika validasi sukses
      Swal.fire({
        icon: 'success',
        title: 'Message Sent!',
        text: 'We have received your message.',
      });

      // Optional: reset form
      // document.getElementById("contactForm").reset();
    });
  });
</script>

@endsection
