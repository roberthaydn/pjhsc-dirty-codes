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
	var  item_name = document.getElementById('item_name').value;
	xmlhttp.open("GET", "AddInventoryServer.php?item_name="+item_name, true);
	xmlhttp.onreadystatechange = handleRequestStateChange;
	xmlhttp.send();
}
function handleRequestStateChange() {
	var OK_STAT = 200;
	if(xmlhttp.status == OK_STAT){
		try{
			var serverMessage = xmlhttp.responseText;
			if(serverMessage){
				showAddingMessage(serverMessage);
			}
		}catch(e){console.log('Error:'+ e.toString()); }
	}else{console.log('Status Error : Status is not OK.'); }
}

function showAddingMessage(message){
	var addingMessageHolder = document.getElementById("addingMessageHolder");
	addingMessageHolder.innerHTML = message;
}