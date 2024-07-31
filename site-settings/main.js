var tg = window.Telegram.WebApp;
function cliick(num){
    console.log(num);
    tg.sendData(JSON.stringify(num));
    tg.close();
}