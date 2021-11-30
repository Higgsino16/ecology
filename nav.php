<!--
<nav id="wrap" class="nav">
      <ul class="navbar">
        <li>
          <a href="#">Acceuil</a>
        </li>
        <li>
          <a href="#">Pollution</a>
          <ul>
            <li><a href="#">Plastique</a></li>
            <li><a href="#">Pollution athmosphérique</a></li>
            <li><a href="#">Pollution des sols</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Réchauffement climatique</a>
          <ul>
            <li><a href="#" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto molestiae perferendis tempora ducimus esse ullam nemo illo laudantium officiis exercitationem accusantium quaerat quos expedita delectus commodi quasi illum, non veritatis?</a></li>
            <li><a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos sapiente vitae eaque in repellat neque repellendus esse inventore natus fuga. Iure dignissimos corporis aliquam autem, necessitatibus unde veniam voluptas voluptate.</a></li>
            <li><a href="#">JavaScript de Base</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Outils</a>
          <ul>
            <li><a href="#">Images géométriques</a></li>
            <li><a href="#">Pipette de couleur</a></li>
            <li><a href="#">Générateur de code</a></li>
            <li><a href="#">Éditeur HTML</a></li>
            <li>
              <a href="#">Base 64</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Snnipets</a>
          <ul>
            <li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">Angular</a></li>
            <li>
              <a href="#">Java</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">String Functions</a>
          <ul>
            <li><a href="#">Inverse de chaîne</a></li>
            <li><a href="#">Encodeur d'URL</a></li>
            <li><a href="#">Décapant des lignes vides</a></li>
            <li><a href="#">Compte des mots de chaîne</a></li>
          </ul>
        </li>
      </ul>
    
  </nav>
-->


<nav id="wrap" class="nav">
        <ul class="navbar">
          <li>
            <a href="<?php echo $dir ?>index.html" id="link-home">Nous rêvons d'un monde plus vert</a>
          </li>
          <li>
            <a href="<?php echo $dir ?>Dossiers/pollution">Pollution</a>
            <ul>
              <li><a href="<?php echo $dir ?>Dossiers/pollution/plastique.php">Plastique</a></li>
              <li><a href="<?php echo $dir ?>Dossiers/pollution/athmosphere.php">Pollution athmosphérique</a></li>
              <li><a href="<?php echo $dir ?>Dossiers/pollution/sols.php">Pollution des sols</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo $dir ?>rechauffement/">Réchauffement climatique</a>
            <ul>
              <li><a href="<?php echo $dir ?>Dossiers/rechauffement/glaces.php" >Fonte des Glaces</a></li>
              <li><a href="<?php echo $dir ?>Dossiers/rechauffement/inondations.php">Inondation</a></li>
              <li style="display: none;"><a href="#">#</a></li>
            </ul>
          </li>
        </ul>
    
    </nav>
