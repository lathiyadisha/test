<?php
echo(round(7.5,0,PHP_ROUND_HALF_EVEN));
echo "\n";
// round to nearest odd value
echo(round(7.5,0,PHP_ROUND_HALF_ODD));
echo "\n";
// round towards zero
echo(round(7.5,0,PHP_ROUND_HALF_DOWN));
echo "\n";
// round away from zero
echo(round(7.5,0,PHP_ROUND_HALF_UP));
?>
