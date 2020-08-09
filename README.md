# Contact Us Form Package

[![Issues](https://img.shields.io/github/issues/HuntWeb/get-in-touch.svg?style=flat-square)](https://img.shields.io/github/issues/HuntWeb/get-in-touch)
[![Stars](https://img.shields.io/github/stars/HuntWeb/get-in-touch.svg?style=flat-square)](https://github.com/HuntWeb/get-in-touch/stargazers)

## This will send email to admin and save contact query in database

config>app.php ==> HuntWeb\contact\ContactServiceProvider::class,

composer.json ==>  
 "autoload-dev": {
"psr-4": {
"Tests\\": "tests/",
"HuntWeb\\contact\\": "package/contact/src/"
}
},

## =========================================================================
