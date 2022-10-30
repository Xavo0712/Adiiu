<div id="mySidenav" class="sidenav">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="/Adiiu/views/index.php">Home page</a>
  <a href="/Adiiu/views/dogsBreeds.php">Dogs by Breed</a>
  <a href="/Adiiu/views/dogsWeight.php">Dogs by Weight</a>
  <a href="/Adiiu/views/dogsHeight.php">Dogs by Height</a>
  <a href="/Adiiu/views/compare.php">Compare Dog Breeds</a>
  <a href="/Adiiu/views/general.php">General Dog Breeds Data</a>
</div>

<script>
function openNav() {
  $("#mySidenav").css("width", "250px");
  $(".mainBody").css("margin-left","250px");
  $("#navOpener").removeClass("visible");
  $("#navOpener").addClass("hidden");
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  $("#mySidenav").css("width", "0px");
  $(".mainBody").css("margin-left","0px");
  $("#navOpener").removeClass("hidden");
  $("#navOpener").addClass("visible");
}
</script>