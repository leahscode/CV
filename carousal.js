// For each modal, start the carousal when the modal is opened.

$('#shoppingModal').on('show.bs.modal', function (e) {
  $('#carouselShoppingCaptions').carousel(0)
})

$('#chocolateModal').on('show.bs.modal', function (e) {
  $('#carouselChocolateCaptions').carousel(0)
})

$('#recipeModal').on('show.bs.modal', function (e) {
  $('#carouselRecipeCaptions').carousel(0)
})

$('#mobileRecipeModal').on('show.bs.modal', function (e) {
  $('#carouselMobileRecipeCaptions').carousel(0)
})

$('#RGBModal').on('show.bs.modal', function (e) {
  $('#carouselRGBCaptions').carousel(0)
})

$('#NETModal').on('show.bs.modal', function (e) {
  $('#carouselNETCaptions').carousel(0)
})

$('#javaModal').on('show.bs.modal', function (e) {
  $('#carouselJavaCaptions').carousel(0)
})
  