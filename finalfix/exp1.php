<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Menus</title>
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
</head>
<body>
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

    <script>
        function toggleMenu(section) {
            const menus = document.querySelectorAll('.menu');
            menus.forEach(menu => menu.style.display = 'none');
            
            const selectedMenu = document.getElementById(section + 'Menu');
            selectedMenu.style.display = 'block';
        }

        function toggleSubmenu(submenu) {
            const submenus = document.querySelectorAll('.submenu');
            submenus.forEach(submenu => submenu.style.display = 'none');
            
            const selectedSubmenu = document.getElementById(submenu);
            selectedSubmenu.style.display = 'block';
        }
    </script>
</body>
</html>
