/**
 * 
 */

function openGeneral(){
	var table = document.getElementById("generalTable");
	table.removeAttribute("style");
	
	var table2 = document.getElementById("specialTable");
	table2.setAttribute("style", "display:none");
	
	var help = document.getElementById("helpDiv");
	help.setAttribute("style", "display:none");
	
	/*var gbtn = document.getElementById("generalBtn");
	var sbtn = document.getElementById("specialBtn");
	
	sbtn.removeAttribute("class");
	sbtn.setAttribute("class","btn btn-primary");
	
	gbtn.removeAttribute("class");
	gbtn.setAttribute("class","btn btn-success");*/
}

function openSpecial(){
	
	var table2 = document.getElementById("generalTable");
	table2.setAttribute("style", "display:none");
	
	var table = document.getElementById("specialTable");
	table.removeAttribute("style");
	
	var help = document.getElementById("helpDiv");
	help.setAttribute("style", "display:none");
	
	/*var gbtn = document.getElementById("generalBtn");
	var sbtn = document.getElementById("specialBtn");
	
	gbtn.removeAttribute("class");
	gbtn.setAttribute("class","btn btn-primary");
	
	sbtn.removeAttribute("class");
	sbtn.setAttribute("class","btn btn-success");*/
	
	//btn-success
	//btn-primary
	
}

function openHelp(){
	var table = document.getElementById("specialTable");
	var table2 = document.getElementById("generalTable");
	
	table.setAttribute("style", "display:none");
	table2.setAttribute("style", "display:none");
	
	var help = document.getElementById("helpDiv");
	help.removeAttribute("style");
	
}

function mediaStyle(){
	if (window.matchMedia('(max-width: 767px)').matches) {
    	var divElement = document.getElementById("msghide");
    	divElement.removeAttribute("style");
    } else {
    	var divElement = document.getElementById("msghide");
    	divElement.setAttribute("style", "display:none");
    }

    var help = document.getElementById("helpDiv");
	help.setAttribute("style", "display:none");	
}

