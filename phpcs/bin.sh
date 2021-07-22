#!/bin/bash

dos2unix  $(ls *.php) &> /dev/null # No display in cli

./vendor/bin/phpcs --report=code $(ls *.php) > ./phpcs/report.txt

php ./phpcs/layout.php > ./phpcs/index.html

rm ./phpcs/report.txt