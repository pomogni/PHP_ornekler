<?php


$takimlar = ['fenerbahçe', 'galatasaray', 'beşiktaş', 'trabzonspor'];

array_push($takimlar, 'başakşehir');

unset($takimlar[4]);
print_r($takimlar);
