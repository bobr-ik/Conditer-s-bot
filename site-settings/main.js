var tg = window.Telegram.WebApp;
function cliick(num){
    var num = {
        '111': '123',
        '123': '134'
    }
    console.log('aaaaaaaaa');
    tg.sendData(JSON.stringify(num));
    tg.close();
}