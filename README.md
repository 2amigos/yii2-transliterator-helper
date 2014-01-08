TransliteratorHelper for Yii 2
==============================

TransliteratorHelper transliterates UTF-8 encoded text to US-ASCII. 

> For a Yii 1.* version, please check [this other repository](https://github.com/2amigos/transliteration-helper).

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "2amigos/yii2-transliterator-helper": "1.0.0"
```
or add

```json
"2amigos/yii2-transliterator-helper": "1.0.0"
```

to the require section of your application's `composer.json` file.

Usage
-----
Pass to the method `process()` the UTF-8 encoded string you wish to transliterate:

```
use dosamigos\yii2\helpers\TransliteratorHelper;

// will echo AAAAAAAECEEEEIIIIDNOOOOOUUUUYssaaaaaaaeceeeeiiiidnooooouuuuyy
TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en'));
```


> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)
<i>web development has never been so fun</i>
[www.2amigos.us](http://www.2amigos.us)


