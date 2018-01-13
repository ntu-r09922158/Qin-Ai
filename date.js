	
var d = new Date();
var n = d.getHours();

var str = "";
//var n = 17;
if(n>=5 && n<12)
	str="Good Morning";
else if(n>=12 && n<18)
	str="Good Afternoon";
else if(n>=18 && n<22)
	str="Good Evening";
else if(n>=22 && n<24)
	str="Good Night";
else if(n>=0 && n<5)
	str="It is too late!";
else
	str="Invalid time value!";

document.getElementById("greet").innerHTML = str;