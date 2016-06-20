<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Notez que $i est préservé entre chaque production de valeur.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}
?>