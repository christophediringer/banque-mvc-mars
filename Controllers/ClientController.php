<?php
require_once 'Models/Client.php';

$clients = fetchClients();

include 'views/Clients/index.php';


