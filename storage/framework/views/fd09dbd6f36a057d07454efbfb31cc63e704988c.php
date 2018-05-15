
<title>DSStino</title>
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
    .nav.navbar-nav.navbar-right li{
        color: #000000;
    }

    .navbar-default .navbar-brand {
        color: #e3f2fd;
    }
    /*https://mdbootstrap.com/css/colors/*/
    .navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
        color: #000000;
    }

#contenido{
    display: flex;
    flex-direction: column;
}
#mySidebar{
    position: absolute;
    border-radius: 25px;
    
}

    /* Add a gray background color and some padding to the footer */
    .profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #ef6c00;
  min-height: 460px;
}
    #myFooter {
    background-color: #182c39;
    color: white;
    padding-top: 20px;
    position: absolute;
    right: 0px;
    left: 0px;
}

#map-container {
    height: 240px;
    width: 100%;
    margin-top: 30px;
    margin-bottom: 10px;
}

#myFooter .row {
    margin: 0 85px;
}

#myFooter .container {
    width: auto;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 38px;
}

#myFooter .fa {
    font-size: 30px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: white;
    color: #182c39;
    border-radius: 51%;
    padding: 10px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 31px;
    text-decoration: none;
    transition: color 0.2s;
}

#myFooter .fa-facebook:hover {
    color: #2b55ff;
}

#myFooter .fa-facebook:focus {
    color: #2b55ff;
}

#myFooter .fa-google-plus:hover {
    color: red;
}

#myFooter .fa-google-plus:focus {
    color: red;
}

#myFooter .fa-twitter:hover {
    color: #00aced;
}

#myFooter .fa-twitter:focus {
    color: #00aced;
}

@media  screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
    #myFooter .row {
        margin: 0;
    }
}
    .carousel-inner > .item > img {
        margin: 0 auto;
        width:640px;
        height:360px;
    }
    .sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #ef6c00;
    overflow-x: hidden;
    padding-top: 70px;
    margin-bottom:50px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #42a5f5;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}
.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
  </style>




