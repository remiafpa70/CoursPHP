<?php

require 'AgentBanquier.php'; // On importe la classe Utilisateurs

$agentBanquier1 = new AgentBanquier('Martin','Jean','chef','Champs sur Marne'); // On crée un objet avec des paramètres

// afficher les données de l'utilisateur1
echo $agentBanquier1->getNom().'<br/>';
echo $agentBanquier1->getPrenom().'<br/>';
echo $agentBanquier1->getGrade().'<br/>';
echo $agentBanquier1->getLieuTravail().'<br/>';



?>