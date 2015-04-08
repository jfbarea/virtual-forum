/*Requires */

var express = require('express');
var path = require('path');
var http = require('http');
var multer = require('multer');



var app = express();
var done = false;

/*Configure the multer.*/

app.use(multer({
	dest: './uploads/',
	rename: function (fieldname, filename) {
		return filename+Date.now();
	},
	onFileUploadStart: function (file) {
		console.log(file.originalname + ' is starting ...');
	},
	onFileUploadComplete: function (file) {
		console.log(file.fieldname + ' uploaded to  ' + file.path);
		done=true;
	}
}));

app.configure(function(){

	// Basic configuration
	app.set('port', 3000);
	app.use(express.bodyParser());
	app.use(express.methodOverride());
	app.use(app.router);

	// Static files
	app.use(express.static(path.join(__dirname, '..', 'frontend')));
});


app.post('/api/uploadCV/', function (request, response) {
	console.log(request.files);
	response.send(204);
});

// Server creation

var server = http.createServer(app);
server.on('connection', function(socket) {
	socket.setTimeout(1000 * 60 * 60); // 1h
});
server.listen(app.get('port'), function(){
	console.log('Running on port: ', app.get('port'));
});
