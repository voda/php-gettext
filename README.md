This repository was only used as a mirror of the official repository at https://launchpad.net/php-gettext. If you want to install php-gettext use [composer](http://getcomposer.org) with the following composer.json:
```json
{
	"repositories": [
		{
			"type": "package",
			"package": {
				"name": "php-gettext/php-gettext",
				"version": "1.0.11",
				"dist": {
					"type": "tar",
					"url": "https://launchpad.net/php-gettext/trunk/1.0.11/+download/php-gettext-1.0.11.tar.gz"
				},
				"autoload": {
					"classmap": [
						"gettext.php",
						"streams.php"
					]
				}
			}
		}
	],
	"require": {
		"php-gettext/php-gettext" : "1.0.*"
	}
}
```

