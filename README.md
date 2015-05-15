# TransliteratorHelper for Yii 2

[![Latest Version](https://img.shields.io/github/tag/2amigos/yii2-transliterator-helper.svg?style=flat-square&label=release)](https://github.com/2amigos/yii2-transliterator-helper/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/2amigos/yii2-transliterator-helper/master.svg?style=flat-square)](https://travis-ci.org/2amigos/yii2-transliterator-helper)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/2amigos/yii2-transliterator-helper.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-transliterator-helper/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/2amigos/yii2-transliterator-helper.svg?style=flat-square)](https://scrutinizer-ci.com/g/2amigos/yii2-transliterator-helper)
[![Total Downloads](https://img.shields.io/packagist/dt/2amigos/yii2-transliterator-helper.svg?style=flat-square)](https://packagist.org/packages/2amigos/yii2-transliterator-helper)

TransliteratorHelper transliterates UTF-8 encoded text to US-ASCII.

> For a Yii 1.* version, please check [this other repository](https://github.com/2amigos/transliteration-helper).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require 2amigos/yii2-transliterator-helper:~1.0
```

or add

```
"2amigos/yii2-transliterator-helper": "~1.0"
```

to the `require` section of your `composer.json` file.

## Usage

Pass to the method `process()` the UTF-8 encoded string you wish to transliterate:

```
use dosamigos\transliterator\TransliteratorHelper;

// will echo AAAAAAAECEEEEIIIIDNOOOOOUUUUYssaaaaaaaeceeeeiiiidnooooouuuuyy
TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en'));
```

## Testing

```bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Antonio Ramirez](https://github.com/tonydspaniard)
- [Alexander Kochetov](https://github.com/creocoder)
- [All Contributors](https://github.com/2amigos/yii2-transliterator-helper/graphs/contributors)

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.

<blockquote>
    <a href="http://www.2amigos.us"><img src="http://www.gravatar.com/avatar/55363394d72945ff7ed312556ec041e0.png"></a><br>
    <i>web development has never been so fun</i><br>
    <a href="http://www.2amigos.us">www.2amigos.us</a>
</blockquote>
