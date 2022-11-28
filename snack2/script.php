<?php

if (strlen($name) >= 3 && is_numeric($age) && str_contains($mail, "@") && str_contains($mail, ".")) {
    echo "Accesso Riuscito";
} else {
    echo "Accesso Negato";
}
