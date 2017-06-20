TransliteratorHelper for Yii 2
==============================

[![Latest Stable Version](https://poser.pugx.org/2amigos/yii2-transliterator-helper/v/stable.svg)](https://packagist.org/packages/2amigos/yii2-transliterator-helper) [![Total Downloads](https://poser.pugx.org/2amigos/yii2-transliterator-helper/downloads.svg)](https://packagist.org/packages/2amigos/yii2-transliterator-helper) [![Latest Unstable Version](https://poser.pugx.org/2amigos/yii2-transliterator-helper/v/unstable.svg)](https://packagist.org/packages/2amigos/yii2-transliterator-helper) [![License](https://poser.pugx.org/2amigos/yii2-transliterator-helper/license.svg)](https://packagist.org/packages/2amigos/yii2-transliterator-helper)

TransliteratorHelper transliterates UTF-8 encoded text to US-ASCII. 

> For a Yii 1.* version, please check [this other repository](https://github.com/2amigos/transliteration-helper).

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "2amigos/yii2-transliterator-helper:*"
```
or add

```json
"2amigos/yii2-transliterator-helper": "*"
```

to the require section of your application's `composer.json` file.

Usage
-----
Pass to the method `process()` the UTF-8 encoded string you wish to transliterate:

```
use dosamigos\transliterator\TransliteratorHelper;

// will echo AAAAAAAECEEEEIIIIDNOOOOOUUUUYssaaaaaaaeceeeeiiiidnooooouuuuyy
TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en');
```


> [![2amigOS!](http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png)](http://www.2amigos.us)   
<i>Web development has never been so fun!</i>
[www.2amigos.us](http://www.2amigos.us)


