<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE LAYOUT STRUCTURE</title>
    <link rel="stylesheet" href="../css/customstyle.css">
</head>

<body>
    <header>
        <h1>College of Information and Computing Sciences</h1>
        <h3>Bachelor of Science in Information System</h3>
        <div class="container">
            <a href="../index.html">Home</a>|
            <a href="about.html">About</a>|
            <a href="contactus.html">Contact Us</a>|
            <a href="profile.html">Profile</a>|
            <button id="submit_btn"><a href="login.html">Login</a></button>
         </div>
   </header>

    <section>
          <nav>
             <ul class="navigation_menu">
               <li><a href="heading.html">Heading</a></li>
               <li><a href="tables.html">Tables</a></li>
               <li><a href="htmllist.html">HTML List</a></li>
               <li><a href="forms.html">Forms</a></li>
               <li><a href="form.post.php">Form Post Method</a></li>
               <li><a href="images.html">Image</a></li>
             </ul>
          </nav>
          <article>
          <h2>Form Post Method Post Action</h2>
              <?php
                  if($_SERVER["REQUEST_METHOD"] == "POST"){
                      $fullname = htmlspecialchars($_POST['name']);
                      $yourage = htmlspecialchars($_POST['age']);

                      echo "<h2> Your name is : ". $fullname ."</h2>";
                      echo "<h2> Your age is : ". $yourage ."</h2>";}

              ?>
          
          </article>
   </section>

   <footer>
    <h2>W3Schools</h2>
    <div class="footer_menu">
        <a href="termsofuse.html">Terms of Use</a>|
        <a href="privacypolicy.html">Privacy Policy</a>|
        <a href="affiliate.html">Affiliate</a>|
    </div>
    <div>
        <p><b> Copyright &copy; 1999-2024 by Refsnes Data.<br>
            All rights reserved.
        </b></p> 
    </div>
   </footer>
   
</body>
</html>