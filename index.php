<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Webpage</title>

    <link rel="stylesheet" href="style.css" > 
    <script src="https://kit.fontawesome.com/f1b1314d73.js" crossorigin="anonymous"></script>


</head>
<body>

    <div class = "container">
        <h1> My Personal Webpage</h1>

        <!-- Bio Section -->
        <div class="pic">
            <img src="images/mypic.png" alt="No image"> <hr>
            <p><b>Name:</b> Sophia Bianca R. Go</p>
            <p><b>Age:</b> 20</p>
            <p><b>Course:</b> Bachelor of Science in Information Technology</p>
            <p><b>Year & Section:</b> 3rd Year - IT3R11 </p>

            
        </div>

        <!-- Hobbies & Likes Section -->
        <div class="hobbies">
            <h3>Hobbies & Likes</h3>

            <form method="post">
            

            <button type="submit" name="hobby" value="reading">Reading</button>
            <button type="submit" name="hobby" value="movies">Movies</button>
            <button type="submit" name="hobby" value="sports">Sports</button>
            <button type="submit" name="hobby" value="music">Music</button>
        </form>

        </div>

        <!-- php code -->
        <div class="hobby-output">

        <?php

        if (isset($_POST['hobby'])) {


            if ($_POST['hobby'] == "reading") {
                echo "<p><b>Reading:</b> Novels, Manhwas, Psychological Books</p>";
                echo "<img src='images/manhwa.png' alt='No image'>";
                echo "<img src='images/psychological.png' alt='No image'>";
                
            }
            elseif ($_POST['hobby'] == "movies") {
                echo "<p><b>Movies:</b> Action, Fantasy, Horror, Thriller, Historical</p>";
                echo "<img src='images/movies1.png' alt='No image'>";
                echo "<img src='images/movies2.png' alt='No image'>";
            }
            elseif ($_POST['hobby'] == "sports") {
                echo "<p><b>Sports:</b> Badminton, Basketball</p>";
                echo "<img src='images/badminton.png' alt='No image'>";
                echo "<img src='images/basketball.png' alt='No image'>";
            }
            elseif ($_POST['hobby'] == "music") {
                echo "<p><b>Music:</b> Pop, Country, Funk, OPM</p>";
                echo "<img src='images/pop.png' alt='No image'>";
                echo "<img src='images/funky.png' alt='No image'>";
            }

        }

        ?>
        </div>


        <!-- Skills Section -->
        <div class="skills">
            <h3>Skills</h3>
            <ul>
                <li><b>Programming:</b> Java, Python, Javascript, PHP</li>
                <li><b>Web Development:</b> HTML, CSS</li>
                <li><b>Database:</b> MySQL, MongoDB</li>
            </ul>
        </div>

        <!-- Contact Information Section -->
        <div class="contact">
            <h3>Contact Information</h3>
            <i class="fa-regular fa-envelope fa-2x"></i>
            
            <i class="fa-solid fa-phone fa-2x"></i>
            
            <i class="fa-brands fa-facebook fa-2x"></i>
           

            <p>go.sophiabianca419@gmail.com</p>
             <p>09957399238</p> 
             <a href="https://www.facebook.com/share/1GCPRq65bP/" target="blank">Facebook Page</a>
            
        </div>

    </div>

</body> 
</html> 


