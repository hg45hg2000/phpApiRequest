<!DOCTYPE HTML >
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<script>
var xhr = null; //此var 設在此為 全域變數global
window.addEventListener('load', init); //載入完畢再load 觸發init這個函數
function init(){
	let btn01 = document.getElementById("btn01");
	let msgArea = document.getElementById("msgArea");
	btn01.addEventListener("click" , processEvent);  //processEvent 函數的名稱
}
			function processEvent(){   //m2();  //processEvent 函數的名稱 //addEventListener 註冊一個事件傾聽器
				xhr = new XMLHttpRequest();
				xhr.addEventListener('readystatechange', processAjax );
				xhr.open('GET', '_05_pdo_query_json_ok.php', true);  //true 表示非同步送出
				xhr.send();
// 				msgArea.innerHTML = "<font color='red'>Hello, javascriptWorld!!!," 
// 						+ Date.now()
// 						+"</font>"

						}
function processAjax(){
	print  xhr.responseText;
	if (xhr.readyState == 4 && xhr.status == 200){
		displayData(xhr.responseText);
		}
}
			
function displayData(jsonData){
	let result = "<table border='1'>";
	result += "<tr><th>流水號</th><th>書名</th><th>作者</th>";
	result += "<th>價格</th><th>書號</th><th>出版社</th></tr>";
	
	let books = JSON.parse(jsonData);
	for (let i = 0 ; i < books.length ;i++ ){
	let book = books[i];
	result += "<tr>";
	result += "<td>" + book . bookID + "</td>";
	result += "<td>" + book . title + "</td>";
	result += "<td>" + book . author + "</td>";
	result += "<td>" + book . price + "</td>";
	result += "<td>" + book . bookNo + "</td>";
	result += "<td>" + book . name . substr(0, 2) + "</td>";
	result += "</tr>";
	
	}
	result += "</table>";

	msgArea.innerHTML = result;
	
}
</script>

</head>
    <body>
	<div align = 'center'>查詢書籍資料<BR>
    <button id='btn01'>查詢</button>
    </div>
    <HR>
    <div id ='msgArea'></div>
    <script>
	
    </script>
    
</body>
</html>

