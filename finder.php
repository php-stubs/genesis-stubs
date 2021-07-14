<?php

return \StubsGenerator\Finder::create()
    ->in('source/genesis/lib/functions')
    ->notPath('compat.php')
    ->notPath('deprecated.php')
    ->sortByName()
;
