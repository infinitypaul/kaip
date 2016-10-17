# Uploadcare for Laravel

This is a simple Laravel service provider for Uploadcare's [official PHP library.](https://github.com/uploadcare/uploadcare-php)
It is a fork from altitude/laravel-uploadcare and the pull request from dimaninc to make it compatible with Laravel 5. 

My added value is to make it a onclick install again. All copyrights are with the mentioned owners. 

## Installation

First, add this to your `composer.json` file

```js
"require": {
    "laravelcollective/html": "5.1.*",
    "inwave/laravel-uploadcare": "~1.3"
}
```

Then, create `config/uploadcare.php` with the following

```php
<?php

return array(
    'public_key'  => 'YOUR_UPLOADCARE_PUBLIC_KEY_HERE',
    'private_key' => 'YOUR_UPLOADCARE_PRIVATE_KEY_HERE',
);
```

Best practice would be to put the keys in your .ENV file.

Finally, add the service provider and alias in your `config/app.php`

```php
'providers' => array(
    ...

    Illuminate\Html\HtmlServiceProvider::class,
    Inwave\LaravelUploadcare\LaravelUploadcareServiceProvider::class,
);

'aliases' => array(
    ...

    'Form' => Illuminate\Html\FormFacade::class,
    'HTML' => Illuminate\Html\HtmlFacade::class,
    'Uploadcare' => Inwave\LaravelUploadcare\Facades\Uploadcare::class,
);
```

And you should be good to go.

## Example

This Service extends [Uploadcare's API class](https://github.com/uploadcare/uploadcare-php/blob/master/src/Uploadcare/Api.php) so you can use any of its methods.

It also provides the form macro `Form::uploadcare($field_name, $value = null, $options = array())`.

**app/Http/routes.php**

```php

Route::get('/demo', function(){
    return View::make('demo/demo');
});

Route::post('/demo', function(){
    echo Uploadcare::getFile(Input::get('image'))->getUrl();
});

```

**resources/views/demo/demo.blade.php**

```php
<html>
<head>
    <title>Uploadcare Demo</title>
</head>
<body>
    <form method="POST" action="/demo">
        {!! Form::uploadcare('image', null, array('data-crop' => '3:4')) !!}
        <input type="submit">
    </form>
    {!! Uploadcare::scriptTag() !!}
</body>
</html>
```

For more information, please check the [offical documentation](https://github.com/uploadcare/uploadcare-php)

## License

[MIT license](http://opensource.org/licenses/MIT)
