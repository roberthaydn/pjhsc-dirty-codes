var xmlhttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){
	var xmlhttp; /*reference*/
	try{
		xmlhttp = new XMLHttpRequest();	
	}catch(e){
		logErr(e);
	}
	if(!xmlhttp){console.log('Error creating the object.');}		
	else{return xmlhttp;}
}
function process(){
	//convert to object.
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	xmlhttp.open("GET", "SignInServer.php?username="+username+"&&password="+password, true);
	xmlhttp.onreadystatechange = handleRequestStateChange;
	xmlhttp.send();
}
function handleRequestStateChange() {

	if(xmlhttp.status == 200){
		try{
			var serverMessage = xmlhttp.responseText;
			if(serverMessage){
				if(serverMessage == "err"){showIncorrectErrMessage(); }
				else{redirectMainPage(serverMessage);}
			}
		}catch(e){console.log('Error:'+ e.toString()); }
	}else{console.log('Status Error : Status is not OK.'); }
}




function showIncorrectErrMessage(){
	var errMessageHolder = document.getElementById("errorMessageHolder");
	errMessageHolder.innerHTML = "Sorry, your username is incorrect.";	
}
function redirectMainPage(message){
	var page = document.getElementById("main_page");
	page.innerHTML = message;
}