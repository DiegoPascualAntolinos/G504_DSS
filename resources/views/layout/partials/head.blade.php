
<title>Bootstrap Example</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .navbar-default {
        background-color: #ef6c00;
        border-color: #ef6c00;
    }
    body { /*Cambiamos los margenes del navbar y el footer. SI no se solapan*/
        padding-top: 65px;
        padding-bottom: 120px; 
    }

    .navbar-default .navbar-brand {
        color: #1de9b6;
    }
    /*https://mdbootstrap.com/css/colors/*/
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
        color: #000000;
    }

    /* Add a gray background color and some padding to the footer */
    .footer {
      background-color: #ef6c00;
      padding: 25px;
      left: 0;
      bottom: 0;
      width: 100%;
      height: 114px;
    }
    
    .carousel-inner > .item > img {
        margin: 0 auto;
        width:640px;
        height:360px;
    }

  </style>




