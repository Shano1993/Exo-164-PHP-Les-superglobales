<?php

/**
 * A l'aide de la documentation officielle de PHP.
 * 1. Retrouvez la page traitant des superglobales pour $_SERVER
 * 2. Récupérez un maximum de valeurs de ce tableau et affichez les à l'aide d'un simple echo ( il n'est pas interdit d'être intelligent, c'est un tableau associatif... )
 * 3. Uploadez ce projet sur votre serveur et testez !
 */
// TODO Votre code ici

echo $_SERVER['SERVER_NAME'] . "<br>";

echo $_SERVER['DOCUMENT_ROOT'] . "<br>";

echo $_SERVER['PHP_SELF'] . "<br>";

echo $_SERVER['REMOTE_ADDR'] . "<br>";

echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

echo $_SERVER['HTTP_REFERER'] . "<br>";