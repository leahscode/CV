<?php
$description  = 'This dummy slot machine can be played without inserting real 
money. It is the perfect tool to explore how likely it is to net a win after 
multiple rounds. Powered by C# and .NET, it displays any of its ten images on 
each “reel”. A match equals a win. Go ahead, have a try.
</p><p>
 The <a href="https://github.com/leahscode/Slot-Machine/blob/main/bin/Debug/SlotMachineLS.exe" target="_blank">app</a>, and its 
<a href="https://github.com/leahscode/Slot-Machine/blob/main/Form1.cs" target="_blank">code</a>,
 can be found at <a href="https://github.com/leahscode/Slot-machine" target="_blank">GitHub/leahscode</a>.';
?>

<!-- The short description, from where the modal is opened -->
<div class="container project">
  <h5 class="text-grey"><b>Slot Machine</b></h5>
  <h6 class="text-color"><i class="fab fa-microsoft"></i>C# with .NET</h6>
  <p><?php echo $description; ?></p>
  <p class="more" data-bs-toggle="modal" data-bs-target="#NETModal"><span class="btn bg-color">Preview</span></p>
  <hr>
</div>


<!-- The modal -->
<div class="modal fade" id="NETModal" tabindex="-1" aria-labelledby="NETModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
  <!-- <div class="modal-dialog modal-dialog-centered modal-lg"> -->
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="NETModalLabel"><i class="text-color fab fa-microsoft"></i>C# with .NET</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselNETCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselNETCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselNETCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselNETCaptions" data-bs-slide-to="2" class="bg-color" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselNETCaptions" data-bs-slide-to="3" class="bg-color" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselNETCaptions" data-bs-slide-to="4" class="bg-color" aria-label="Slide 5"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/visual.PNG" class="d-block w-100" alt="Slot Machine">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">The slot machine: How much money will you bet on this?</h5>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/visual2.PNG" class="d-block w-100" alt="A double match">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">Any match rewards you with more than you inserted.</h5>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/visual3.PNG" class="d-block w-100" alt="A complete win">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">If all three images match, your win is tripled!</h5>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/visual1.PNG" class="d-block w-100" alt="No win">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">But most rounds will yield three unique images; a loss.</h5>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/visual4.PNG" class="d-block w-100" alt="Net winnings">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-grey">Over a hundred rounds and many wins later: a net loss.</h5>
              </div>
            </div>

          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselNETCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselNETCaptions" data-bs-slide="next">
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