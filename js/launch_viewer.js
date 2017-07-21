/**
 * 
 */
function brava1(element){
	var userName = document.getElementById("userName").value;
	var title = document.getElementById("docTitle").value;
	var locale = document.getElementById("locale").value;
	
	if(userName=="")
	{
		userName="dummyUser";
	}
	if(title=="")
	{
		title="dummyTitle";
	}
	if(locale=="")
	{
		locale="en";
	}
	
	var bv1Start = "http://10.96.85.181:8080/BravaView/start?url=";
	var temp = $(element).text();
	temp = encode(temp);
	var url = bv1Start+temp+"&title="+title+"&user="+userName+"&locale="+locale;
	openInNewTab(url)
	console.log("brava URL :: " + url);
}

function brava2(element){
	var userName = document.getElementById("userName").value;
	var title = document.getElementById("docTitle").value;
	var locale = document.getElementById("locale").value;
	if(userName=="")
	{
		userName="dummyUser";
	}
	if(title=="")
	{
		title="dummyTitle";
	}
	if(locale=="")
	{
		locale="en";
	}
	var bv1Start = "http://10.96.85.181:8080/BravaView/start?url=";
	var temp = $(element).text();
	temp = encode(temp);
	var url = bv1Start+temp+"&title="+title+"&user="+userName+"&locale="+locale;
	openInNewTab(url)
	console.log("brava URL :: " + url);
}

function wev16(element){
	var userName = document.getElementById("userName").value;
	var title = document.getElementById("docTitle").value;
	var locale = document.getElementById("locale").value;
	if(userName=="")
	{
		userName="dummyUser";
	}
	if(title=="")
	{
		title="dummyTitle";
	}
	if(locale=="")
	{
		locale="en";
	}
	var webStart = "http://10.96.85.177:8080/WebViewer/start?url=";
	var temp = $(element).text();
	temp = encode(temp);
	var url = webStart+temp+"&title="+title+"&user="+userName+"&locale="+locale;
	openInNewTab(url)
	console.log("brava URL :: " + url);
}

function encode(url) {
	return encodeURIComponent(url).replace(/'/g,"%27").replace(/"/g,"%22");	
}

function openInNewTab(url) {
	  var win = window.open(url, '_blank');
	  win.focus();
}

function launchCustom(){
	var insUrl = document.getElementById("insUrl").value;
	var docUrl = document.getElementById("docUrl").value;
	var userName = document.getElementById("userName").value;
	var title = document.getElementById("docTitle").value;
	var locale = document.getElementById("locale").value;
	if(userName=="")
	{
		userName="dummyUser";
	}
	if(title=="")
	{
		title="dummyTitle";
	}
	if(locale=="")
	{
		locale="en";
	}
	var url = insUrl+"/start?url="+encode(docUrl)+"&title="+title+"&user="+userName+"&locale="+locale;;
	console.log(url);
	openInNewTab(url);
}
