<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 1</title>
</head>
<body>
    
    <form name="latihan1" method="POST" onsubmit="return checkform(this)"> 
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
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
            <input type="checkbox" name="musik">Musik
            <input type="checkbox" name="futsal">Futsal
            <input type="checkbox" name="mendaki">Mendaki
            <input type="checkbox" name="jalanjalan">Jalan Jalan
            <input type="checkbox" name="badminton">Badminton
            <input type="checkbox" name="basket">Basket
            <input type="checkbox" name="voli">Voli
            <input type="checkbox" name="game">Game
            <input type="checkbox" name="berenang">Berenang
            <input type="checkbox" name="joging">Joging
        </div>
        <div>
            <button type="submit"> Kirim Data </button> 
        </div>
    </form>
    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jeniskelamin = f.namedItem("txJK").value;
            let jurusan = f.namedItem("txJURUSAN").value;
            let hobi_musik = f.namedItem("musik").checked;
            let hobi_futsal = f.namedItem("futsal").checked;
            let hobi_mendaki = f.namedItem("mendaki").checked;
            let hobi_jalanjalan = f.namedItem("jalanjalan").checked;
            let hobi_badminton = f.namedItem("badminton").checked;
            let hobi_basket = f.namedItem("basket").checked;
            let hobi_voli = f.namedItem("voli").checked;
            let hobi_game = f.namedItem("game").checked;
            let hobi_berenang = f.namedItem("berenang").checked;
            let hobi_joging = f.namedItem("joging").checked;

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