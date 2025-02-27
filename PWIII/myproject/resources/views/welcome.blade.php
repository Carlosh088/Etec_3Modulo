<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
</head>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">My Food</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>O sanduíche perfeito, um verdadeiro clássico</h3>
      <p>Sanduíche com várias coisas dentro.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/steak.jpg" alt="Steak" style="width:100%">
      <h3>Deixe-me contar sobre este bife</h3>
      <p>Carne meio duvidosa.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/cherries.jpg" alt="Cherries" style="width:100%">
      <h3>Cerejas</h3>
      <p>Um monte de cerejas.</p>
      <p>Só isso mesmo.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Vinho com macarrão</h3>
      <p>Não faço ideia de qual vinho seja, mas o macarrão não parece bom.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
      <h3>Picolé</h3>
      <p>Não tem muito o que dizer.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/salmon.jpg" alt="Salmon" style="width:100%">
      <h3>Peixe com verduras</h3>
      <p>Peixe de qualidade duvidosa com verdura, tem coisa melhor.</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>Sanduíche 2</h3>
      <p>O mesmissímo sanduíche, só pra encher o cardápio</p>
    </div>
    <div class="w3-quarter">
      <img src="https://www.w3schools.com/w3images/croissant.jpg" alt="Croissant" style="width:100%">
      <h3>Prato da casa</h3>
      <p>Não faço a mais remota ideia dos ingredientes usados, preocupante.</p>
    </div>
  </div>

  <!-- Navegação, deixei comentado por enquanto -->
  <!--<div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about"> -->

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Me, The Food Man</h3><br>
    <img src="https://www.w3schools.com/w3images/chef.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4>
      <h6><i>With Passion For Real, Good Food</i></h6>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="https://www.w3schools.com/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="https://www.w3schools.com/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Viagem</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Brasil</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Comida</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sobremesa</span>
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
