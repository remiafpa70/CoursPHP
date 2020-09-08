<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        </tr>
    </thead>
    <tbody>
      <?php
    foreach($affichage as $conducteur){
      echo "<tr>";
      echo "<td>" .$conducteur->getId() ."</td>";
      echo "<td>" .$conducteur->getNom() ."</td>";
      echo "<td>" .$conducteur->getPrenom() ."</td>";
      echo "<td><img src='./Ressources/img/icon.png'></td>";
      // echo "<td><img src ='./Ressources/img/delete.png'></td>";
      echo "</tr>";
    }
    ?>
    </tbody>
  </table>