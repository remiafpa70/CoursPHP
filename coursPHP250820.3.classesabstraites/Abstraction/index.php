<?php

require 'Employe.php';
require 'AgentSecurite.php';

$agentsSecurite1 = new AgentSecurite('Boulanger','Martial', 2356);
echo $agentsSecurite1->getNom();