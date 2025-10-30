<html>
    <head>
        <title></title>
</head>
<body>
    <h1> Adaugare Comentariu</h1>
    <form method="POST" action="add_p.php">
        <b> Numele: </b> 
        <input type="text" size="20" name="nume">
        <br>
        <b> Prenumele: </b> 
        <input type="text" size="20" name="prenume">
        <br>
        <b> Adresa de email: </b> 
        <input type="text" size="20" name="email">
        <br>
        <b> Nota: </b> 
        <input type="text" size="2" name="nota">
        <br>
        <b> Parerea dvs!: </b> 
        <textarea  name="parere" rows="10" cols="20"></textarea>
        <br>
        <input type="submit" name="add" value="Adaugare">

    </form>
   
        <h1>
            Parerile vizitatorilor:
            
        </h1>
    <?php
        include("conect.php");
$q="select * from date_coment;";
$rez=mysqli_query($link,$q);
if(mysqli_num_rows($rez)==0) print "Nu exista pareri";
else
{
    
	 while($row=mysqli_fetch_array($rez))
   {	  
    print"ID: ".$row['id_coment']."<br>";
	  print"Nume: ".$row['nume']."<br>";
	  print"Prenume: ".$row['prenume']."<br>"; 
	  print"Adresa de email: ".$row['email']."<br>";
	  print"Nota: ".$row['nota']."<br>";
      print"Parerea: ".$row['parerea']."<br>";
            print "<br>";
    }
   }
   ?>
    </body>
</html>
