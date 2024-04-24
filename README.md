## Auto Mailto
*Automatically inserted mailto links*

“Auto Mailto” is a Kirby plugin that automatically inserts a mailto link for each email address found in the specified text — especially useful for client-added content.

## Installation

First option is to drag the `auto-mailto` folder in your `site/plugins` folder.

The second option is to install this plugin via Composer:

```terminal
composer require simonlou/auto-mailto
```

## How to Use

Add a `->automailto()` or `->mailto()` to the chain, which will insert the text containing your email addresses.

For example:

```php
$page->text()->kt()->automailto()
```

or

```php
$page->text()->kt()->mailto()
```

## Credits

“Auto Mailto” is created by [Simon Lou](https://simonlou.com) ([@simonlou@typo.social](https://typo.social/@simonlou)).

## License

The “Auto Mailto” source code is released under the MIT License. Please view the LICENSE file for details.
