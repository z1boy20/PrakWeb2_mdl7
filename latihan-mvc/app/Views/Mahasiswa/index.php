<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>

        <?php foreach ($data["mahasiswa"] as $mhs): ?>
        <tr>
            <td><?= htmlspecialchars($mhs["nim"]) ?></td>
            <td><?= htmlspecialchars($mhs["nama"]) ?></td>
            <td><?= htmlspecialchars($mhs["prodi"]) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>