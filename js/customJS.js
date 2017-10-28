	var isInit = true;
	window.onload=function() {
		Load();
	}		
	
	var xml = null;	
	var originXmlData = [];
	var searchSalaryResult = []; //for search year use
	var markers = [];//final output result
	var html = "";	
	var map;
	function Load()
	{
		try{					
			downloadUrl("phpgetadvcontentbig5.xml", function(data) {
				xml = data.responseXML;			
				originXmlData = xml.documentElement.getElementsByTagName("marker");									
				if(markers.length == 0) {
					markers = originXmlData;
					ConstructLayout(markers);
				}				
			});
			$(function() {
				latlng = new google.maps.LatLng(22.398391,114.20067);
				var options = {
					zoom: 17,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
		
				map = new google.maps.Map(document.getElementById("googleMap"), options);	
			});
		} 
		catch(err) {
			//alert(err);
		}
		

	}	

	var selectedSubject = [];
	var strSelectedSubject = "";	
	var searchSubject = false;
	
	var selectedLocation = [];
	var strSelectedLocation = "";
	var searchLocation = false;
	
	var year1 = "1";
	var year2 = "7";
	var salary1 = 50;
	var salary2 = 400;
	
    $(document).ready(function() {
        $('#subject').multiselect({
			onChange: function(element, checked) {
				if(checked === true) {
					//array_push(selectedSubject, element.val());
					selectedSubject.push(element.val());
				}
				else
				{
					for(var i = selectedSubject.length -1; i >=0; i--)
					{
						if(selectedSubject[i] === element.val())
						{
							selectedSubject.splice(i, 1);						
						}
					}
				}
				strSelectedSubject = "";
				for(var i = 0; i < selectedSubject.length; i++)
				{
					strSelectedSubject += selectedSubject[i]+",";
				}	
				if(strSelectedSubject != "")
				{
					searchSubject = true;
				}
				else
				{
					searchSubject = false;
				}
				masterSearch();				
			}			
		});
		
		$('#area2').multiselect({
			onChange: function(element, checked) {
				if(checked === true) {					
					selectedLocation.push(element.val());
				}
				else
				{
					for(var i = selectedLocation.length -1; i >=0; i--)
					{
						if(selectedLocation[i] === element.val())
						{
							selectedLocation.splice(i, 1);						
						}
					}
				}
				strSelectedLocation = "";
				for(var i = 0; i < selectedLocation.length; i++)
				{
					strSelectedLocation += selectedLocation[i]+",";
				}	
				if(strSelectedLocation != "")
				{
					searchLocation = true;
				}
				else
				{
					searchLocation = false;
				}
				masterSearch();
			}			
		});
	
		$('#area').multiselect({
            onChange: function(element, checked) {
				if(checked === true) {
					document.getElementById("area2").options.length = 0;
                    if(element.val() == "1")
					{
						$('#area2').append('<option value="上水">上水</option>');
						$('#area2').append('<option value="粉嶺">粉嶺</option>');
						$('#area2').append('<option value="大圍">大圍</option>');
						$('#area2').append('<option value="沙田">沙田</option>');
						$('#area2').append('<option value="大埔">大埔</option>');
						$('#area2').append('<option value="元朗">元朗</option>');
						$('#area2').append('<option value="天水圍">天水圍</option>');
						$('#area2').append('<option value="屯門">屯門</option>');
						$('#area2').append('<option value="東涌">東涌</option>');
						$('#area2').append('<option value="長洲">長洲</option>');
						$('#area2').append('<option value="青衣">青衣</option>');       
						$('#area2').append('<option value="荃灣">荃灣</option>');
						$('#area2').append('<option value="葵涌">葵涌</option>');
						$('#area2').append('<option value="馬鞍山">馬鞍山</option>');
						$('#area2').append('<option value="深井">深井</option>');
						$('#area2').append('<option value="離島">離島</option>');
					}
					else if(element.val() == "2")
					{
						$('#area2').append('<option value="九龍城">九龍城</option>');
						$('#area2').append('<option value="何文田">何文田</option>');
						$('#area2').append('<option value="土瓜灣">土瓜灣</option>');	
						$('#area2').append('<option value="紅磡">紅磡</option>');	
						$('#area2').append('<option value="九龍塘">九龍塘</option>');	
						$('#area2').append('<option value="樂富">樂富</option>');	
						$('#area2').append('<option value="黃大仙">黃大仙</option>');	
						$('#area2').append('<option value="鑽石山">鑽石山</option>');	
						$('#area2').append('<option value="彩虹">彩虹</option>');	
						$('#area2').append('<option value="牛頭角">牛頭角</option>');
						$('#area2').append('<option value="九龍灣">九龍灣</option>');	
						$('#area2').append('<option value="觀塘">觀塘</option>');
						$('#area2').append('<option value="秀茂坪">秀茂坪</option>');	
						$('#area2').append('<option value="藍田">藍田</option>');	
						$('#area2').append('<option value="油塘">油塘</option>');
						$('#area2').append('<option value="將軍澳">將軍澳</option>');
						$('#area2').append('<option value="坑口">坑口</option>');
						$('#area2').append('<option value="寶林">寶林</option>');		
						$('#area2').append('<option value="西貢">西貢</option>');	
					}
					else if(element.val() == "3")
					{
						$('#area2').append('<option value="港島南">港島南</option>');
						$('#area2').append('<option value="西環">西環</option>');
						$('#area2').append('<option value="半山">半山</option>');
						$('#area2').append('<option value="上環">上環</option>');
						$('#area2').append('<option value="灣仔">灣仔</option>');
						$('#area2').append('<option value="銅鑼灣">銅鑼灣</option>');
						$('#area2').append('<option value="跑馬地">跑馬地</option>');
						$('#area2').append('<option value="大坑">大坑</option>');
						$('#area2').append('<option value="天后">天后</option>');
						$('#area2').append('<option value="北角">北角</option>');
						$('#area2').append('<option value="太古">太古</option>');
						$('#area2').append('<option value="西灣河">西灣河</option>');
						$('#area2').append('<option value="筲箕灣">筲箕灣</option>');
						$('#area2').append('<option value="杏花村">杏花村</option>');
						$('#area2').append('<option value="柴灣">柴灣</option>');
						$('#area2').append('<option value="小西灣">小西灣</option>');
						$('#area2').append('<option value="赤柱">赤柱</option>');
					}
					$('#area2').multiselect('rebuild');
					document.getElementById("area2Div").style.display = '';
					
                }
                else if(checked === false) {
                    document.getElementById("area2Div").style.display = 'none';
                }
            }
        });	

        $('#studentSubject').multiselect({
			onChange: function(element, checked) {
				if(checked === true) {					
					selectedStudentSubjectArray.push(element.val());
				}
				else
				{
					for(var i = selectedStudentSubjectArray.length -1; i >=0; i--)
					{
						if(selectedStudentSubjectArray[i] === element.val())
						{
							selectedStudentSubjectArray.splice(i, 1);						
						}
					}
				}
				selectedStudentSubject = "";
				for(var i = 0; i < selectedStudentSubjectArray.length; i++)
				{
					selectedStudentSubject += selectedStudentSubjectArray[i]+",";
				}	
				$("#hiddenStudentSubject").value(selectedStudentSubject);
			}				
		});	
				
		$('#studentArea').multiselect({
            onChange: function(element, checked) {
				if(checked === true) {
					document.getElementById("studentArea2").options.length = 0;
                    if(element.val() == "1")
					{
						$('#studentArea2').append('<option value="上水">上水</option>');
						$('#studentArea2').append('<option value="粉嶺">粉嶺</option>');
						$('#studentArea2').append('<option value="大圍">大圍</option>');
						$('#studentArea2').append('<option value="沙田">沙田</option>');
						$('#studentArea2').append('<option value="大埔">大埔</option>');
						$('#studentArea2').append('<option value="元朗">元朗</option>');
						$('#studentArea2').append('<option value="天水圍">天水圍</option>');
						$('#studentArea2').append('<option value="屯門">屯門</option>');
						$('#studentArea2').append('<option value="東涌">東涌</option>');
						$('#studentArea2').append('<option value="長洲">長洲</option>');
						$('#studentArea2').append('<option value="青衣">青衣</option>');       
						$('#studentArea2').append('<option value="荃灣">荃灣</option>');
						$('#studentArea2').append('<option value="葵涌">葵涌</option>');
						$('#studentArea2').append('<option value="馬鞍山">馬鞍山</option>');
						$('#studentArea2').append('<option value="深井">深井</option>');
						$('#studentArea2').append('<option value="離島">離島</option>');
					}
					else if(element.val() == "2")
					{
						$('#studentArea2').append('<option value="九龍城">九龍城</option>');
						$('#studentArea2').append('<option value="何文田">何文田</option>');
						$('#studentArea2').append('<option value="土瓜灣">土瓜灣</option>');	
						$('#studentArea2').append('<option value="紅磡">紅磡</option>');	
						$('#studentArea2').append('<option value="九龍塘">九龍塘</option>');	
						$('#studentArea2').append('<option value="樂富">樂富</option>');	
						$('#studentArea2').append('<option value="黃大仙">黃大仙</option>');	
						$('#studentArea2').append('<option value="鑽石山">鑽石山</option>');	
						$('#studentArea2').append('<option value="彩虹">彩虹</option>');	
						$('#studentArea2').append('<option value="牛頭角">牛頭角</option>');
						$('#studentArea2').append('<option value="九龍灣">九龍灣</option>');	
						$('#studentArea2').append('<option value="觀塘">觀塘</option>');
						$('#studentArea2').append('<option value="秀茂坪">秀茂坪</option>');	
						$('#studentArea2').append('<option value="藍田">藍田</option>');	
						$('#studentArea2').append('<option value="油塘">油塘</option>');
						$('#studentArea2').append('<option value="將軍澳">將軍澳</option>');
						$('#studentArea2').append('<option value="坑口">坑口</option>');
						$('#studentArea2').append('<option value="寶林">寶林</option>');		
						$('#studentArea2').append('<option value="西貢">西貢</option>');	
					}
					else if(element.val() == "3")
					{
						$('#studentArea2').append('<option value="港島南">港島南</option>');
						$('#studentArea2').append('<option value="西環">西環</option>');
						$('#studentArea2').append('<option value="半山">半山</option>');
						$('#studentArea2').append('<option value="上環">上環</option>');
						$('#studentArea2').append('<option value="灣仔">灣仔</option>');
						$('#studentArea2').append('<option value="銅鑼灣">銅鑼灣</option>');
						$('#studentArea2').append('<option value="跑馬地">跑馬地</option>');
						$('#studentArea2').append('<option value="大坑">大坑</option>');
						$('#studentArea2').append('<option value="天后">天后</option>');
						$('#studentArea2').append('<option value="北角">北角</option>');
						$('#studentArea2').append('<option value="太古">太古</option>');
						$('#studentArea2').append('<option value="西灣河">西灣河</option>');
						$('#studentArea2').append('<option value="筲箕灣">筲箕灣</option>');
						$('#studentArea2').append('<option value="杏花村">杏花村</option>');
						$('#studentArea2').append('<option value="柴灣">柴灣</option>');
						$('#studentArea2').append('<option value="小西灣">小西灣</option>');
						$('#studentArea2').append('<option value="赤柱">赤柱</option>');
					}
					$('#studentArea2').multiselect('rebuild');
					document.getElementById("studentArea2Div").style.display = '';
					
                }
                else if(checked === false) {
                    document.getElementById("studentArea2").style.display = 'none';
                }
            }
        });		

        $('#studentYear').multiselect({
			onChange: function(element, checked) {
				if(checked === true) {					
					selectedStudentYear = element.val();
					$("#hiddenStudentYear").value(selectedStudentYear);
				}
			}				
		});			
    });

	var yearMap = ["K.1", "K.2", "K.3", "P.1", "P.2", "P.3", "P.4", "P.5", "P.6", "F.1", "F.2", "F.3", "F.4", "F.5", "F.6", "F.7"];
	$(document).ready(function() {
		$("#keywordSearch").keyup(function() {
			SearchKeyword($("#keywordSearch").val());
		});			
	
		$( "#slider-range" ).slider({
			range: true,
			min: 50,
			max: 400,
			step: 10,
			values: [ 50, 400 ],	
			slide: function(event, ui) {	
				//SearchSalary(ui.values[0], ui.values[1]);
				salary1 = ui.values[0];
				salary2 = ui.values[1];
				$( "#amount" ).val( "$" + ui.values[0] + " - $" + ui.values[1]);	
				masterSearch();				
			},
			change: function(event, ui) { 
				//SearchSalary(ui.values[0], ui.values[1]);
				salary1 = ui.values[0];
				salary2 = ui.values[1];
				$( "#amount" ).val( "$" + ui.values[0] + " - $" + ui.values[1]);	
				masterSearch();
			}
		});	

		$( "#slider-year" ).slider({
			range: true,
			min: 0,
			max: yearMap.length - 1,
			values: [ 0, 15 ],			
			change: function( event, ui ) {
				year1 = ui.values[0];
				year2 = ui.values[1];
				$( "#year" ).val(yearMap[year1] + " - " + yearMap[year2] );
				//SearchYear(ui.values[0], ui.values[1]);
				masterSearch();
			}
		});

		$('#myModal').on('shown.bs.modal', function() {
			google.maps.event.trigger(map, 'resize');
		});
		
		$('#applyBtn').on('click', function(evt) {
			evt.stopPropagation();
								var sIntro = "#subSelfIntro";
								var sTime = "#subTime";
								var sneed_salary ="#need_salary";
								$.ajax({
									type: "POST",
									url: 'pureTutorSubmitJob.php',
									data:{
										classID: selectedCaseID,
										selfIntro: $("#subSelfIntro").val(),
										job_number: $("#job_number").val(),
										case_content1: $("#case_content1").val(),
										mobile: $("#mobile").val(),
										CName: $("#CName").val(),
										need_salary: $("#need_salary").val(),
										mon: $("#mon").val(),
										tue: $("#tue").val(),
										wed: $("#wed").val(),
										thur: $("#thur").val(),
										fri: $("#fri").val(),
										sat: $("#sat").val(),
										sun: $("#sun").val(),
										tutorID: ''
									},
									success: function(data)
									{	
										alert(" KITS-TUTOR 已收到你的應徵, 有消息會立即通知");	
										$('#myModal').modal('hide');
									}
								});			
		});
	});
	
	function masterSearch()
	{
		var list = [];
		var filter1 = [];
		var filter2 = [];
		var filter3 = [];
		var filter4 = [];
		var filterList = [];
		
		//document.getElementById("debug").innerHTML = year1 + " " + year2;
		try{
			for (var i = 0; i < originXmlData.length; i++) {
				var hourrate = originXmlData[i].getAttribute("job_hourrate");		 
				if(hourrate != "")
				{
					if(hourrate >= salary1 && hourrate <= salary2)
					{
						oldNode=xml.getElementsByTagName('marker')[i];
						filter1.push(oldNode);
					}
				}
			}

			for (var i = 0; i < filter1.length; i++) {
				var job_stu_level= filter1[i].getAttribute("job_stu_level");
				var job_number = filter1[i].getAttribute("job_number");
				
				for(var j = year1; j <= year2; j++) {
					if(job_stu_level.search(yearMap[j]) !== -1) {					
						for(var k = 0; k < originXmlData.length; k++) {
							var thisJob_number = originXmlData[k].getAttribute("job_number");
							if(thisJob_number == job_number) {
								oldNode=xml.getElementsByTagName('marker')[k];
								filter2.push(oldNode);
							}
						}						
					}
				}
			}			
			
			if(filter2.length != 0)
			{
				filterList = filter2;
			}
			else if(filter2.length == 0 && filter1.length != 0)
			{
				filterList = filter1;
			}
			else if(filter2.length == 0 && filter1.length == 0)
			{
				filterList = originXmlData;
			}
			
			if(searchSubject == true)
			{
				var splitStr = strSelectedSubject.split(","); 
				
				for (var i = 0; i < filterList.length; i++) {							
					var job_stu_subject = filterList[i].getAttribute("job_stu_subject");	
					var job_number = filterList[i].getAttribute("job_number");	
					for(var j = 0; j < splitStr.length; j++) {
						if(splitStr[j] != "")
						{						
							if( job_stu_subject.indexOf(splitStr[j]) != -1 ) {						
								for(var k = 0; k < originXmlData.length; k++) {
									var thisJob_number = originXmlData[k].getAttribute("job_number");
									if(thisJob_number == job_number) {
										oldNode=xml.getElementsByTagName('marker')[k];
										filter3.push(oldNode);
									}
								}
							}
						}
					}
				}
				if(filter3.length != 0)
				{
					filterList = filter3;
				}
			}
			
			if( searchLocation == true)
			{
				var splitStr = strSelectedLocation.split(","); 
				
				for (var i = 0; i < filterList.length; i++) {							
					var district = filterList[i].getAttribute("job_district");
					var job_number = filterList[i].getAttribute("job_number");	
					for(var j = 0; j < splitStr.length; j++) {
						if(splitStr[j] != "")
						{						
							if( district.indexOf(splitStr[j]) != -1 ) {						
								for(var k = 0; k < originXmlData.length; k++) {
									var thisJob_number = originXmlData[k].getAttribute("job_number");
									if(thisJob_number == job_number) {
										oldNode=xml.getElementsByTagName('marker')[k];
										filter4.push(oldNode);
									}
								}
							}
						}
					}
				}	
				filterList = filter4;
				
			}
			list = filterList;
			ConstructLayout(list);
		}
		catch(err)
		{
		
		}
	}
	

	
	function SearchKeyword(str)
	{
		try{	
			document.getElementById("content").innerHTML = '';
			var list = [];
			var splitStr = str.split(","); 
			for (var i = 0; i < originXmlData.length; i++) {							
				var job_stu_subject = originXmlData[i].getAttribute("job_stu_subject");	
				var district = originXmlData[i].getAttribute("job_district");
				var address = originXmlData[i].getAttribute("job_address");
				var job_number = originXmlData[i].getAttribute("job_number");			
				for(var j = 0; j < splitStr.length; j++) {
					if( job_stu_subject.indexOf(splitStr[j]) > -1 || district.indexOf(splitStr[j]) > -1 ) {	
						oldNode=xml.getElementsByTagName('marker')[i];
						list.push(oldNode);
					}
				}
			}
			markers = list;
			ConstructLayout(markers);
		}
		catch(err){
			//alert(err);
		}		
	}
	

	
	function ConstructLayout(thisArray)
	{
		html = "";
		try	{
			for (var i = 0; i < thisArray.length; i++) {
			
				var job_number = thisArray[i].getAttribute("job_number");
				var address = thisArray[i].getAttribute("job_address");
				var district = thisArray[i].getAttribute("job_district");
				var hourrate = thisArray[i].getAttribute("job_hourrate");		 
				var job_stu_secondary= thisArray[i].getAttribute("job_stu_secondary");
				var job_stu_subject= thisArray[i].getAttribute("job_stu_subject");
				var job_time= thisArray[i].getAttribute("job_time");
				var job_stu_sex= thisArray[i].getAttribute("job_stu_sex");
				var job_stu_level= thisArray[i].getAttribute("job_stu_level");
				var job_rate_type = thisArray[i].getAttribute("job_rate_type");
				var job_post_date = thisArray[i].getAttribute("job_post_date");
				var job_lat = thisArray[i].getAttribute("lat");
				var job_lng = thisArray[i].getAttribute("lng");
				
				if(i%2==0) {
					var table_bgcolor = "#EAEAEA";
				}
				else {
					var table_bgcolor = "#FFFFFF";
				}
				
				html += "<tr >";
			
				html += "<td align = 'left' valign = 'middle' style = 'color:#000000'>";
				var openUrl = "javascript: CheckLogin('" + job_number + "', '" + district + address+ job_stu_level +"("+job_stu_sex+")"+job_stu_subject+","+job_time+","+hourrate+job_rate_type +"', " + job_lat + ", " + job_lng + ");";
				//html += "<a href = '#' data-toggle='modal' data-target='#myModal'>";
				html += "<a href = '#' onclick = \"" + openUrl+ "\" name = '"+job_number+"' id = '"+job_number+ "'>";
				html += "<strong>";
				html += district + address;
				html += "</strong>";
				html += "<font color = 'red'><br/><按此應徵></font>";
				html += "</a>";
				
				/*html += "<a href = \"javascript: CheckLogin('" + job_number + "', '" + district + address+ job_stu_level +"("+job_stu_sex+")"+job_stu_subject+","+job_time+","+hourrate+job_rate_type +"', " + job_lat + ", " + job_lng + ");\">";				
				html += "<strong>";
				html += district + address;
				html += "</strong>";
				html += "<font color = 'red'><br/><按此應徵></font></a>";*/
				html += "<br/><font class = 'defaultHideCol'>" + job_post_date + "</font>";
				html += "</td>";
			
				html += "<td>";
				html += job_stu_level + "<font class = 'defaultHideCol'>" + job_stu_sex + "<br/>";
				html += job_stu_subject + "<br/>";
				if(job_stu_secondary!=0 && job_stu_secondary!='') {
					html += "(" + job_stu_secondary + ")";
				}	
				html += "</font>";
				html += "</td>";
				
				html += "<td class = 'defaultOpenCol'>";
				html += job_stu_sex;
				html += "</td>";				
				
				html += "<td class = 'defaultOpenCol'>";
				html += job_stu_subject;
				if(job_stu_secondary!=0 && job_stu_secondary!='') {
					html += "(" + job_stu_secondary + ")";
				}
				html += "</td>";
				
				html += "<td>";
				html += job_time +"<font class = 'defaultHideCol'><br/> " + hourrate +  job_rate_type+ "</font>";
				html += "</td>";

				html += "<td class = 'defaultOpenCol'>";
					html += hourrate +  job_rate_type;
				html += "</td>";					
			
				html += "<td class =  'defaultOpenCol'>";
					html += job_post_date;
				html += "</td>";
				
				html += "</tr>";
							
			}
			html = "<table class='table table-hover' style = 'font-size:9pt;border:2px solid black;'>" + html + "</table>";
			try {
				
				document.getElementById("content").innerHTML  = html;
			}
			catch(err) {
				//alert(err);
			}				
		}
		catch (err)	{
			//alert(err);
		}
		
		var sPageURL = window.location.search.substring(1);
		var sURLVariables = sPageURL.split('&');
		for (var i = 0; i < sURLVariables.length; i++)
		{
			var sParameterName = sURLVariables[i].split('=');
			if (sParameterName[0] == "jobID")
			{
				var jobID = sParameterName[1];

				//$('html,body').animate({scrollTop: aTagPos},0);			
				
			}
		}
		var anchor = document.getElementById(jobID);
		if(anchor != null)
		{
			$(document).ready(function() {
				var aTag = $("a[name='"+ jobID +"']");
				$('html,body').animate({scrollTop: aTag.offset().top},0);
			});			
		}

	}	
	
	function removeDuplicates(inputArray) {
        var outputArray=new Array();
        if(inputArray.length>0){
            jQuery.each(inputArray, function(index, value) {
				if(jQuery.inArray(value, outputArray) == -1){
					outputArray.push(value);
				}
            });
        }           
        return outputArray;
    }		
	
	function Reset()
	{
		try {
			$( "#slider-range" ).slider("values", 0, 50);
			$( "#slider-range" ).slider("values", 1, 400);		
			$("#slider-year").slider('values',0,0);		
			$("#slider-year").slider('values',1,15);	
			$( "#year" ).val("K.1 - F.7");
			$( "#amount" ).val("$50 - $400");	
			$("#keywordSearch").val("");
			ConstructLayout(originXmlData);
		}
		catch(err) {
			//alert(err);
		}
	}
	
	function downloadUrl(url, callback) {
		try {
			var request = window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest;
			request.onreadystatechange = function() {
				if (request.readyState == 4) {
					request.onreadystatechange = doNothing;
					callback(request, request.status);
				}
			};
			request.open('GET', url, true);
			request.send(null);
		}
		catch(err) {
			//alert(err);
		}
	}	
	
	function doNothing() {}
	
	var selectedCaseID = "";
	
	function CheckLogin(job_number, adv, lat, lng)
	{
		selectedCaseID = job_number;
		document.getElementById("job_number").value = selectedCaseID;
		document.getElementById("googleMap").style.display = '';
		document.getElementById("case_content1").value = adv;
		
		$(document).ready(function() {
			try{	
			$('#myModal').modal('show'); 
			$('#myModal').on('shown.bs.modal', function() {
				var focusID = $("#" + job_number);
				$('html,body').animate({scrollTop: focusID.offset().top}, 0);
			});	
				
			if(lat == 0 && lng == 0)
			{
				document.getElementById("googleMap").style.display = 'none';
			}
			else
			{				
				var myLatlng = new google.maps.LatLng(lat, lng);  
				map.setCenter(myLatlng, 17);      
				var marker = new google.maps.Marker({
					position: myLatlng, 
					map: map, 
					title:'',
					icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
				});
				//return false;
			}

			}
			catch(error)
			{
				alert(error);
			}
		});		
	}
	
	function isNumberKey(evt)
    {
		var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
        return true;
    }	

	var selectedStudentSubjectArray = [];
	var selectedStudentSubject = "";
	var selectedStudentYear = "";
	
	function regSubmit()
	{
		if(document.getElementById("studentName").value === "")
		{
			alert("請輸入學生姓名");
			return;
		}
		if(document.getElementById("studentPhone").value === "")
		{
			alert("請輸入聯絡電話");
			return;
		}
		if(document.getElementById("studentArea").value == "0")
		{
			alert("請選擇地區");
			return;
		}
		if(document.getElementById("studentArea2").value == "" || document.getElementById("studentArea2").value == "0")
		{
			alert("請選擇地區");
			return;
		}
		if(document.getElementById("house").value == "")
		{
			alert("請輸入屋苑/街道/屋村");
			return;
		}
		if(selectedStudentSubject == "")
		{
			alert("請選擇科目");
			return;
		}
		document.getElementById("hiddenStudentSubject").value = selectedStudentSubject;
		$("#parentForm").submit();
	}


	