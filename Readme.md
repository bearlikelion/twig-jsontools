# Twig Json Tools

A simple twig extension to provide json encode and decode filters and functions for Twig.

**Requirements:**

* [Twig](https://github.com/twigphp/Twig)

## Installation
```
"require": {
	"bearlikelion/twig-jsontools": "dev-master",
}
```

## Example
```PHP
$twig = new \Twig\Environment(new \Twig\Loader\FilesystemLoader('Views'));
$twig->addExtension(new Bearlikelion\TwigJsonTools\Extension());
```

```html
<html>
	<body>
		{{ json_decode(json.object) }}
	</body>
</html>
```
