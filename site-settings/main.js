var tg = window.Telegram.WebApp;
function cliick(num){
    console.log('aaaaaaaaa');
    tg.sendData(num);
    tg.close();
}