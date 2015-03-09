var express = require('express');
var http = require('http');
var path = require('path');

var app = express();

app.configure(function(){

	// Basic configuration
	app.set('port', 3000);
	app.use(express.bodyParser());
	app.use(express.methodOverride());
	app.use(app.router);

	// Static files
	app.use(express.static(path.join(__dirname, '..', 'frontend')));
});


// Server creation

var server = http.createServer(app);
server.on('connection', function(socket) {
	socket.setTimeout(1000 * 60 * 60); // 1h
});
server.listen(app.get('port'), function(){
	console.log('Running on port: ', app.get('port'));
});