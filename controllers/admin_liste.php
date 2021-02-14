<?php declare(strict_types=1);

securite();

afficher('admin_liste', ['liens' => getLiens()]);
