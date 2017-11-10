<?php
$total = 0;

isset($_GET["author"]) && $_GET["author"] == "q1r2" ? $total += 1 : $total = $total;
isset($_GET["kids"]) && $_GET["kids"] == "5" ? $total += 2 : $total = $total;
isset($_GET["father"]) && $_GET["father"] == "q4r2" ? $total += 1 : $total = $total;
isset($_GET["winter"]) && $_GET["winter"] == "q5r3" ? $total += 1 : $total = $total;
isset($_GET["wolf"]) && $_GET["wolf"] == "q6r4" ? $total += 2 : $total = $total;
isset($_GET["actress"]) && strtolower($_GET["actress"]) == "sophie turner" ? $total += 3 : $total = $total;
isset($_GET["alias"]) && $_GET["alias"] == "q8r2" ? $total += 1 : $total = $total;
isset($_GET["bolton"]) && $_GET["bolton"] == "q9r1" ? $total += 1 : $total = $total;
isset($_GET["valar"]) && $_GET["valar"] == "q10r1" ? $total += 1 : $total = $total;
isset($_GET["slogan"]) && $_GET["slogan"] == "q12r3" ? $total += 1 : $total = $total;


if (isset($_GET["drakeA"]) && isset($_GET["drakeD"]) && isset($_GET["drakeE"]) && !isset($_GET["drakeB"]) && !isset($_GET["drakeC"])) {
  $total += 1;
} else {
  $total = $total;
};

if (isset($_GET["countryA"]) && isset($_GET["countryB"]) && isset($_GET["countryD"]) && isset($_GET["countryF"]) && isset($_GET["countryG"]) && !isset($_GET["countryC"]) && !isset($_GET["countryE"])) {
  $total += 3;
} else {
  $total = $total;
};

if (isset($_GET["linkB"]) && isset($_GET["linkD"]) && !isset($_GET["linkA"]) && !isset($_GET["linkC"])) {
  $total += 2;
} else {
  $total = $total;
};

echo "<h1>Vous avez obtenu une note de " . $total . " sur 20 </h1><br>";

if ($total <= 3) {
  echo "<h2> Shame on you </h2><br><br>";
  echo '<img src="images/shame.gif">';
}elseif ($total <= 7) {
  echo "<h2> You know nothing looser </h2><br><br>";
  echo '<img src="images/nothing.gif">';
}elseif ($total <= 10) {
  echo "<h2> Hmmmm </h2><br><br>";
  echo '<img src="images/wtf.gif">';
}elseif ($total <= 14) {
  echo "<h2> Hold on </h2><br><br>";
  echo '<img src="images/hodor.gif">';
}elseif ($total <= 17) {
  echo "<h2> Nice one </h2><br><br>";
  echo '<img src="images/nice.gif">';
}else {
  echo "<h2> Drogon : Dracarys </h2><br><br>";
  echo '<img src="images/drogon.gif">';
};
