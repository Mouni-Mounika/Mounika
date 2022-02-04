var http = require('http');
var fs = require('fs');
var mysql = require('mysql');
//2.
var con = mysql.createConnection({
  host: "localhost",    // ip address of server running mysql
  user: "root",    // user name to your mysql database
  password: "root", // corresponding password
  database: "dbMounika" // use the specified database
});
var server = http.createServer(function (req, resp) {
    if (req.url == "/") {
       con.connect(function(err) {
    if (err) throw err;
    con.query("SELECT * FROM item", function (err, result, fields) {
      if (err) throw err;
      console.log(result);
    });
  });
module.exports = con;
       
  }
});
//5.
server.listen(1999);
 
console.log('Server Started listening on 1999');