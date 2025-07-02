
<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ONE OK ROCK - Detox Tour Japan 2025 Merchandise</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background:rgb(5, 5, 5);
            color: #eee;
            margin: 0;
            padding: 0;
        }
        header {
            background: #1f1f1f;
            padding: 2rem 1rem;
            text-align: center;
            /* Blue striped border line */
            /* Yellow straight border line */
border-bottom: 3px solid rgb(0, 42, 255);
;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 2px;
        }
        /* Tour name in blue */
        header p {
            margin: 0.5rem 0 0;
            font-size: 1.2rem;
            color:rgb(38, 42, 240);
            font-weight: 600;
        }
        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1rem 2rem;
        }
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit,minmax(260px,1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        .product-card {
            background: #000000;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(56, 212, 240, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 2px solidrgb(247, 255, 4);
            background-image: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(0, 0, 0, 0.2) 10px,
                rgba(51, 67, 242, 0.2) 20px
            );
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: contain;
            background: #1a1a1a;
        }
        .product-info {
            padding: 1rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: #000000;
        }
        .product-info h3 {
            margin: 0 0 0.25rem 0;
            font-size: 1.1rem;
            color:rgb(27, 77, 243);
        }
        .product-info p.price {
            margin: 0 0 1em;
            font-weight: bold;
            color:rgb(255, 255, 255);
            font-size: 1.1rem;
        }
        .product-info label {
            font-size: 0.9rem;
            margin-bottom: 0.25rem;
            display: block;
            color:rgb(255, 255, 255);
        }
        .product-info input[type="number"] {
            width: 60px;
            padding: 0.3rem;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid rgb(0, 60, 255);
            text-align: center;
            margin-bottom: 1rem;
            background: #000000;
            color:rgb(255, 255, 255);
        }
        /* Changed "Add to Order" button to blue */
        .product-info button {
            background-color:rgb(11, 55, 212);
            color: #fff;
            border: none;
            padding: 0.75rem 1rem;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 0 8px #3390ff99;
        }
        .product-info button:hover {
            background-color:rgb(61, 78, 78);
            box-shadow: 0 0 12pxrgb(27, 139, 215);
        }
        form#purchase-form {
            background: #000000;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(28, 187, 235, 0.87);
            max-width: 900px;
            margin: 0 auto 3rem;
            border: 1px solid rgba(0,123,255,0.1);
        }
        form#purchase-form h2 {
            margin-top: 0;
            color:rgb(255, 255, 255);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        form#purchase-form label {
            display: block;
            margin-top: 1.5rem;
            margin-bottom: 0.8rem;
            font-weight: 500;
            color:rgb(255, 255, 255);
            font-size: 1.1rem;
            letter-spacing: 0.3px;
        }
        
        form#purchase-form input[type="text"]:focus,
        form#purchase-form input[type="email"]:focus,
        form#purchase-form input[type="tel"]:focus {
            outline: none;
            border-color:rgb(255, 255, 255);
            box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
        }
        form#purchase-form button {
            margin-top: 2.5rem;
            width: 100%;
            padding: 1.2rem;
            font-weight: 600;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,123,255,0.2);
            letter-spacing: 0.5px;
        }
        form#purchase-form button:hover {
            background-color:rgb(66, 73, 79);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,123,255,0.3);
        }
        #order-summary {
            background: rgba(0,0,0,0.8);
            margin-top: 2rem;
            padding: 1.5rem;
            border-radius: 12px;
            color:rgb(248, 248, 248);
            font-size: 1.1rem;
            max-height: 150px;
            overflow-y: auto;
            border: 1px solid rgba(252, 254, 255, 0.83);
            box-shadow: 0 4px 15px rgba(0,123,255,0.1);
        }
        #order-summary h3 {
            margin-top: 0;
            color:rgb(255, 255, 255);
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        footer {
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            color: #666;
            border-top: 1px solid #003f7f;
            background: #121212;
        }
        @media (max-width: 400px) {
            .product-info input[type="number"] {
                width: 50px;
            }
        }

        .back-home-btn {
      background-color: #333;
      color:rgb(255, 255, 255);
      font-weight: bold;
      font-size: 16px;
      padding: 10px 24px;
      border-radius: 10px;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
      transition: background 0.3s, transform 0.2s;
    }

    .back-home-btn:hover {
      background-color: #444;
      transform: scale(1.05);
    }
    </style>
<head>
    <meta charset="UTF-8">
    <title>One Ok Rock Merchandise</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
    <header>
        <h1>One Ok Rock</h1>
        <p>Detox Tour Japan 2025 - Merchandise Store</p>
    </header>

    <main>
        <section class="products" aria-label="Merchandise items">
            <article class="product-card" data-product-id="tshirt">
                <img src="{{ asset('assets/front-end/images/merchan1.jpg') }}" alt="One Ok Rock Detox Tour T-Shirt" />
                <div class="product-info">
                    <h3>Detox Tour T-Shirt</h3>
                    <p class="price">¥3,500</p>
                    <label for="qty-tshirt">Quantity:</label>
                    <input type="number" id="qty-tshirt" name="qty-tshirt" min="0" max="10" value="0" />
                    <button type="button" onclick="addToOrder('tshirt')">Add to Order</button>
                </div>
            </article>

            <article class="product-card" data-product-id="hoodie">
                <img src="{{ asset('assets/front-end/images/merchan2.jpg') }}" alt="One Ok Rock Detox Tour Hoodie" />
                <div class="product-info">
                    <h3>Detox Tour Hoodie</h3>
                    <p class="price">¥6,000</p>
                    <label for="qty-hoodie">Quantity:</label>
                    <input type="number" id="qty-hoodie" name="qty-hoodie" min="0" max="10" value="0" />
                    <button type="button" onclick="addToOrder('hoodie')">Add to Order</button>
                </div>
            </article>

            <article class="product-card" data-product-id="cap">
                <img src="{{ asset('assets/front-end/images/merchan3.jpg') }}" alt="One Ok Rock Detox Tour Cap" />
                <div class="product-info">
                    <h3>Detox Tour Vinyl Bag</h3>
                    <p class="price">¥600</p>
                    <label for="qty-cap">Quantity:</label>
                    <input type="number" id="qty-cap" name="qty-cap" min="0" max="10" value="0" />
                    <button type="button" onclick="addToOrder('cap')">Add to Order</button>
                </div>
            </article>
        </section>

        <form id="purchase-form" aria-label="Purchase form" onsubmit="return submitOrder(event)">

            <h3>Order Summary</h3>
            <div id="order-message" style="color: green; font-weight: bold; margin-bottom: 10px;"></div>
            <div id="order-summary">
                No items added yet.
            </div>

            <button type="submit">Proceed to Checkout</button>
        </form>
        <!-- Tombol Back Home di bagian kiri bawah teks -->
        <a href="/" class="back-home-btn">Back Home</a>
      </p>
    </div>
    </main>

    <script>
  const order = {};

  function addToOrder(productId) {
    const qtyInput = document.getElementById(`qty-${productId}`);
    const quantity = parseInt(qtyInput.value);

    if (isNaN(quantity) || quantity <= 0) {
      Swal.fire({
        icon: 'warning',
        title: 'Invalid Quantity',
        text: 'Please enter a quantity greater than 0.',
      });
      return;
    }

    const productCard = document.querySelector(`[data-product-id="${productId}"]`);
    const productName = productCard.querySelector('h3').innerText;
    const productPriceText = productCard.querySelector('.price').innerText;
    const productPrice = parseInt(productPriceText.replace(/[¥,]/g, ''));

    order[productId] = {
      name: productName,
      quantity: quantity,
      price: productPrice,
      total: quantity * productPrice
    };

    qtyInput.value = 0;

    // Tampilkan pesan sukses
    const messageBox = document.getElementById("order-message");
    messageBox.textContent = `"${productName}" has been added to your order.`;
    setTimeout(() => {
      messageBox.textContent = "";
    }, 3000);

    updateOrderSummary();
  }

  function updateOrderSummary() {
    const summary = document.getElementById("order-summary");
    summary.innerHTML = '';

    let total = 0;
    for (const id in order) {
      const item = order[id];
      const itemLine = document.createElement('p');
      itemLine.textContent = `${item.name} × ${item.quantity} = ¥${item.total.toLocaleString()}`;
      summary.appendChild(itemLine);
      total += item.total;
    }

    if (total === 0) {
      summary.textContent = "No items added yet.";
    } else {
      const totalLine = document.createElement('p');
      totalLine.innerHTML = `<strong>Total: ¥${total.toLocaleString()}</strong>`;
      summary.appendChild(totalLine);
    }
  }

  function submitOrder(event) {
    event.preventDefault();

    if (Object.keys(order).length === 0) {
      Swal.fire({
        icon: 'info',
        title: 'No Items',
        text: 'Please add at least one item to your order.',
      });
      return false;
    }

    Swal.fire({
      icon: 'success',
      title: 'Order Submitted!',
      text: 'Your order has been placed successfully!',
    });

    // Reset data order
    for (const key in order) {
      delete order[key];
    }

    document.getElementById("order-summary").textContent = "No items added yet.";
    document.getElementById("order-message").textContent = "";
    document.getElementById("purchase-form").reset();

    return true;
  }
</script>
</body>
</html>