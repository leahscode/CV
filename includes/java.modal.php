<?php
$description  = 'Completed in one free afternoon, this Java Solitaire game is 
played from the command line. My web-development professor, who taught Java for 
another group, suggested that I try it, just for fun. It demonstrates the use of 
classes, overloading, and other Java goodies.
</p><p>
The game rules are delineated in the
PDF on <a href="https://github.com/leahscode/Solitaire" target="_blank">GitHub/leahscode</a>.';
?>

<!-- The short description, from where the modal is opened -->
<div class="container project">
  <h5 class="text-grey"><b>Solitaire</b></h5>
  <h6 class="text-color"><i class="fab fa-java"></i>Java</h6>
  <p><?php echo $description; ?></p>
  <p class="more" data-bs-toggle="modal" data-bs-target="#javaModal"><span class="btn bg-color">Preview</span></p>
  <hr>
</div>


<!-- The modal -->
<div class="modal fade" id="javaModal" tabindex="-1" aria-labelledby="javaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="javaModalLabel"><i class="text-color fab fa-java"></i>Java</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselJavaCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselJavaCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselJavaCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/java1.PNG" class="d-block w-100" alt="Java Solitaire">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Playing in the command line.</h5>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/java2.PNG" class="d-block w-100" alt="Java Solitaire">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Reviewing the game file</h5>
              </div>
            </div>

          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselJavaCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselJavaCaptions" data-bs-slide="next">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-right text-color"></i></span>
            <span class="visually-hidden">Next</span>
          </button>

      <!-- end carousal buttons (no div) -->
      <!-- end modal body -->
      </div>

      <div class="modal-body">
        <p><?php echo $description; ?></p>
      </div>

    <!-- end modal (3 divs) -->
    </div>
  </div>
</div>