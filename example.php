<?php
require_once('class.php');

$string = new stringGen(16, 'ALL');
echo $string->generate();//kX]1Hw({9uR@I=ch

$string = new stringGen(16, 'ALLNOSYMBOLS');
echo $string->generate();//ziQmDkkb8E3KpGVY

$string = new stringGen(16, 'NUMBERS');
echo $string->generate();//5628155816434050

$string = new stringGen(16, 'SYMBOLS');
echo $string->generate();//[%(+[%?{)%~-%_=}

$string = new stringGen(16, '', '01');
echo $string->generate();//1101101110000011

$string = new stringGen(22, '', 'ABCXYZ');
echo $string->generate();//XBXACAXAXZZXYCCAYZAAZB

$string = new stringGen(28, 'ALL');
echo $string->generate();//r4#n6uP][LWU{[|$QHRV1D7A|jpR

$string = new stringGen(6, 'UPPERCASE');
echo $string->generate();//HTDKCY
