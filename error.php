<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>BVCOE Attendance Portal - Error 404</title>
    <style type="text/css">
        @font-face {
            font-family: '3dumbregular';
            src: url('fonts/3Dumb/3Dumb-webfont.eot');
            src: url('fonts/3Dumb/3Dumb-webfont.eot?#iefix') format('embedded-opentype'), url('fonts/3Dumb/3Dumb-webfont.woff') format('woff'), url('fonts/3Dumb/3Dumb-webfont.ttf') format('truetype'), url('fonts/3Dumb/3Dumb-webfont.svg#3dumbregular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        img{
            float:left; 
            height:100%;
            width:50%;
            position:relative;
            display:inline-block;
        }
        p{
            float:left;
            position:relative;
            display:inline-block;
            text-align:center;
            width:50%;
            color:rgb(177,239,41);  
        }
        h1{
            float:left;
            position:relative;
            display:inline-block;
            text-align:center;
            width:50%;
            color:rgb(177,239,41);      
            padding-top:0;
        }
        html{
            margin:0;
            width:100%;
            height:100%;
            background-color:rgb(0,0,0);
        }
        .main{
            height:100%;
            width:100%;
            font-size:2.4em;
            font-family: '3dumbregular';
        }
    </style>
    <script>setTimeout(function () { window.location.href = 'index.php' }, 10000);</script>
</head>
<body style="margin:0;">
    <form id="form1" runat="server" >
    <div class="main">
        <img alt="error-404" src="img/404.jpg"/>
        <h1>ERROR 404</h1>
        <p>You have either reached the wrong page or the session has expired :(</p>
        <p>Redirecting to the home page</p>
    </div>
    </form>
</body>
</html>
