<?php
include_once 'PTHE.class.php';

$PTHE = new PTHE(6);

echo "<pre>";
print_r($PTHE->show_flop());
echo "</pre>";

echo "<pre>";
print_r($PTHE->show_turn());
echo "</pre>";

echo "<pre>";
print_r($PTHE->show_river());
echo "</pre>";
#> Retrieves the hands generated for players.
echo "<pre>";
print_r($PTHE->show_players_hands());
echo "</pre>";
#> Retrieve the points awarded to players.
echo "<pre>";
print_r($PTHE->show_players_points());
echo "<pre>";
#> Clean all.

$PTHE->free_resources();
?>