var webapp = window.Telegram.WebApp;

function click(num){
    webapp.sendData(num);
    webapp.close();
}