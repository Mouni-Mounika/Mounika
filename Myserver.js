//1.
var http = require('http');
var fs = require('fs');
//2.
var server = http.createServer(function (req, resp) {
    if (req.url === "/item") {
        fs.readFile("ReadTableData.js", function (error, pgResp) {
            if (error) {
                resp.writeHead(404);
                resp.write('Contents you are looking are Not Found');
            } else {
                resp.writeHead(200, { 'Content-Type': 'text/html' });
                resp.write(pgResp);
            }
             
            resp.end();
        });
    } else {
        //4.
        resp.writeHead(200, { 'Content-Type': 'text/html' });
        resp.write('<h1>TableData</h1><br /><br />To View item table data please enter item: ' + req.url);
        resp.end();
    }
});
//5.
server.listen(1947);
 
console.log('Server Started listening on 1947');