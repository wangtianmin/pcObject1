function toUrl(url, data) {
	var arr = [];
	var time = new Date().getTime();
	data.time = time;
	for(var i in data) {
		var str = encodeURIComponent(i) + "=" + encodeURIComponent(data[i]);
		arr.push(str);
	}
	var str1 = arr.join("&");
	var path = url + "?" + str1;
	return path;
}

function fnAjax(obj) {
	if(obj.dataType =="jsonp"){
		var jsonp = obj.jsonp || "cb";
		fnJsonp(obj.url,obj.data,obj.succFn,jsonp);
		return;
	}
	
	
	
	
	var data = obj.data || {};
	var path = toUrl(obj.url, obj.data);
	var sendType = obj.sendType || "get";
	var succFn = obj.succFn || false;
	var failFn = obj.failFn || false;
	if(window.ActiveXObject) {
		var ajax = new ActiveXObject("MSXML2.XMLHTTP");
	} else if(window.XMLHttpRequest) {
		var ajax = new XMLHttpRequest();
	}

	ajax.onreadystatechange = function() {

		if(ajax.readyState == 4) {
			if(ajax.status >= 200 && ajax.status <= 207 || ajax.status == 304) {
				if(succFn) {
					succFn(ajax.responseText);
				}
			} else {
				if(failFn) {
					failFn(ajax.status);
				}
			}
		}
	}

	if(sendType == "get") {
		ajax.open(sendType, path, true);
		ajax.send(null);
	} else if(sendType == "post") {
		var pathArr = path.split("?");
		ajax.open(sendType, pathArr[0], true);
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		ajax.send(pathArr[1]);
	}

}

function fnJsonp(url, data, succFn, jsonp) {
//	var jsonp=jsonp||"callback";
	var rand = String(Math.random());
	rand = rand.replace("0.", "");

	var fnName = "xuerenwei" + rand + "_" + new Date().getTime(); //拿到函数名的字符串
	//				alert(fnName);
	window[fnName] = succFn; //生成一个函数名为变量fnName里的字符串

	
	data[jsonp] = fnName; //添加到要传输的数据内部

	var path = toUrl(url, data);
	//				alert(path);
	var s = document.createElement("script");
	s.src = path;
	var head = document.getElementsByTagName("head")[0];
	head.appendChild(s);
	head.removeChild(s);
}