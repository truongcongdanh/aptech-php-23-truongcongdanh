var dienThoai = {
   iphone: {
        stt: 1,
        ten: "iphone5s",
        gia: "3.990đ",
   },
   samsung: {
       stt: 2,
       ten: "galaxyA50",
       gia: "6.490đ"
   }
}
var keys = Object.keys(dienThoai.iphone);
console.log(keys);

function dienGiaTri() {
    document.getElementById('gia1').innerHTML = dienThoai.iphone.gia;
    document.getElementById('gia2').innerHTML = keys[1];
}