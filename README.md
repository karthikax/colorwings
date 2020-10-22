# Color Wings

Color Wings is a WordPress visual style editor.

## Requirements

- PHP 5.4 or above
- WordPress 5.0 or above

## Coding Standards

PHP CS: WordPress

## Usage

Require Colorwings class
```php
require_once dirname( __FILE__ ) . '/class-colorwings.php';
```

Register control
```php
$wp_customize->register_control_type( 'ColorWings\Control_ColorWings' );
```

Add control
```php
$wp_customize->add_control(
	new Control_ColorWings(
		$wp_customize,
		'color_wings'
	)
);
```

## Contributing

The main purpose of this repository is to continue evolving Colorwings, making it faster and easier to use. Development of Colorwings happens in the open on GitHub, and I am grateful to the community for contributing bugfixes and improvements.

### License

Colorwings is [MIT licensed](./LICENSE).
