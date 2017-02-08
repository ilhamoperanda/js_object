<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Delete a property from an object</title>
</head>
<body>
</body>
</html>
JavaScript Code :

var student =  { 
  name : "David Rayy", 
  sclass : "VI", 
  rollno : 12  };
console.log(student);
delete student.rollno;
console.log(student);