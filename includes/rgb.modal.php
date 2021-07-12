<?php
$description  = 'A robust web application, this game uses front-end web technologies for an exciting and educational game. 
Powered by jQuery, developing it utilized the core programming skills necessary for all software applications.
 Entirely self-taught, this game was developed before I even thought of attending school. One caveat: 
 the code has no comments, as I was not aware of its importance at that point.
 </p><p>
 Go ahead, <a href="http://leahschwartz.atwebpages.com/color-game/color-game.html" target="_blank">play the game</a>.
 It is a great way to learn the RGB colors. Or just see the code at 
 <a href="https://github.com/leahscode/RGB-Game" target="_blank">GitHub/leahscode</a>.';
?>

<!-- The short description, from where the modal is opened -->
<div class="container project">
  <h5 class="text-grey"><b>RGB Color Game</b></h5>
  <h6 class="text-color"><i class="fab fa-js-square"></i>JavaScript and jQuery</h6>
  <p><?php echo $description; ?></p>
  <p class="more" data-bs-toggle="modal" data-bs-target="#RGBModal"><span class="btn bg-color">Preview</span></p>
  <hr>
</div>


<!-- The modal -->
<div class="modal fade" id="RGBModal" tabindex="-1" aria-labelledby="RGBModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="RGBModalLabel"><i class="text-color fab fa-js-square"></i>JavaScript and jQuery</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselRGBCaptions" class="carousel slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide-to="2" class="bg-color" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide-to="3" class="bg-color" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide-to="4" class="bg-color" aria-label="Slide 5"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/rgb1.PNG" class="d-block w-100" alt="RGB game start">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">The Game</h5>
                <p>At medium level, and medium tile-size. Can you guess which tile's color matches the RGB value in the header?</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/rgb2.PNG" class="d-block w-100" alt="RGB game correct">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">The Answer</h5>
                <p>With the last value significantly higher than the other two, the obvious option is the only blue tile. (See previous picture.)</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/rgb3.PNG" class="d-block w-100" alt="RGB game hints">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">Hints</h5>
                <p>Having trouble? The hint button toggles the main colors, with only the highest (255) or lowest (0) RGB values.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/rgb4.PNG" class="d-block w-100" alt="RGB game try again">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">Try Again</h5>
                <p>Wrong answer? As long as you have more than one tile left, you can try another answer.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/rgb5.PNG" class="d-block w-100" alt="RGB game score">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">Score</h5>
                <p>The score reflects at which point the correct guess was made. A four-tiled board, guessed correctly the second time, will give you 75%.
                 Since the scores are stored in the browser, they're not lost when the page is closed.</p>
              </div>
            </div>

          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselRGBCaptions" data-bs-slide="next">
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