function generateMathJax() {
	var editor = ace.edit(document.getElementById("aceEditor"));
	var code = editor.getSession().getValue();
	console.log(code);
	var mathjaxtext = document.getElementById("mathjax");
	mathjaxtext.innerHTML = "$$" + code + "$$";
}

document.getElementById("generateTextInput").onclick = doFunction;

function doFunction() {
	console.log("HELLO");
	var math = MathJax.Hub.getAllJax("mathDisplay")[0];
	var text = document.getElementById("textInputText").value;
	MathJax.Hub.Queue(["Text",math,text]);
}