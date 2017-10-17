function changeTest(obj){
var dpID =obj.options[obj.selectedIndex].value;
	if (obj.options[obj.selectedIndex].value != false){
		$.post("displaydetails.php",
		{
			dpID:dpID
		},
		function(data, status){
			if (status="success"){
				var obj = JSON.parse(data);
				var result = Object.keys(obj).map(function(key) {
				  return [Number(key), obj[key]];
				});
				var htmlContent='<table><tr><th>Switch Number</th><th>' + result[0][0] + '</th></tr>';
				htmlContent += '<tr>';
				for(i in result[0][1]) {
					str=i;
					
					htmlContent += '<td><table><tr><th>' + str.toUpperCase() + '</th></tr><tr><td>' +  result[0][1][i]+ '</td></tr></table></td>';
					
				}
				htmlContent += '</tr>';
				htmlContent += '</table>';
				$('#demo').html(htmlContent);
			}
		});
	}
	
	if (obj.options[obj.selectedIndex].value != false){
		$.post("flowdetails.php",
		{
			dpID:dpID
		},
		function(data, status){
			if (status="success"){
				console.log(data);			
				var obj = JSON.parse(data);
				var result = Object.keys(obj).map(function(key) {
					return [Number(key), obj[key]];
				});
				var htmlContent='<table><tr><th>Switch Number</th><th>' + result[0][0] + '</th></tr>';
				for(i in result[0][1]) {
					htmlContent += '<tr>';
					for(j in result[0][1][i]) {
						str=j;
						if(typeof result[0][1][i][j] ==="string" || typeof result[0][1][i][j] ==="number" ){
							htmlContent += '<td><table><tr><th>' + str.toUpperCase() + '</th></tr><tr><td>' +  result[0][1][i][j] + '</td></tr></table></td>';
						}else if(typeof result[0][1][i][j] == "object"){
							tmpArr= result[0][1][i][j];
							if (tmpArr.length >0){
								htmlContent += '<td><table><tr><td>' + str.toUpperCase() + '</td></tr><tr><td>';
								for(itemInd in tmpArr){
									htmlContent +='<span>' + tmpArr[itemInd] + '</span>';
								}
								htmlContent +='</td></tr></table></td>';
							}
							
						}
					}
					htmlContent += '</tr>';
				}
				htmlContent += '</table>';
				$('#demo1').html(htmlContent);
			}
		});
	}
	
		if (obj.options[obj.selectedIndex].value != false){
		$.post("portdetails.php",
		{
			dpID:dpID
		},
		function(data, status){
			if (status="success"){
				var obj = JSON.parse(data);
				var result = Object.keys(obj).map(function(key) {
					return [Number(key), obj[key]];
				});
				var htmlContent='<table><tr><th>Switch Number</th><th>' + result[0][0] + '</th></tr>';

				for(i in result[0][1]) {
					htmlContent += '<tr>';
					for(j in result[0][1][i]) {
						str=j;
						htmlContent += '<td><table><tr><th>' + str.toUpperCase() + '</th></tr><tr><td>' +  result[0][1][i][j] + '</td></tr></table></td>';
					}
					htmlContent += '</tr>';
				}
				htmlContent += '</table>';
				$('#demo2').html(htmlContent);
			}
		});
	}
	
	if (obj.options[obj.selectedIndex].value != false){
		$.post("portdescdetails.php",
		{
			dpID:dpID
		},
		function(data, status){
			if (status="success"){
				
				var obj = JSON.parse(data);
				var result = Object.keys(obj).map(function(key) {
					return [Number(key), obj[key]];
				});
				var htmlContent='<table><tr><th>Switch Number</th><th>' + result[0][0] + '</th></tr>';

				for(i in result[0][1]) {
					htmlContent += '<tr>';
					for(j in result[0][1][i]) {
						str=j;
						htmlContent += '<td><table><tr><th>' + str.toUpperCase() + '</th></tr><tr><td>' +  result[0][1][i][j] + '</td></tr></table></td>';
					}
					htmlContent += '</tr>';
				}
				htmlContent += '</table>';
				$('#demo3').html(htmlContent);
			}
		});
	}
	
	if (obj.options[obj.selectedIndex].value != false){
		$.post("tabledetails.php",
		{
			dpID:dpID
		},
		function(data, status){
			if (status="success"){
				
				var obj = JSON.parse(data);
				var result = Object.keys(obj).map(function(key) {
					return [Number(key), obj[key]];
				});
				var htmlContent='<table><tr><th>Switch Number</th><th>' + result[0][0] + '</th></tr>';

				for(i in result[0][1]) {
					htmlContent += '<tr>';
					for(j in result[0][1][i]) {
						str=j;
						htmlContent += '<td><table><tr><th>' + str.toUpperCase() + '</th></tr><tr><td>' +  result[0][1][i][j] + '</td></tr></table></td>';
					}
					htmlContent += '</tr>';
				}
				htmlContent += '</table>';
				$('#demo4').html(htmlContent);
			}
		});
	}
	
	if (obj.options[obj.selectedIndex].value != false){
		$.post("groupdetails.php",
		{
			dpID:dpID
		},
		function(data, status){
			if (status="success"){
				
				var obj = JSON.parse(data);
				var result = Object.keys(obj).map(function(key) {
					return [Number(key), obj[key]];
				});
				var htmlContent='<table><tr><th>Switch Number</th><th>' + result[0][0] + '</th></tr>';

				for(i in result[0][1]) {
					htmlContent += '<tr>';
					for(j in result[0][1][i]) {
						str=j;
						htmlContent += '<td><table><tr><th>' + str.toUpperCase() + '</th></tr><tr><td>' +  result[0][1][i][j] + '</td></tr></table></td>';
					}
					htmlContent += '</tr>';
				}
				htmlContent += '</table>';
				$('#demo5').html(htmlContent);
			}
		});
	}
	
}

