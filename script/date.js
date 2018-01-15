	
var d = new Date();
var n = d.getHours();

var str = "";
//var n = 17;
if(n>=5 && n<12)
	str="早安";
else if(n>=12 && n<18)
	str="午安";
else if(n>=18 && n<22)
	str="傍晚好";
else if(n>=22 && n<24)
	str="晚安";
else if(n>=0 && n<5)
	str="太夜了!";
else
	str="無效的值!";

document.getElementById("greet").innerHTML = str;