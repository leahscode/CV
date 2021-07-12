<?php
$description  = 'I was set out to determine how powerful CSS really. Well, if one is really determined, they can create an image simply by styling some div elements.
</p><p>
You can <a href="http://chocolates.scienceontheweb.net/index.html" target="_blank">see the chocolate bar</a> yourself, and even 
<a href="http://chocolates.scienceontheweb.net/interactive.html" target="_blank">interact</a> with it. The code  can be found at 
<a href="https://github.com/leahscode/Chocolate" target="_blank">GitHub/leahscode</a>.';
?>

<!-- The short description, from where the modal is opened -->
<div class="container project">
  <h5 class="text-grey"><b>Chocolate</b></h5>
  <h6 class="text-color"><i class="fab fa-css3"></i>The power of CSS</h6>
  <p><?php echo $description; ?></p>
  <p class="more" data-bs-toggle="modal" data-bs-target="#chocolateModal"><span class="btn bg-color">Preview</span></p>
  <hr>
</div>


<!-- The modal -->
<div class="modal fade" id="chocolateModal" tabindex="-1" aria-labelledby="chocolateModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="chocolateModalLabel"><i class="text-color fab fa-css3"></i>The power of CSS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselChocolateCaptions" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselChocolateCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselChocolateCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/choco1.PNG" class="d-block w-100" alt="static chocolate bar">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">The static bar</h5>
                <p>It looks like a picture of a chocolate bar. It really is just some carefully-styled div elements.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/choco2.PNG" class="d-block w-100" alt="interactive chocolate bar">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">The interactive bar</h5>
                <p>With just a little bit of JavaScript, you choose a custom-sized bar, and pretend-eat from it.</p>
              </div>
            </div>

            
          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselChocolateCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselChocolateCaptions" data-bs-slide="next">
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