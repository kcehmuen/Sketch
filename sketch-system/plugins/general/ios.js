window.addEvent("domready",function(){
	try{
		if (navigator.userAgent.match(/iPad/i)){
			$(document).getElement('meta[name="viewport"]').set("content",'width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1');
		}else{
			$(document).getElement('meta[name="viewport"]').set("content","width=device-width,initial-scale=1");	
		}
	}catch(e){}
});