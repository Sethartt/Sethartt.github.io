function readFile() {


var txtFile = "https://www.dropbox.com/s/4619bvmiajc6nws/test.txt.txt?dl=0"
var file = new File(["test"] ,txtFile);

file.open("r"); // open file with read access
var str = "";
while (!file.eof) {
	// read each line of text
	str += file.readln() + "\n";
}
file.close();
alert(str);
}

window.onload = function() {
readFile();

};
