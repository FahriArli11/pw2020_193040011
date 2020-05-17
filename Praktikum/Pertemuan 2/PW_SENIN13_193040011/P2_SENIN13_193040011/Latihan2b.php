<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpading="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
        <tr>
            <th>
                baris <?= $j; ?>
            </th>
            <?php for ($k = 1; $k <= 5; $k++) : ?>
            <td>
                baris <?= $j; ?>, kolom <?= $k; ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        <!-- Tambahkan baris kode php untuk menampilkan bagian body table -->
    </table>
</body>
</html>