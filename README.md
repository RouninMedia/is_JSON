# is_JSON
A simple PHP function which detects if a given string is valid JSON. An Ashiva component.

## The `is_JSON` Function

```
function is_JSON($string) {

  $string_Is_JSON = (is_null(json_decode($string, TRUE))) ? FALSE : TRUE;

  return $string_Is_JSON;
}
```
