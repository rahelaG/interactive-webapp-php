<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pincipiile unui om de succes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="global-forms.css" type="text/css" />
</head>
<body id="index" class="home">
    <section class="sub-header">
    <nav>
        <a href="index.html"><img src="images/logoorg.png"></a>
        <div class="nav-links">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="principii.html ">PRINCIPII &darr;</a>
                 <ul class="dropdown">
                <li><a href="deprinderi.html">DEPRINDERI</a></li>
                <li><a href="business.html">BUSSINES</a></li>
                 </ul>
                </li>
                <li><a href="povesti.html">OAMENI DE SUCCES</a></li>
                <li><a href="contact.php">COMENTARII</a></li>
            </ul>
        </div>
    </nav>
    <div class="titlu_pag">
  <h1>Contact</h1>
</div>
 </section>


 <br>
 <br>
 <h1 style=text-align:center;>Scrie-ne un comentariu</h1>
 <br>
 <br>

       
        <div class="center">
            <div id="respond">



<form action="add_p.php" method="POST" id="commentform">

  <label for="comment_author" class="required">Nume</label>
  <input type="text" name="nume" id="comment_author" value="" tabindex="1" required="required">
  
  <label for="email" class="required">Email</label>
  <input type="email" name="email" id="email" value="" tabindex="2" required="required">

  <label for="comment" class="required">Mesaj</label>
  <textarea name="mesaj" id="comment" rows="10" tabindex="4"  required="required"></textarea>

  <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
  <input name="submit" type="submit" value="Trimite" />
  
</form>
</div>
</div>

        <br>
        <br>
        <table>
        <h1 style=text-align:center;>
            Părerile vizitatorilor: </h1>
</table>
        </h1>
        <html>



        <table border="1">
           
 
    <?php 
    
   
        include("conect.php");
$q="select * from comentarii;";
$rez=mysqli_query($link,$q);
if(mysqli_num_rows($rez)==0) print "Nu exista pareri";
else
{
  
    
	 while($row=mysqli_fetch_array($rez))
   {	

?> <h4 style=color:black;>  <tr>
<td>  
<?php
    
	  print" ".$row['nume']."<br>";
	  print"'' ".$row['mesaj']."''<br>";
      print"<em> <em> ".$row['email']."<br>";
            print "<br><hr>";
            
    }
   }
  
   ?></table></h4>
 </section>








 <!---footer---->
<section class="footer">
    <h4>Despre mine</h4>
    <p>Mă numesc Gruici Rahela-Naomi, sunt eleva clasei a XII A si am ales să prezint site-ul "Principiile unui om de succes" <br>pentru că mă pasionează tot ceea ce ține de domeniul succesului, dorind ca din zi în zi undeva in viitor să ajung să mă bucur din plin de o viață de succes.</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
     <p>Realizat cu <i class="fa fa-heart-o"></i> de Gruici Rahela-Naomi</p>
</section>
</body>
</html>

