var data = {
    hocSinh: [
       , {
            "Id": "A01",
            "Ten": "Cúc Tịnh Y",
            "Lop": "Aptech1800",
            "NgaySinh": "27-08-1994",
            "SongTai": "Sơn trà-Đà nẵng"
        },
        {
            "Id": "A02",
            "Ten": "Triệu Lệ Dĩnh",
            "Lop": "Aptech1801",
            "NgaySinh": "21-04-1993",
            "SongTai": "Thanh Khuê-Đà nẵng"
        },
        {
            "Id": "A03",
            "Ten": "Gia Ái Hy",
            "Lop": "Aptech1802",
            "NgaySinh": "10-04-1995",
            "SongTai": "Ngũ Hành Sơn-Đà nẵng"
        },
        {
            "Id": "A04",
            "Ten": "Hoàng Yến Chipi",
            "Lop": "Aptech1803",
            "NgaySinh": "27-08-1994",
            "SongTai": "Sơn trà-Đà nẵng"
        },
        {
            "Id": "A05",
            "Ten": "Lưu Diệc Phi",
            "Lop": "Aptech1804",
            "NgaySinh": "27-08-1992",
            "SongTai": "Hải Châu-Đà nẵng"
        },
        {
            "Id": "A06",
            "Ten": "Khởi My",
            "Lop": "Aptech1805",
            "NgaySinh": "27-08-1994",
            "SongTai": "Sơn trà-Đà nẵng"
        },
        {
            "Id": "A07",
            "Ten": "Hari Won",
            "Lop": "Aptech1806",
            "NgaySinh": "27-08-1993",
            "SongTai": "Liên Chiểu-Đà nẵng"
        }
    ]
};

// data.hocSinh    

function inData() {
for (var i = 0; i < data.hocSinh.length; i++) {
    // console.log(data.hocSinh[i]);
   document.getElementById('table-body').innerHTML += 
    "<tr>"+
        "<td>"+data.hocSinh[i].Id+"</td>"+
        "<td>"+data.hocSinh[i].Ten+"</td>"+
        "<td>"+data.hocSinh[i].Lop+"</td>"+
        "<td>"+data.hocSinh[i].NgaySinh+"</td>"+
        "<td>"+data.hocSinh[i].SongTai+"</td>"+
    "</tr>"
   ;
}
}


  

  