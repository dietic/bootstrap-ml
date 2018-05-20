<?php include 'incs/header.php'; ?>
<?php include 'incs/navbar.php'; ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  	</ol>
  	<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img class="d-block w-100" src="images/carrousel-placeholder1.jpg" alt="First slide">
    	</div>
	    <div class="carousel-item">
	      	<img class="d-block w-100" src="images/carrousel-placeholder2.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="images/carrousel-placeholder3.jpg" alt="Third slide">
	    </div>
  	</div>
</div>
<div class="row">
	<?php for($i = 0; $i < 5; $i++) { ?>
	<div class="card col-6 col-lg-4">
		<img class="card-img-top" src="images/ipad-placeholder.jpg" alt="Card image cap">
		<div class="card-body">
		  <h5 class="card-title">Card title</h5>
		</div>
		<ul class="list-group list-group-flush">
		    <li class="list-group-item">Cras justo odio</li>
	  	</ul>
	</div>
	<?php } ?>
</div>



<?php include 'incs/footer.php'; ?>
		
	