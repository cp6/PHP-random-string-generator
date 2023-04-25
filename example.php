<?php
require_once('stringGen.php');

$string = (new stringGen(16, 'SYMBOLS'))->generate();
echo $string;//[?+}!^/(+}

$string = (new stringGen(8, 'ALLNOSYMBOLS'))->generate();
echo $string;//d68eKRdz

$string = (new stringGen(16, 'NUMBERS'))->generate();
echo $string;//8374911345932147

$string = (new stringGen(16, '', '01'))->generate();
echo $string;//1101101110000011

$string = (new stringGen(22, '', 'ABCXYZ'))->generate();
echo $string;//XBXACAXAXZZXYCCAYZAAZB

$string = (new stringGen(28, 'ALL'))->generate();
echo $string;//LrZdGW*/hwZ8w]ixBEOCNXOPHX_S

$string = (new stringGen(6, 'UPPERCASE'))->generate();
echo $string;//HTDKCY
