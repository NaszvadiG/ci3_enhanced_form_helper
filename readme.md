# Enhanced form helper for Codeigniter 3

A little more advanced. I will add more features to it when I have time. At the moment the following functions are included.

  - form_e_dropdown



### Installation

Copy enhanced_form_helper.php to your helpers directory and load it in your controller or autoload it.
```php
$this->load->helper('enhanced_form_helper');
```

### Parameters
```php
@param array $options (accepts arrays, associative arrays and arrays that holds objects
@param string or bool $vfield (name of the value field, see examples below) // use false if using regular arrays
@param string or bool $nfield (name of the name/display field, see examples below) // use false if using regular arrays
@param string $name (name of the select)
@param string, array or bool $selected (accept string value for single select and an array with values if using multiple attribute) // use false to dsiable
@param string or bool id (id of select) // use false to disable
@param string or bool class (class of select) // use false to disable
@param bool multiple (if the select should be a multiple select)
@param bool required (if the select is required)
```

### Examples

Empty select and empty select with multiple
```php
echo form_e_dropdown("", false, false, "group", "2", "group_select", "form-control select2", false, false);
echo form_e_dropdown("", false, false, "group", "2", "group_select", "form-control select2", true, false);
```

Array with selected value/s
```php
echo form_e_dropdown(array('red', 'green', 'blue'), false, false, "colors", "red", "color_select", "form-control select2", false, false);

echo form_e_dropdown(array('red', 'green', 'blue'), false, false, "colors", array('red', 'blue'), "color_select", "form-control select2", true, false);
```