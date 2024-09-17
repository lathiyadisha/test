<?php
function testLocalScope() {
  $localVar = 20;
  echo $localVar;
}
testLocalScope(); 
echo $localVar;
?>