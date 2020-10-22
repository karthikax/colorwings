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
function load_colorwings() {
	require_once dirname( __FILE__ ) . '/class-colorwings.php';
}

add_action( 'after_setup_theme', 'load_colorwings' );
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
		'color_wings',
		array( 'section' => 'extra_styles' )
	)
);
```
