<?php
// Copia este archivo y ajusta tus datos. NO subas tus claves reales a GitHub.
define('DB_HOST','localhost'); define('DB_USER','root'); define('DB_PASS',''); define('DB_NAME','ajolomex');
define('STRIPE_SECRET', getenv('STRIPE_SECRET') ?: 'sk_test_PEGA_AQUI_TU_CLAVE');
define('BASE_URL', getenv('BASE_URL') ?: 'http://localhost/NEGO-ELEC-main'); // sin / final
define('ENVIO', 99.00);
