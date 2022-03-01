# A set of useful Laravel macros

![Version](https://img.shields.io/packagist/v/lazerg/laravel-macros.svg?style=plastic)
![Downloads count](https://img.shields.io/packagist/dm/lazerg/laravel-macros?style=plastic)
![Repository count](https://img.shields.io/github/repo-size/lazerg/laravel-macros?style=plastic)
![Last commit](https://img.shields.io/github/last-commit/lazerg/laravel-macros?style=plastic)
![Stars count](https://img.shields.io/packagist/stars/lazerg/laravel-macros?style=plastic)

This repository contains some useful macros.

### Installation

```bash
composer require lazerg/laravel-macros
```

The package will automatically register itself.

It is advised to be used with [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper), which generates helper files for your IDE, so it'll be able to highlight and understand some Laravel-specific syntax.
This package provides an additional IDE helper file for Laravel macros with the syntax you are already used to in Laravel IDE Helper.

### Additional documentation coming soon...
### Macros

- `Arr::`
  - [`renameKeys`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/Arr/RenameKeys.php)


- `File::`
  - [`fromBase64`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/File/FromBase64.php)
  - [`toBase64`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/File/ToBase64.php)
  - [`generateName`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/File/GenerateName.php)


- `Request::`
  - [`isEquals`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/Request/IsEquals.php)
  - [`whenEquals`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/Request/WhenEquals.php)


- `Str::`
  - [`bind`](https://github.com/lazerg/laravel-macros/blob/main/src/Macros/Str/Bind.php)
