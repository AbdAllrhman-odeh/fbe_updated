<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:auto;
            max-width: 600px;
            line-height: 1.4;
            margin-top: 50px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <h1>form</h1>
    <form action="POST" method="" ><!--novalidate-->
       
    <!-- input type = text -->
        <label for="firstName" required>
            Enter your first name:
        </label>
        <input type="text" name="firstName" id="firstName"><br><br>
        <label for="secondName">
            Enter your second name:
        </label>
        <input type="text" id="secondName" name="secondName"><br><br>
        
    <!--input type = email-->
        <label for="email">
            Enter your email:
        </label>
        <input type="email" id="email" name="email"><br><br>
        
    <!--input type = password-->
        <label for="password">
            Enter your password:
        </label>
        <input type="password" id="password" name="password"><br><br>
        
    <!--input type = number-->
        <label for="number">
            Enter your age:
        </label>
        <input type="number" id="number" name="age" min="10" max="50"><br><br>
            
    <!--input type=checkbox(chose one or more)-->
            Enter your transportation options:<br>
        <input type="checkbox" id="transportation1" name="transportation1" value="car">
            <label for="transportation1">I have a Car</label><br>
        <input type="checkbox" id="transportation2" name="transportation2" value="bike">
            <label for="transportation2">I have a Bike</label><br><br>
            
    <!--input type=radiobutton(chose just one)-->
            Enter your gender:<br>
            <input type="radio" id="male" name="gender" value="male">
                <label for="male">male</label><br>
            <input type="radio" id="female" name="gender" value="female">
                <label for="female">female</label><br><br>

    <!--input type=textare-->
            <label for="comment">Enter your comment:</label><br>      
        <textarea id="comment" name="comment" rows="4" cols="50">
            we can write anything we want
        </textarea><br>

    <!--input type=submit-->
            <input type="submit" value="save"><br>    
    </form>    
    <hr>

    <h1>
        iframe
    </h1>
    <!--
        we must add the src attrbuite to the iframe tag 
    -->  
    <iframe src="https://www.arabiaweather.com/en/weather-forecast/amman/1797/jo" width="500px" height="1000px">
    </iframe>
    <br>
    <hr>

    

    <h1>
        video
    </h1>
    <video width="640" height="360" autoplay="on" controls muted>
    <!-- controls attribute  adds video controls, like play, pause, and volume -->          ​
    <source src="video.mp4" type="video/mp4">
        <!-- element allows you to specify alternative video files which the browser may choose from.
         The browser will use the first recognized format. -->​
    </video>

    <br>
    <hr>
    <h1>
        audio
    </h1>
         <!--element allows you to specify alternative audio files which the browser may choose from.
          The browser will use the first recognized format.-->
    <audio controls>          ​
    <source src="audio.mp3" type="audio/mp3">​

    </audio>
</body>
</html>