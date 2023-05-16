<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>
    
    <form name="latihan2" id="Latihan2" method="POST" onsubmit="return checkform(this)"> 
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="JK" name="txJK" value="L">Laki-Laki
            <input type="radio" id="JK" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select id="jurusan" name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TI PAR</option>
                <option value="SK">SK</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" id="txHOBI" name="musik">Musik
            <input type="checkbox" id="txHOBI" name="futsal">Futsal
            <input type="checkbox" id="txHOBI" name="mendaki">Mendaki
            <input type="checkbox" id="txHOBI" name="jalanjalan">Jalan Jalan
            <input type="checkbox" id="txHOBI" name="badminton">Badminton
            <input type="checkbox" id="txHOBI" name="basket">Basket
            <input type="checkbox" id="txHOBI" name="voli">Voli
            <input type="checkbox" id="txHOBI" name="game">Game
            <input type="checkbox" id="txHOBI" name="berenang">Berenang
            <input type="checkbox" id="txHOBI" name="joging">Joging
        </div>
        <div>
            <button type="submit"> Kirim Data </button> 
        </div>
    </form>
    <script>
        function checkform(frm){
            let f = document.getElementById("Latihan2");
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jeniskelamin = f.JK.value;
            let jurusan = f.jurusan.value;
            let hobi_musik = f.txHOBI[0].checked;
            let hobi_futsal = f.txHOBI[1].checked;
            let hobi_mendaki = f.txHOBI[2].checked;
            let hobi_jalanjalan = f.txHOBI[3].checked;
            let hobi_badminton = f.txHOBI[4].checked;
            let hobi_basket = f.txHOBI[5].checked;
            let hobi_voli = f.txHOBI[6].checked;
            let hobi_game = f.txHOBI[7].checked;
            let hobi_berenang = f.txHOBI[8].checked;
            let hobi_joging = f.txHOBI[9].checked;

            console.log("NIM : "+nim);
            console.log("Nama : "+nama);
            console.log("Jenis Kelamin : "+jeniskelamin);
            console.log("Jurusan : "+jurusan);
            console.log("Hobi Musik : "+hobi_musik);
            console.log("Hobi Futsal : "+hobi_futsal);
            console.log("Hobi Mendaki : "+hobi_mendaki);
            console.log("Hobi JalanJalan : "+hobi_jalanjalan);
            console.log("Hobi Badminton : "+hobi_badminton);
            console.log("Hobi Basket: "+hobi_basket);
            console.log("Hobi Voli : "+hobi_voli);
            console.log("Hobi Game : "+hobi_game);
            console.log("Hobi Berenang: "+hobi_berenang);
            console.log("Hobi Joging : "+hobi_joging);
            

            return false;
        }
    </script>


</body>
</html>