<!DOCTYPE html>
<html>
<head>
<title>YoiMapren CRUD INSERT</title>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
    body{font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: auto;
        margin-left: 12px;
    }
</style>
</head>
<body>
    <h1>YoiMapren CRUD INSERT</h1>
    <h2>Insert Your Data Here!</h2>
    <table>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Nomor Telepon</td>
        <td>:</td>
        <td><input type="number" name="telp"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><select name="jenis_kelamin" id="jenis_kelamin">
            <option value="PRIA">L</option>
            <option value="PEREMPUAN">P</option>
        </select></td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>:</td>
        <td><select name="jenis_kelamin" id="jenis_kelamin">
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="KULIAH">KULIAH</option>
        </select></td>
    </tr>
    </table>
</body>
</html>