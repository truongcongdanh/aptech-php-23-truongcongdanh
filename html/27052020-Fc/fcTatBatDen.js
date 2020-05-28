function tatBatBongDen() {
    // document.getElementById('anh').src='../img/sang.gif';
    var anhElement = document.getElementById('anh');
    console.log(anhElement.src);

    if (anhElement.src == 'http://127.0.0.1:5500/html/img/toi.gif') 
    {
        anhElement.src = '../img/sang.gif';
    }
     else 
    {
        anhElement.src = '../img/toi.gif';
    }
}