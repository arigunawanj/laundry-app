<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('profile.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="name" id="">
        <label for="">Gender</label>
        <select name="gender" id="">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <label for="">Address</label>
        <input type="text" name="address" id="">
        <label for="">Kecamatan</label>
        <input type="text" name="kecamatan" id="">
        <label for="">Kelurahan</label>
        <input type="text" name="kelurahan" id="">
        <label for="">No. telepon</label>
        <input type="number" min="0" name="telephone" id="">
        <label for="">ID User</label>
        <input type="number" readonly name="user_id" value="{{ Auth::user()->id }}" id="">
        <label for="">Foto</label>
        <input type="file" min="0" name="image" id="">
        <input type="submit" id="">
    </form>
</body>
</html>
