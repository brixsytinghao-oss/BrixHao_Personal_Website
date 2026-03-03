<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Brix S.Hao</title>
 <style>
 /* GLOBAL STYLES */
 body {
 font-family: 'Arial', sans-serif;
 margin: 0;
 background-color: #D0BBA8; /* Grain Brown
 */
 color: #0e0d0d; /* Black */
 line-height: 2.5;
 }

 /* HEADER & NAVIGATION */
 header {
 background-color: #110101; /* Dark Black */
 padding: 15px 0;
 box-shadow: 0 2px 5px rgba(247, 235, 235, 0.5);
 }

 nav {
 max-width: 1000px;
 margin: auto;
 text-align: center;
 }

 nav a {
 color: #ffffff; /* White */
 margin: 0 20px;
 text-decoration: none;
 font-weight: bold;
 font-size: 1.1rem;
 transition: color 0.3s ease;
 }

 nav a:hover {
 color: #0a0a0a; /* Black */
 }

 /* HERO / HOME SECTION */
 .hero {
 background-color: #D6CBBF; /* Grayish Orange*/
 height: 70vh; /* Set a decent height */
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 text-align: center;
 color: #0c0c0c; /* Black*/
 padding: 0 20px;   
 }

 .hero h1 {
 font-size: 3.5rem;
 margin: 0;
 color: #050505; /* Black*/
 }

 .hero p {
 font-size: 1.5rem;
 margin-top: 10px;
 }

 /* GENERAL SECTION STYLING */
 section {
 padding: 60px 20px;
 max-width: 800px;
 margin: 40px auto;
 background-color: #D0BBA8; /* Grain Brown */
 border-radius: 8px;
 box-shadow: 0 0 15px rgba(7, 0, 0, 0.7);
 }

 h2 {
 color: #110802; /* Bla ck */
 text-align: center;
 margin-bottom: 30px;
 border-bottom: 2px solid #0a0101be; /* Black */
 padding-bottom: 10px;
 }

 /* IMAGE STYLING (Profile Picture) */
 .profile-container {
 display: flex;
 flex-direction: column;
 align-items: center;
 margin-bottom: 30px;
 }

 .profile-img {
 width: 150px; /* Adjust size as needed */
 height: 150px;
 border-radius: 50%; /* Makes the image round */
 object-fit: cover;
 border: 5px solid #07000094; /* Black */
 margin-bottom: 20px;
 }

 /* FOOTER */
 .footer {
 text-align: center;
 padding: 20px;
 background-color: #111110; /* Dark Violet */
 color: #f8f2f2;
 margin-top: 40px;
 font-size: 0.9rem;
 }
 </style>
</head>
<body>
 <!-- nav -->
  <?php include "includes/nav.php"; ?>
 <div class="hero" id="home">
 <h1>Hi My Name is Brix S.Hao</h1>
 <p>Front-End Developer | Designer | IT Professional</p>
 
 </div>

 <section id="about-me">
 <h2>About Me</h2>
 <div class="profile-container">
 <img src= image/hao.jpg alt="Profile Picture of [Kurt]" class="profile-img">
 </div>
 <p>Hello! I am Brix Hao , a passionate Web Developer with a background in [Web Developer, e.g., Industrial Technology]. I focus on creating clean, efficient, and visually appealing web experiences. My journey involves blending technical skills with creative solutions to solve real-world problems.</p>
 <p>I am always eager to learn new technologies and contribute to challenging projects. Check out my contact details below!</p>
 </section>

 <section id="contact">
 <h2>Contact Me</h2>
 <p style="text-align: center;">I am currently available for any new opportunities. Let's connect!</p>
 <ul style="list-style: none; padding: 0; text-align: center;">
 <li>Email: brixsytinghao@gmail.com</li>
 <li>Phone: 09057606276/09948785398</li>
 
 </ul>
 </section>

 <section id="bootstrap">
 <h2>My Bootstrap Activities</h2>

 <div class="profile-container">
 
 </div>
 <li><a href="hao_bootstrap_activities/activity1.html">Activity 1</a></li>
 <li><a href="hao_bootstrap_activities/activity2.html">Activity 2</a></li>
 <li><a href="hao_bootstrap_activities/activity3.html">Activity 3</a></li>
 <li><a href="hao_bootstrap_activities/activity4.html">Activity 4</a></li>
 <li><a href="hao_bootstrap_activities/activity5.html">Activity 5</a></li>
 </section>

 <section id="javascript">
 <h2>My Javascript Activities</h2>

 <div class="profile-container">
 
 </div>
 <li><a href="hao_js_activities/activity1.html">Activity 1</a></li>
 <li><a href="hao_js_activities/activity2.html">Activity 2</a></li>
 <li><a href="hao_js_activities/activity3.html">Activity 3</a></li>
 <li><a href="hao_js_activities/activity4.html">Activity 4</a></li>
 <li><a href="hao_js_activities/activity5.html">Activity 5</a></li>
 <li><a href="hao_js_activities/activity6.html">Activity 6</a></li>
 <li><a href="hao_js_activities/activity7.html">Activity 7</a></li>
 <li><a href="hao_js_activities/activity8.html">Activity 8</a></li>

 </section>

<!-- footer -->
 <?php include "includes/footer.php"; ?>
</body>
</html>