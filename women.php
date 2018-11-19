
<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <style>
            body{
                background: url("photo-1489987707025-afc232f7ea0f.jpeg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .sidenav {
                height: 100%; /* Full-height: remove this if you want "auto" height */
                width: 150px; /* Set the width of the sidebar */
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                background-color: #111; /* Black */
                opacity: 0.9;
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 125px;
            }

            /* The navigation womenu links */
            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 25px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif';
                color: #818181;
                display: block;
            }

            /* When you mouse over the navigation links, change their color */
            .sidenav a:hover {
                color: #f1f1f1;
            }

            #heading{
                text-align: center;
                font-size: 100px;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', 'Arial', 'sans-serif';
                padding-top:  200px;
                color: #818181;
            }

            .set1{
                margin-left: 150px;
                margin-right:-130px;
                margin-top: 100px;
                height: 400px;
                width: 400px;
                float: left;
                background-color:rgba(255,255,255,0);
            }
            .set2{
                margin-left: 150px;
                margin-right:-130px;
                margin-top: 100px;
                height: 400px;
                width: 400px;
                float: left;
                background-color:rgba(255,255,255,0);
            }
            .set3{
                margin-left: 150px;
                margin-right:-130px;
                margin-top: 100px;
                height: 400px;
                width: 400px;
                float: left;
                background-color:rgba(255,255,255,0);
            }
            .set4{
                margin-left: 150px;
                margin-right:-130px;
                margin-top: 100px;
                height: 400px;
                width: 400px;
                float: left;
                background-color:rgba(255,255,255,0);
            }
            .clothes{
                transition: 0.2s;
            }
            .clothes:hover{
                transform: scale(1.2); 
            }

            #welcome { position: absolute; width: 200px; margin-left: 1200px; background-color: grey; opacity: 0.8; border-radius: 10px; margin-top: 10px; padding-bottom: 10px; }
        </style>
        <script>
            function openimg(imgname){
                var s = "You took " + sessionStorage.getItem("time") + " seconds to make your decision";
                alert(s);
                sessionStorage.setItem("imgname",imgname);
            }

            function func()
            {
                var w = new Worker("worker1.js");
                w.onmessage = function(event)
                {
                    sessionStorage.setItem("time" , event.data);
                }
            }
        </script>
    </head>
    <body onload="func()">
        <div id='welcome'>
        <h1>Hello, User</h1>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        </div>

        <div id="x"></div>
        <div class="sidenav">
            <a href="about.html">About</a>
            <a href="men.php">MEN</a>
            <a href="women.php">WOMEN</a>
            <a href="contact.html">Contact Us</a>
        </div>
        <h1 id="heading">WOMEN</h1>
        <div class="set1">
            <a href="newpage.html"><img src="wshirt1.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wshirt1.jpeg')"></a>
        </div>
        <div class="set1">
            <a href="newpage.html"><img src="wshirt2.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wshirt2.jpeg')"></a>
        </div>
        <div class="set1">
                <a href="newpage.html"><img src="wshirt3.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wshirt3.jpeg')"></a>
        </div>
        <div class="set2">
                <a href="newpage.html"><img src="wshirt4.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wshirt4.jpeg')"></a>
        </div>
        <div class="set2">
                <a href="newpage.html"><img src="wshirt5.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wshirt5.jpeg')"></a>
        </div>
        <div class="set2">
                <a href="newpage.html"><img src="wshirt6.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wshirt6.jpeg')" ></a>
        </div>
        <div class="set3">
                <a href="newpage.html"><img src="wsweater1.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wsweater1.jpeg')"></a>
        </div>
        <div class="set3">
                <a href="newpage.html"><img src="wsweater2.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wsweater2.jpeg')"></a>
        </div>
        <div class="set3">
                <a href="newpage.html"><img src="wsweater3.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wsweater3.jpeg')"></a>
        </div>
        <div class="set4">
                <a href="newpage.html"><img src="wsweater4.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wsweater4.jpeg')"></a>
        </div>
        <div class="set4">
                <a href="newpage.html"><img src="wsweater5.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wsweater5.jpeg')"></a>
        </div>
        <div class="set4">
                <a href="newpage.html"><img src="wsweater6.jpeg" height="400px" weight="400px" class="clothes" onclick="openimg('wsweater6.jpeg')"></a>
        </div>
    </body>
</html>