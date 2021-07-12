<?php
$description  = 'With its easy-to-use interface, the recipe website is a great place to share recipes. 
Aptly named <em>un</em>Limited, the goal is that allergies and other diet-related limitations should 
not limit one’s access to great recipes. Presently, the collection represents my friends’ favorites, irrespective of any limitation.
</p><p>
Powered by PHP and MySQL, the project incorporates many web development goodies, both from the frond end and backend. 
Check out the <a href="http://unlimitedrecipes.myartsonline.com/" target="_blank">website</a>, and feel free to add some of your own recipes! 
The code can be found at <a href="https://github.com/leahscode/Recipes" target="_blank">GitHub/leahscode</a>.';
?>

<!-- The short description, from where the modal is opened -->
<div class="container project">
  <h5 class="text-grey"><b><em>un</em>Limited Recipes</b></h5>
  <h6 class="text-color"><i class="fab fa-php bg"></i>PHP and MySQL</h6>
  <p><?php echo $description; ?></p>
  <p class="more" data-bs-toggle="modal" data-bs-target="#recipeModal"><span class="btn bg-color">Preview</span></p>
  <hr>
</div>


<!-- The modal -->
<div class="modal fade recipe" id="recipeModal" tabindex="-1" aria-labelledby="recipeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="recipeModalLabel"><i class="text-color fab fa-php"></i>PHP and MySQL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselRecipeCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselRecipeCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselRecipeCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselRecipeCaptions" data-bs-slide-to="2" class="bg-color" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselRecipeCaptions" data-bs-slide-to="3" class="bg-color" aria-label="Slide 4"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/recipes1.PNG" class="d-block w-100" alt="Register/login">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Desktop Site</h5>
                <p>The register/login page. An account is required if the visitor wants to submit recipes.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/recipes2.PNG" class="d-block w-100" alt="Adding recipes">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Desktop Site</h5>
                <p>Adding recipes are easy with this form. With the help of JavaScript, the user can add as many ingredient lines as necessary.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/recipes3.PNG" class="d-block w-100" alt="Recipes list">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Desktop Site</h5>
                <p>The recipes are listed in a pleasant-looking table. They can be sorted by any of columns.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/recipes4.PNG" class="d-block w-100" alt="Recipe modal">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Desktop Site</h5>
                <p>The recipe details are viewed in a modal. If the visitor is logged in, their recipes have links to edit or delete them.</p>
              </div>
            </div>

          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselRecipeCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselRecipeCaptions" data-bs-slide="next">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-right text-color"></i></span>
            <span class="visually-hidden">Next</span>
          </button>

      <!-- end carousal buttons (no div) -->
      <!-- end modal body -->
      </div>

      <div class="modal-body">
        <p><?php echo $description; ?></p>
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary bg-color" data-bs-target="#mobileRecipeModal" data-bs-toggle="modal" data-bs-dismiss="modal">Preview Mobile Site</button>
      </div>

    <!-- end modal (3 divs) -->
    </div>
  </div>
</div>

<!-- the mobile modal -->
<div class="modal fade recipe" id="mobileRecipeModal" tabindex="-1" aria-labelledby="mobileRecipeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-grey" id="mobileRecipeModalLabel"><i class="text-color fab fa-php"></i>PHP and MySQL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <!-- start carousal -->
        <div id="carouselMobileRecipeCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselMobileRecipeCaptions" data-bs-slide-to="0" class="active bg-color" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselMobileRecipeCaptions" data-bs-slide-to="1" class="bg-color" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselMobileRecipeCaptions" data-bs-slide-to="2" class="bg-color" aria-label="Slide 3"></button>
          </div>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="images/mobile1.PNG" class="d-block w-100" alt="Register/login">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Mobile Site</h5>
                <p>A slick nav menu and a single column layout, to accommodate smaller screens.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/mobile2.PNG" class="d-block w-100" alt="Adding recipes">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Mobile Site</h5>
                <p>The form fields' size adjusts to the screen width.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="images/mobile3.PNG" class="d-block w-100" alt="Recipes list">
              <div class="carousel-caption d-none d-md-block text-color">
                <h5 class="text-grey">Mobile Site</h5>
                <p>The table is displayed as a list, which requires horizontal scrolling only.</p>
              </div>
            </div>

          <!-- end carousal-inner -->
          </div> 
          <!-- end carousal -->
        </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobileRecipeCaptions" data-bs-slide="prev">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-left text-color"></i></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselMobileRecipeCaptions" data-bs-slide="next">
            <span aria-hidden="true" style="font-size: 2em;"><i class="fas fa-chevron-right text-color"></i></span>
            <span class="visually-hidden">Next</span>
          </button>

      <!-- end carousal buttons (no div) -->
      <!-- end modal body -->
      </div>

      <div class="modal-body">
        <p><?php echo $description; ?></p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary bg-color" data-bs-target="#recipeModal" data-bs-toggle="modal" data-bs-dismiss="modal">Preview Desktop Site</button>
      </div>

    <!-- end modal (3 divs) -->
    </div>
  </div>
</div>
