<!DOCTYPE html>
<html lang = "en">
	
	<head>
		<meta charset = "utf-8" />
      <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<title>Portofolio</title>
		<link rel = "stylesheet" type="text/css" href = "css/reset.css">
      <link rel = "stylesheet" type="text/css" href = "css/style.css"> 
	</head>


   <body>
   
   <div class = "overlay-contact"></div>
	 	<div class = "modal-contact"> 
			<h1> Mensagem enviada com sucesso!</h1>
			<button class = "btn-hide-contact">OK</button>	
		</div>

   <?php
   include('navbar.php');
   ?>
      
    
   <div class = "img-background-contact">    
      <div class = 'form-wrapper-contact'>
         <form class = "form-contact">
            <span class = "title-contact"> Contact Me</span><br>

               <div class = "details-contact">
                  <label class = "label-contact">Name</label>
                     <input class = "input-contact" type = "text" placeholder = "Type in your name" name = "name" required>
               </div>

               <div class = "details-contact">
                  <label class = "label-contact">Email</label>
                     <input class = "input-contact" type  = "email" placeholder = "Type in your email" name = "email" required>
               </div>

               <div class = "details-contact"> 
                  <label class = "label-contact">What are you looking for?</label>
                     <textarea class = "textarea-contact" placeholder = "Leave here what you are looking for?"  name = "comment" required></textarea> 
               </div>

               <button class = "btn-show-contact" type = "button">SEND</button>
         </form>
      </div>
   </div>

   <?php
   include('footer.php');
   ?>

   <script src = "./js/jquery-3.6.0.min.js"></script>
	<script src = "./js/script.js" ></script>

   </body>
</html>