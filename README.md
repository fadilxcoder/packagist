# Resources

- https://getcomposer.org/doc/articles/scripts.md#command-events  - Composer Command Events

```
"scripts": {
        "post-install-cmd": "execute a command here", # occurs after the install command has been executed with a lock file present.
        "post-update-cmd": "cghooks update", # occurs after the update command has been executed, or after the install command has been executed without a lock file present.
        ...
    },
```   

- https://packagist.org/packages/tracy/tracy - Debugger

- https://packagist.org/packages/fzaninotto/faker - Fake data generator

- https://packagist.org/packages/brainmaestro/composer-git-hooks - Git hooks in your composer config
- - https://git-scm.com/docs/githooks
- - Run `composer update` to update hooks if modify

- https://packagist.org/packages/dompdf/dompdf - DOM pdf

- https://packagist.org/packages/nategood/httpful - PHP HTTP Client

- https://packagist.org/packages/squizlabs/php_codesniffer - CodeSniffer
- - https://github.com/squizlabs/PHP_CodeSniffer/wiki/Reporting - Reporting
- - http://manpages.ubuntu.com/manpages/bionic/man1/phpcs.1.html - Manual
- - Use `dos2unix <file_name>` : Convert DOS file to UNIX format
- - Run `vendor/bin/phpcs <file_name>` and get errors
- - E.g `phpcs --report=code $(ls *.php) > file.txt`
 
# Set Up - docker version

- Clone docker branch (Dockerize the environment)
- GOTO `src`
- Clone master branch (Source Code)

# Notes

- `image-file.php` - never execute in browser, used as a template and rendered dynamically in `index.php`
- PHPCS
- - Exec in terminal `./phpcs/bin.sh`
- - Create `phpcs/report.txt` -> `phpcs/index.html` (HTML report)
- Git Hooks in `composer.json` on commit changes