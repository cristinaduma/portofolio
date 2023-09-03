

<?php require('includes/header.php');
?>

<div id="carouselExampleControls" class="carousel" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item">
      <div style="background-image: url(/imagini/p1.jpg);"></div>
    </div>
    <div class="carousel-item">
      <div style="background-image: url(/imagini/p2.jpg);" ></div>
    </div>
    <div class="carousel-item active">
      <div style="background-image: url(/imagini/p3.jpg); "></div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container d-flex">
    <div class="row">
    <div class="col-12 col-md-10 col-lg-6 ">
   <h1>AICI ÎNCEPE CALATORIA MEA</h1>
 
   <h2>LUMEA CĂRȚILOR DIN BIBLIOTECA MEA</h2>
   <p>Am o pasiune pentru cărți și pentru IT. Am început un curs de web development pentru a învăța cum să creez un site de la 0 .
     Dorința mea este ca la finalul celor 6 luni să am atât cunoștințele de realizare site-uri cât și un început de site unde să-mi 
     împărtășesc pasiunile si să dezvolt o mini-afacere. 
</p>
<a href="http://book-talking.local/demo/shop.php"><button type="button" class="btn btn-info">SHOP</button></a>
<a href="http://book-talking.local/demo/blog.php"><button type="button" class="btn  btn-outline-secondary ">BLOGUL MEU </button></a>
</div>
</div>
</div> 
</div>
<div class="py-5 bg-secondary">
   <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12">
    <a href="#"><img class="imgcol" src="https://buybooks.ro/upload/articles/111/big-carti-de-fictiune.jpg" alt=""></a>
<h4>Ficțiune</h4>
<p>Ficțiunea merge mână în mână cu secretele. Am un secret în spatele acestei cărți.Și mai multe cărți, cărți care ascund povești fantastice.
    Animale vorbitoare, tărâmuri fermecate și pe blog... imaginația mea.
</p>
</div>
<div class="col-md-4 col-sm-6">

    <a href="#"><img class="imgcol2" src="https://tse2.mm.bing.net/th?id=OIP.ZvIiFHEbzxJSUP69KEkGWQHaFj&pid=Api&P=0" alt=""></a>
 <h4>Autocunoaștere</h4>
 <p>Ce vă transmite imaginea asta?
    Mie îmi spune că universul meu mic merită extins pentru că e frumos.
    Hai să ne extindem și să învățăm împreună.
    Pentru iubire de sine click pe cer.
 </p>
</div>

<div class="col-md-4 col-sm-6">
    
        <a href="#"><img class="imgcol3" src="https://tse4.mm.bing.net/th?id=OIP.AlzPNZwjChDs89OOlTdA6AHaFE&pid=Api&P=0" alt=""></a>
         <h4>Stilul meu</h4>
         <p>Substanțele tari se țin în sticluțe mici.
            Pe cartea asta cu design diferit găsiți ce mi-a plăcut mie în materie de lectură și vă recomand și vouă în shop și pe blog.
            Urmează niște recenzii siropoase.
            Ups.
            Aproape am divulgat marele secret.
         </p>     
        </div>
</div>
</div>
</div>
</div>

<div class="container text-center">
  <div class="row align-items-start">
    <?php
    $x=1;
    $y="Participanti modul ";
    ?>
<div class="col-lg-3 col-sm-6">
<h3>
 <?php 


  $var1=45789;
  echo number_format($var1,0,",",".");


 ?>
 
</h3>
<p>
<?php
echo $y. $x;

?>
</p>
</div>

<div class="col-lg-3 col-sm-6">
<h3>
 <?php 
  $var2=10001;

  echo number_format($var2,0,",",".");

 ?>
</h3>
<p>
<?php
$x++;
echo $y. $x;

?>
</p>
</div>


<div class="col-lg-3 col-sm-6">
<h3>
 <?php 
 $var3=21451;

 echo number_format($var3,0,",",".");


 ?>
</h3>
<p>
<?php
$x++;
echo $y. $x;

?>
</p>
</div>

<div class="col-lg-3 col-sm-6">
<h3>
 <?php 
 $var4=$var1+$var2+$var3;
 $total=number_format($var4,0,",",".");
 if($var4>=50000)
 echo "<strong>$total</strong>";
else

echo number_format($var4,0,",",".");


 ?>
</h3>
<p>Total participanti</p>
</div>
</div>
</div>

<?php require('includes/footer.php');
?>
