<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to check if an object contains given property.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function hasKey(obj, key) {
    return obj != null && hasOwnProperty.call(obj, key);
  }
console.log(hasKey({red: "#FF0000", green: "#00FF00", white: "#FFFFFF"}, "green"));