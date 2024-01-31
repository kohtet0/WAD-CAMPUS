<?php

$content = file_get_contents("http://forex.cbm.gov.mm/api/latest");
print_r(json_decode($content)->rates[]);
