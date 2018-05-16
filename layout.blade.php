<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/materialize.css">
</head>
<body>
   <nav>
    <div class="teal darken-3 nav-wrapper">
      <a href="#" class=" brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down lime-text text-lighten-1">
        @yield("links")
      </ul>
    </div>
  </nav>
  
     <div class="container">
        @yield('body')
      </div>
   
  

   <footer class="teal darken-3 page-footer">
          <div class="container">
            <div class="row">
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        <script>
         $(document).ready(function(){
             $('.parallax').parallax();
         });
              
        </script>
</body>
</html>
