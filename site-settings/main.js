var tg = window.Telegram.WebApp;
function cliick(num){
    console.log(num);
    send = {
        'num': num
    }
    tg.sendData(JSON.stringify(num));
    tg.close();
}