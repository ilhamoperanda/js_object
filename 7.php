<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Subset of a string</title>
  </head>
  <body>
</body>
  </html>
JavaScript Code :

String.prototype.sub_String = function() 
{
  var subset = [];
  for (var m = 0; m < this.length; m++) 
  {
    for (var n = m+1; n<this.length+1; n++) 
    {
      subset.push(this.slice(m,n));
    }
  }
  return subset;
};

console.log("dog".sub_String());