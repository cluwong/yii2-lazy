Yii2 Lazy Extension
===================
This is Yii2 wrapper class for http://jquery.eisbehr.de/lazy/.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist cluwong/yii2-lazy "*"
```

or add

```
"cluwong/yii2-lazy": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php 
use cluwong\lazy\Lazy
Lazy::widget(); 
?>
<img class="lazy" data-src="/path/to/image.jpg" />
```

For more examples see http://jquery.eisbehr.de/lazy/#examples.
