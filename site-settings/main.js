var webapp = window.Telegram.WebApp;

function click(num){
    webapp.sendData(JSON.stringify(num));
    webapp.close();
}