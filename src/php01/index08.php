<?php
$people = [
    ['太郎',25,'男性'],
    ['jiro',20,'men'],
    ['hanako',16,'woman']
];
foreach($people as $person){
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}