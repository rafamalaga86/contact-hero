<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Rafael García Doblas">

    <title>Contact Hero</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" alt="Bootstrap stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="/css/styles.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <div class="navbar">
      <div class="container">
        <div class="row">
          <div class="col col-md-5">
            <a href="/" class="navbar-brand">Contacts Hero</a>
          </div>
          <div class="col col-md-7 d-flex justify-content-end">
            <a href="/contacts/new" class="menu-link btn btn-primary">Insert Contact</a>
          </div>
        </div>
      </div>
    </div>
    <main class="container">
      {{ flashSession.output() ? flashSession.output() : '' }}
      {% block main %}{% endblock %}
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <p class="footer-joke"><!-- Insert joke with Javascript here--></p>
          </div>
          <div class="col-sm-4">
            Visit my personal page: <a href="//rafaelgarciadoblas.com">rafaelgarciadoblas.com</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/masonry.js"></script>
    <script src="/js/scripts.js"></script>
  </body>
</html>
