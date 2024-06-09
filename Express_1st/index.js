var express = require("express");
var app = express();//產生 Express Application 物件


app.get('/',function(req, res) { // 當使用者連線到Server的根目錄 (/)時，做出回應
    res.send("Hello World");

});

app.listen(3000, function(){
    console.log('伺服器已經啟動在 http://localhost:3000/');
})