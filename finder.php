<?php

return \StubsGenerator\Finder::create()
    ->in('source/genesis/lib/functions')
    ->append(\StubsGenerator\Finder::create()
            ->in(['source/genesis/lib'])
            ->files()
            ->depth('< 1')
            ->path('framework.php')
      )
    ->notPath('compat.php')
    ->notPath('deprecated.php')
    ->sortByName()
;
