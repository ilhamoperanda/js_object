<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JavaScript function to display all methods in a object.</title>
</head>
<body>

</body>
</html>
JavaScript Code :

function all_properties(obj) 
{
 return Object.getOwnPropertyNames(obj);
}

console.log(all_properties(Math));

console.log(all_properties(Array));