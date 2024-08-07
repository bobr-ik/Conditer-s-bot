var tg = window.Telegram.WebApp;
var num = new Object()

function send(){
    console.log(num);
    tg.sendData(JSON.stringify(num));
    tg.close();
}

function cliick(newnum){
    num[Object.keys(num).length] = newnum
    console.log(num)
}

window.onload = function () { // Сработает при загрузке страницы
    test = window.location.search // Берем данные из URL
    alert(test.replace('?', '').replace(/%20/g, ' '))
  }