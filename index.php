<?php

print_r($_GET["hub_challenge"]);

$PAGE_ACCESS_TOKEN="EAAcwNAkzckUBAFjdOIcV9n9o5dHhfxrf3RP2FXFjaAODlkbohBUuDRZA0R7yG8W3QTFbWNSDcCu8MGiZCN98S1mYjFUOw34fEZA4ZAV6SIv2iMuL45PzGo9EYOlQa7j2kvTa5AgZBbKbewmZCOZCb4ZBZBD80SeBJTE0oQn0jv85kDAZDZD";
$VERIFY_TOKEN = "123456";

// print_r(file_get_contents("php://input"));

file_put_contents("prova3.txt", file_get_contents("php://input"));

?>
