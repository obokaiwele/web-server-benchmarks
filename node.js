// Reference: https://gist.github.com/nkt/e49289321c744155484c
var http = require("http");

var data = {
  code: "ok",
  error: false,
  payload: "Hello World",
};

var app = function (req, res) {
  res.writeHead(200, {
    "Content-Type": "application/json",
  });
  res.end(JSON.stringify(data));
};

var server = http.createServer(app);

server.listen(1337, function () {
  console.log("Server running at http://127.0.0.1:1337");
});
