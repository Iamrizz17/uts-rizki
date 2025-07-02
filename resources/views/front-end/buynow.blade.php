<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ONE OK ROCK Ticket Purchase</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Montserrat', sans-serif;
      background: url('{{ asset('assets/front-end/images/oneok5.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      color:rgb(255, 255, 255);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .container {
      background-color: rgba(2, 2, 2, 0.85);
      border-radius: 15px;
      padding: 30px 40px;
      max-width: 400px;
      width: 100%;
      box-shadow: 0 0 15px rgba(34, 76, 246, 0.7);
      text-align: center;
    }

    h1 {
      margin-bottom: 15px;
      font-weight: 700;
      font-size: 2.5rem;
      letter-spacing: 2px;
    }

    p.subtitle {
      margin-top: 0;
      margin-bottom: 30px;
      font-size: 1rem;
      color:rgba(92, 79, 234, 0.8);
    }

    form {
      text-align: left;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      font-size: 0.9rem;
      color:rgb(254, 254, 254);
    }

    select, input[type="number"], input[type="text"], input[type="email"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      background-color: #222;
      color:rgb(253, 253, 253);
      outline: none;
      transition: box-shadow 0.3s ease;
    }

    select:focus, input[type="number"]:focus, input[type="text"]:focus, input[type="email"]:focus {
      box-shadow: 0 0 10pxrgb(48, 76, 234);
    }

    .total-price {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 30px;
      color:rgb(255, 255, 255);
      text-align: center;
    }

    button {
      display: block;
      width: 100%;
      background-color:rgb(39, 98, 249);
      color: #000;
      font-weight: 700;
      font-size: 1.1rem;
      padding: 14px 0;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      letter-spacing: 1.2px;
      margin-bottom: 10px;
    }

    button:hover {
      background-color:rgb(255, 255, 255);
    }

    .back-button {
      background-color: #333;
      color:rgb(255, 255, 255);
    }

    .back-button:hover {
      background-color: #444;
    }

    .footer {
      margin-top: 25px;
      font-size: 0.8rem;
      color:rgba(255, 255, 255, 0.8);
      text-align: center;
    }

    /* Responsive */
    @media(max-width: 450px){
      .container {
        padding: 25px 20px;
        max-width: 100%;
      }

      h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
  <div class="container" role="main">
    <h1>ONE OK ROCK DETOX JAPAN TOUR 2025</h1>
    <p class="subtitle">Get your tickets!</p>

    <form id="ticketForm" aria-label="Ticket purchase form">
      <label for="ticketType">Ticket Type</label>
      <select id="ticketType" name="ticketType" aria-required="true" aria-describedby="ticketTypeDesc">
        <option value="vip" data-price="15000">VIP Admission - ¥15,000</option>
        <option value="festival" data-price="10000">Festival - ¥10,000</option>
        <option value="tribun" data-price="7500">Tribune - ¥7,500</option>
        <option value="standing" data-price="5000">Standing Area - ¥5,000</option>
      </select>
      <small id="ticketTypeDesc" style="color:#aaa; margin-bottom:15px; display:block;">Select your ticket category</small>

      <label for="ticketQty">Quantity</label>
      <input
        type="number"
        id="ticketQty"
        name="ticketQty"
        min="1"
        max="10"
        value="1"
        aria-required="true"
        aria-describedby="ticketQtyDesc"
      />
      <small id="ticketQtyDesc" style="color:#aaa; margin-bottom:15px; display:block;">Choose number of tickets (max 10)</small>

      <label for="buyerName">Name</label>
      <input
        type="text"
        id="buyerName"
        name="buyerName"
        placeholder="Your full name"
        aria-required="true"
      />

      <label for="buyerEmail">Email</label>
      <input
        type="email"
        id="buyerEmail"
        name="buyerEmail"
        placeholder="Your email address"
        aria-required="true"
      />

      <div class="total-price" aria-live="polite" aria-atomic="true" id="totalPriceDisplay">
        Total: ¥75
      </div>

      <button type="submit" id="purchaseBtn">Purchase Tickets</button>
      <button type="button" class="back-button" onclick="window.location.href='/'">Back Home</button>
    </form>

    <div class="footer">&copy; 2025 ONE OK ROCK JAPAN PRESENTED</div>
  </div>

  <script>
  (function(){
    const ticketTypeSelect = document.getElementById('ticketType');
    const ticketQtyInput = document.getElementById('ticketQty');
    const totalPriceDisplay = document.getElementById('totalPriceDisplay');
    const ticketForm = document.getElementById('ticketForm');

    function updateTotal() {
      const selectedOption = ticketTypeSelect.options[ticketTypeSelect.selectedIndex];
      const price = parseFloat(selectedOption.getAttribute('data-price'));
      let qty = parseInt(ticketQtyInput.value, 10);
      if (isNaN(qty) || qty < 1) qty = 1;
      if (qty > 10) qty = 10;
      ticketQtyInput.value = qty;
      const total = price * qty;
      totalPriceDisplay.textContent = `Total: ¥${total.toFixed(0)}`;
    }

    ticketTypeSelect.addEventListener('change', updateTotal);
    ticketQtyInput.addEventListener('input', updateTotal);

    ticketForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const name = ticketForm.buyerName.value.trim();
      const email = ticketForm.buyerEmail.value.trim();
      const qty = parseInt(ticketQtyInput.value, 10);

      if (!name) {
        Swal.fire({
          icon: 'warning',
          title: 'Missing Name',
          text: 'Please enter your name.',
        }).then(() => {
          ticketForm.buyerName.focus();
        });
        return;
      }

      if (!email || !validateEmail(email)) {
        Swal.fire({
          icon: 'error',
          title: 'Invalid Email',
          text: 'Please enter a valid email address.',
        }).then(() => {
          ticketForm.buyerEmail.focus();
        });
        return;
      }

      if (isNaN(qty) || qty < 1 || qty > 10) {
        Swal.fire({
          icon: 'warning',
          title: 'Invalid Quantity',
          text: 'Please enter a valid ticket quantity (1 to 10).',
        }).then(() => {
          ticketQtyInput.focus();
        });
        return;
      }

      const ticketTypeText = ticketTypeSelect.options[ticketTypeSelect.selectedIndex].text;

      Swal.fire({
        icon: 'success',
        title: 'Purchase Confirmed!',
        html: `Thank you, <strong>${name}</strong>!<br>You have purchased <strong>${qty} x ${ticketTypeText}</strong>.<br>A confirmation email will be sent to <strong>${email}</strong>.`,
      });

      ticketForm.reset();
      updateTotal();
    });

    function validateEmail(email) {
      const re = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
      return re.test(email);
    }

    updateTotal();
  })();
</script>
</body>
</html>
