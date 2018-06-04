<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/materialize.css">
     <link rel="icon" href="/storage/download.jpeg" type="image/x-icon"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .footer{
            position: absolute;
              right: 0;
              bottom: 0;
              left: 0;
              padding: 1rem;
            background: teal
        }
    </style>
</head>
<body class = "light-green lighten-3">
   <nav>
    <div class="teal darken-3 nav-wrapper">
      <a href="#" class=" brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down lime-text text-lighten-1">
        @yield("links")
         <li><a href="/make">Новый пост</a></li>
      </ul>
    </div>
  </nav>
  
     <div class="container">
        @yield('body')
      </div>
   
  

   <footer class=" teal darken-3 page-footer ">
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
        
         <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="/js/materialize.js"></script>

        <script>
         $(document).ready(function() {
             $('input#input_text, textarea#textarea2').characterCounter();
        });
              
        </script>
        @yield("scripts")
</body>
</html>
