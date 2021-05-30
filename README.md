# realsms_opendoor

使用方式很簡單
先申請政府版本的場所簡訊實名制
然後把場所代碼置換1234567812345678的位置

再把這隻php(你要改成 python / jsp / asp 都可以)放到公開的網路上

放上去之前記得修改 dosomething()的內容
裡面直接置放控制 你的門禁開門的串接方式

然後把這隻程式的 url重新編成一個 QRCode
https://www.the-qrcode-generator.com/

持智慧型手機使用 QRCode解碼，會先跳轉到網頁，網頁觸發門禁開門，再引導叫出 簡訊 傳送給1922

就是這麼簡單

Browser MQTT可以使用
https://github.com/mcollina/mows
