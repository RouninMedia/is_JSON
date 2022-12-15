# is_JSON
A simple pair of PHP & JS functions which detect if a given string is valid JSON. An Ashiva component.

## PHP `is_JSON` Function

```
function is_JSON($string) {

  $string_Is_JSON = (is_null(json_decode($string, TRUE))) ? FALSE : TRUE;

  return $string_Is_JSON;
}
```

______

## JS `isJSON` Function

```
const isJSON = (string) => {

  try {
    JSON.parse(str);
  }
  
  catch (err) {
    return false;
  }
  
  return true;
}
```
