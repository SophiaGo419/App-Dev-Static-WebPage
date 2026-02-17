<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    
    <title>My Personal Webpage</title>

    <link rel="stylesheet" href="style.css" > 
    <script src="https://kit.fontawesome.com/f1b1314d73.js" crossorigin="anonymous"></script>


</head>


<body id="top">

    <a href="#top" class="back-to-top">^</a>

    <?php
        $selectedHobby = '';
        if (isset($_POST['hobby'])) {
        $selectedHobby = $_POST['hobby'];
        }
    ?>

    <div class = "container">
        <h1> My Personal Webpage</h1>

        <!-- Bio Section -->
        <div class="pic">
            <img src="images/mypic.png" alt="No image"> <hr>

            <p>A certified student at USTP-CDO for five years, who is an introvert, resilient, and goal-oriented. </p>
            <p><b>Name:</b> Sophia Bianca R. Go</p>
            <p><b>Age:</b> 20</p>
            <p><b>Course:</b> Bachelor of Science in Information Technology</p>
            <p><b>Year & Section:</b> 3rd Year - IT3R11 </p>

            
        </div>

        <!-- Hobbies & Likes Section -->
        <div class="hobbies">
            <h3>Hobbies & Likes</h3>

            <form method="post" action="#hobbyOutput">
            <button type="submit" name="hobby" value="reading" <?php if($selectedHobby=='reading') echo 'style="background-color:lightblue;"'; ?>>Reading</button>
            <button type="submit" name="hobby" value="movies" <?php if($selectedHobby=='movies') echo 'style="background-color:lightblue;"'; ?>>Movies</button>
            <button type="submit" name="hobby" value="sports" <?php if($selectedHobby=='sports') echo 'style="background-color:lightblue;"'; ?>>Sports</button>
            <button type="submit" name="hobby" value="music" <?php if($selectedHobby=='music') echo 'style="background-color:lightblue;"'; ?>>Music</button>
            </form>

        </div>

        <!-- php code -->
         <div class="hobby-output" id="hobbyOutput">

            <?php
                if ($selectedHobby) {
                    if ($selectedHobby == "reading") {
                        echo "<p><b>Reading:</b> Novels, Manhwas, Psychological Books</p>";
                        echo "<img src='images/manhwa.png' alt='No image'>";
                        echo "<img src='images/psychological.png' alt='No image'>";
                } elseif ($selectedHobby == "movies") {
                        echo "<p><b>Movies:</b> Action, Fantasy, Horror, Thriller, Historical</p>";
                        echo "<img src='images/movies1.png' alt='No image'>";
                        echo "<img src='images/movies2.png' alt='No image'>";
                } elseif ($selectedHobby == "sports") {
                        echo "<p><b>Sports:</b> Badminton, Basketball</p>";
                        echo "<img src='images/badminton.png' alt='No image'>";
                        echo "<img src='images/basketball.png' alt='No image'>";
                } elseif ($selectedHobby == "music") {
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

        <div class="contact-item">
            <i class="fa-regular fa-envelope"></i>
            <p>go.sophiabianca419@gmail.com</p>
        </div>

        <div class="contact-item">
            <i class="fa-solid fa-phone"></i>
            <p>09957399238</p>
        </div>

        <div class="contact-item">
            <i class="fa-brands fa-facebook"></i>
            <p>Facebook: Sophia Bianca Go</p>
        </div>
        </div>

    </div>

</body> 
</html> 


