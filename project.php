<!DOCTYPE html>
<html lang = "en">
<head>
   <meta charset = "utf-8" /> 
		<title>Portofolio</title>
      <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type="text/css" href = "css/reset.css">
     	<link rel = "stylesheet" type="text/css" href = "css/style.css"> 
		<script src = "js/jquery-3.6.0.min.js"></script>
		
</head>
<body>

<div class="modal-project">
   <div>
      <img src="#" class="modal-imagem-project" alt = "#">
      <a href ="#" target = _blank class="modal-heading-project"></a>
      <p class="modal-description-project"></p>
   </div>
</div>

<div class="overlay-project">
   <img src="Assets/icons/close-line.svg" class="close-modal-project" alt = "#">
</div>

   <?php
   include('navbar.php');
   ?>

   <div id = "color-project">

   <div class="project__title">
      <h2>MY PROJECTS</h2>
   </div>

   <section class = "container-project">
      <div class = "grid-project">

         <div class =" card-project">
            <div class = "card-image-project project__img1">
               <img src = "Assets/img/project-img1.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class="card-project">
            <div class = "card-image-project project__img2">
               <img src="Assets/img/project-img2.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class = "card-project">
            <div class = "card-image-project project__img3">
            <img src="Assets/img/project-img3.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class = "card-project">
            <div class = "card-image-project project__img4">
            <img src="Assets/img/project-img4.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class = "card-project">
            <div class = "card-image-project project__img5">
            <img src="Assets/img/project-img5.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class = "card-project">
            <div class = "card-image-project project__img6">
            <img src="Assets/img/project-img6.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class = "card-project">
            <div class = "card-image-project project__img7">
            <img src="Assets/img/project-img7.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>

         <div class = "card-project">
            <div class = "card-image-project project__img8">
            <img src="Assets/img/project-img8.jpg" class = "image-project" alt = "imagem">
            </div>
         </div>
      </div>

   </section>

   <div class = "project__options">
      <div class = "project__options__grid">
      <div class = "project__option">
         <h3>Designer</h3>
         <p>I value simple content structure, clean design patterns, and thoughtful interactions.
            <br><br>
            Things I enjoy designing:
            <br><br>
            UX, UI, Web, Mobile, Apps, Logos
         </p>
      </div>

      <div class = "project__option">
         <h3>Front-end Developer</h3>
         <p>I like to code things from scratch, and enjoy bringing ideas to life in the browser.
            <br><br>
            Languages I speak:
            <br><br>
            HTML , CSS, JS, PHP
         </p>
      </div>

      <div class = "project__option">
         <h3>Mentor</h3>
         <p>I genuinely care about people, and love helping fellow designers project on their craft. 
            <br><br>
            Experiences I draw from:
            <br><br>
            UX/UI, Product design, Freelancing
         </p>
      </div>
      </div>
   </div>

   <div class = "project__title__2">
      <h2>You like what you see?
      <br>
      Want a Website like this one
      </h2>
   </div>

   <div class = "container-btn">
	   <a href="contact.php" class = "index-btn"> CONTACT ME</a>
   </div>

</div>
   <?php
   include('footer.php');
?>
   
      <script src = "js/script.js" ></script>
</body>
</html>  