<?php
// close_bug.php <bug-id>
require_once "../docktrine.php";

$theBugId = $argv[1];

$bug = $entityManager->find("Bug", (int)$theBugId);
$bug->close();

$entityManager->flush();