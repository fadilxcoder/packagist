#!/bin/bash
dos2unix  $(ls *.php)
./vendor/bin/phpcs --report=code $(ls *.php) > ./phpcs/report.txt
php ./phpcs/layout.php > ./phpcs/index.html
echo 'phpcs reporting...'