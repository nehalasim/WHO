// JavaScript Document
/*
function run() {
  var birth = new Date(document.getElementById("cdob").value);
  var curr  = new Date();
  var diff = curr.getTime() - birth.getTime();
   document.getElementById("age").value = Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
}
*/





function MesTime1st(){
		function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	var d= new Date();
	
	var hh = d.getHours();
    var mm = d.getMinutes();
	var ss = d.getSeconds();
	document.getElementById('Q33a').value = leadingZero(hh)+":"+leadingZero(mm);
	
	}
	
	
function MesTime2nd(){
		function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	var d= new Date();
	
	var hh = d.getHours();
    var mm = d.getMinutes();
	var ss = d.getSeconds();
	document.getElementById('Q33b').value = leadingZero(hh)+":"+leadingZero(mm);
	
	}
	
	
	
	
	
	
function MesEndTime1st(){
		function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	var d= new Date();
	
	var hh = d.getHours();
    var mm = d.getMinutes();
	var ss = d.getSeconds();
	document.getElementById('endTime1st').value = leadingZero(hh)+":"+leadingZero(mm);
	
	}
	
	
function MesEndTime2nd(){
		function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	var d= new Date();
	
	var hh = d.getHours();
    var mm = d.getMinutes();
	var ss = d.getSeconds();
	document.getElementById('endTime2nd').value = leadingZero(hh)+":"+leadingZero(mm);
	
	}
	
		
		
		
		
function NotDone(){
	var Q341a = document.getElementById('Q341a').value;
	var Q341b = document.getElementById('Q341b').value;
	var Q341c = document.getElementById('Q341c').value;
	
	var Q342a = document.getElementById('Q342a').value;
	var Q342b = document.getElementById('Q342b').value;
	var Q342c = document.getElementById('Q342c').value;
	
	var Q343a = document.getElementById('Q343a').value;
	var Q343b = document.getElementById('Q343b').value;
	var Q343c = document.getElementById('Q343c').value;
	
	var Q351a = document.getElementById('Q351a').value;
	var Q351b = document.getElementById('Q351b').value;
	var Q351c = document.getElementById('Q351c').value;
	
	var Q352a = document.getElementById('Q352a').value;
	var Q352b = document.getElementById('Q352b').value;
	var Q352c = document.getElementById('Q352c').value;
	
	var Q353a = document.getElementById('Q353a').value;
	var Q353b = document.getElementById('Q353b').value;
	var Q353c = document.getElementById('Q353c').value;
	
	var Q361a = document.getElementById('Q361a').value;
	var Q361b = document.getElementById('Q361b').value;
	var Q361c = document.getElementById('Q361c').value;
	
	var Q362a = document.getElementById('Q362a').value;
	var Q362b = document.getElementById('Q362b').value;
	var Q362c = document.getElementById('Q362c').value;
	
	var Q363a = document.getElementById('Q363a').value;
	var Q363b = document.getElementById('Q363b').value;
	var Q363c = document.getElementById('Q363c').value;
	
	var Q371a = document.getElementById('Q371a').value;
	var Q371b = document.getElementById('Q371b').value;
	var Q371c = document.getElementById('Q371c').value;
	
	var Q372a = document.getElementById('Q372a').value;
	var Q372b = document.getElementById('Q372b').value;
	var Q372c = document.getElementById('Q372c').value;
	
	var Q373a = document.getElementById('Q373a').value;
	var Q373b = document.getElementById('Q373b').value;
	var Q373c = document.getElementById('Q373c').value;
	
	var Q381a = document.getElementById('Q381a').value;
	var Q381b = document.getElementById('Q381b').value;
	var Q381c = document.getElementById('Q381c').value;
	
	var Q382a = document.getElementById('Q382a').value;
	var Q382b = document.getElementById('Q382b').value;
	var Q382c = document.getElementById('Q382c').value;
	
	var Q383a = document.getElementById('Q383a').value;
	var Q383b = document.getElementById('Q383b').value;
	var Q383c = document.getElementById('Q383c').value;
	
	if(Q341a=="99.99"){
		document.getElementById('NDQ341a').value = "Q341a";
		}
	if(Q341b=="99.99"){
		document.getElementById('NDQ341b').value = "Q341b";
		}
	if(Q342a=="99.99"){
		document.getElementById('NDQ342a').value = "Q342a";
		}
	if(Q342b=="99.99"){
		document.getElementById('NDQ342b').value = "Q342b";
		}
	if(Q343a=="99.99"){
		document.getElementById('NDQ343a').value = "Q343a";
		}
	if(Q343b=="99.99"){
		document.getElementById('NDQ343b').value = "Q343b";
		}
	
	if(Q351a=="99.99"){
		document.getElementById('NDQ351a').value = "Q351a";
		}
	if(Q351b=="99.99"){
		document.getElementById('NDQ351b').value = "Q351b";
		}
	if(Q352a=="99.99"){
		document.getElementById('NDQ352a').value = "Q352a";
		}
	if(Q352b=="99.99"){
		document.getElementById('NDQ352b').value = "Q352b";
		}
	if(Q353a=="99.99"){
		document.getElementById('NDQ353a').value = "Q353a";
		}
	if(Q353b=="99.99"){
		document.getElementById('NDQ353b').value = "Q353b";
		}
	
	
	if(Q361a=="99.9"){
		document.getElementById('NDQ361a').value = "Q361a";
		}
	if(Q361b=="99.9"){
		document.getElementById('NDQ361b').value = "Q361b";
		}
	if(Q362a=="99.9"){
		document.getElementById('NDQ362a').value = "Q362a";
		}
	if(Q362b=="99.9"){
		document.getElementById('NDQ362b').value = "Q362b";
		}
	if(Q363a=="99.9"){
		document.getElementById('NDQ363a').value = "Q363a";
		}
	if(Q363b=="99.9"){
		document.getElementById('NDQ363b').value = "Q363b";
		}
	
	if(Q371a=="99.9"){
		document.getElementById('NDQ371a').value = "Q371a";
		}
	if(Q371b=="99.9"){
		document.getElementById('NDQ371b').value = "Q371b";
		}
	if(Q372a=="99.9"){
		document.getElementById('NDQ372a').value = "Q372a";
		}
	if(Q372b=="99.9"){
		document.getElementById('NDQ372b').value = "Q372b";
		}
	if(Q373a=="99.9"){
		document.getElementById('NDQ373a').value = "Q373a";
		}
	if(Q373b=="99.9"){
		document.getElementById('NDQ373b').value = "Q373b";
		}
	
	if(Q381a=="99.9"){
		document.getElementById('NDQ381a').value = "Q381a";
		}
	if(Q381b=="99.9"){
		document.getElementById('NDQ381b').value = "Q381b";
		}
	if(Q382a=="99.9"){
		document.getElementById('NDQ382a').value = "Q382a";
		}
	if(Q382b=="99.9"){
		document.getElementById('NDQ382b').value = "Q382b";
		}
	if(Q383a=="99.9"){
		document.getElementById('NDQ383a').value = "Q383a";
		}
	if(Q383b=="99.9"){
		document.getElementById('NDQ383b').value = "Q383b";
		}								
	
	var a1 = document.getElementById('NDQ341a').value;
	var a2 = document.getElementById('NDQ341b').value;
	var a3 = document.getElementById('NDQ342a').value;
	var a4 = document.getElementById('NDQ342b').value;
	var a5 = document.getElementById('NDQ343a').value;
	var a6 = document.getElementById('NDQ343b').value;
	var a7 = document.getElementById('NDQ351a').value;
	var a8 = document.getElementById('NDQ351b').value;
	var a9 = document.getElementById('NDQ352a').value;
	var a10 = document.getElementById('NDQ352b').value;
	var a11 = document.getElementById('NDQ353a').value;
	var a12 = document.getElementById('NDQ353b').value;
	var a13 = document.getElementById('NDQ361a').value;
	var a14 = document.getElementById('NDQ361b').value;
	var a15 = document.getElementById('NDQ362a').value;
	var a16 = document.getElementById('NDQ362b').value;
	var a17 = document.getElementById('NDQ363a').value;
	var a18 = document.getElementById('NDQ363b').value;
	var a19 = document.getElementById('NDQ371a').value;
	var a20 = document.getElementById('NDQ371b').value;
	var a21 = document.getElementById('NDQ372a').value;
	var a22 = document.getElementById('NDQ372b').value;
	var a23 = document.getElementById('NDQ373a').value;
	var a24 = document.getElementById('NDQ373b').value;
	var a25 = document.getElementById('NDQ381a').value;
	var a26 = document.getElementById('NDQ381b').value;
	var a27 = document.getElementById('NDQ382a').value;
	var a28 = document.getElementById('NDQ382b').value;
	var a29 = document.getElementById('NDQ383a').value;
	var a30 = document.getElementById('NDQ383b').value;
	
	if(a1==""){
	document.getElementById('NDQ341a').style.display="none";	
	}
	if(a2==""){
	document.getElementById('NDQ341b').style.display="none";	
	}
	if(a3==""){
	document.getElementById('NDQ342a').style.display="none";	
	}
	if(a4==""){
	document.getElementById('NDQ342b').style.display="none";	
	}
	if(a5==""){
	document.getElementById('NDQ343a').style.display="none";	
	}
	if(a6==""){
	document.getElementById('NDQ343b').style.display="none";	
	}
	
	if(a7==""){
	document.getElementById('NDQ351a').style.display="none";	
	}
	if(a8==""){
	document.getElementById('NDQ351b').style.display="none";	
	}
	if(a9==""){
	document.getElementById('NDQ352a').style.display="none";	
	}
	if(a10==""){
	document.getElementById('NDQ352b').style.display="none";	
	}
	if(a11==""){
	document.getElementById('NDQ353a').style.display="none";	
	}
	if(a12==""){
	document.getElementById('NDQ353b').style.display="none";	
	}
	if(a13==""){
	document.getElementById('NDQ361a').style.display="none";	
	}
	if(a14==""){
	document.getElementById('NDQ361b').style.display="none";	
	}
	if(a15==""){
	document.getElementById('NDQ362a').style.display="none";	
	}
	if(a16==""){
	document.getElementById('NDQ362b').style.display="none";	
	}
	if(a17==""){
	document.getElementById('NDQ363a').style.display="none";	
	}
	if(a18==""){
	document.getElementById('NDQ363b').style.display="none";	
	}
	
	if(a19==""){
	document.getElementById('NDQ371a').style.display="none";	
	}
	if(a20==""){
	document.getElementById('NDQ371b').style.display="none";	
	}
	if(a21==""){
	document.getElementById('NDQ372a').style.display="none";	
	}
	if(a22==""){
	document.getElementById('NDQ372b').style.display="none";	
	}
	if(a23==""){
	document.getElementById('NDQ373a').style.display="none";	
	}
	if(a24==""){
	document.getElementById('NDQ373b').style.display="none";	
	}
	
	if(a25==""){
	document.getElementById('NDQ381a').style.display="none";	
	}
	if(a26==""){
	document.getElementById('NDQ381b').style.display="none";	
	}
	if(a27==""){
	document.getElementById('NDQ382a').style.display="none";	
	}
	if(a28==""){
	document.getElementById('NDQ382b').style.display="none";	
	}
	if(a29==""){
	document.getElementById('NDQ383a').style.display="none";	
	}
	if(a30==""){
	document.getElementById('NDQ383b').style.display="none";	
	}		
	
}
		
	
	
function ageCal(){
	function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
var age = document.getElementById('cdobForCal').value;	
var sdt = new Date(age);

	var dt = new Date();
    var d = dt.getDate();
    var m = dt.getMonth()+1;
    var y = dt.getFullYear();
	var actDt = y+"/"+m+"/"+d;

var difdt = new Date(new Date(actDt) - sdt);
document.getElementById('ageYear').value = leadingZero(difdt.toISOString().slice(0, 4) - 1970);
document.getElementById('ageMonth').value = leadingZero(difdt.getMonth());
document.getElementById('ageDay').value =  leadingZero(difdt.getDate());

}







function setEndTime(){
function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	    var d = new Date();

    var n = d.getDate();
    var m = d.getMonth()+1;
    var y = d.getFullYear();

    var hh = d.getHours();
    var mm = d.getMinutes();
	var ss = d.getSeconds();
	
	
	document.getElementById('endTime1st').value = leadingZero(hh)+":"+ leadingZero(mm);
	document.getElementById('endTime2nd').value = leadingZero(hh)+":"+ leadingZero(mm);
}




function vdt(){
function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	    var d = new Date();

    var n = d.getDate();
    var m = d.getMonth()+1;
    var y = d.getFullYear();

    var hh = d.getHours();
    var mm = d.getMinutes();
	var ss = d.getSeconds();
    
 
    document.getElementById('Q22').value = y+"-"+ leadingZero(m) + "-"+leadingZero(n);
	document.getElementById('VisitDate_dis').value = n+"/"+ leadingZero(m) + "/"+y;

}



function outcome(){
	if (document.getElementById('visitOutCome').selectedIndex==6){
		document.getElementById('visitOutCome').style.backgroundColor = "#0C9";
		document.getElementById('deathDt').style.display = "block";
		document.getElementById('dateForM').style.display = "block";
		document.getElementById('VisitO').style.display = "none";
		document.getElementById('VisitO').value = "";
		
		}
		else if(document.getElementById('visitOutCome').selectedIndex==8){
			document.getElementById('visitOutCome').style.backgroundColor = "#0C9";
			document.getElementById('VisitO').style.display = "block";
			document.getElementById('deathDt').style.display = "none";
			document.getElementById('dateForM').style.display = "none";
			document.getElementById('deathDt').value = "";
			}
			else
			{
		document.getElementById('visitOutCome').style.backgroundColor = "#0C9";
		document.getElementById('deathDt').style.display = "none";
		document.getElementById('dateForM').style.display = "none";
		document.getElementById('VisitO').style.display = "none";
		document.getElementById('VisitO').value = "";
		document.getElementById('deathDt').value = "";
		
				}			
				
		
	}
	
	
	
	
	
	
function visitAge(){

function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
	    var d = new Date();

    var n = d.getDate();
    var m = d.getMonth()+1;
    var y = d.getFullYear();	
 var cDdt = y+'-'+leadingZero(m)+'-'+leadingZero(n);
	
	
	var d1 = document.getElementById('cdobForCal').value;


var a = new Date(d1);
var b = new Date(cDdt);


var days = (b - a) / (60 * 60 * 24 * 1000);
	


document.getElementById('ageChk').value=days;

}	










function partlyComplted(){
	var Q341a = document.getElementById('Q341a').value;
	var Q341b = document.getElementById('Q341b').value;
	
	var Q342a = document.getElementById('Q342a').value;
	var Q342b = document.getElementById('Q342b').value;
	
	var Q343a = document.getElementById('Q343a').value;
	var Q343b = document.getElementById('Q343b').value;
	
	var Q351a = document.getElementById('Q351a').value;
	var Q351b = document.getElementById('Q351b').value;
	
	var Q352a = document.getElementById('Q352a').value;
	var Q352b = document.getElementById('Q352b').value;
	
	var Q353a = document.getElementById('Q353a').value;
	var Q353b = document.getElementById('Q353b').value;
	
	var Q361a = document.getElementById('Q361a').value;
	var Q361b = document.getElementById('Q361b').value;
	
	var Q362a = document.getElementById('Q362a').value;
	var Q362b = document.getElementById('Q362b').value;
	
	var Q363a = document.getElementById('Q363a').value;
	var Q363b = document.getElementById('Q363b').value;
	
	var Q371a = document.getElementById('Q371a').value;
	var Q371b = document.getElementById('Q371b').value;
	
	var Q372a = document.getElementById('Q372a').value;
	var Q372b = document.getElementById('Q372b').value;
	
	var Q373a = document.getElementById('Q373a').value;
	var Q373b = document.getElementById('Q373b').value;
	
	var Q381a = document.getElementById('Q381a').value;
	var Q381b = document.getElementById('Q381b').value;
	
	var Q382a = document.getElementById('Q382a').value;
	var Q382b = document.getElementById('Q382b').value;
	
	var Q383a = document.getElementById('Q383a').value;
	var Q383b = document.getElementById('Q383b').value;
	
	
	
	
if (	Q341a=="99.99" || 
		Q341b=="99.99" ||
		Q342a=="99.99" || 
		Q342b=="99.99" ||
		Q343a=="99.99" || 
		Q343b=="99.99" ||

		Q351a=="99.99" || 
		Q351b=="99.99" ||
		Q352a=="99.99" || 
		Q352b=="99.99" ||
		Q353a=="99.99" || 
		Q353b=="99.99" ||
		
		Q361a=="99.9" || 
		Q361b=="99.9" ||
		Q362a=="99.9" || 
		Q362b=="99.9" ||
		Q363a=="99.9" || 
		Q363b=="99.9" ||
		
		Q371a=="99.9" || 
		Q371b=="99.9" ||
		Q372a=="99.9" || 
		Q372b=="99.9" ||
		Q373a=="99.9" || 
		Q373b=="99.9" ||
		
		Q381a=="99.9" || 
		Q381b=="99.9" ||
		Q382a=="99.9" || 
		Q382b=="99.9" ||
		Q383a=="99.9" || 
		Q383b=="99.9"
)

{
	document.getElementById('visitOutCome').selectedIndex = 2;
}
else{
	document.getElementById('visitOutCome').selectedIndex = 1;
	}
	
	}









function part2(){
	function leadingZero(value){
		if (value<10){
			return "0" + value.toString();
			}
			return value.toString();
		}
	
var age = document.getElementById('cdobForCal').value;	
var sdt = new Date(age);

	var dt = new Date();
    var d = dt.getDate();
    var m = dt.getMonth()+1;
    var y = dt.getFullYear();
	var actDt = y+"/"+m+"/"+d;

var difdt = new Date(new Date(actDt) - sdt);

var cAge = 'বছর-'+leadingZero(difdt.toISOString().slice(0, 4) - 1970)+' মাস-'+leadingZero(difdt.getMonth())+' দিন-'+leadingZero(difdt.getDate());



	visitAge();
	ageCal();
	var studyID = document.getElementById('sid').value;
	var visit = document.getElementsByName('visit');
	var SlNo = document.getElementById('sno').value;
	var age = document.getElementById('ageChk').value;
	
var help ;
	
	if(age>= 00 && age<= 7 ){
help = 'জন্মের সময় ভিজিট জন্য উপযুক্ত';
	}
	
	else if(age>= 88 && age<= 150 ){   //else if(age>= 86 && age<= 98 ){
	help = '৩ মাসের ভিজিট জন্য উপযুক্ত';

	}
	
	else if(age>= 178 && age<= 242 ){  //else if(age>= 177 && age<= 189 ){
		help = '৬ মাসের ভিজিট জন্য উপযুক্ত';

	}
	
	else if(age>= 363 && age<= 425 ){  //else if(age>= 359 && age<= 371 ){
		help = '১২ মাসের ভিজিট জন্য উপযুক্ত';

	}
	
	else if(age>= 545 && age<= 607 ){  //else if(age>= 542 && age<= 554 ){
		help = '১৮ মাসের ভিজিট জন্য উপযুক্ত';

	}
	
	else if(age>= 728 && age<= 910 ){   //else if(age>= 724 && age<= 736 ){
		help = '২৪ মাসের ভিজিট জন্য উপযুক্ত';

	}
	
	else if(age>= 911 && age<= 972 ){  //else if(age>= 907 && age<= 919 ){
		help = '৩০ মাসের ভিজিট জন্য উপযুক্ত';

	}
	
	else if(age>= 1093 && age<= 1275 ){  //else if(age>= 1089 && age<= 1101 ){
		help = '৩৬ মাসের ভিজিট জন্য উপযুক্ত';

	}
	else
	{
		help = 'কোন ভিজিট এর জন্য উপযুক্ত নয়';
		}




	
if (studyID == "")
{
	jAlert('স্টাডি আইডি দেওয়া হইনি', 'শিশুর তথ্য');
	
	}
else if (SlNo == "")
{
	jAlert('বাচ্চার সিরিয়াল নাম্বার দেওয়া হইনি', 'শিশুর তথ্য');
	
	}	
else if(visit[0].checked==false && visit[1].checked==false && visit[2].checked==false && visit[3].checked==false && visit[4].checked==false && visit[5].checked==false && visit[6].checked==false && visit[7].checked==false) 
	{
		jAlert('যে কোন একটি ভিজিট নির্বাচন করুণ।', 'শিশুর তথ্য');
		}
else{
	
	if(visit[0].checked==true && age>= 00 && age<= 14 ){
	document.getElementById('part1').style.display = "none";
	
	document.getElementById('close').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[1].checked==true && age>= 88 && age<= 150 ){  //else if(visit[1].checked==true && age>= 85 && age<= 106 ){
	
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[2].checked==true && age>= 178 && age<= 242 ){  //else if(visit[2].checked==true && age>= 176 && age<= 197 ){
	
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[3].checked==true && age>= 363 && age<= 425 ){    //else if(visit[3].checked==true && age>= 358 && age<= 379 ){

	
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[4].checked==true && age>= 545 && age<= 607 ){  //else if(visit[4].checked==true && age>= 541 && age<= 562 ){
	document.getElementById('backUpNow').style.display = "none";
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[5].checked==true && age>= 728 && age<= 910 ){    //else if(visit[5].checked==true && age>= 723 && age<= 744 ){
	
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[6].checked==true && age>= 911 && age<= 972 ){  //else if(visit[6].checked==true && age>= 906 && age<= 927 ){
	
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	
	else if(visit[7].checked==true && age>= 1093 && age<= 1275 ){ //else if(visit[7].checked==true && age>= 1088 && age<= 1109 ){
	
	document.getElementById('close').style.display = "none";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}
	else
	{
	jAlert('শিশুর বয়স এখন ('+cAge+')'+', তাই '+help, 'শিশুর তথ্য');
		
	}
	
	
	}
}
	





	
function part3(){
	var visit = document.getElementsByName('visit');
	var slo = document.getElementById('sno').value;
	var vill= document.getElementById('village').value;
	var bari = document.getElementById('bari').value;
	var hh = document.getElementById('household').value;
	var mpid = document.getElementById('pid').value;
	var cpid = document.getElementById('cpid').value;
	var mcid = document.getElementById('cid').value;

if(mcid.substring(0,9)!= vill+bari+hh){
		document.getElementById('sno').value = "";
		document.getElementById('sid').value = "";
		document.getElementById('part1').style.display = "block";
		document.getElementById('part2').style.display = "none";
		document.getElementById('part3').style.display = "none";	
		document.getElementsByName("visit")[0].checked=false;
		document.getElementsByName("visit")[1].checked=false;
		document.getElementsByName("visit")[2].checked=false;
		document.getElementsByName("visit")[3].checked=false;
		document.getElementsByName("visit")[4].checked=false;
		document.getElementsByName("visit")[5].checked=false;
		document.getElementsByName("visit")[6].checked=false;
		document.getElementsByName("visit")[7].checked=false;
		jAlert('এই MCID তে, গ্রাম বা বাড়ি বা খানার সাথে আইডি ম্যাচ করেনি, এই বাচ্চার ক্ষেত্রে আপনাকে হার্ড কপি ফর্ম পূরণ করতে হবে।', 'নির্বাচন');

		}
else if(mpid.substring(0,10)!=cpid.substring(0,10)){
		document.getElementById('sno').value = "";
		document.getElementById('sid').value = "";
		document.getElementById('part1').style.display = "block";
		document.getElementById('part2').style.display = "none";
		document.getElementById('part3').style.display = "none";	
		document.getElementsByName("visit")[0].checked=false;
		document.getElementsByName("visit")[1].checked=false;
		document.getElementsByName("visit")[2].checked=false;
		document.getElementsByName("visit")[3].checked=false;
		document.getElementsByName("visit")[4].checked=false;
		document.getElementsByName("visit")[5].checked=false;
		document.getElementsByName("visit")[6].checked=false;
		document.getElementsByName("visit")[7].checked=false;
		jAlert('এই CPID এবং MPID  ম্যাচ করেনি, এই বাচ্চার ক্ষেত্রে আপনাকে হার্ড কপি ফর্ম পূরণ করতে হবে।', 'নির্বাচন');

		}	
	
	
else if(
slo!= "" && (visit[0].checked==true || visit[1].checked==true || visit[2].checked==true || visit[3].checked==true || visit[4].checked==true || visit[5].checked==true || visit[6].checked==true || visit[7].checked==true ) )
	{

	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part3').style.display = "block";
	}

	else{
	document.getElementById('part1').style.display = "block";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part3').style.display = "none";
		}	
}
	
	
	
	
	
	
	
	
	
	
	
function part4(){
	var Q21 = document.getElementsByName('Q21');
if (Q21[0].checked == false && Q21[1].checked == false && Q21[2].checked == false && Q21[3].checked == false && Q21[4].checked == false)
{
	jAlert('যে কোন একটি নির্বাচন করুন।', 'শিশুর তথ্য');
	}
	else if (Q21[1].checked==true && document.getElementById('placeCode').value==""){
		jAlert('আপনি হসপিটাল নির্বাচন করেছেন, তাই ড্রপ-ডাউন থেকে হসপিটাল এর নাম নির্বাচন করুন। ', 'শিশুর তথ্য');
	}
	else if (Q21[3].checked==true && document.getElementById('placeCode').value==""){
		jAlert('আপনি ইউনিয়ন নির্বাচন করেছেন, তাই ড্রপ-ডাউন থেকে ইউনিয়ন এর নাম নির্বাচন করুন। ', 'শিশুর তথ্য');
	}
	else if (Q21[4].checked==true && document.getElementById('otherCode').value==""){
		jAlert('আপনি অন্যান্য নির্বাচন করেছেন, তাই অন্যান্য কারন লিখুন। ', 'শিশুর তথ্য');
	}
	
	else{
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part4').style.display = "block";
	vdt();
	}
	}		
	
	
function part5(){
	MesTime1st();
	
	var vo = document.getElementById('visitOutCome');

	if(vo.selectedIndex==0){
		jAlert('ভিজিট এর ফলাফল নির্বাচন করুণ। ', 'শিশুর তথ্য');
		}
	else if(vo.selectedIndex==6 && (document.getElementById('deathDt').value=="" || document.getElementById('deathDt').value=='__/__/____')){
		jAlert('আপনি (শিশু মারা গিয়েছে) নির্বাচন করেছেন, তাই মারা যাওয়ার তারিখ দিতে হবে। ', 'শিশুর তথ্য');
		}
	else if(vo.selectedIndex==8 && document.getElementById('VisitO').value==""){
		jAlert('আপনি (অন্যান্য) নির্বাচন করেছেন, তাই অন্যান্য কারন লিখুন। ', 'শিশুর তথ্য');
		}		
		
		else{
			
			
	if(vo.selectedIndex==1 || vo.selectedIndex==2 )	{	
	document.getElementById('backUpNow').style.display = "none";		
	document.getElementById('msg').style.display = "block";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part4').style.display = "none";
	document.getElementById('part5').style.display = "none";	
	document.getElementById('part6').style.display = "block";	
	document.getElementById('Q34_1st').style.display = "block";
	document.getElementById('Q341a').style.display = "block";
		}
		else{
			document.getElementById('backUpNow').style.display = "none";
			document.getElementById('submit').disabled = false;
			document.getElementById('Q33a').value = "";
			document.getElementById('Q33b').value = "";
			document.getElementById('part1').style.display="block";
			document.getElementById('part2').style.display="block";
			document.getElementById('part3').style.display="block";
			document.getElementById('part4').style.display="block";
//			document.getElementById('part5').style.display="block";
			document.getElementById('part13').style.display="block";
			
		document.getElementsByName('visit')[0].style.display = "none";
		document.getElementsByName('visit')[1].style.display = "none";
		document.getElementsByName('visit')[2].style.display = "none";
		document.getElementsByName('visit')[3].style.display = "none";
		document.getElementsByName('visit')[4].style.display = "none";
		document.getElementsByName('visit')[5].style.display = "none";
		document.getElementsByName('visit')[6].style.display = "none";
		document.getElementsByName('visit')[7].style.display = "none";
		
		document.getElementsByName('Q21')[0].style.display = "none";
		document.getElementsByName('Q21')[1].style.display = "none";
		document.getElementsByName('Q21')[2].style.display = "none";
		document.getElementsByName('Q21')[3].style.display = "none";
		document.getElementsByName('Q21')[4].style.display = "none";
		/*********radio**********/		
		
		/*********text box**********/		
		
		
		document.getElementById('sid').readOnly = true;
		document.getElementById('sno').readOnly = true;
		document.getElementById('visitOutComeSave').style.display = "block";
		document.getElementById('visitOutCome').style.display = "none";
		document.getElementById('visitOutComeSave').readOnly = true;
		document.getElementById('Q32a').readOnly = true;
		document.getElementById('Q32b').readOnly = true;
		document.getElementById('Q33a').readOnly = true;
		document.getElementById('Q33b').readOnly = true;
		document.getElementById('Q32a').readOnly = true;
		document.getElementById('endTime1st').readOnly = true;
		document.getElementById('endTime2nd').readOnly = true;
		
		/*********text box**********/		
		
		
		document.getElementById('VisitO').style.display = "none";
		if (document.getElementById('VisitDis').value!= ""){
		document.getElementById('VisitDis').style.display = "block";
		}
		else
		{
			document.getElementById('VisitDis').style.display = "none";
			}
		document.getElementById('placeCode').style.display="none";
		document.getElementById('placeCodeDis').style.display = "block";
		
		document.getElementById('otherCode').readOnly = true;
			
//		document.getElementById('part6').style.display="block";

			document.getElementById('page1Button').style.display = "none";
			document.getElementById('page2Button').style.display = "none";
			document.getElementById('page3Button').style.display = "none";
			document.getElementById('page4Button').style.display = "none";
			
			}
		}
		
		
		
	}


<!----CHW questions started from here (part 6)---->


function part6(){
	Q341a = document.getElementById('Q341a').value;
	if(Q341a==""){
	document.getElementById('Q34_1st').style.display = "block";	
	document.getElementById('Q341a').style.display="block";	
	document.getElementById('part6').style.display="block";
	document.getElementById('part5').style.display="none";
	}
}



function part7(){
	var visit = document.getElementsByName('visit');
	var Q341a = document.getElementById('Q341a').value;
	var Q341b = document.getElementById('Q341b').value;
	var Q341c = document.getElementById('Q341c').value;
	
	var Q342a = document.getElementById('Q342a').value;
	var Q342b = document.getElementById('Q342b').value;
	var Q342c = document.getElementById('Q342c').value;
	
	var Q343a = document.getElementById('Q343a').value;
	var Q343b = document.getElementById('Q343b').value;
	var Q343c = document.getElementById('Q343c').value;
	
	if(visit[1].checked==true && ((Q341a<"02.50" && Q341a!="" && Q341a!="99.99") || (Q341b<"02.50" && Q341b!="" && Q341b!="99.99") || (Q342a<"02.50" && Q342a!="" && Q342a!="99.99") || (Q342b<"02.50" && Q342b!="" && Q342b!="99.99") || (Q343a<"02.50" && Q343a!="" && Q343a!="99.99") || (Q343b<"02.50" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৩ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০২.৫০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[1].checked==true && ((Q341a>"08.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"08.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"08.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"08.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"08.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"08.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৩ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৯.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
		
	if(visit[2].checked==true && ((Q341a<"03.00" && Q341a!="" && Q341a!="99.99") || (Q341b<"03.00" && Q341b!="" && Q341b!="99.99") || (Q342a<"03.00" && Q342a!="" && Q342a!="99.99") || (Q342b<"03.00" && Q342b!="" && Q342b!="99.99") || (Q343a<"03.00" && Q343a!="" && Q343a!="99.99") || (Q343b<"03.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৩.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[2].checked==true && ((Q341a>"10.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"10.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"10.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"10.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"10.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"10.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১০.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	if(visit[3].checked==true && ((Q341a<"03.00" && Q341a!="" && Q341a!="99.99") || (Q341b<"03.00" && Q341b!="" && Q341b!="99.99") || (Q342a<"03.00" && Q342a!="" && Q342a!="99.99") || (Q342b<"03.00" && Q342b!="" && Q342b!="99.99") || (Q343a<"03.00" && Q343a!="" && Q343a!="99.99") || (Q343b<"03.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ১২ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৩.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[3].checked==true && ((Q341a>"12.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"12.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"12.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"12.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"12.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"12.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ১২ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১২.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}			
		
if(visit[4].checked==true && ((Q341a<"05.00" && Q341a!="" && Q341a!="99.99") || (Q341b<"05.00" && Q341b!="" && Q341b!="99.99") || (Q342a<"05.00" && Q342a!="" && Q342a!="99.99") || (Q342b<"05.00" && Q342b!="" && Q342b!="99.99") || (Q343a<"05.00" && Q343a!="" && Q343a!="99.99") || (Q343b<"05.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ১৮ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৫.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[4].checked==true && ((Q341a>"12.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"12.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"12.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"12.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"12.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"12.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ১৮ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১২.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}					
		
if(visit[5].checked==true && ((Q341a<"07.00" && Q341a!="" && Q341a!="99.99") || (Q341b<"07.00" && Q341b!="" && Q341b!="99.99") || (Q342a<"07.00" && Q342a!="" && Q342a!="99.99") || (Q342b<"07.00" && Q342b!="" && Q342b!="99.99") || (Q343a<"07.00" && Q343a!="" && Q343a!="99.99") || (Q343b<"07.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ২৪ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৭.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[5].checked==true && ((Q341a>"15.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"15.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"15.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"15.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"15.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"15.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ২৪ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১৫.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}

if(visit[6].checked==true && ((Q341a<"07.00" && Q341a!="" && Q341a!="99.99") || (Q341b<"07.00" && Q341b!="" && Q341b!="99.99") || (Q342a<"07.00" && Q342a!="" && Q342a!="99.99") || (Q342b<"07.00" && Q342b!="" && Q342b!="99.99") || (Q343a<"07.00" && Q343a!="" && Q343a!="99.99") || (Q343b<"07.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৩০ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৭.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[6].checked==true && ((Q341a>"20.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"20.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"20.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"20.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"20.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"20.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৩০ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ২০.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}								

if(visit[7].checked==true && ((Q341a<"07.00" && Q341a!="" && Q341a!="99.99") || (Q341b<"07.00" && Q341b!="" && Q341b!="99.99") || (Q342a<"07.00" && Q342a!="" && Q342a!="99.99") || (Q342b<"07.00" && Q342b!="" && Q342b!="99.99") || (Q343a<"07.00" && Q343a!="" && Q343a!="99.99") || (Q343b<"07.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৩৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৭.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[7].checked==true && ((Q341a>"25.00" && Q341a!="" && Q341a!="99.99") || (Q341b>"25.00" && Q341b!="" && Q341b!="99.99") || (Q342a>"25.00" && Q342a!="" && Q342a!="99.99") || (Q342b>"25.00" && Q342b!="" && Q342b!="99.99") || (Q343a>"25.00" && Q343a!="" && Q343a!="99.99") || (Q343b>"25.00" && Q343b!="" && Q343b!="99.99") )){
		jAlert('আপনি একটি ৩৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ২৫.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}										
	
	
	
	if(Q341a != "99.99" && (Q341a=="" || Q341a <= "00.60" || Q341a >= "26.00")){
		jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
		document.getElementById('Q341a').value = "";
		}
	
    else if(Q341a!="" && Q341b==""){
	document.getElementById('next6BK').style.display = "none";	
	document.getElementById('Q34_1st').style.display = "none";	
	document.getElementById('Q34_2nd').style.display = "block";	
	document.getElementById('Q341a').style.display="none";	
	document.getElementById('Q341b').style.display="block";	
	document.getElementById('Q342a').style.display="none";	
	document.getElementById('Q342b').style.display="none";
	document.getElementById('Q343a').style.display="none";	
	document.getElementById('Q343b').style.display="none";
	document.getElementById('Q34a').style.display="block";
	document.getElementById('Q34b').style.display="none"	
	document.getElementById('Q34c').style.display="none"	
	document.getElementById('part6').style.display="block";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q341a!="" && Q341b!="99.99" &&( Q341b <= "00.60" || Q341b >= "26.00")){
		jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
		document.getElementById('Q341b').value = "";
		}
	else if(Q341a!="" && Q341b!="" && Q342a=="" && Q341c > 0.02){
	document.getElementById('Q34_1st').style.display = "block";	
	document.getElementById('Q34_2nd').style.display = "none";	
	document.getElementById('Q341a').style.display="none";
	document.getElementById('Q341b').style.display="none";
	document.getElementById('Q342a').style.display="block";	
	document.getElementById('Q342b').style.display="none";
	document.getElementById('Q343a').style.display="none";	
	document.getElementById('Q343b').style.display="none";
	document.getElementById('Q34a').style.display="none";
	document.getElementById('Q34b').style.display="block";
	document.getElementById('Q34c').style.display="none";
	document.getElementById('part6').style.display="block";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q341b!= "" && Q341c > 0.02 && Q342a!="99.99" && (Q342a<="00.60" || Q342a>="26.00")){
		jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
		document.getElementById('Q342a').value = "";
		}
	else if(Q341a!="" && Q341b!="" && Q342a!="" && Q342b=="" && Q341c > 0.02){
	document.getElementById('Q34_1st').style.display = "none";	
	document.getElementById('Q34_2nd').style.display = "block";	
	document.getElementById('Q341a').style.display="none";
	document.getElementById('Q341b').style.display="none";	
	document.getElementById('Q342a').style.display="none";	
	document.getElementById('Q342b').style.display="block";
	document.getElementById('Q343a').style.display="none";	
	document.getElementById('Q343b').style.display="none";	
	document.getElementById('Q34a').style.display="none";
	document.getElementById('Q34b').style.display="block";
	document.getElementById('Q34c').style.display="none";
	document.getElementById('part6').style.display="block";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q342a != "" && (Q342c > 0.02 || Q342c == "") && Q342b!="99.99" && (Q342b<="00.60" || Q342b>="26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q342b').value = "";
	}
	
	else if(Q341a!="" && Q341b!="" && Q342a!="" && Q342b!="" && Q343a=="" && Q341c > 0.02 && Q342c > 0.02){
	document.getElementById('Q34_1st').style.display = "block";	
	document.getElementById('Q34_2nd').style.display = "none";	
	document.getElementById('Q341a').style.display="none";
	document.getElementById('Q34a').style.display="none";
	document.getElementById('Q34b').style.display="none";
	document.getElementById('Q34c').style.display="block";
	document.getElementById('Q342a').style.display="none";	
	document.getElementById('Q342b').style.display="none";	
	document.getElementById('Q343a').style.display="block";	
	document.getElementById('Q343b').style.display="none";
	document.getElementById('Q341b').style.display="none";	
	document.getElementById('part6').style.display="block";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q342b!="" && Q342c > 0.02 && Q343a!="99.99" && (Q343a<="00.60" || Q343a>="26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q343a').value = "";
	}	
	else if(Q341a!="" && Q341b!="" && Q342a!="" && Q342b!="" && Q343a!="" && Q343b=="" && Q341c > 0.02 && Q342c > 0.02){
	document.getElementById('Q34_1st').style.display = "none";	
	document.getElementById('Q34_2nd').style.display = "block";	
	document.getElementById('Q341a').style.display="none";
	document.getElementById('Q34a').style.display="none";
	document.getElementById('Q34b').style.display="none";
	document.getElementById('Q34c').style.display="block";
	document.getElementById('Q342a').style.display="none";	
	document.getElementById('Q342b').style.display="none";	
	document.getElementById('Q343a').style.display="none";	
	document.getElementById('Q343b').style.display="block";
	document.getElementById('Q341b').style.display="none";	
	document.getElementById('part6').style.display="block";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q343a!="" && Q342c > 0.02 && Q343b!="99.99" && (Q343b<="00.60" || Q343b>="26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q343b').value = "";
	}
	else
	{
		document.getElementById('Q36_1st').style.display="none";
		document.getElementById('part8').style.display="none";
	
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		
		document.getElementById('Q38_1st').style.display="block";
		document.getElementById('part10').style.display="block";
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part9').style.display="none";
		document.getElementById('part8').style.display="none";
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		}	
}






function part8(){
	var visit = document.getElementsByName('visit');
	var Q351a = document.getElementById('Q351a').value;
	var Q351b = document.getElementById('Q351b').value;
	var Q351c = document.getElementById('Q351c').value;
	
	var Q352a = document.getElementById('Q352a').value;
	var Q352b = document.getElementById('Q352b').value;
	var Q352c = document.getElementById('Q352c').value;
	
	var Q353a = document.getElementById('Q353a').value;
	var Q353b = document.getElementById('Q353b').value;
	var Q353c = document.getElementById('Q353c').value;
	
	
	
	
		if(visit[1].checked==true && ((Q351a<"02.50" && Q351a!="" && Q351a!="99.99") || (Q351b<"02.50" && Q351b!="" && Q351b!="99.99") || (Q352a<"02.50" && Q352a!="" && Q352a!="99.99") || (Q352b<"02.50" && Q352b!="" && Q352b!="99.99") || (Q353a<"02.50" && Q353a!="" && Q353a!="99.99") || (Q353b<"02.50" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৩ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০২.৫০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[1].checked==true && ((Q351a>"08.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"08.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"08.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"08.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"08.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"08.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৩ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৯.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
		
	if(visit[2].checked==true && ((Q351a<"03.00" && Q351a!="" && Q351a!="99.99") || (Q351b<"03.00" && Q351b!="" && Q351b!="99.99") || (Q352a<"03.00" && Q352a!="" && Q352a!="99.99") || (Q352b<"03.00" && Q352b!="" && Q352b!="99.99") || (Q353a<"03.00" && Q353a!="" && Q353a!="99.99") || (Q353b<"03.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৩.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[2].checked==true && ((Q351a>"10.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"10.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"10.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"10.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"10.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"10.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১০.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	if(visit[3].checked==true && ((Q351a<"03.00" && Q351a!="" && Q351a!="99.99") || (Q351b<"03.00" && Q351b!="" && Q351b!="99.99") || (Q352a<"03.00" && Q352a!="" && Q352a!="99.99") || (Q352b<"03.00" && Q352b!="" && Q352b!="99.99") || (Q353a<"03.00" && Q353a!="" && Q353a!="99.99") || (Q353b<"03.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ১২ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৩.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[3].checked==true && ((Q351a>"12.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"12.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"12.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"12.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"12.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"12.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ১২ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১২.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}			
		
if(visit[4].checked==true && ((Q351a<"05.00" && Q351a!="" && Q351a!="99.99") || (Q351b<"05.00" && Q351b!="" && Q351b!="99.99") || (Q352a<"05.00" && Q352a!="" && Q352a!="99.99") || (Q352b<"05.00" && Q352b!="" && Q352b!="99.99") || (Q353a<"05.00" && Q353a!="" && Q353a!="99.99") || (Q353b<"05.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ১৮ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৫.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[4].checked==true && ((Q351a>"12.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"12.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"12.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"12.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"12.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"12.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ১৮ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১২.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}					
		
if(visit[5].checked==true && ((Q351a<"07.00" && Q351a!="" && Q351a!="99.99") || (Q351b<"07.00" && Q351b!="" && Q351b!="99.99") || (Q352a<"07.00" && Q352a!="" && Q352a!="99.99") || (Q352b<"07.00" && Q352b!="" && Q352b!="99.99") || (Q353a<"07.00" && Q353a!="" && Q353a!="99.99") || (Q353b<"07.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ২৪ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৭.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[5].checked==true && ((Q351a>"15.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"15.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"15.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"15.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"15.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"15.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ২৪ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ১৫.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}

if(visit[6].checked==true && ((Q351a<"07.00" && Q351a!="" && Q351a!="99.99") || (Q351b<"07.00" && Q351b!="" && Q351b!="99.99") || (Q352a<"07.00" && Q352a!="" && Q352a!="99.99") || (Q352b<"07.00" && Q352b!="" && Q352b!="99.99") || (Q353a<"07.00" && Q353a!="" && Q353a!="99.99") || (Q353b<"07.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৩০ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৭.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[6].checked==true && ((Q351a>"20.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"20.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"20.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"20.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"20.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"20.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৩০ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ২০.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}								

if(visit[7].checked==true && ((Q351a<"07.00" && Q351a!="" && Q351a!="99.99") || (Q351b<"07.00" && Q351b!="" && Q351b!="99.99") || (Q352a<"07.00" && Q352a!="" && Q352a!="99.99") || (Q352b<"07.00" && Q352b!="" && Q352b!="99.99") || (Q353a<"07.00" && Q353a!="" && Q353a!="99.99") || (Q353b<"07.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৩৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ০৭.০০ এর নিচে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	else if(visit[7].checked==true && ((Q351a>"25.00" && Q351a!="" && Q351a!="99.99") || (Q351b>"25.00" && Q351b!="" && Q351b!="99.99") || (Q352a>"25.00" && Q352a!="" && Q352a!="99.99") || (Q352b>"25.00" && Q352b!="" && Q352b!="99.99") || (Q353a>"25.00" && Q353a!="" && Q353a!="99.99") || (Q353b>"25.00" && Q353b!="" && Q353b!="99.99") )){
		jAlert('আপনি একটি ৩৬ মাসের শিশুর পরিমাপ নিচ্ছেন, সেই ক্ষেত্রে শিশুর ওজন ২৫.০০ এর উপরে হতে পারবেনা', 'শিশুর তথ্য');
		return false;
		}
	
	
	
if(Q351a != "99.99" && (Q351a=="" || Q351a <= "00.60" || Q351a >= "26.00")){
		jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
		document.getElementById('Q351a').value = "";
		}
		
    else if(Q351a!="" && Q351b==""){
	document.getElementById('next77').style.display = "none";
	document.getElementById('Q35_1st').style.display = "none";	
	document.getElementById('Q35_2nd').style.display = "block";	
	document.getElementById('Q351a').style.display="none";	
	document.getElementById('Q351b').style.display="block";	
	document.getElementById('Q352a').style.display="none";	
	document.getElementById('Q352b').style.display="none";
	document.getElementById('Q353a').style.display="none";	
	document.getElementById('Q353b').style.display="none";
	document.getElementById('Q35a').style.display="block";
	document.getElementById('Q35b').style.display="none"	
	document.getElementById('Q35c').style.display="none"	
	document.getElementById('part7').style.display="block";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q351a!="" && Q351b!="99.99" &&( Q351b <= "00.60" || Q351b >= "26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q351b').value = "";
	}
	else if(Q351a!="" && Q351b!="" && Q352a=="" && Q351c > 0.01){
	document.getElementById('Q35_1st').style.display = "block";	
	document.getElementById('Q35_2nd').style.display = "none";	
	document.getElementById('Q351a').style.display="none";
	document.getElementById('Q351b').style.display="none";
	document.getElementById('Q352a').style.display="block";	
	document.getElementById('Q352b').style.display="none";
	document.getElementById('Q353a').style.display="none";	
	document.getElementById('Q353b').style.display="none";
	document.getElementById('Q35a').style.display="none";
	document.getElementById('Q35b').style.display="block";
	document.getElementById('Q35c').style.display="none";
	document.getElementById('part7').style.display="block";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q351b!= "" && Q351c > 0.01 && Q352a!="99.99" && (Q352a<="00.60" || Q352a>="26.00")){
		jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
		document.getElementById('Q352a').value = "";
		}
	else if(Q351a!="" && Q351b!="" && Q352a!="" && Q352b=="" && Q351c > 0.01){
	document.getElementById('Q35_1st').style.display = "none";	
	document.getElementById('Q35_2nd').style.display = "block";	
	document.getElementById('Q351a').style.display="none";
	document.getElementById('Q351b').style.display="none";	
	document.getElementById('Q352a').style.display="none";	
	document.getElementById('Q352b').style.display="block";
	document.getElementById('Q353a').style.display="none";	
	document.getElementById('Q353b').style.display="none";	
	document.getElementById('Q35a').style.display="none";
	document.getElementById('Q35b').style.display="block";
	document.getElementById('Q35c').style.display="none";
	document.getElementById('part7').style.display="block";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q352a != "" && (Q352c > 0.01 || Q352c == "") && Q352b!="99.99" && (Q352b<="00.60" || Q352b>="26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q352b').value = "";
	}
	else if(Q351a!="" && Q351b!="" && Q352a!="" && Q352b!="" && Q353a=="" && Q351c > 0.01 && Q352c > 0.01){
	document.getElementById('Q35_1st').style.display = "block";	
	document.getElementById('Q35_2nd').style.display = "none";	
	document.getElementById('Q351a').style.display="none";
	document.getElementById('Q35a').style.display="none";
	document.getElementById('Q35b').style.display="none";
	document.getElementById('Q35c').style.display="block";
	document.getElementById('Q352a').style.display="none";	
	document.getElementById('Q352b').style.display="none";	
	document.getElementById('Q353a').style.display="block";	
	document.getElementById('Q353b').style.display="none";
	document.getElementById('Q351b').style.display="none";
	document.getElementById('part7').style.display="block";	
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q352b!="" && Q352c > 0.01 && Q353a!="99.99" && (Q353a<="00.60" || Q353a>="26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q353a').value = "";
	}
	else if(Q351a!="" && Q351b!="" && Q352a!="" && Q352b!="" && Q353a!="" && Q353b=="" && Q351c > 0.01 && Q352c > 0.01){
	document.getElementById('Q35_1st').style.display = "none";	
	document.getElementById('Q35_2nd').style.display = "block";	
	document.getElementById('Q351a').style.display="none";
	document.getElementById('Q35a').style.display="none";
	document.getElementById('Q35b').style.display="none";
	document.getElementById('Q35c').style.display="block";
	document.getElementById('Q352a').style.display="none";	
	document.getElementById('Q352b').style.display="none";	
	document.getElementById('Q353a').style.display="none";	
	document.getElementById('Q353b').style.display="block";
	document.getElementById('Q351b').style.display="none";	
	document.getElementById('part7').style.display="block";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q353a!="" && Q352c > 0.01 && Q353b!="99.99" && (Q353b<="00.60" || Q353b>="26.00")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q353b').value = "";
	}
	else
	{
		document.getElementById('Q36_1st').style.display="none";
		document.getElementById('part8').style.display="none";
	
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		
		document.getElementById('Q36_1st').style.display="none";
		document.getElementById('part8').style.display="none";
	
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		
		document.getElementById('Q38_1st').style.display="block";
		document.getElementById('part10').style.display="block";
	
		document.getElementById('part9').style.display="none";
		document.getElementById('part8').style.display="none";
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		
		}
	
	
	
						
}

function part9(){	
	var Q361a = document.getElementById('Q361a').value;
	var Q361b = document.getElementById('Q361b').value;
	var Q361c = document.getElementById('Q361c').value;
	
	var Q362a = document.getElementById('Q362a').value;
	var Q362b = document.getElementById('Q362b').value;
	var Q362c = document.getElementById('Q362c').value;
	
	var Q363a = document.getElementById('Q363a').value;
	var Q363b = document.getElementById('Q363b').value;
	var Q363c = document.getElementById('Q363c').value;
	
	if(Q361a != "99.9" && (Q361a=="" || Q361a <= "10.0" || Q361a >= "50.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q361a').value = "";
	}
    else if(Q361a!="" && Q361b==""){
	document.getElementById('Q36_1st').style.display = "none";	
	document.getElementById('Q36_2nd').style.display = "block";	
	document.getElementById('Q361a').style.display="none";	
	document.getElementById('Q361b').style.display="block";	
	document.getElementById('Q362a').style.display="none";	
	document.getElementById('Q362b').style.display="none";
	document.getElementById('Q363a').style.display="none";	
	document.getElementById('Q363b').style.display="none";
	document.getElementById('Q36a').style.display="block";
	document.getElementById('Q36b').style.display="none"	
	document.getElementById('Q36c').style.display="none"	
	document.getElementById('part8').style.display="block";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	document.getElementById('next6BK').style.display = "none";
	}
	else if(Q361a!="" && Q361b!="99.9" &&( Q361b <= "10.0" || Q361b >= "50.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q361b').value = "";
		}
	else if(Q361a!="" && Q361b!="" && Q362a=="" && Q361c > 0.5){
	document.getElementById('Q36_1st').style.display = "block";	
	document.getElementById('Q36_2nd').style.display = "none";	
	document.getElementById('Q361a').style.display="none";
	document.getElementById('Q361b').style.display="none";
	document.getElementById('Q362a').style.display="block";	
	document.getElementById('Q362b').style.display="none";
	document.getElementById('Q363a').style.display="none";	
	document.getElementById('Q363b').style.display="none";
	document.getElementById('Q36a').style.display="none";
	document.getElementById('Q36b').style.display="block";
	document.getElementById('Q36c').style.display="none";
	document.getElementById('part8').style.display="block";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q361b!= "" && Q361c > 0.5 && Q362a!="99.9" && (Q362a<="10.0" || Q362a>="50.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q362a').value = "";
	}
	else if(Q361a!="" && Q361b!="" && Q362a!="" && Q362b=="" && Q361c > 0.5){
	document.getElementById('Q36_1st').style.display = "none";	
	document.getElementById('Q36_2nd').style.display = "block";	
	document.getElementById('Q361a').style.display="none";
	document.getElementById('Q361b').style.display="none";	
	document.getElementById('Q362a').style.display="none";	
	document.getElementById('Q362b').style.display="block";
	document.getElementById('Q363a').style.display="none";	
	document.getElementById('Q363b').style.display="none";	
	document.getElementById('Q36a').style.display="none";
	document.getElementById('Q36b').style.display="block";
	document.getElementById('Q36c').style.display="none";
	document.getElementById('part8').style.display="block";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q362a != "" && (Q362c > 0.5 || Q362c == "") && Q362b!="99.9" && (Q362b<="10.0" || Q362b>="50.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q362b').value = "";
	}
	else if(Q361a!="" && Q361b!="" && Q362a!="" && Q362b!="" && Q363a=="" && Q361c > 0.5 && Q362c > 0.5){
	document.getElementById('Q36_1st').style.display = "block";	
	document.getElementById('Q36_2nd').style.display = "none";	
	document.getElementById('Q361a').style.display="none";
	document.getElementById('Q36a').style.display="none";
	document.getElementById('Q36b').style.display="none";
	document.getElementById('Q36c').style.display="block";
	document.getElementById('Q362a').style.display="none";	
	document.getElementById('Q362b').style.display="none";	
	document.getElementById('Q363a').style.display="block";	
	document.getElementById('Q363b').style.display="none";
	document.getElementById('Q361b').style.display="none";
	document.getElementById('part8').style.display="block";	
	document.getElementById('part7').style.display="none";	
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q362b!="" && Q362c > 0.5 && Q363a!="99.9" && (Q363a<="10.0" || Q363a>="50.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q363a').value = "";
	}
	else if(Q361a!="" && Q361b!="" && Q362a!="" && Q362b!="" && Q363a!="" && Q363b=="" && Q361c > 0.5 && Q362c > 0.5){
	document.getElementById('Q36_1st').style.display = "none";	
	document.getElementById('Q36_2nd').style.display = "block";	
	document.getElementById('Q361a').style.display="none";
	document.getElementById('Q36a').style.display="none";
	document.getElementById('Q36b').style.display="none";
	document.getElementById('Q36c').style.display="block";
	document.getElementById('Q362a').style.display="none";	
	document.getElementById('Q362b').style.display="none";	
	document.getElementById('Q363a').style.display="none";	
	document.getElementById('Q363b').style.display="block";
	document.getElementById('Q361b').style.display="none";	
	document.getElementById('part8').style.display="block";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q363a!="" && Q362c > 0.5 && Q363b!="99.9" && (Q363b<="10.0" || Q363b>="50.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q363b').value = "";
	}
	else
	{
		document.getElementById('Q37_1st').style.display="block";
		document.getElementById('part9').style.display="block";
	
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part8').style.display="none";
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		}
}




function part10(){
	var Q371a = document.getElementById('Q371a').value;
	var Q371b = document.getElementById('Q371b').value;
	var Q371c = document.getElementById('Q371c').value;
	
	var Q372a = document.getElementById('Q372a').value;
	var Q372b = document.getElementById('Q372b').value;
	var Q372c = document.getElementById('Q372c').value;
	
	var Q373a = document.getElementById('Q373a').value;
	var Q373b = document.getElementById('Q373b').value;
	var Q373c = document.getElementById('Q373c').value;
	
	if(Q371a != "99.9" && (Q371a=="" || Q371a <= "05.0" || Q371a >= "30.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q371a').value = "";
	}
  	else if(Q371a!="" && Q371b==""){
	document.getElementById('Q37_1st').style.display = "none";	
	document.getElementById('Q37_2nd').style.display = "block";	
	document.getElementById('Q371a').style.display="none";	
	document.getElementById('Q371b').style.display="block";	
	document.getElementById('Q372a').style.display="none";	
	document.getElementById('Q372b').style.display="none";
	document.getElementById('Q373a').style.display="none";	
	document.getElementById('Q373b').style.display="none";
	document.getElementById('Q37a').style.display="block";
	document.getElementById('Q37b').style.display="none"	
	document.getElementById('Q37c').style.display="none"	
	document.getElementById('part9').style.display="block";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q371a!="" && Q371b!="99.9" &&( Q371b <= "05.0" || Q371b >= "30.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q371b').value = "";
	}
	else if(Q371a!="" && Q371b!="" && Q372a=="" && Q371c > 0.2){
	document.getElementById('Q37_1st').style.display = "block";	
	document.getElementById('Q37_2nd').style.display = "none";	
	document.getElementById('Q371a').style.display="none";
	document.getElementById('Q371b').style.display="none";
	document.getElementById('Q372a').style.display="block";	
	document.getElementById('Q372b').style.display="none";
	document.getElementById('Q373a').style.display="none";	
	document.getElementById('Q373b').style.display="none";
	document.getElementById('Q37a').style.display="none";
	document.getElementById('Q37b').style.display="block";
	document.getElementById('Q37c').style.display="none";
	document.getElementById('part9').style.display="block";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q371b!= "" && Q371c > 0.2 && Q372a!="99.9" && (Q372a<="05.0" || Q372a>="30.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q372a').value = "";
	}
	else if(Q371a!="" && Q371b!="" && Q372a!="" && Q372b=="" && Q371c > 0.2){
	document.getElementById('Q37_1st').style.display = "none";	
	document.getElementById('Q37_2nd').style.display = "block";	
	document.getElementById('Q371a').style.display="none";
	document.getElementById('Q371b').style.display="none";	
	document.getElementById('Q372a').style.display="none";	
	document.getElementById('Q372b').style.display="block";
	document.getElementById('Q373a').style.display="none";	
	document.getElementById('Q373b').style.display="none";	
	document.getElementById('Q37a').style.display="none";
	document.getElementById('Q37b').style.display="block";
	document.getElementById('Q37c').style.display="none";
	document.getElementById('part9').style.display="block";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q372a != "" && (Q372c > 0.2 || Q372c == "") && Q372b!="99.9" && (Q372b<="05.0" || Q372b>="30.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q372b').value = "";
	}
	else if(Q371a!="" && Q371b!="" && Q372a!="" && Q372b!="" && Q373a=="" && Q371c > 0.2 && Q372c > 0.2){
	document.getElementById('Q37_1st').style.display = "block";	
	document.getElementById('Q37_2nd').style.display = "none";	
	document.getElementById('Q371a').style.display="none";
	document.getElementById('Q37a').style.display="none";
	document.getElementById('Q37b').style.display="none";
	document.getElementById('Q37c').style.display="block";
	document.getElementById('Q372a').style.display="none";	
	document.getElementById('Q372b').style.display="none";	
	document.getElementById('Q373a').style.display="block";	
	document.getElementById('Q373b').style.display="none";
	document.getElementById('Q371b').style.display="none";
	document.getElementById('part9').style.display="block";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";	
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q372b!="" && Q372c > 0.2 && Q373a!="99.9" && (Q373a<="05.0" || Q373a>="30.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q373a').value = "";
	}
	else if(Q371a!="" && Q371b!="" && Q372a!="" && Q372b!="" && Q373a!="" && Q373b=="" && Q371c > 0.2 && Q372c > 0.2){
	document.getElementById('Q37_1st').style.display = "none";	
	document.getElementById('Q37_2nd').style.display = "block";	
	document.getElementById('Q371a').style.display="none";
	document.getElementById('Q37a').style.display="none";
	document.getElementById('Q37b').style.display="none";
	document.getElementById('Q37c').style.display="block";
	document.getElementById('Q372a').style.display="none";	
	document.getElementById('Q372b').style.display="none";	
	document.getElementById('Q373a').style.display="none";	
	document.getElementById('Q373b').style.display="block";
	document.getElementById('Q371b').style.display="none";	
	document.getElementById('part9').style.display="block";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q373a!="" && Q372c > 0.2 && Q373b!="99.9" && (Q373b<="05.0" || Q373b>="30.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q373b').value = "";
	}
	else
	{
		document.getElementById('Q38_1st').style.display="none";
		document.getElementById('part10').style.display="none";
		
		if(document.getElementById('weiSelector').value == "T"){
			document.getElementById('Q34_1st').style.display = "block";	
			document.getElementById('Q341a').style.display="block";	
			document.getElementById('part6').style.display="block";
			document.getElementById('part5').style.display="none";
			document.getElementById('part7').style.display="none";
			document.getElementById('Q34a').style.display = "block";
			}
			else{
			document.getElementById('Q35_1st').style.display = "block";	
			document.getElementById('Q351a').style.display="block";	
			document.getElementById('part7').style.display="block";
			document.getElementById('part6').style.display="none";
			document.getElementById('part5').style.display="none";
			document.getElementById('Q35a').style.display = "block";
				}
		
		
		//document.getElementById('Q34_1st').style.display = "none";	
		//document.getElementById('Q34_2nd').style.display = "none";	
		//document.getElementById('Q341a').style.display="none";
		//document.getElementById('Q34a').style.display="none";
		//document.getElementById('Q34b').style.display="none";
		//document.getElementById('Q34c').style.display="none";
		//document.getElementById('Q342a').style.display="none";	
		//document.getElementById('Q342b').style.display="none";	
		//document.getElementById('Q343a').style.display="none";	
		//document.getElementById('Q343b').style.display="none";
		//document.getElementById('Q341b').style.display="none";	
		document.getElementById('part9').style.display="none";
		document.getElementById('part8').style.display="none";
		//document.getElementById('part7').style.display="none";
		//document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		}	
}




function part11(){
	MesEndTime1st();
	MesEndTime2nd();
	
	var Q341a = document.getElementById('Q341a').value;
	var Q341b = document.getElementById('Q341b').value;
	var Q341c = document.getElementById('Q341c').value;
	
	var Q342a = document.getElementById('Q342a').value;
	var Q342b = document.getElementById('Q342b').value;
	var Q342c = document.getElementById('Q342c').value;
	
	var Q343a = document.getElementById('Q343a').value;
	var Q343b = document.getElementById('Q343b').value;
	var Q343c = document.getElementById('Q343c').value;
	
	var Q351a = document.getElementById('Q351a').value;
	var Q351b = document.getElementById('Q351b').value;
	var Q351c = document.getElementById('Q351c').value;
	
	var Q352a = document.getElementById('Q352a').value;
	var Q352b = document.getElementById('Q352b').value;
	var Q352c = document.getElementById('Q352c').value;
	
	var Q353a = document.getElementById('Q353a').value;
	var Q353b = document.getElementById('Q353b').value;
	var Q353c = document.getElementById('Q353c').value;
	
	var Q361a = document.getElementById('Q361a').value;
	var Q361b = document.getElementById('Q361b').value;
	var Q361c = document.getElementById('Q361c').value;
	
	var Q362a = document.getElementById('Q362a').value;
	var Q362b = document.getElementById('Q362b').value;
	var Q362c = document.getElementById('Q362c').value;
	
	var Q363a = document.getElementById('Q363a').value;
	var Q363b = document.getElementById('Q363b').value;
	var Q363c = document.getElementById('Q363c').value;
	
	var Q371a = document.getElementById('Q371a').value;
	var Q371b = document.getElementById('Q371b').value;
	var Q371c = document.getElementById('Q371c').value;
	
	var Q372a = document.getElementById('Q372a').value;
	var Q372b = document.getElementById('Q372b').value;
	var Q372c = document.getElementById('Q372c').value;
	
	var Q373a = document.getElementById('Q373a').value;
	var Q373b = document.getElementById('Q373b').value;
	var Q373c = document.getElementById('Q373c').value;
	
	var Q381a = document.getElementById('Q381a').value;
	var Q381b = document.getElementById('Q381b').value;
	var Q381c = document.getElementById('Q381c').value;
	
	var Q382a = document.getElementById('Q382a').value;
	var Q382b = document.getElementById('Q382b').value;
	var Q382c = document.getElementById('Q382c').value;
	
	var Q383a = document.getElementById('Q383a').value;
	var Q383b = document.getElementById('Q383b').value;
	var Q383c = document.getElementById('Q383c').value;
	
	if(Q381a != "999.9" && (Q381a=="" || Q381a <= "030.0" || Q381a >= "099.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q381a').value = "";
	}
    else if(Q381a!="" && Q381b==""){
	MesEndTime2nd();
	document.getElementById('Q38_1st').style.display = "none";	
	document.getElementById('Q38_2nd').style.display = "block";	
	document.getElementById('Q381a').style.display="none";	
	document.getElementById('Q381b').style.display="block";	
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="none";
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="none";
	document.getElementById('Q38a').style.display="block";
	document.getElementById('Q38b').style.display="none"	
	document.getElementById('Q38c').style.display="none"	
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q381a!="" && Q381b!="999.9" &&( Q381b <= "030.0" || Q381b >= "099.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q381b').value = "";
	}
	else if(Q381a!="" && Q381b!="" && Q382a=="" && Q381c > 0.5){
	document.getElementById('Q38_1st').style.display = "block";	
	document.getElementById('Q38_2nd').style.display = "none";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q381b').style.display="none";
	document.getElementById('Q382a').style.display="block";	
	document.getElementById('Q382b').style.display="none";
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="none";
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="block";
	document.getElementById('Q38c').style.display="none";
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q381b!= "" && Q381c > 0.5 && Q382a!="999.9" && (Q382a<="030.0" || Q382a>="099.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q382a').value = "";
	}
	else if(Q381a!="" && Q381b!="" && Q382a!="" && Q382b=="" && Q381c > 0.5){
	MesEndTime2nd();
	document.getElementById('Q38_1st').style.display = "none";	
	document.getElementById('Q38_2nd').style.display = "block";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q381b').style.display="none";	
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="block";
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="none";	
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="block";
	document.getElementById('Q38c').style.display="none";
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q382a != "" && (Q382c > 0.5 || Q382c == "") && Q382b!="999.9" && (Q382b<="030.0" || Q382b>="099.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q382b').value = "";
	}
	else if(Q381a!="" && Q381b!="" && Q382a!="" && Q382b!="" && Q383a=="" && Q381c > 0.5 && Q382c > 0.5){
	document.getElementById('Q38_1st').style.display = "block";	
	document.getElementById('Q38_2nd').style.display = "none";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="none";
	document.getElementById('Q38c').style.display="block";
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="none";	
	document.getElementById('Q383a').style.display="block";	
	document.getElementById('Q383b').style.display="none";
	document.getElementById('Q381b').style.display="none";
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";	
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q382b!="" && Q382c > 0.5 && Q383a!="999.9" && (Q383a<="030.0" || Q383a>="099.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q383a').value = "";
	}
	else if(Q381a!="" && Q381b!="" && Q382a!="" && Q382b!="" && Q383a!="" && Q383b=="" && Q381c > 0.5 && Q382c > 0.5){
	MesEndTime2nd();
	document.getElementById('Q38_1st').style.display = "none";	
	document.getElementById('Q38_2nd').style.display = "block";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="none";
	document.getElementById('Q38c').style.display="block";
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="none";	
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="block";
	document.getElementById('Q381b').style.display="none";	
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q383a!="" && Q382c > 0.5 && Q383b!="999.9" && (Q383b<="030.0" || Q383b>="099.0")){
	jAlert('সঠিক পরিমাপ লিখুন', 'শিশুর তথ্য');
	document.getElementById('Q383b').value = "";
	}
	else
	{
		
		var Q384 = document.getElementsByName('Q384');
		if (Q384[0].checked == false && Q384[1].checked == false){
			document.getElementById('Q38Type').style.display = "block";
		
		document.getElementById('Q38_2nd').style.display="none";	
		document.getElementById('Q38_1st').style.display="none";
		document.getElementById('part10').style.display="block";
	
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q38a').style.display="none";
		document.getElementById('Q38b').style.display="none";
		document.getElementById('Q38c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part9').style.display="none";
		document.getElementById('part8').style.display="none";
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
			
			
			}
		
		
		else{
			
if(Q341a=="99.99" || Q341b=="99.99" || Q342a=="99.99" || Q342b=="99.99" || Q343a=="99.99" || Q343b=="99.99" || Q351a=="99.99" || Q351b=="99.99" || Q352a=="99.99" || Q352b=="99.99" || Q353a=="99.99" || Q353b=="99.99" || Q361a=="99.9" || Q361b=="99.9" || Q362a=="99.9" || Q362b=="99.9" || Q363a=="99.9" || Q363b=="99.9" || Q371a=="99.9" || Q371b=="99.9" || Q372a=="99.9" || Q372b=="99.9" || Q373a=="99.9" || Q373b=="99.9" || Q381a=="99.9" || Q381b=="99.9" || Q382a=="99.9" || Q382b=="99.9" || Q383a=="99.9" || Q383b=="99.9")	
{
		NotDone();
		document.getElementById('Q38_1st').style.display="none";
		document.getElementById('part10').style.display="none";
	
		document.getElementById('part12').style.display="block";
		
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part9').style.display="none";
		document.getElementById('part8').style.display="none";
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
}

else
{		
		partlyComplted();

		document.getElementById('submit').disabled=false;
		document.getElementById('part1').style.display="block";
		document.getElementById('part2').style.display="block";
		document.getElementById('part3').style.display="block";
		document.getElementById('part4').style.display="block";
		document.getElementById('part5').style.display="block";
		
	
		if(Q341a != ""){
			document.getElementById('part6').style.display = "block";
			document.getElementById('Q34_1st').style.display  ="block";
			document.getElementById('Q341a').style.display = "block";
			document.getElementById('Q34a').style.display = "block";
		    }
		else{
			document.getElementById('part6').style.display = "none";
			}	
		if(Q341b != ""){
			document.getElementById('Q34_2nd').style.display  ="block";
			document.getElementById('Q341b').style.display = "block";
			document.getElementById('Q34a').style.display = "block";
		    }	
		if(Q341c != ""){
			document.getElementById('Q34_diff').style.display  ="block";
			document.getElementById('Q341c').style.display = "block";
			document.getElementById('Q34a').style.display = "block";
		    }
			
		if(Q342a != ""){
			document.getElementById('Q34_1st').style.display  ="block";
			document.getElementById('Q342a').style.display = "block";
			document.getElementById('Q34b').style.display = "block";
		    }
		if(Q342b != ""){
			document.getElementById('Q342b').style.display = "block";
			document.getElementById('Q34b').style.display = "block";
		    }	
		if(Q342c != ""){
			document.getElementById('Q342c').style.display = "block";
			document.getElementById('Q34b').style.display = "block";
		    }	
			
		if(Q343a != ""){
			document.getElementById('Q343a').style.display = "block";
			document.getElementById('Q34c').style.display = "block";
		    }
		if(Q343b != ""){
			document.getElementById('Q343b').style.display = "block";
			document.getElementById('Q34c').style.display = "block";
		    }	
		if(Q343c != ""){
			document.getElementById('Q343c').style.display = "block";
			document.getElementById('Q34c').style.display = "block";
		    }	
		
		if(Q351a != ""){
			document.getElementById('part7').style.display = "block";
			document.getElementById('Q35_1st').style.display  ="block";
			document.getElementById('Q351a').style.display = "block";
			document.getElementById('Q35a').style.display = "block";
		    }
			else{
			document.getElementById('part7').style.display = "none";
			}	
			
		if(Q351b != ""){
			document.getElementById('Q35_2nd').style.display  ="block";
			document.getElementById('Q351b').style.display = "block";
			document.getElementById('Q35a').style.display = "block";
		    }	
		if(Q351c != ""){
			document.getElementById('Q35_diff').style.display  ="block";
			document.getElementById('Q351c').style.display = "block";
			document.getElementById('Q35a').style.display = "block";
		    }
			
		if(Q352a != ""){
			document.getElementById('Q352a').style.display = "block";
			document.getElementById('Q35b').style.display = "block";
		    }
		if(Q352b != ""){
			document.getElementById('Q352b').style.display = "block";
			document.getElementById('Q35b').style.display = "block";
		    }	
		if(Q352c != ""){
			document.getElementById('Q352c').style.display = "block";
			document.getElementById('Q35b').style.display = "block";
		    }
			
		if(Q353a != ""){
			document.getElementById('Q353a').style.display = "block";
			document.getElementById('Q35c').style.display = "block";
		    }
		if(Q353b != ""){
			document.getElementById('Q353b').style.display = "block";
			document.getElementById('Q35c').style.display = "block";
		    }	
		if(Q353c != ""){
			document.getElementById('Q353c').style.display = "block";
			document.getElementById('Q35c').style.display = "block";
		    }
			
		if(Q361a != ""){
			document.getElementById('Q36_1st').style.display  ="block";
			document.getElementById('Q361a').style.display = "block";
			document.getElementById('Q36a').style.display = "block";
		    }
		if(Q361b != ""){
			document.getElementById('Q36_2nd').style.display  ="block";
			document.getElementById('Q361b').style.display = "block";
			document.getElementById('Q36a').style.display = "block";
		    }	
		if(Q361c != ""){
			document.getElementById('Q36_diff').style.display  ="block";
			document.getElementById('Q361c').style.display = "block";
			document.getElementById('Q36a').style.display = "block";
		    }
		
		if(Q362a != ""){
			document.getElementById('Q362a').style.display = "block";
			document.getElementById('Q36b').style.display = "block";
		    }
		if(Q362b != ""){
			document.getElementById('Q362b').style.display = "block";
			document.getElementById('Q36b').style.display = "block";
		    }	
		if(Q362c != ""){
			document.getElementById('Q362c').style.display = "block";
			document.getElementById('Q36b').style.display = "block";
		    }			
			
		if(Q363a != ""){
			document.getElementById('Q363a').style.display = "block";
			document.getElementById('Q36c').style.display = "block";
		    }
		if(Q363b != ""){
			document.getElementById('Q363b').style.display = "block";
			document.getElementById('Q36c').style.display = "block";
		    }	
		if(Q363c != ""){
			document.getElementById('Q363c').style.display = "block";
			document.getElementById('Q36c').style.display = "block";
		    }	
		
		if(Q371a != ""){
			document.getElementById('Q37_1st').style.display  ="block";
			document.getElementById('Q371a').style.display = "block";
			document.getElementById('Q37a').style.display = "block";
		    }
		if(Q371b != ""){
			document.getElementById('Q37_2nd').style.display  ="block";
			document.getElementById('Q371b').style.display = "block";
			document.getElementById('Q37a').style.display = "block";
		    }	
		if(Q371c != ""){
			document.getElementById('Q37_diff').style.display  ="block";
			document.getElementById('Q371c').style.display = "block";
			document.getElementById('Q37a').style.display = "block";
		    }
		if(Q372a != ""){
			document.getElementById('Q372a').style.display = "block";
			document.getElementById('Q37b').style.display = "block";
		    }
		if(Q372b != ""){
			document.getElementById('Q372b').style.display = "block";
			document.getElementById('Q37b').style.display = "block";
		    }	
		if(Q372c != ""){
			document.getElementById('Q372c').style.display = "block";
			document.getElementById('Q37b').style.display = "block";
		    }
		
		if(Q373a != ""){
			document.getElementById('Q373a').style.display = "block";
			document.getElementById('Q37c').style.display = "block";
		    }
		if(Q373b != ""){
			document.getElementById('Q373b').style.display = "block";
			document.getElementById('Q37c').style.display = "block";
		    }	
		if(Q373c != ""){
			document.getElementById('Q373c').style.display = "block";
			document.getElementById('Q37c').style.display = "block";
		    }			
			
			
			
			
			
		
		if(Q381a != ""){
			document.getElementById('Q38_1st').style.display  ="block";
			document.getElementById('Q381a').style.display = "block";
			document.getElementById('Q38a').style.display = "block";
		    }
		if(Q381b != ""){
			document.getElementById('Q38_2nd').style.display  ="block";
			document.getElementById('Q381b').style.display = "block";
			document.getElementById('Q38a').style.display = "block";
		    }	
		if(Q381c != ""){
			document.getElementById('Q38_diff').style.display  ="block";
			document.getElementById('Q381c').style.display = "block";
			document.getElementById('Q38a').style.display = "block";
		    }
		
		if(Q382a != ""){
			document.getElementById('Q382a').style.display = "block";
			document.getElementById('Q38b').style.display = "block";
		    }
		if(Q382b != ""){
			document.getElementById('Q382b').style.display = "block";
			document.getElementById('Q38b').style.display = "block";
		    }	
		if(Q382c != ""){
			document.getElementById('Q382c').style.display = "block";
			document.getElementById('Q38b').style.display = "block";
		    }	
		
		if(Q383a != ""){
			document.getElementById('Q383a').style.display = "block";
			document.getElementById('Q38c').style.display = "block";
		    }
		if(Q383b != ""){
			document.getElementById('Q383b').style.display = "block";
			document.getElementById('Q38c').style.display = "block";
		    }	
		if(Q383c != ""){
			document.getElementById('Q383c').style.display = "block";
			document.getElementById('Q38c').style.display = "block";
		    }		
			
			
			/******************measurement field***************************/
         $("#Q341a").unmask();  
	     $("#Q341b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q342a").unmask();  
	     $("#Q342b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q343a").unmask();  
	     $("#Q343b").unmask();  
		 //$("#Q343c").mask("**.**");
		 
		 $("#Q351a").unmask();  
	     $("#Q351b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q352a").unmask();    
	     $("#Q352b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q353a").unmask();  
	     $("#Q353b").unmask();  
		 //$("#Q343c").mask("**.**");  
		 
		 $("#Q361a").unmask();  
	     $("#Q361b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q362a").unmask();  
	     $("#Q362b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q363a").unmask();  
	     $("#Q363b").unmask();  
		 //$("#Q343c").mask("**.**");
		 
		 
		 $("#Q371a").unmask();  
	     $("#Q371b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q372a").unmask();  
	     $("#Q372b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q373a").unmask();  
	     $("#Q373b").unmask();  
		 //$("#Q343c").mask("**.**");
		 
		 $("#Q381a").unmask();  
	     $("#Q381b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q382a").unmask();  
	     $("#Q382b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q383a").unmask();  
	     $("#Q383b").unmask();  
		 //$("#Q343c").mask("**.**");

	document.getElementById('Q341a').readOnly = true;
	document.getElementById('Q341b').readOnly = true;
	document.getElementById('Q341c').readOnly = true;	
	document.getElementById('Q342a').readOnly = true;
	document.getElementById('Q342b').readOnly = true;
	document.getElementById('Q342c').readOnly = true;
	document.getElementById('Q343a').readOnly = true;
	document.getElementById('Q343b').readOnly = true;
	document.getElementById('Q343c').readOnly = true;
	
	document.getElementById('Q351a').readOnly = true;
	document.getElementById('Q351b').readOnly = true;
	document.getElementById('Q351c').readOnly = true;	
	document.getElementById('Q352a').readOnly = true;
	document.getElementById('Q352b').readOnly = true;
	document.getElementById('Q352c').readOnly = true;
	document.getElementById('Q353a').readOnly = true;
	document.getElementById('Q353b').readOnly = true;
	document.getElementById('Q353c').readOnly = true;
	
	document.getElementById('Q361a').readOnly = true;
	document.getElementById('Q361b').readOnly = true;
	document.getElementById('Q361c').readOnly = true;	
	document.getElementById('Q362a').readOnly = true;
	document.getElementById('Q362b').readOnly = true;
	document.getElementById('Q362c').readOnly = true;
	document.getElementById('Q363a').readOnly = true;
	document.getElementById('Q363b').readOnly = true;
	document.getElementById('Q363c').readOnly = true;
	
	document.getElementById('Q371a').readOnly = true;
	document.getElementById('Q371b').readOnly = true;
	document.getElementById('Q371c').readOnly = true;	
	document.getElementById('Q372a').readOnly = true;
	document.getElementById('Q372b').readOnly = true;
	document.getElementById('Q372c').readOnly = true;
	document.getElementById('Q373a').readOnly = true;
	document.getElementById('Q373b').readOnly = true;
	document.getElementById('Q373c').readOnly = true;
	
	document.getElementById('Q381a').readOnly = true;
	document.getElementById('Q381b').readOnly = true;
	document.getElementById('Q381c').readOnly = true;	
	document.getElementById('Q382a').readOnly = true;
	document.getElementById('Q382b').readOnly = true;
	document.getElementById('Q382c').readOnly = true;
	document.getElementById('Q383a').readOnly = true;
	document.getElementById('Q383b').readOnly = true;
	document.getElementById('Q383c').readOnly = true;




/******************************************/
			
			
			
		/*********button**********/
			document.getElementById('page1Button').style.display = "none";
			document.getElementById('page2Button').style.display = "none";
			document.getElementById('page3Button').style.display = "none";
			document.getElementById('page4Button').style.display = "none";
			document.getElementById('page5Button').style.display = "none";
			document.getElementById('page6Button').style.display = "none";
			document.getElementById('page7Button').style.display = "none";
			document.getElementById('page8Button').style.display = "none";
			document.getElementById('page9Button').style.display = "none";
			document.getElementById('page10Button').style.display = "none";
			document.getElementById('page11Button').style.display = "none";
			document.getElementById('page12Button').style.display = "none";
		/*********button**********/	
		
		/*********radio**********/		
		document.getElementsByName('visit')[0].style.display = "none";
		document.getElementsByName('visit')[1].style.display = "none";
		document.getElementsByName('visit')[2].style.display = "none";
		document.getElementsByName('visit')[3].style.display = "none";
		document.getElementsByName('visit')[4].style.display = "none";
		document.getElementsByName('visit')[5].style.display = "none";
		document.getElementsByName('visit')[6].style.display = "none";
		document.getElementsByName('visit')[7].style.display = "none";
		
		document.getElementsByName('Q21')[0].style.display = "none";
		document.getElementsByName('Q21')[1].style.display = "none";
		document.getElementsByName('Q21')[2].style.display = "none";
		document.getElementsByName('Q21')[3].style.display = "none";
		document.getElementsByName('Q21')[4].style.display = "none";
		/*********radio**********/		
		
		/*********text box**********/		
		
		document.getElementById('sid').readOnly = true;
		document.getElementById('sno').readOnly = true;
		visitTrans();
		document.getElementById('visitOutCome').style.display = "none";
		document.getElementById('visitOutComeSave').style.display = "block";
		document.getElementById('visitOutComeSave').readOnly = true;
		document.getElementById('Q32a').readOnly = true;
		document.getElementById('Q32b').readOnly = true;
		document.getElementById('Q33a').readOnly = true;
		document.getElementById('Q33b').readOnly = true;
		document.getElementById('Q32a').readOnly = true;
		document.getElementById('endTime1st').readOnly = true;
		document.getElementById('endTime2nd').readOnly = true;
		
		/*********text box**********/		
		
		
		
		document.getElementById('placeCode').style.display="none";
		document.getElementById('placeCodeDis').style.display = "block";
		document.getElementById('otherCode').readOnly = true;
			
//		document.getElementById('part6').style.display="block";
		
		
//		document.getElementById('part7').style.display="block";
		document.getElementById('part8').style.display="block";
		document.getElementById('part9').style.display="block";
		document.getElementById('part10').style.display="block";
		document.getElementById('part11').style.display="block";
		
		
		document.getElementById('part13').style.display="block";
		
		document.getElementById("divImg1").style.display= "none";
		document.getElementById("divImg2").style.display= "none";
		document.getElementById("imgRadio1").style.display= "none";
		document.getElementById("imgRadio2").style.display= "none";
		document.getElementById("imgHg").style.height = "auto";
		
	}


	
		}	
	}
	
	}









function part12(){
	
	
	
	var Q381a = document.getElementById('Q381a').value;
	var Q381b = document.getElementById('Q381b').value;
	var Q381c = document.getElementById('Q381c').value;
	
	var Q382a = document.getElementById('Q382a').value;
	var Q382b = document.getElementById('Q382b').value;
	var Q382c = document.getElementById('Q382c').value;
	
	var Q383a = document.getElementById('Q383a').value;
	var Q383b = document.getElementById('Q383b').value;
	var Q383c = document.getElementById('Q383c').value;
	
    if(Q381a!="" && Q381b==""){
	document.getElementById('Q38_1st').style.display = "none";	
	document.getElementById('Q38_2nd').style.display = "block";	
	document.getElementById('Q381a').style.display="none";	
	document.getElementById('Q381b').style.display="block";	
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="none";
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="none";
	document.getElementById('Q38a').style.display="block";
	document.getElementById('Q38b').style.display="none"	
	document.getElementById('Q38c').style.display="none"	
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	
	else if(Q381a!="" && Q381b!="" && Q382a=="" && Q381c > 0.5){
	document.getElementById('Q38_1st').style.display = "block";	
	document.getElementById('Q38_2nd').style.display = "none";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q381b').style.display="none";
	document.getElementById('Q382a').style.display="block";	
	document.getElementById('Q382b').style.display="none";
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="none";
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="block";
	document.getElementById('Q38c').style.display="none";
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q381a!="" && Q381b!="" && Q382a!="" && Q382b=="" && Q381c > 0.5){
	document.getElementById('Q38_1st').style.display = "none";	
	document.getElementById('Q38_2nd').style.display = "block";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q381b').style.display="none";	
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="block";
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="none";	
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="block";
	document.getElementById('Q38c').style.display="none";
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q381a!="" && Q381b!="" && Q382a!="" && Q382b!="" && Q383a=="" && Q381c > 0.5 && Q382c > 0.5){
	document.getElementById('Q38_1st').style.display = "block";	
	document.getElementById('Q38_2nd').style.display = "none";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="none";
	document.getElementById('Q38c').style.display="block";
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="none";	
	document.getElementById('Q383a').style.display="block";	
	document.getElementById('Q383b').style.display="none";
	document.getElementById('Q381b').style.display="none";
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";	
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else if(Q381a!="" && Q381b!="" && Q382a!="" && Q382b!="" && Q383a!="" && Q383b=="" && Q381c > 0.5 && Q382c > 0.5){
	document.getElementById('Q38_1st').style.display = "none";	
	document.getElementById('Q38_2nd').style.display = "block";	
	document.getElementById('Q381a').style.display="none";
	document.getElementById('Q38a').style.display="none";
	document.getElementById('Q38b').style.display="none";
	document.getElementById('Q38c').style.display="block";
	document.getElementById('Q382a').style.display="none";	
	document.getElementById('Q382b').style.display="none";	
	document.getElementById('Q383a').style.display="none";	
	document.getElementById('Q383b').style.display="block";
	document.getElementById('Q381b').style.display="none";	
	document.getElementById('part10').style.display="block";
	document.getElementById('part9').style.display="none";
	document.getElementById('part8').style.display="none";
	document.getElementById('part7').style.display="none";
	document.getElementById('part6').style.display="none";
	document.getElementById('part5').style.display="none";	
	}
	else
	{
		
		
		
		
		document.getElementById('Q38_1st').style.display="block";
		document.getElementById('part10').style.display="block";
	
		document.getElementById('Q34_1st').style.display = "none";	
		document.getElementById('Q34_2nd').style.display = "none";	
		document.getElementById('Q341a').style.display="none";
		document.getElementById('Q34a').style.display="none";
		document.getElementById('Q34b').style.display="none";
		document.getElementById('Q34c').style.display="none";
		document.getElementById('Q342a').style.display="none";	
		document.getElementById('Q342b').style.display="none";	
		document.getElementById('Q343a').style.display="none";	
		document.getElementById('Q343b').style.display="none";
		document.getElementById('Q341b').style.display="none";	
		document.getElementById('part10').style.display="none";
		document.getElementById('part9').style.display="none";
		document.getElementById('part8').style.display="none";
		document.getElementById('part7').style.display="none";
		document.getElementById('part6').style.display="none";
		document.getElementById('part5').style.display="none";
		}
	
	
	
	

	}
	
function part13(){
	partlyComplted();
	var Q341a = document.getElementById('Q341a').value;
	var Q341b = document.getElementById('Q341b').value;
	var Q341c = document.getElementById('Q341c').value;
	
	var Q342a = document.getElementById('Q342a').value;
	var Q342b = document.getElementById('Q342b').value;
	var Q342c = document.getElementById('Q342c').value;
	
	var Q343a = document.getElementById('Q343a').value;
	var Q343b = document.getElementById('Q343b').value;
	var Q343c = document.getElementById('Q343c').value;
	
	var Q351a = document.getElementById('Q351a').value;
	var Q351b = document.getElementById('Q351b').value;
	var Q351c = document.getElementById('Q351c').value;
	
	var Q352a = document.getElementById('Q352a').value;
	var Q352b = document.getElementById('Q352b').value;
	var Q352c = document.getElementById('Q352c').value;
	
	var Q353a = document.getElementById('Q353a').value;
	var Q353b = document.getElementById('Q353b').value;
	var Q353c = document.getElementById('Q353c').value;
	
	var Q361a = document.getElementById('Q361a').value;
	var Q361b = document.getElementById('Q361b').value;
	var Q361c = document.getElementById('Q361c').value;
	
	var Q362a = document.getElementById('Q362a').value;
	var Q362b = document.getElementById('Q362b').value;
	var Q362c = document.getElementById('Q362c').value;
	
	var Q363a = document.getElementById('Q363a').value;
	var Q363b = document.getElementById('Q363b').value;
	var Q363c = document.getElementById('Q363c').value;
	
	var Q371a = document.getElementById('Q371a').value;
	var Q371b = document.getElementById('Q371b').value;
	var Q371c = document.getElementById('Q371c').value;
	
	var Q372a = document.getElementById('Q372a').value;
	var Q372b = document.getElementById('Q372b').value;
	var Q372c = document.getElementById('Q372c').value;
	
	var Q373a = document.getElementById('Q373a').value;
	var Q373b = document.getElementById('Q373b').value;
	var Q373c = document.getElementById('Q373c').value;
	
	var Q381a = document.getElementById('Q381a').value;
	var Q381b = document.getElementById('Q381b').value;
	var Q381c = document.getElementById('Q381c').value;
	
	var Q382a = document.getElementById('Q382a').value;
	var Q382b = document.getElementById('Q382b').value;
	var Q382c = document.getElementById('Q382c').value;
	
	var Q383a = document.getElementById('Q383a').value;
	var Q383b = document.getElementById('Q383b').value;
	var Q383c = document.getElementById('Q383c').value;
	
if(document.getElementById('Q311').value !=""){
	
		document.getElementById('Q311').style.display = "none";
		document.getElementById('Q311Dis').style.display = "block";
		document.getElementById('submit').disabled=false;
		
		document.getElementById('part1').style.display="block";
		document.getElementById('part2').style.display="block";
		document.getElementById('part3').style.display="block";
		document.getElementById('part4').style.display="block";
		document.getElementById('part5').style.display="block";
		
		
		if(Q341a != ""){
			document.getElementById('part6').style.display = "block";
			document.getElementById('Q34_1st').style.display  ="block";
			document.getElementById('Q341a').style.display = "block";
			document.getElementById('Q34a').style.display = "block";
		    }
		if(Q341b != ""){
			document.getElementById('Q34_2nd').style.display  ="block";
			document.getElementById('Q341b').style.display = "block";
			document.getElementById('Q34a').style.display = "block";
		    }	
		if(Q341c != ""){
			document.getElementById('Q34_diff').style.display  ="block";
			document.getElementById('Q341c').style.display = "block";
			document.getElementById('Q34a').style.display = "block";
		    }
			
		if(Q342a != ""){
			document.getElementById('Q34_1st').style.display  ="block";
			document.getElementById('Q342a').style.display = "block";
			document.getElementById('Q34b').style.display = "block";
		    }
		if(Q342b != ""){
			document.getElementById('Q342b').style.display = "block";
			document.getElementById('Q34b').style.display = "block";
		    }	
		if(Q342c != ""){
			document.getElementById('Q342c').style.display = "block";
			document.getElementById('Q34b').style.display = "block";
		    }	
			
		if(Q343a != ""){
			document.getElementById('Q343a').style.display = "block";
			document.getElementById('Q34c').style.display = "block";
		    }
		if(Q343b != ""){
			document.getElementById('Q343b').style.display = "block";
			document.getElementById('Q34c').style.display = "block";
		    }	
		if(Q343c != ""){
			document.getElementById('Q343c').style.display = "block";
			document.getElementById('Q34c').style.display = "block";
		    }	
		
		if(Q351a != ""){
			document.getElementById('part7').style.display = "block";
			document.getElementById('Q35_1st').style.display  ="block";
			document.getElementById('Q351a').style.display = "block";
			document.getElementById('Q35a').style.display = "block";
		    }
		if(Q351b != ""){
			document.getElementById('Q35_2nd').style.display  ="block";
			document.getElementById('Q351b').style.display = "block";
			document.getElementById('Q35a').style.display = "block";
		    }	
		if(Q351c != ""){
			document.getElementById('Q35_diff').style.display  ="block";
			document.getElementById('Q351c').style.display = "block";
			document.getElementById('Q35a').style.display = "block";
		    }
			
		if(Q352a != ""){
			document.getElementById('Q352a').style.display = "block";
			document.getElementById('Q35b').style.display = "block";
		    }
		if(Q352b != ""){
			document.getElementById('Q352b').style.display = "block";
			document.getElementById('Q35b').style.display = "block";
		    }	
		if(Q352c != ""){
			document.getElementById('Q352c').style.display = "block";
			document.getElementById('Q35b').style.display = "block";
		    }
			
		if(Q353a != ""){
			document.getElementById('Q353a').style.display = "block";
			document.getElementById('Q35c').style.display = "block";
		    }
		if(Q353b != ""){
			document.getElementById('Q353b').style.display = "block";
			document.getElementById('Q35c').style.display = "block";
		    }	
		if(Q353c != ""){
			document.getElementById('Q353c').style.display = "block";
			document.getElementById('Q35c').style.display = "block";
		    }
			
		if(Q361a != ""){
			document.getElementById('Q36_1st').style.display  ="block";
			document.getElementById('Q361a').style.display = "block";
			document.getElementById('Q36a').style.display = "block";
		    }
		if(Q361b != ""){
			document.getElementById('Q36_2nd').style.display  ="block";
			document.getElementById('Q361b').style.display = "block";
			document.getElementById('Q36a').style.display = "block";
		    }	
		if(Q361c != ""){
			document.getElementById('Q36_diff').style.display  ="block";
			document.getElementById('Q361c').style.display = "block";
			document.getElementById('Q36a').style.display = "block";
		    }
		
		if(Q362a != ""){
			document.getElementById('Q362a').style.display = "block";
			document.getElementById('Q36b').style.display = "block";
		    }
		if(Q362b != ""){
			document.getElementById('Q362b').style.display = "block";
			document.getElementById('Q36b').style.display = "block";
		    }	
		if(Q362c != ""){
			document.getElementById('Q362c').style.display = "block";
			document.getElementById('Q36b').style.display = "block";
		    }			
			
		if(Q363a != ""){
			document.getElementById('Q363a').style.display = "block";
			document.getElementById('Q36c').style.display = "block";
		    }
		if(Q363b != ""){
			document.getElementById('Q363b').style.display = "block";
			document.getElementById('Q36c').style.display = "block";
		    }	
		if(Q363c != ""){
			document.getElementById('Q363c').style.display = "block";
			document.getElementById('Q36c').style.display = "block";
		    }	
		
		if(Q371a != ""){
			document.getElementById('Q37_1st').style.display  ="block";
			document.getElementById('Q371a').style.display = "block";
			document.getElementById('Q37a').style.display = "block";
		    }
		if(Q371b != ""){
			document.getElementById('Q37_2nd').style.display  ="block";
			document.getElementById('Q371b').style.display = "block";
			document.getElementById('Q37a').style.display = "block";
		    }	
		if(Q371c != ""){
			document.getElementById('Q37_diff').style.display  ="block";
			document.getElementById('Q371c').style.display = "block";
			document.getElementById('Q37a').style.display = "block";
		    }
		if(Q372a != ""){
			document.getElementById('Q372a').style.display = "block";
			document.getElementById('Q37b').style.display = "block";
		    }
		if(Q372b != ""){
			document.getElementById('Q372b').style.display = "block";
			document.getElementById('Q37b').style.display = "block";
		    }	
		if(Q372c != ""){
			document.getElementById('Q372c').style.display = "block";
			document.getElementById('Q37b').style.display = "block";
		    }
		
		if(Q373a != ""){
			document.getElementById('Q373a').style.display = "block";
			document.getElementById('Q37c').style.display = "block";
		    }
		if(Q373b != ""){
			document.getElementById('Q373b').style.display = "block";
			document.getElementById('Q37c').style.display = "block";
		    }	
		if(Q373c != ""){
			document.getElementById('Q373c').style.display = "block";
			document.getElementById('Q37c').style.display = "block";
		    }			
			
			
			
			
			
		
		if(Q381a != ""){
			document.getElementById('Q38_1st').style.display  ="block";
			document.getElementById('Q381a').style.display = "block";
			document.getElementById('Q38a').style.display = "block";
		    }
		if(Q381b != ""){
			document.getElementById('Q38_2nd').style.display  ="block";
			document.getElementById('Q381b').style.display = "block";
			document.getElementById('Q38a').style.display = "block";
		    }	
		if(Q381c != ""){
			document.getElementById('Q38_diff').style.display  ="block";
			document.getElementById('Q381c').style.display = "block";
			document.getElementById('Q38a').style.display = "block";
		    }
		
		if(Q382a != ""){
			document.getElementById('Q382a').style.display = "block";
			document.getElementById('Q38b').style.display = "block";
		    }
		if(Q382b != ""){
			document.getElementById('Q382b').style.display = "block";
			document.getElementById('Q38b').style.display = "block";
		    }	
		if(Q382c != ""){
			document.getElementById('Q382c').style.display = "block";
			document.getElementById('Q38b').style.display = "block";
		    }	
		
		if(Q383a != ""){
			document.getElementById('Q383a').style.display = "block";
			document.getElementById('Q38c').style.display = "block";
		    }
		if(Q383b != ""){
			document.getElementById('Q383b').style.display = "block";
			document.getElementById('Q38c').style.display = "block";
		    }	
		if(Q383c != ""){
			document.getElementById('Q383c').style.display = "block";
			document.getElementById('Q38c').style.display = "block";
		    }		
			
			
			
		/*********button**********/
			document.getElementById('page1Button').style.display = "none";
			document.getElementById('page2Button').style.display = "none";
			document.getElementById('page3Button').style.display = "none";
			document.getElementById('page4Button').style.display = "none";
			document.getElementById('page5Button').style.display = "none";
			document.getElementById('page6Button').style.display = "none";
			document.getElementById('page7Button').style.display = "none";
			document.getElementById('page8Button').style.display = "none";
			document.getElementById('page9Button').style.display = "none";
			document.getElementById('page10Button').style.display = "none";
			document.getElementById('page11Button').style.display = "none";
			document.getElementById('page12Button').style.display = "none";
		/*********button**********/	
		
		/*********radio**********/		
		document.getElementsByName('visit')[0].style.display = "none";
		document.getElementsByName('visit')[1].style.display = "none";
		document.getElementsByName('visit')[2].style.display = "none";
		document.getElementsByName('visit')[3].style.display = "none";
		document.getElementsByName('visit')[4].style.display = "none";
		document.getElementsByName('visit')[5].style.display = "none";
		document.getElementsByName('visit')[6].style.display = "none";
		document.getElementsByName('visit')[7].style.display = "none";
		
		document.getElementsByName('Q21')[0].style.display = "none";
		document.getElementsByName('Q21')[1].style.display = "none";
		document.getElementsByName('Q21')[2].style.display = "none";
		document.getElementsByName('Q21')[3].style.display = "none";
		document.getElementsByName('Q21')[4].style.display = "none";
		/*********radio**********/		
		
		/*********text box**********/		
		
		document.getElementById('sid').readOnly = true;
		document.getElementById('sno').readOnly = true;
		visitTrans();
		document.getElementById('visitOutCome').style.display = "none";
		document.getElementById('visitOutComeSave').style.display = "block";
		document.getElementById('visitOutComeSave').readOnly = true;
		document.getElementById('Q32a').readOnly = true;
		document.getElementById('Q32b').readOnly = true;
		document.getElementById('Q33a').readOnly = true;
		document.getElementById('Q33b').readOnly = true;
		document.getElementById('Q32a').readOnly = true;
		document.getElementById('endTime1st').readOnly = true;
		document.getElementById('endTime2nd').readOnly = true;
		
		/*********text box**********/		
		
		
		
		
					/******************measurement field***************************/
         $("#Q341a").unmask();  
	     $("#Q341b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q342a").unmask();  
	     $("#Q342b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q343a").unmask();  
	     $("#Q343b").unmask();  
		 //$("#Q343c").mask("**.**");
		 
		 $("#Q351a").unmask();  
	     $("#Q351b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q352a").unmask();    
	     $("#Q352b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q353a").unmask();  
	     $("#Q353b").unmask();  
		 //$("#Q343c").mask("**.**");  
		 
		 $("#Q361a").unmask();  
	     $("#Q361b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q362a").unmask();  
	     $("#Q362b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q363a").unmask();  
	     $("#Q363b").unmask();  
		 //$("#Q343c").mask("**.**");
		 
		 
		 $("#Q371a").unmask();  
	     $("#Q371b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q372a").unmask();  
	     $("#Q372b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q373a").unmask();  
	     $("#Q373b").unmask();  
		 //$("#Q343c").mask("**.**");
		 
		 $("#Q381a").unmask();  
	     $("#Q381b").unmask();  
		 //$("#Q341c").mask("*.**");
		 
		 $("#Q382a").unmask();  
	     $("#Q382b").unmask();  
		 //$("#Q342c").mask("**.**");
		 
		 $("#Q383a").unmask();  
	     $("#Q383b").unmask();  
		 //$("#Q343c").mask("**.**");

	document.getElementById('Q341a').readOnly = true;
	document.getElementById('Q341b').readOnly = true;
	document.getElementById('Q341c').readOnly = true;	
	document.getElementById('Q342a').readOnly = true;
	document.getElementById('Q342b').readOnly = true;
	document.getElementById('Q342c').readOnly = true;
	document.getElementById('Q343a').readOnly = true;
	document.getElementById('Q343b').readOnly = true;
	document.getElementById('Q343c').readOnly = true;
	
	document.getElementById('Q351a').readOnly = true;
	document.getElementById('Q351b').readOnly = true;
	document.getElementById('Q351c').readOnly = true;	
	document.getElementById('Q352a').readOnly = true;
	document.getElementById('Q352b').readOnly = true;
	document.getElementById('Q352c').readOnly = true;
	document.getElementById('Q353a').readOnly = true;
	document.getElementById('Q353b').readOnly = true;
	document.getElementById('Q353c').readOnly = true;
	
	document.getElementById('Q361a').readOnly = true;
	document.getElementById('Q361b').readOnly = true;
	document.getElementById('Q361c').readOnly = true;	
	document.getElementById('Q362a').readOnly = true;
	document.getElementById('Q362b').readOnly = true;
	document.getElementById('Q362c').readOnly = true;
	document.getElementById('Q363a').readOnly = true;
	document.getElementById('Q363b').readOnly = true;
	document.getElementById('Q363c').readOnly = true;
	
	document.getElementById('Q371a').readOnly = true;
	document.getElementById('Q371b').readOnly = true;
	document.getElementById('Q371c').readOnly = true;	
	document.getElementById('Q372a').readOnly = true;
	document.getElementById('Q372b').readOnly = true;
	document.getElementById('Q372c').readOnly = true;
	document.getElementById('Q373a').readOnly = true;
	document.getElementById('Q373b').readOnly = true;
	document.getElementById('Q373c').readOnly = true;
	
	document.getElementById('Q381a').readOnly = true;
	document.getElementById('Q381b').readOnly = true;
	document.getElementById('Q381c').readOnly = true;	
	document.getElementById('Q382a').readOnly = true;
	document.getElementById('Q382b').readOnly = true;
	document.getElementById('Q382c').readOnly = true;
	document.getElementById('Q383a').readOnly = true;
	document.getElementById('Q383b').readOnly = true;
	document.getElementById('Q383c').readOnly = true;




/******************************************/
		
		
		document.getElementById('placeCode').style.display="none";
		document.getElementById('placeCodeDis').style.display = "block";
		document.getElementById('otherCode').readOnly = true;
			
		//document.getElementById('part6').style.display="block";
		
		
	//	document.getElementById('part7').style.display="block";
		document.getElementById('part8').style.display="block";
		document.getElementById('part9').style.display="block";
		document.getElementById('part10').style.display="block";
		document.getElementById('part11').style.display="block";
		document.getElementById('part12').style.display="block";
		
		document.getElementById('part13').style.display="block";
		
		document.getElementById("divImg1").style.display= "none";
		document.getElementById("divImg2").style.display= "none";
		document.getElementById("imgRadio1").style.display= "none";
		document.getElementById("imgRadio2").style.display= "none";
		document.getElementById("imgHg").style.height = "auto";
	
	}
	}										
	
	
	
	
	
	
function part1Back(){
	document.getElementById('part1').style.display = "block";
	document.getElementById('part2').style.display = "none";
	}
	
function part2Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "block";
	}		
	
function part3Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "block";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "none";
	}			

function part4Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "block";
	document.getElementById('part5').style.display = "none";
	}			

function part5Back(){
	
	document.getElementById('backUpNow').style.display = "block";
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "block";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "none";
	document.getElementById('part7').style.display = "none";
	document.getElementById('part8').style.display = "none";
	/*
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "none";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "none";
	document.getElementById('part7').style.display = "none";
	document.getElementById('part8').style.display = "none";
	document.getElementById('part9').style.display = "block";
	document.getElementById('part10').style.display = "none";
	*/
	}					

function part6Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "none";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "block";
	document.getElementById('part7').style.display = "none";
	}						
function part7Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "none";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "none";
	document.getElementById('part7').style.display = "block";
	document.getElementById('part8').style.display = "none";
	
	}							

function part8Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "none";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "none";
	document.getElementById('part7').style.display = "none";
	document.getElementById('part8').style.display = "block";
	document.getElementById('part9').style.display = "none";
	
	}								

function part9Back(){
	document.getElementById('part1').style.display = "none";
	document.getElementById('part3').style.display = "none";
	document.getElementById('part2').style.display = "none";
	document.getElementById('part4').style.display = "none";
	document.getElementById('part5').style.display = "none";
	document.getElementById('part6').style.display = "none";
	document.getElementById('part7').style.display = "none";
	document.getElementById('part8').style.display = "none";
	document.getElementById('part9').style.display = "block";
	document.getElementById('part10').style.display = "none";
	
	}									
	

function Q21(){
	var Q21 = document.getElementsByName('Q21');
	var Q21Div = document.getElementById('Q21o');
	
	if(Q21[0].checked==true){
		document.getElementById('mesPlace1').style.backgroundColor = "#0C9";
		document.getElementById('mesPlace2').style.backgroundColor = "";
		document.getElementById('mesPlace3').style.backgroundColor = "";
		document.getElementById('mesPlace4').style.backgroundColor = "";
		document.getElementById('mesPlace5').style.backgroundColor = "";
		Q21Div.style.display="none";
		document.getElementById('hospital').style.display = "none";
		document.getElementById('other').style.display = "none";
		document.getElementById('unionN').style.display = "none";
		document.getElementById('otherCode').style.display = "none";
		document.getElementById('placeCode').style.display = "none";
		document.getElementById('placeCode').value="";
		document.getElementById('otherCode').value="";
		}
		
	else if(Q21[1].checked==true){
		document.getElementById('mesPlace1').style.backgroundColor = "";
		document.getElementById('mesPlace2').style.backgroundColor = "#0C9";
		document.getElementById('mesPlace3').style.backgroundColor = "";
		document.getElementById('mesPlace4').style.backgroundColor = "";
		document.getElementById('mesPlace5').style.backgroundColor = "";
		Q21Div.style.display="block";
		document.getElementById('hospital').style.display = "block";
		document.getElementById('other').style.display = "none";
		document.getElementById('unionN').style.display = "none";
		document.getElementById('placeCode').style.display = "block";
		document.getElementById('otherCode').style.display = "none";
		document.getElementById('otherCode').value="";
		}
	else if(Q21[2].checked==true){
		document.getElementById('mesPlace1').style.backgroundColor = "";
		document.getElementById('mesPlace2').style.backgroundColor = "";
		document.getElementById('mesPlace3').style.backgroundColor = "#0C9";
		document.getElementById('mesPlace4').style.backgroundColor = "";
		document.getElementById('mesPlace5').style.backgroundColor = "";
		Q21Div.style.display="none";
		document.getElementById('hospital').style.display = "none";
		document.getElementById('other').style.display = "none";
		document.getElementById('unionN').style.display = "none";
		document.getElementById('otherCode').style.display = "none";
		document.getElementById('placeCode').style.display = "none";
		document.getElementById('placeCode').value="";
		document.getElementById('otherCode').value="";
		}	
	
	else if(Q21[3].checked==true){
		document.getElementById('mesPlace1').style.backgroundColor = "";
		document.getElementById('mesPlace2').style.backgroundColor = "";
		document.getElementById('mesPlace3').style.backgroundColor = "";
		document.getElementById('mesPlace4').style.backgroundColor = "#0C9";
		document.getElementById('mesPlace5').style.backgroundColor = "";
		Q21Div.style.display="block";
		document.getElementById('hospital').style.display = "none";
		document.getElementById('other').style.display = "none";
		document.getElementById('unionN').style.display = "block";
		document.getElementById('placeCode').style.display = "block";
		document.getElementById('otherCode').style.display = "none";
		document.getElementById('otherCode').value="";
		
		}
		
	else if(Q21[4].checked==true){
		document.getElementById('mesPlace1').style.backgroundColor = "";
		document.getElementById('mesPlace2').style.backgroundColor = "";
		document.getElementById('mesPlace3').style.backgroundColor = "";
		document.getElementById('mesPlace4').style.backgroundColor = "";
		document.getElementById('mesPlace5').style.backgroundColor = "#0C9";
		Q21Div.style.display="block";
		document.getElementById('hospital').style.display = "none";
		document.getElementById('other').style.display = "block";
		document.getElementById('unionN').style.display = "none";
		document.getElementById('otherCode').style.display = "block";
		document.getElementById('placeCode').style.display = "none";
		document.getElementById('placeCode').value="";
		}

	
	}	
	
	



//******************************************************2nd page calculation




//******************************************************2nd page calculation end	




function Q341(){
	MesTime2nd();
	var Q341a = document.getElementById('Q341a').value;
	var Q341b = document.getElementById('Q341b').value;
	
	var resQ341;
		if (Q341a == "99.99" || Q341b == "99.99"){
			document.getElementById('Q341c').value ="";
		}
		else{
		if(Q341a > Q341b){
			resQ341 = parseFloat(Q341a) - parseFloat(Q341b)
			}
			else{resQ341 = parseFloat(Q341b) - parseFloat(Q341a)}
			
			document.getElementById('Q341c').value = resQ341.toFixed(2);				
	}
}

function Q342(){
	var Q342a = document.getElementById('Q342a').value;
	var Q342b = document.getElementById('Q342b').value;
	
	var resQ342;
	if (Q342a == "99.99" || Q342b == "99.99"){
			document.getElementById('Q342c').value ="";
		}
		else{
		if(Q342a > Q342b){
			resQ342 = parseFloat(Q342a) - parseFloat(Q342b)
			}
			else{resQ342 = parseFloat(Q342b) - parseFloat(Q342a)}
			
			document.getElementById('Q342c').value = resQ342.toFixed(2);				
	}	
}
	

function Q343(){
	var Q343a = document.getElementById('Q343a').value;
	var Q343b = document.getElementById('Q343b').value;
	
	var resQ343;
	if (Q343a == "99.99" || Q343b == "99.99"){
			document.getElementById('Q343c').value ="";
		}
		else{
		if(Q343a > Q343b){
			resQ343 = parseFloat(Q343a) - parseFloat(Q343b)
			}
			else{resQ343 = parseFloat(Q343b) - parseFloat(Q343a)}
			
			document.getElementById('Q343c').value = resQ343.toFixed(2);				
	}
}

	
function Q351(){
		MesTime2nd();
	var Q351a = document.getElementById('Q351a').value;
	var Q351b = document.getElementById('Q351b').value;
	
	var resQ351;
	if (Q351a == "99.99" || Q351b == "99.99"){
			document.getElementById('Q351c').value ="";
		}
		else{
		if(Q351a > Q351b){
			resQ351 = parseFloat(Q351a) - parseFloat(Q351b)
			}
			else{resQ351 = parseFloat(Q351b) - parseFloat(Q351a)}
			
			document.getElementById('Q351c').value = resQ351.toFixed(2);				
	}
}
function Q352(){
	var Q352a = document.getElementById('Q352a').value;
	var Q352b = document.getElementById('Q352b').value;
	
	var resQ352;
		if (Q352a == "99.99" || Q352b == "99.99"){
			document.getElementById('Q352c').value ="";
		}
		else{
		if(Q352a > Q352b){
			resQ352 = parseFloat(Q352a) - parseFloat(Q352b)
			}
			else{resQ352 = parseFloat(Q352b) - parseFloat(Q352a)}
			
			document.getElementById('Q352c').value = resQ352.toFixed(2);				
	}
}
	
function Q353(){
	var Q353a = document.getElementById('Q353a').value;
	var Q353b = document.getElementById('Q353b').value;
	
	var resQ353;
		if (Q353a == "99.99" || Q353b == "99.99"){
			document.getElementById('Q353c').value ="";
		}
		else{
		if(Q353a > Q353b){
			resQ353 = parseFloat(Q353a) - parseFloat(Q353b)
			}
			else{resQ353 = parseFloat(Q353b) - parseFloat(Q353a)}
			
			document.getElementById('Q353c').value = resQ353.toFixed(2);				
	}		
}


function Q361(){
	var Q361a = document.getElementById('Q361a').value;
	var Q361b = document.getElementById('Q361b').value;
	
	var resQ361;
		if (Q361a == "99.9" || Q361b == "99.9"){
			document.getElementById('Q361c').value ="";
		}
		else{
		if(Q361a > Q361b){
			resQ361 = parseFloat(Q361a) - parseFloat(Q361b)
			}
			else{resQ361 = parseFloat(Q361b) - parseFloat(Q361a)}
			
			document.getElementById('Q361c').value = resQ361.toFixed(1);				
	}
}
	
function Q362(){
	var Q362a = document.getElementById('Q362a').value;
	var Q362b = document.getElementById('Q362b').value;
	
	var resQ362;
			if (Q362a == "99.9" || Q362b == "99.9"){
			document.getElementById('Q362c').value ="";
		}
		else{
		if(Q362a > Q362b){
			resQ362 = parseFloat(Q362a) - parseFloat(Q362b)
			}
			else{resQ362 = parseFloat(Q362b) - parseFloat(Q362a)}
			
			document.getElementById('Q362c').value = resQ362.toFixed(1);				
	}
}

function Q363(){
	var Q363a = document.getElementById('Q363a').value;
	var Q363b = document.getElementById('Q363b').value;
	
	var resQ363;
			if (Q363a == "99.9" || Q363b == "99.9"){
			document.getElementById('Q363c').value ="";
		}
		else{
		if(Q363a > Q363b){
			resQ363 = parseFloat(Q363a) - parseFloat(Q363b)
			}
			else{resQ363 = parseFloat(Q363b) - parseFloat(Q363a)}
			
			document.getElementById('Q363c').value = resQ363.toFixed(1);				
	}		
}


function Q371(){
	var Q371a = document.getElementById('Q371a').value;
	var Q371b = document.getElementById('Q371b').value;
	
	var resQ371;
			if (Q371a == "99.9" || Q371b == "99.9"){
			document.getElementById('Q371c').value ="";
		}
		else{
		if(Q371a > Q371b){
			resQ371 = parseFloat(Q371a) - parseFloat(Q371b)
			}
			else{resQ371 = parseFloat(Q371b) - parseFloat(Q371a)}
			
			document.getElementById('Q371c').value = resQ371.toFixed(1);				
	}
}
	

function Q372(){
	var Q372a = document.getElementById('Q372a').value;
	var Q372b = document.getElementById('Q372b').value;
	
	var resQ372;
			if (Q372a == "99.9" || Q372b == "99.9"){
			document.getElementById('Q372c').value ="";
		}
		else{
		if(Q372a > Q372b){
			resQ372 = parseFloat(Q372a) - parseFloat(Q372b)
			}
			else{resQ372 = parseFloat(Q372b) - parseFloat(Q372a)}
			
			document.getElementById('Q372c').value = resQ372.toFixed(1);				
	}
}
	

function Q373(){
	var Q373a = document.getElementById('Q373a').value;
	var Q373b = document.getElementById('Q373b').value;
	
	var resQ373;
			if (Q373a == "99.9" || Q373b == "99.9"){
			document.getElementById('Q373c').value ="";
		}
		else{
		if(Q373a > Q373b){
			resQ373 = parseFloat(Q373a) - parseFloat(Q373b)
			}
			else{resQ373 = parseFloat(Q373b) - parseFloat(Q373a)}
			
			document.getElementById('Q373c').value = resQ373.toFixed(1);				
	}
}
	

function Q381(){
	var Q381a = document.getElementById('Q381a').value;
	var Q381b = document.getElementById('Q381b').value;
	
	var resQ381;
				if (Q381a == "999.9" || Q381b == "999.9"){
			document.getElementById('Q381c').value ="";
		}
		else{
		if(Q381a > Q381b){
			resQ381 = parseFloat(Q381a) - parseFloat(Q381b)
			}
			else{resQ381 = parseFloat(Q381b) - parseFloat(Q381a)}
			
			document.getElementById('Q381c').value = resQ381.toFixed(1);				
	}

}

function Q382(){
	var Q382a = document.getElementById('Q382a').value;
	var Q382b = document.getElementById('Q382b').value;
	
	var resQ382;
	if (Q382a == "999.9" || Q382b == "999.9"){
			document.getElementById('Q382c').value ="";
		}
		else{
		if(Q382a > Q382b){
			resQ382 = parseFloat(Q382a) - parseFloat(Q382b)
			}
			else{resQ382 = parseFloat(Q382b) - parseFloat(Q382a)}
			
			document.getElementById('Q382c').value = resQ382.toFixed(1);				
	}				
}

function Q383(){
	var Q383a = document.getElementById('Q383a').value;
	var Q383b = document.getElementById('Q383b').value;
	
	var resQ383;
	if (Q383a == "999.9" || Q383b == "999.9"){
			document.getElementById('Q383c').value ="";
		}
		else{
		if(Q383a > Q383b){
			resQ383 = parseFloat(Q383a) - parseFloat(Q383b)
			}
			else{resQ383 = parseFloat(Q383b) - parseFloat(Q383a)}
			
			document.getElementById('Q383c').value = resQ383.toFixed(1);				
	}
}

/************************************
validation
***************************/



/**********************************************
Color
**********************************************/
function color(){
	visitAge();
	var visit = document.getElementsByName('visit');
	if (visit[0].checked==true){
		document.getElementById('visitForChk').value = "1";
		document.getElementById('v1').style.backgndColor = "#0C9";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[1].checked==true){
		document.getElementById('visitForChk').value = "2";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "#0C9";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[2].checked==true){
		document.getElementById('visitForChk').value = "3";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "#0C9";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[3].checked==true){
		document.getElementById('visitForChk').value = "4";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "#0C9";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[4].checked==true){
		document.getElementById('visitForChk').value = "5";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "#0C9";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[5].checked==true){
		document.getElementById('visitForChk').value = "6";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "#0C9";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[6].checked==true){
		document.getElementById('visitForChk').value = "7";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "#0C9";
		document.getElementById('v8').style.backgroundColor = "";	
		}
	else if (visit[7].checked==true){
		document.getElementById('visitForChk').value = "8";
		document.getElementById('v1').style.backgroundColor = "";
		document.getElementById('v2').style.backgroundColor = "";
		document.getElementById('v3').style.backgroundColor = "";
		document.getElementById('v4').style.backgroundColor = "";
		document.getElementById('v5').style.backgroundColor = "";
		document.getElementById('v6').style.backgroundColor = "";
		document.getElementById('v7').style.backgroundColor = "";
		document.getElementById('v8').style.backgroundColor = "#0C9";	
		}							
	}


/**********************************************
Color
**********************************************/

function formVal(){
	var sid = document.getElementById('sid').value;
	var sno = document.getElementById('sno').value;
	var visit = document.getElementsByName('visit');
	var u1 = document.getElementById('userID');
	var u2 = document.getElementById('userID1');
	
	var voChk = document.getElementById('visitOutCome');
		
if(voChk.selectedIndex==6 && (document.getElementById('deathDt').value=="" || document.getElementById('deathDt').value=='__/__/____'))
{
	return false;
	}
		
		
	if(sid=="" || sno == "" || visit ==""){
			
		 	window.location.href= "system.php?msg=1";
			return false;
		}
		else if(u1=="" || u2== "" || u1.value.length >=6 || u2.value.length >=6 ){

			 	window.location.href= "system.php?msg=1";
				
				return false;
		}
		else{
			return true;
			}
	}






function serialNo(){
	if(document.getElementById('sid').value.length == 6){
		document.getElementById('sno').disabled = false;
		return false;
		}
		else
		{
			document.getElementById('sno').disabled = true;
			document.getElementById('sno').value = "";
			return true;
			}
	}




