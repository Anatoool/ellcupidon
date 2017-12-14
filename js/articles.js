var numberLoad = 1;
var tableLoad = document.getElementsByClassName('indicator')[0].id;

function funcBefore(){
	document.getElementsByClassName('loading')[0].style.display = "block";
	document.getElementsByClassName('ajax-load-button')[0].style.display = "none";
}

function funcSuccess(data){//data - информация с контента, вернувшаяся обратно 
	var count = 0;
	for (var key in data) {
  		count++;
	}
	
//	alert(count);
//	alert(data.length);
	var parentElem = document.getElementById("portfolio-projects-container");
	
	var pc = null;
	var pimg = null;
	var img = null;
	var pinfo = null;
	var h2 = null;
	var pd = null;
	var link = null;
	var db = null;
	
	var dataArr = [];
	var cou = 0;
	
	var src = null;
	
	var path = null;
	var linkButton = null;
		if (tableLoad == "m") {
			path = "furniture";
			linkButton = "./mebel-project.php?id=";
		}  else {
			path = "design";
			linkButton = "./design-project.php?id=";
		}

	
	for (var i = 0; i < count; i++) {
		
		cou = 0;
		for (var key in data[i]) {
			dataArr[cou] = data[i][key];
  			cou++;
		}		
		
		pc = document.createElement('div');
		pc.className = "project-container";
		parentElem.appendChild(pc);
		
		pimg = document.createElement('div');
		pimg.className = "project-img";
		pc.appendChild(pimg);
		
		img = document.createElement('img');
		src = "./portfolio/"+path+"/"+dataArr[0]+"/"+dataArr[1]+"."+dataArr[2];
		img.src = src;
		img.alt = "Проект";
		pimg.appendChild(img);
		
		pinfo = document.createElement('div');
		pinfo.className = "project-info";
		pc.appendChild(pinfo);
		
		h2 = document.createElement('h2');
		h2.className = "project-caption";
		h2.innerHTML = dataArr[3];
		pinfo.appendChild(h2);
		
		pd = document.createElement('div');
		pd.className = "project-description";
		pd.innerHTML = dataArr[4];
		pinfo.appendChild(pd);
		
		link = document.createElement('a');
		link.href = linkButton+dataArr[0];
		link.target = "_blank";
		pinfo.appendChild(link);
		
		db = document.createElement('div');
		db.className = "details-button";
		db.innerHTML = "Подробнее";
		link.appendChild(db);
		
	}
	
	numberLoad++;
	
	if (count < 10) {
		document.getElementsByClassName('loading')[0].style.display = "none";
		document.getElementsByClassName('ups')[0].style.display = "block";
	} else {
		document.getElementsByClassName('loading')[0].style.display = "none";
		document.getElementsByClassName('ajax-load-button')[0].style.display = "block";
	}
}



$(document).ready (function (){
	
    $(".ajax-load-button").on("click", function() {       
        $.ajax ({
            url: "./functions/articles.php",
            type: "POST",
            data: ({number: numberLoad, table: tableLoad}),
            dataType: "json",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });
	
});