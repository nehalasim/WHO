<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SYSTEM</title>

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style_main.css">


<script src="js/show.js" type="text/javascript"></script>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/mask1_3.js" type="text/javascript"></script>
<script src="js/inputType.js" type="text/javascript"></script>



<!--Used script plugin for customized alert boxes-->
<!--
<script src="js/jquery.js" type="text/javascript"></script>
-->
<script src="js/jquery.ui.draggable.js" type="text/javascript"></script>

<script src="js/jquery.alerts.js" type="text/javascript"></script>
<link href="css/jquery.alerts.css" rel="stylesheet" type="text/css" media="screen" />
<!--end Used script plugin for customized alert boxes-->


<!--for data pulling from pcvmain-->
<script>
function showUser(str) {
	
//		var SID_A = document.getElementById("getStudyId");
 //       var SID_B = document.getElementById("StudyId");
  //      var valueA = SID_A.value;
   //     SID_B.value = valueA;
	
	
if(document.getElementById('sid').value.length == 6){

  if (str=="") {
    document.getElementById("pid").value="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();

  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	var responseArray = xmlhttp.responseText.split("||");
	if(document.getElementById('sid').value == responseArray[13]){ 	
      document.getElementById("upazila").value=responseArray[0];
	  document.getElementById("union").value=responseArray[1];
	  document.getElementById("village").value=responseArray[2];
	  document.getElementById("bari").value=responseArray[3];
	  document.getElementById("household").value=responseArray[4];
	  document.getElementById("cid").value=responseArray[5];
	  document.getElementById("pid").value=responseArray[6];
	  document.getElementById("mname").value=responseArray[7];
	  document.getElementById("fname").value=responseArray[8];
	  document.getElementById("cname").value=responseArray[9];
	  document.getElementById("cpid").value=responseArray[10];
	  document.getElementById("cdob").value=responseArray[12];
	  document.getElementById("cdobForCal").value=responseArray[11];
	  //document.getElementById("txtHint").value=xmlhttp.responseText;
	}
	else{
if (document.getElementById("sid").value!=""){
		$(document).ready( function() {
		jAlert('এই শিশুর তথ্য ডাটাবেইজে নেই অথবা এই এস্টাডির জন্য প্রযোজ্য নয়।', 'শিশুর তথ্য');
		});
		
		
//		alert("এই শিশুর তথ্য ডাটাবেইজে নেই অথবা এই এস্টাডির জন্য প্রযোজ্য নয়।");
		
	  document.getElementById('sid').value="";
      document.getElementById("upazila").value="";
	  document.getElementById("union").value="";
	  document.getElementById("village").value="";
	  document.getElementById("bari").value="";
	  document.getElementById("household").value="";
	  document.getElementById("cid").value="";
	  document.getElementById("pid").value="";
	  document.getElementById("mname").value="";
	  document.getElementById("fname").value="";
	  document.getElementById("cname").value="";
	  document.getElementById("cpid").value="";
	  document.getElementById("cdob").value="";
}

		}

	}

  }

  xmlhttp.open("GET","php/getAllData.php?q="+str,true);
  xmlhttp.send();

}
else{
	if(document.getElementById("sid").value!="")
	{
		
	$(document).ready( function() {
	jAlert('এই আইডি সটিক নয়', 'আইডি');
	});
		
//	alert("এই আইডি সটিক নয়");

      document.getElementById('sid').value="";
      document.getElementById("upazila").value="";
	  document.getElementById("union").value="";
	  document.getElementById("village").value="";
	  document.getElementById("bari").value="";
	  document.getElementById("household").value="";
	  document.getElementById("cid").value="";
	  document.getElementById("pid").value="";
	  document.getElementById("mname").value="";
	  document.getElementById("fname").value="";
	  document.getElementById("cname").value="";
	  document.getElementById("cpid").value="";
	  document.getElementById("cdob").value="";
	}
	}
}
</script>
<!--end for data pulling from pcvmain-->


</head>

<body>

<div class="headder"><!---headder-->
CHILD ANTHROPOMETRY TOOL
</div><!---headder end-->

<fieldset id="part1" class="fieldset"><!--part one-->

<div class="sid">এস্টাডি আইডি <input onBlur="showUser(this.value);" type="text" name="sid" id="sid" class="inputArea"/></div>
<div class="visit">ভিসিট নাম্বার</div>


<div class="visitL"><!--left bar-->

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">জন্মের সময়</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="1"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">৩ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="2"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">৬ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="3"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">১২ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="4"/></div>
</div>

</div><!--left bar end-->

<div class="visitL"><!--left bar-->

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">১৮ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="5"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">২৪ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="6"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">৩০ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="7"/></div>
</div>

<div style="width:100%; float:left; margin-bottom:2vw;">
<div style="width:70%; float:left;">৩৬ মাস</div>
<div style="width:20%; float:left;"><input type="radio" id="visit" name="visit" class="radio" value="8"/></div>
</div>

</div><!--left bar end-->
<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="পরের প্রশ্ন" id="next" onClick="part2();" name="next" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part one end-->







<fieldset id="part2" class="fieldset" style="display:none;"><!--part two-->

<div class="addWrapper"><!--left bar-->

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">দেশ</div>
<div style="width:40%; float:left;"><input type="text" value="11" readonly name="site" id="site" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">উপজিলা</div>
<div style="width:40%; float:left;"><input readonly type="text" name="upazila" id="upazila" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">ইউনিয়ন</div>
<div style="width:40%; float:left;"><input readonly type="text" name="union" id="union" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">গ্রাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="village" id="village" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাড়ি</div>
<div style="width:40%; float:left;"><input readonly type="text" name="bari" id="bari" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">খানা</div>
<div style="width:40%; float:left;"><input readonly type="text" name="household" id="household" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">সিআইডি </div>
<div style="width:40%; float:left;"><input readonly type="text" name="cid" id="cid" class="textDataPull"/></div>
</div> 

</div><!--left bar end-->



<div class="addWrapper"><!--right bar-->
<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">পিআইডি</div>
<div style="width:40%; float:left;"><input readonly type="text" name="pid" id="pid" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">মায়ের নাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="mname" id="mname" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাবার নাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="fname" id="fname" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাচ্চার নাম</div>
<div style="width:40%; float:left;"><input readonly type="text" name="cname" id="cname" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">সিপিআইডি</div>
<div style="width:40%; float:left;"><input readonly type="text" name="cpid" id="cpid" class="textDataPull"/></div>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">জন্ম তারিখ</div>
<div style="width:40%; float:left;"><input readonly type="text" name="cdob" id="cdob" class="textDataPull"/></div>
<input readonly type="hidden" name="cdobForCal" id="cdobForCal" class="textDataPull"/>
</div> 

<div style="width:100%; float:left; margin-bottom:1vw;">
<div style="width:40%; float:left; font-size:1.5vw;">বাচ্চার বয়স </div>
<div style="width:40%; float:left;"><input readonly type="text" name="age" id="age" class="textDataPull"/></div>
</div> 

</div><!--right bar end -->
<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next2" onClick="part1Back();" name="next2" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next2" onClick="part3();" name="next2" class="dirButton" /> 
</div><!--nxt pre button end-->
</fieldset><!--part two end-->




<fieldset id="part3" class="fieldset" style="display:none;"><!--part three-->
<div style="width:100%; float:left; font-size:2.5vw; margin-bottom:3vw;">মাপ বা ভিসিট করা হয়েছে, সে জায়গার নাম</div>


<div style="width:40%; float:left; height:auto;">
<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
বাড়ি
</div>
<div style="height:auto; width:5vw; float:left; font-size:3vw;">
<input type="radio" name="Q21" id="Q21" class="radio" value="1" onClick="Q21();"/>
</div>

<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
হসপিটাল
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="2" onClick="Q21();"/>
</div>

<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
কালিগঞ্জ
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="3" onClick="Q21();"/>
</div>
</div>


<div style="width:40%; float:left; margin-left:4vw;">
<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
ইউনিয়ন
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="4" onClick="Q21();"/>
</div>

<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
অনন্যা 
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="radio" name="Q21" id="Q21" class="radio" value="9" onClick="Q21();"/>
</div>


<div id="Q21o" style="display:none;">
<div style="height:auto; width:80%; float:left; font-size:2vw; margin-bottom:3vw;">
<span id="hospital" style="display:none;">হসপিটাল কোড</span> 
<span id="union" style="display:none;">ইউনিয়ন কোড</span> 
<span id="other" style="display:none;">অনন্যা কোড</span> 
</div>
<div style="height:auto; width:5vw; float:left;">
<input type="text" name="placeCode" id="placeCode" class="inputArea" style="width:10vw; display:none;"/>
<input type="text" name="otherCode" id="otherCode" class="inputArea" style="width:10vw; display:none;"/>
</div>
</div>




</div>

<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next3" onClick="part2Back();" name="next2" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next3" onClick="part4();" name="next2" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part three-->

<fieldset id="part4" class="fieldset" style="display:none; overflow:hidden;"><!--part four-->

<div style="width:35%; height:20vw; border-right:1px #666666 solid; float:left;">
<div style="width:100%; float:left; font-size:2.5vw; margin-bottom:3vw;">ভিসিট এর তারিখ</div>
<div style="height:auto; width:5vw; float:left; font-size:3vw;">
<input type="hidden" name="Q22" id="Q22" class="inputArea"/>
<input readonly type="text" name="VisitDate_dis" id="VisitDate_dis" class="inputArea"/>
</div>
</div>


<div style="width:35%; height:20vw; float:left; margin-left:5vw;">

<div style="width:100%; float:left; font-size:2.5vw; margin-bottom:3vw;">ভিসিট এর ফলাফল</div>

<div style="height:auto; width:5vw; float:left; font-size:3vw;">
<select onChange="outcome();" id="visitOutCome" name="visitOutCome" class="dropdown">
<option value="">যে কোন একটি নির্বাচন করুন</option>
<option value="1">সম্পন্ন</option>
<option value="2">আংশিক সম্পন্ন</option>
<option value="3">শিশু সাময়িক অনুপস্থিত</option>
<option value="4">পরিবার স্থায়ীভাবে স্থানান্তরিত</option>
<option value="5">শিশু অসুস্থ</option>
<option value="6">শিশু মারা গিয়েছে</option>
<option value="7">সম্মতি প্রত্যাহার</option>
<option value="9">অন্যান্য</option>
</select>
</div>

<div style="height:auto; width:100%; float:left; margin-top:2vw; font-size:3vw; overflow:hidden;">
<input type="text" name="VisitO" id="VisitO" class="inputArea" style="width:10vw; display:none;"/>
<input type="date" name="deathDt" id="deathDt" class="inputArea" style="width:30vw; display:none;"/>
</div>

</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next14" onClick="part3Back();" name="next14" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next4" onClick="part5();" name="next2" class="dirButton" /> 
</div><!--nxt pre button end-->
</fieldset><!--part four end -->




<fieldset id="part5" class="fieldset" style="display:none; overflow:hidden;"><!--part five-->

<div id="Q3a1" style="width:100%; float:left; margin-bottom:2vw;">
<div id="collector_one" style="height:auto; width:50vw; float:left; font-size:2.5vw;">প্রথম ডাটা কালেক্টর এর আইডি</div>
<div style="height:auto; width:30vw; float:left;"><input onFocus="MesTime1st();" type="text" name="Q32a" id="Q32a" class="inputArea"/></div>
</div>

<div id="Q3a2" style="width:100%; float:left; margin-bottom:2vw; display:none;">
<div id="collector_two" style="height:auto; width:50vw; float:left; font-size:2.5vw; display:;">দ্বিতীয় ডাটা কালেক্টর এর আইডি</div>
<div style="height:auto; width:30vw; float:left;"><input onFocus="MesTime2nd();" type="text" name="Q32b" id="Q32b" class="inputArea" style="display:;"/>
</div>
</div>



<div id="Q3b1" style="width:100%; float:left; margin-bottom:2vw;">
<div id="start_one" style="height:auto; width:50vw; float:left; font-size:2.5vw;">প্রথম পরিমাপ শুরুর সময়</div>
<div style="height:auto; width:30vw; float:left;"><input readonly type="text" name="Q33a" id="Q33a" class="inputArea"/>
</div>
</div>

<div id="Q3b2" style="width:100%; float:left; display:none;">
<div id="start_two" style="height:auto; width:50vw; float:left; font-size:2.5vw; display:;">দ্বিতীয় পরিমাপ শুরুর সময়</div>
<div style="height:auto; width:30vw; float:left;"><input readonly type="text" name="Q33b" id="Q33b" class="inputArea" style="display:;"/>
</div>
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next5" onClick="part4Back();" name="next5" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next5" onClick="part6();" name="next5" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part five end -->


<fieldset id="part6" class="fieldset" style="display:none; overflow: hidden;"><!--part six-->
<legend style="font-size:1.8vw;">ওজন TANITA BD-585</legend>
<div id="Q34_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
প্রাথম তথ্য সংগ্রহকারী</div> 
<div id="Q34_2nd" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
দ্বিতীয় তথ্য সংগ্রহকারী</div> 

<div id="Q34a" style="width:100%; float:left;">
<div style="width:25vw; float:left; font-size:2.5vw;">প্রাথমিক পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q341a" id="Q341a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q341b" id="Q341b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q341c" id="Q341c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q34b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">দ্বিতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q342a" id="Q342a" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q342b" id="Q342b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q342c" id="Q342c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q34c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">তৃতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q343a" id="Q343a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q343b" id="Q343b" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q343c" id="Q343c" class="mes"/></div> 
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next6" onClick="part5Back();" name="next6" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next6" onClick="part7();" name="next6" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part six end -->




<fieldset id="part7" class="fieldset" style="display:none; overflow: hidden;"><!--part seven-->
<legend style="font-size:1.8vw;">ওজন SECA 874dr</legend>
<div id="Q35_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
প্রাথম তথ্য সংগ্রহকারী</div> 
<div id="Q35_2nd" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
দ্বিতীয় তথ্য সংগ্রহকারী</div> 

<div id="Q35a" style="width:100%; float:left;">
<div style="width:25vw; float:left; font-size:2.5vw;">প্রাথমিক পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q351a" id="Q351a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q351b" id="Q351b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q351c" id="Q351c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q35b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">দ্বিতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q352a" id="Q352a" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q352b" id="Q352b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q352c" id="Q352c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q35c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">তৃতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q353a" id="Q353a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q353b" id="Q353b" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q353c" id="Q353c" class="mes"/></div> 
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next7" onClick="part6Back();" name="next7" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next7" onClick="part8();" name="next7" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part seven end -->




<fieldset id="part8" class="fieldset" style="display:none; overflow: hidden;"><!--part eight-->
<legend style="font-size:1.8vw;">মাথার পরিধি</legend>

<div id="Q36_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
প্রাথম তথ্য সংগ্রহকারী</div> 
<div id="Q36_2nd" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
দ্বিতীয় তথ্য সংগ্রহকারী</div> 

<div id="Q36a" style="width:100%; float:left;">
<div style="width:25vw; float:left; font-size:2.5vw;">প্রাথমিক পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q361a" id="Q361a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q361b" id="Q361b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q361c" id="Q361c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q36b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">দ্বিতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q362a" id="Q362a" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q362b" id="Q362b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q362c" id="Q362c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q36c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">তৃতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q363a" id="Q363a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q363b" id="Q363b" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q363c" id="Q363c" class="mes"/></div> 
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next8" onClick="part7Back();" name="next8" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next8" onClick="part9();" name="next8" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part eight end -->



<fieldset id="part9" class="fieldset" style="display:none; overflow: hidden;"><!--part nine-->
<legend style="font-size:1.8vw;">মধ্য বাহুর উপরিভাগ পরিধি</legend>

<div id="Q37_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
প্রাথম তথ্য সংগ্রহকারী</div> 
<div id="Q37_2nd" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
দ্বিতীয় তথ্য সংগ্রহকারী</div> 

<div id="Q37a" style="width:100%; float:left;">
<div style="width:25vw; float:left; font-size:2.5vw;">প্রাথমিক পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q371a" id="Q371a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q371b" id="Q371b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q371c" id="Q371c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q37b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">দ্বিতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q372a" id="Q372a" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q372b" id="Q372b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q372c" id="Q372c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q37c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">তৃতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q373a" id="Q373a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q373b" id="Q373b" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q373c" id="Q373c" class="mes"/></div> 
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next9" onClick="part8Back();" name="next9" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next9" onClick="part10();" name="next9" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part nine end -->


<fieldset id="part10" class="fieldset" style="display:none; overflow: hidden;"><!--part ten-->
<legend style="font-size:1.8vw;">দৈর্ঘ্য / উচ্চতা</legend>

<div id="Q38_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
প্রাথম তথ্য সংগ্রহকারী</div> 
<div id="Q38_2nd" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:2vw; margin-top:1vw; display:none;">
দ্বিতীয় তথ্য সংগ্রহকারী</div> 

<div id="Q38a" style="width:100%; float:left;">
<div style="width:25vw; float:left; font-size:2.5vw;">প্রাথমিক পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q381a" id="Q381a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q381b" id="Q381b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q381c" id="Q381c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q38b" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">দ্বিতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q382a" id="Q382a" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q382b" id="Q382b" class="mes" style="display:none;"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q382c" id="Q382c" class="mes" style="display:none;"/></div> 
</div>

<div id="Q38c" style="width:100%; float:left; margin-top:3vw; display:none;">
<div style="width:25vw; float:left; font-size:2.5vw;">তৃতীয় পরিমাপ</div> 
<div style="width:20vw; float:left;"><input type="text" name="Q383a" id="Q383a" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q383b" id="Q383b" class="mes"/></div> 
<div style="width:20vw; float:left;"><input type="text" name="Q383c" id="Q383c" class="mes"/></div> 
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next10" onClick="part9Back();" name="next10" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next10" onClick="calPart5();" name="next10" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part ten end -->




<fieldset id="part11" class="fieldset" style="display:none; overflow: hidden;"><!--part eleven-->
<legend style="font-size:1.8vw;">পরিমাপ শেষ</legend>

<div id="Q39_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:1vw; margin-top:1vw; display:;">
প্রাথম তথ্য সংগ্রহকারী</div> 

<div id="Q39a" style="width:100%; float:left;">
<div style="width:30vw; float:left; font-size:2.5vw;">পরিমাপ শেষ করার সময়</div> 
<div style="width:20vw; float:left;"><input readonly type="text" name="endTime1st" id="endTime1st" class="mes"/></div> 
</div>


<div id="Q39_2nd" style="width:30vw; float:left; font-size:2.5vw; margin-bottom:1vw; margin-top:3vw; display:;">
দ্বিতীয় তথ্য সংগ্রহকারী</div> 

<div id="Q39b" style="width:100%; float:left; margin-top:0vw; display:;">
<div style="width:30vw; float:left; font-size:2.5vw;">পরিমাপ শেষ করার সময়</div> 
<div style="width:20vw; float:left;"><input readonly type="text" name="endTime2nd" id="endTime2nd" class="mes" style="display:;"/></div> 

</div>

<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next11" onClick="part9Back();" name="next11" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next11" onClick="part12();" name="next11" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part eleven end -->





<fieldset id="part12" class="fieldset" style="display:none; overflow: hidden;"><!--part twelve-->
<legend style="font-size:1.8vw;"></legend>

<div id="Q38_1st" style="width:25vw; float:left; font-size:2.5vw; margin-bottom:1vw; margin-top:1vw; display:;">
যদি কোন কারনে পরিমাপ না নেয়া হয়।</div> 

<div id="Q38a" style="width:100%; float:left;">
<div style="width:50%; float:left;"><input style="width:100%;"  type="text" name="Q311" id="Q311" class="mes"/></div> 
</div>


<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input type="button" value="আগের প্রশ্ন" id="next13" onClick="part9Back();" name="next13" class="dirButton" /> 
<input type="button" value="পরের প্রশ্ন" id="next13" onClick="part13();" name="next13" class="dirButton" /> 
</div><!--nxt pre button end-->

</fieldset><!--part twelve end -->



<fieldset id="part13" class="fieldset" style="display:none; overflow: hidden;"><!--part thirteen-->
<legend style="font-size:1.8vw;"></legend>

<form action="index.php">
<div style="width:100%; float:left; margin-top:1vw; text-align:center;"><!--nxt pre button-->
<input style="width:30vw;" type="submit" value="SAVE" id="next13" onClick="part9Back();" name="next13" class="dirButton" /> 
</div><!--nxt pre button end-->
</form>

</fieldset><!--part thirteen end -->


</body>
</html>

