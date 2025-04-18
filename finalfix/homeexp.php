<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a04710cb7f.js" crossorigin="anonymous"></script>
</head>
<body style="height: 1000px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="coachbg.jpg" alt="Image" width="70" height="70">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNa" aria-controls="navbarNa" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNa">
            <ul class="navbar-nav mx-auto"> <!-- Center align the links -->
                <li class="nav-item active">
                    <a class="nav-link" href="teacher_view.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='login.php'>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='reg.php'>Sign Up</a>
                </li>

            </ul>

        </div>
    </nav>

  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="dark1.jpg" alt="..." style="width: 600px; height: 600px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="dark2.jpg" alt="..." style="width: 600px; height: 600px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="coach.jpg" alt="..." style="width: 600px; height: 600px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


 <style>
  /* Custom styles for the carousel */
  .carousel-inner {
    margin: 0px; /* Remove default margin */
    /*padding: 400px;
    /*padding-top:20px; /* Remove default padding */
  }
</style>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 15;
            padding:15;
        }

        .section-container {
            display: flex;
        }

        .section {
            flex: 1;
            text-align: center;
            cursor: pointer;
            padding: 30px;
            background-color: #f0f0f0;
            transition: background-color 0.3s;
        }

        .section:hover {
            background-color:white;
        }

        .menu {
            display: none;
            justify-content:center;
            position:center;
            background-color: #f9f9f9;
            border: 2px solid #ddd;
            z-index: 1;
            padding:0px 620px;
            
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
        }

        .menu li {
            padding: 10px;
            cursor: pointer;
        }

        .submenu {
            display: none;
            position: right;
            top: 0;
            left: 100%;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            z-index: 2;
            padding-right: -20px;
        }

        .submenu ul {
            list-style-type: none;
            padding: 0px 0px;
        }

        .submenu li {
            padding: 10px ;
            cursor: pointer;
        }
      
    </style>
  

<style>.content {
    padding: 20px;
}

.rounded-border {
    border: 2px solid #555; /* Border color */
    border-radius: 10px; /* Controls the roundness of the corners */
    padding: 10px; /* Optional padding to create some space around the content */
    background-color: rgba(0, 0, 255, 0.2); /* Transparent blue background color */
}</style>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</div>


<section class="course"> 
  <h1 class= "text-center">
   <marquee style="background-color: black; color: red;" > **ADMISSION IS ONGOING FOR BATCH 3** </marquee>
  </h1>
  <br>
  <br>
  <div class="content">
       <p style="text-align:center"  class="rounded-border"> Our A-Level and O-Level coaching program is tailored to empower students with comprehensive exam preparation. Through our experienced educators and engaging curriculum, we foster a supportive learning environment that promotes critical thinking and subject mastery. Join us to embark on a journey towards academic excellence and success in A-Level and O-Level examinations.</p>

  <br>
  

  <body style="width: 200%; height: 2500px;">
  <div class="section-container">
        <div class="section" onclick="toggleMenu('science')"><button style="width: 400px; height: 50px;">Science</button></div>
        <div class="section" onclick="toggleMenu('arts')"><button style="width: 400px; height: 50px;">Arts</button></div>
        <div class="section" onclick="toggleMenu('commerce')"><button style="width: 400px; height: 50px;">Commerce</button></div>
    </div>
    
    <div id="scienceMenu" class="menu">
        <ul>
            <li onclick="toggleSubmenu('scienceA')" ><button> A-Level</button></li>
            <li onclick="toggleSubmenu('scienceO')"><button> O-Level</button></li>
        </ul>
        <div id="scienceA" class="submenu">
            <ul>
                <li>Physics  A</li>
                <li style="width:100px">Chemistry A</li>
                <li>Math   A</li>
            </ul>
        </div>
        <div id="scienceO" class="submenu">
            <ul>
                <li>Physics O</li>
                <li>Math  O</li>
                <li style="width:100px">Chemistry O</li>
            </ul>
        </div>
    </div>
    
    <div id="artsMenu" class="menu">
        <ul>
            <li onclick="toggleSubmenu('artsA')"><button style="background-color: red; color: white;"> A-Level</button></li>
            <li onclick="toggleSubmenu('artsO')"><button style="background-color: red; color: white;"> O-Level</button></li>
        </ul>
        <div id="artsA" class="submenu">
            <ul>
                <li>Eco A</li>
                <li>Law A</li>
                <li>Soc A</li>
            </ul>
        </div>
        <div id="artsO" class="submenu">
            <ul>
                <li>Art O-1</li>
                <li>Art O-2</li>
                <li>Art O-3</li>
            </ul>
        </div>
    </div>
    
    <div id="commerceMenu" class="menu">
        <ul>
            <li onclick="toggleSubmenu('commerceA')"><button > A-Level</button></li>
            <li onclick="toggleSubmenu('commerceO')"><button > O-Level</button></li>
        </ul>
        <div id="commerceA" class="submenu">
            <ul>
                <li>bus A</li>
                <li>fin A</li>
                <li>mkt A</li>
            </ul>
        </div>
        <div id="commerceO" class="submenu">
            <ul>
                <li>bus O-1</li>
                <li>fimO-2</li>
                <li>mkt O-3</li>
            </ul>
        </div>
    </div>






     <br>
     <br>
     <br>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bottom">
      <h6 style="color:white;" >contact with us</h6>
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com" >
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.twitter.com">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>
</nav>


<script>
        function toggleMenu(section) {
            const menus = document.querySelectorAll('.menu');
            menus.forEach(menu =>{
                if (menu.style.display == 'none'){
                    menu.style.display = 'block'
                }else{
                    menu.style.display = 'none'
                }}
                );
            
            //const selectedMenu = document.getElementById(section);
            //selectedMenu.style.display = 'block';
        }

        function toggleSubmenu(submenu) {
            const submenus = document.querySelectorAll('.submenu');
            submenus.forEach(submenu => {
                submenu.style.display = 'none';
                submenu.style.backgroundColor = 'blue'
                console.log(submenu)
            });
            
            const selectedSubmenu = document.getElementById(submenu);
            selectedSubmenu.style.display = 'block';
        }
    </script>
</body>
</html>
