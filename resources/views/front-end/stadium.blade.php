<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>One OK Rock - Yokohama Stadium</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Montserrat', sans-serif;
    background: linear-gradient(180deg, #0a0a0a 0%, #1a1a1a 100%);
    color: #e0e0e0;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 40px 20px;
  }

  .stadium-image-container {
    max-width: 1000px;
    width: 100%;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    border-radius: 18px;
    box-shadow: 0 0 25px rgba(0, 224, 255, 0.4);
    margin-bottom: 30px;
    border: 3px solid #00e0ff;
  }

  .stadium-image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #00e0ff;
    text-align: center;
    margin-bottom: 20px;
    text-shadow: 0 0 8px rgba(0, 224, 255, 0.5);
  }

  .description {
    background-color: rgba(20, 20, 20, 0.9);
    padding: 30px;
    border-radius: 16px;
    max-width: 1000px;
    width: 100%;
    font-size: 1.15rem;
    line-height: 1.8;
    color: #d4d4d4;
    border-left: 5px solid #00e0ff;
    box-shadow: 0 0 15px rgba(0, 224, 255, 0.2);
    margin-bottom: 30px;
  }

  .back-button {
    background-color: transparent;
    color: #00e0ff;
    border: 2px solid #00e0ff;
    padding: 12px 28px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
  }

  .back-button:hover {
    background-color: #00e0ff;
    color: #0a0a0a;
    box-shadow: 0 0 12px #00e0ff;
    transform: scale(1.05);
  }

  @media (max-width: 768px) {
    .title {
      font-size: 1.8rem;
    }

    .description {
      font-size: 1rem;
      padding: 20px;
    }

    .back-button {
      padding: 10px 22px;
      font-size: 0.95rem;
    }
  }
  </style>
</head>
<body>

  <div class="stadium-image-container">
  <img src="assets/front-end/images/yokohama.jpg" alt="Yokohama Stadion - One OK Rock Tour" />
  </div>

  <div class="title">
    One OK Rock Detox Tour Japan 2025
  </div>

  <div class="description">
    Yokohama Stadion is a premier concert arena located in Japan, celebrated for hosting spectacular live performances and world-class events. Renowned for its cutting-edge sound and lighting technology, it creates an immersive atmosphere that electrifies every audience member. The venue's sleek black and blue ambiance perfectly matches the energy of the One OK Rock Detox Japan Tour 2025, promising unforgettable nights filled with powerful music and dynamic shows. Designed to accommodate thousands of fans, Yokohama Stadion offers excellent viewing angles ensuring everyone experiences the energy of the stage up close.
  </div>

  <a href="/" class="back-button">Back Home</a>

</body>
</html>





