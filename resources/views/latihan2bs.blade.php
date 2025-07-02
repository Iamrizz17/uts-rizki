<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Layout Responsive</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    header, footer, article, aside {
      border: 1px solid #ccc;
      padding: 1rem;
      margin-bottom: 1rem;
      text-align: center;
      font-size: 1.2rem;
      color: #333;
    }

    header {
      background-color: #d1ecf1; /* biru muda */
    }

    article {
      background-color: #d4edda; /* hijau muda */
    }

    aside {
      background-color: #fff3cd; /* kuning muda */
    }

    footer {
      background-color: #f8d7da; /* merah muda */
    }
  </style>
</head>
<body>

  <div class="container">
    <!-- Header -->
    <header class="row">
      <div class="col-12">
        Header
      </div>
    </header>

    <!-- Main Content: Artikel + Aside -->
    <div class="row">
      <article class="col-sm-8 col-12">
        Artikel
      </article>
      <aside class="col-sm-4 col-12">
        Aside
      </aside>
    </div>

    <!-- Footer -->
    <footer class="row">
      <div class="col-12">
        Footer
      </div>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
