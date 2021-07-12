<?php
$description  = 'A pretend shopping app, this program uses Tkinter and SQLite 
for an easy-to-use interface. SQLite is a small, one-file database, ideal
 for low-traffic applications. In this case, it is stored on the user’s computer, 
 alongside the Python files. The program was adapted from a school project 
 that used text files and demonstrates the use of classes and inheritance.
</p><p>
The code can be found at <a href="https://github.com/leahscode/Shopping" target="_blank">GitHub/leahscode</a>.';
?>

<!-- The short description, from where the modal is opened -->
<div class="container project">
  <h5 class="text-grey"><b>Shopping App</b></h5>
  <h6 class="text-color"><i class="fab fa-python"></i>Python with SQLite</h6>
  <p><?php echo $description; ?></p>
  <p class="more" data-bs-toggle="modal" data-bs-target="#shoppingModal"><span class="btn bg-color">Preview</span></p>
  <hr>
</div>


<!-- The modal -->
<div class="modal fade" id="shoppingModal" tabindex="-1" aria-labelledby="shoppingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="shoppingModalLabel"><i class="text-color fab fa-python"></i>Python with SQLite</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselShoppingCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselShoppingCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselShoppingCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselShoppingCaptions" data-bs-slide-to="2" class="bg-color" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselShoppingCaptions" data-bs-slide-to="3" class="bg-color" aria-label="Slide 4"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/shopping1.PNG" class="d-block w-100" alt="Best Supermarket">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">The welcome screen</h5>
                <p>The home screen of the app. From here, the user can select an action.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/shopping2.PNG" class="d-block w-100" alt="Shopping">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Shopping</h5>
                <p>The left side contains the products list, and the right side represents the shopping cart. A messagebox represents the receipt.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/shopping3.PNG" class="d-block w-100" alt="Return - confirm">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Returns</h5>
                <p>The left side contains a list of receipts, identified by their dates. The left side displays the content of the selected receipt.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/shopping4.PNG" class="d-block w-100" alt="Sales Data">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Sales Data</h5>
                <p>The user can view sales data for each month.</p>
              </div>
            </div>

          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselShoppingCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselShoppingCaptions" data-bs-slide="next">
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