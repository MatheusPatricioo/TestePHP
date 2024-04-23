<?php
$lista1 = [1, 2, 3, 4, 5, 6];
$lista2 = [8, 9, 10];
$lista3 = [...$lista1, 'alguma coisa', ...$lista2];
echo implode(", ", $lista3);
