//1.
var http = require('http');
var fs = require('fs');
var math = require('./mymathlib');

var server = http.createServer(function (req, resp) {
  resp.writeHead(200, {'Content-Type': 'text/html'});
  var AdditionResult = math.Add(10, 20);
  resp.write("Addition of two numbers is: " + AdditionResult);
  var SubtractionResult = math.Sub(10, 20);
  resp.write( "\n" + "Subtraction  of two numbers is: " + SubtractionResult);
  resp.end();
  
});
//5.
server.listen(5001);
 
console.log('Server Started listening on 5001');