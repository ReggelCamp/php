
<html>
    <head>
        <style>
             body{
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                background-image:url('https://i.pinimg.com/originals/7a/68/2f/7a682fda8efabc4be96568886d8db9d1.jpg');
             }
                .form_border{
                border:solid;
                padding-left:5px;
                margin-top:5%;
                margin-left:40%;
                margin-right:40%;
                padding-bottom:30px;
                background-color:white;
            }
        </style>
    </head>
    <body>
        <form class = "form_border" method = "POST">
            <h1>What to do? </h1>
            <input type = "text"  placeholder = "Activity To do" name = "activity">
            <input type="submit" formaction="addTo.php" value="Add">
            <input type="submit" name ="display" value="Display">
        </form>
    </body>
</html>