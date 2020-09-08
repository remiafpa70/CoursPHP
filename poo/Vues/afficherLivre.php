<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Resumé</th>
      </tr>
    </thead>
    <tbody>
      <?php
    foreach($affichage as $livre){
      echo "<tr>";
      echo "<td>" .$livre->getId() ."</td>";
      echo "<td>" .$livre->getTitre() ."</td>";
      echo "<td>" .$livre->getAuteur() ."</td>";
      echo "<td>" .$livre->getResume() ."</td>";
      echo "<td><img src='./Ressources/img/icon.png'></td>";
      // echo "<td><img src ='./Ressources/img/delete.png'></td>";
      echo "</tr>";
    }
    ?>
    </tbody>
  </table>