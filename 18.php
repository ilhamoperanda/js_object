<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check whether a specified value is a DOM element</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function is_dom_element(obj) {
    return !!(obj && obj.nodeType === 1);
  }
console.log(is_dom_element(jQuery('body')[0]));