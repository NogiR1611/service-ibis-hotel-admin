<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="/update" method="put">
            <label>Id</label>
            <input type="number" name="id">
            <label>Nama tempat wisata : </label>
            <input type="text" name="nama_tempat_wisata">
            <label>Lokasi : </label>
            <input type="text" name="lokasi">
            <label>Harga : </label>
            <input type="text" name="harga">
            <label>URL Foto : </label>
            <input type="text" name="urlimage">
            <label>Deskripsi</label>
            <textarea name="deskripsi" cols="80" rows="10"></textarea>
            <button type="submit">Oke</button>
        </form>
    </body>
</html>