<?php
require_once __DIR__ . '/Opinion.php';

$op = new Opinion();
$op->addToIndex(__DIR__ . '/opinion/rt-polaritydata/rt-polarity.neg', 'neg');
$op->addToIndex(__DIR__ . '/opinion/rt-polaritydata/rt-polarity.pos', 'pos');

$string = "Avatar had a surprisingly decent plot, and genuinely incredible special effects";
echo "Classifying '$string' - " . $op->classify($string) . "\n";

$string = "Twilight was an atrocious movie, filled with stumbling, awful dialogue, and ridiculous story telling.";
echo "Classifying '$string' - " . $op->classify($string) . "\n";

$string = "Loving this wheater";
echo "Classifying '$string' - " . $op->classify($string) . "\n";
?>
