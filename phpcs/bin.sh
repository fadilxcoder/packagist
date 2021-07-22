#!/bin/bash
./vendor/bin/phpcs --report=code $(ls *.php) > ./phpcs/report.txt
php ./phpcs/layout.php > ./phpcs/index.html