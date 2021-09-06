<?php

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>
<h3><a href="View_siswa.php">Siswa</a> | <a href="View_spp.php">SPP</a> | <a href="View_petugas.php">Petugas</a> | <a href="View_pembayaran.php">Pembayaran</a></h3>
<h3>Table Kelas</h3>
<h3><a href="View_post_kelas.php">Add Data</a></h3>


<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Kompetensi Keahlian</th>
        <th>Tools</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetKelas)) {
        $no = 1;
        foreach ($GetKelas as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['nama_kelas']; ?></td>
                <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                <td>
                    <a href="../Views/View_put_kelas.php?id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBERFBISEhIYGBEZEhIZGBoYEhgaFRgaGBgZGRkaGBgcIS4lHB4rHxgaJjgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHhISHzQlJCU0NDQxNDQ0NDQ0NDY0NDQ0NDQ0NDQ0NDQ0MTQ0NDQ0NDQ0NDQ0NDQxNDQ0NDQ0NDQ0NP/AABEIALcBFAMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQUDBAYCBwj/xAA7EAACAQIDBAgDCAAGAwAAAAABAgADEQQSIQUxQVEGEyJhcYGRoTKxwQcUI0JSYtHwM3KCkuHxorLC/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAECAwQF/8QAJBEBAQEBAAICAgICAwAAAAAAAAECEQMhEjEyQQRRIoETM2H/2gAMAwEAAhEDEQA/APpUkSJ6EugiJMgIiTAREQEREBESYERJiAkSYgREmIERESQiIkBEmIERJkQEREBERAiJMQIkSZEDzE9RJAQIkiAiJMgIiICIkwEREBERAREQESZw3SXpsKZelhbFluGqGxUHdZBuPidPGESddrWrJTGZ3VV5swA9TOa2j01wlN+rRw7DeQez5W3+O6fL8XjatdzUquz97EnXgByEralS2tt+/n3yOrcfWH+0HCKjlm/EA7Kje57idAO+crtH7QsUW7B6sHcAqFR3ZiCb+YnD5FdmzeR5acPaeadQoCH7S5sp45eR8I6cdvg/tCx6tdyjrpo1MWt3FSCD4zsdjdO8LXyrVHVOdL5s1O/+awK+Yt3z40nY3HsnceA7iOE2Vpg6jQ6HX+frukdqeSv0SpBAI1B3cpM+QdHelmKwtkJz010NN/y/5W3jw3d0+o7H2rTxdMVKenBlPxIeR/njLdVs43oiICRJiBESZEBERASJMQIiIgRJiIExEQEREBJiICIkwIkxEBEmQYHFdPekZor91pNaoykuw3oh4D9zfLxnzcJm+I2Fr2HIcJudIcUKmKxNS9x1jZdb3ynKvlpK41LtlG+4ueNt5I/vGU71eTkeq97Xtw0HAD+29JWM2up/twZZdZdWtrbQeP8AA1/pla9Ox3Xt6H+6y/FWLdqOf1/4nrONSdVNg3fwhF4d0xZR2gR/1x/vdIGVBl704Hu7+8TdoKyGx+AnQ8B4H6TVwhCCxF0vu5X3W85ZJT4K2p0sfleOHWZUtuPa5cPAch3cOEstibXqYOvTqK34baMOBF9VI9xyIlNhMVqadRbG9vU6Xm3WpBgUP5gbc7gcD6Ql90pOHVWU3BAI8DPc5T7PNomrhurc3ekcpPAqdVPz9J1clUiIkiIkyJASJMQIiIgREm0QIkxAgIiICSIEQEREBJiBASYiAlT0oxXVYTEPmykU2APG50Fu/WW05/pzSL4KqAQB2Sb33Ag6W4wiPi1EnP539Nf4npqeQO535dPMf9TFSJzoRz494Il4lJa1Fyo0UsQN17WIHllImfWsitQFFp07dqxJ9r/X0nunhwFJI1NrD11liuCu9Nv2C/mL/WTXwzKRyCfUiRdrTx9UJwp3D4rfzMgw27Th/fnLLEKAA3EESaIL0WqAfC4HsQZbOpYrcWXisw1AHQ7rH/bv/vhNsULb94sL+49PrNcPlfTdr5TazaA8hrr6S2b2IueVLUQwz27YHqOI8RMqHQG99Ra/An++88qxLC265BtzB1+UzikAoA4sbeVzFI6v7Nzlr4lP1U0bxsSD9PWfRJ8y6GKwxdNl3fiBv8pUn6r6T6dCuvtESZElBIkxA8xJkQEiTECIiJIQIiQERJgIiICJMQEmRJgIiICaO2wn3etnXMopsSOem6b019oUhUpVEO4o1/SV3343i2OfOd+uvh+1cOKboyoASBoBYX/LYDdefT9hdHUTDKr26woHa43Fhu95yOxsOcdi6eZRkWoSfBdfpOw23XqB2Wm1gBbSYTX+MtdOs/52Rx+0sLXou1lBUHTw5aT1h9o0KgyMMr2truPgZ42lgazpUIqMalgUKtltr2geZ8fK0qqGFxNJKbYoAl2ygEdsbrMT3m+/ujkuektmuNzG4IEMg4jQ+4lp0Y2QclRai6NkPHhvNowKBrabpZ1cd1YsuhHOUmuemlz324jbmzmoVXyjQ7vMzHiMK1NLEH4T46nQeOst8TVr16ynq0dQb2DAXtzvLPHbPxNca0LZso01A7Q9rXmudMdZnXN0k6tRm+Kxb1/pmalvA5Etqdxa/wDI9Jd9KNhjDnrFJs1RQnhbd639pzWKYqSo/So9Bbf6zTN6y1OO06AKalZ6i/4a0yv+pitvYGfQJx/2c7OelQeo+nWFSBxsLi58Z2EuzpERAiJMiAkSYgRIkyDAREQIEREBJiICIkwECJMBERASZEQJmDGvkp1G5Ix9pnkMAQQRcHfIv0ZvLK5jonhKQxFWpSACFEOUflYg5h63m1tCmOte/Ob2w9k/d6tVw10cLYcRYnf6zW2xpUvznNc2Z9uual8nZ/Spr4IE6aTF9zWxDm68uEsy2krajsz2XcCL+cz634stjYFLscvOV3SPZF8zA2Fxewvpy7p0Wy0sBM20Qp0NtRqJeSc6z+X+XHzPA9ElqYsVS4+73UtTQMGbKPhBsCPEGfQtlbPekSjNemR2d26+l/3WsDwNr7yZ4w2EVDcCXGHXiZeW37Z7kneOP+0Gnn+60wLnrGa3gAB/7St6OdGUrlar3yqxzA7mOhFhL/aQapjaJABVFtrzJJPtaXeBwi0UVF3D3J3mXzbbyf7V1JnPb936ZadNUUKoAUCwA3Ad09xE1c5IkxAiIiBESZEBIkyDAiIiBERJgBERAmIEmBEmIgIiICIkwEROa6V9L8Ps9GBs9e2lMHdfcXP5R7wSW/Tp6TgMASLm4Gu/S+nlKPpCcrgzhvs22rido7Qr4qu+ZaWHKqo0poajCwReGiNrvM7vpHYqG5THye81t45zUVq1dJy+IxmJRnAAF6ma5Um6/psDp4zdxO0Gpi4ps4vrlFyO+016HSXDBvxFC8w90PkWAE55mu2e/peYLa9VUNSnTL5bXF8thpc3MtsTiM7JUAIui6HnqfrMGx9pYVgQrAKeJItruGhlhVVX3EHwlrPSlvNe4yYY5rXm3UewsJr4VLCZGUPdc1jYbiL+/hLZ7xjqzqaGGVTmsC5uSeOvCZ5CA2sTfvtJm+JyMN3tIiJdQiIgJEmIEREQIkGTIMCIiIESZAkwqSZEmFgSYiAiIgIieXcKCWICgakmwHiYHqSJzu1+llDDDsqzsR2QLKD5nW3facPtXpji8QMoIRGa2VCdBxu286RxeYtWvS7pvUVqlDCHLlZkapvYldGycAAeM+W7XLFWYkliwJJNyTfeTxlriRu8L+Z1+VpT7RPZI8PnGvUazMk47n7LMUMLQqsR2qjg3/agIHuWneNilxCFL9reJ892ImWjTA/QPfWWtKsyEFTYicWt21tnE56WNQMtxMC111DUwwPAqCPQzZ++Cp27dr8w+o7ptUMSvISJqz6a5tj3gMHhXU3wyC41/DUfIaSzwmDSkx6sWQ20voCOUYNkOukbS2ilGm9Q/CiljzNtwHeTYecntv2pu+0bc2/SwdMM5vUbREHxO30UcT9bSj2DtepVODrM3bqtUSoB8N1vuHAaC0+ebTxFSvWepUYs5OnIAbgvICW2yse1OpQS+gxAccPjC3H/AIzTy+Kzx9/cc+Ny65+n1pwWawYjUnTgBM4xGWwOuoHfMBe57Nrbyec1GrjPqQLczOKb1n6rW4l+1znF7T1NEVQxGov4yq270iGHPU0gr1h8bHVad9y2G9vlO7w71u8c3kxnPt0cSh2H0kp1/wAOpZKw032Ru9Sdx7jL+dFnGaIiIERJkQIMRIMCIiIESZEmFSTIkwsSZEmAgx38OPIT530y6VLVDYbDMTT3PUBsH/ap4rzPHwkydF5tXpzgsOSoZqjg2PVqCv8AvJAPlecxj+k1LHuoNepTp3+FkHVqeBYqxJ8cptOSuNxE0MUmRsw3HeJf4yImrL6dnt/DEqldKiVaRCoXpsSEdV1VgQCL6kc5zVPtVLDkx9eyPnM+xNsNhixFNalJ1K1Kb/C4BuNeDC+h4XmVPu71Hq4csEJsab/FSy9ojN+YcvCLG+PJ31Wlit58fYaCU2PW6t4GXOIQDjKzEre8pqNK6vYdTPQpH9ij00liJznRfE2p9WeB0nQh5525yts3sZBpM1FiSBf1mr1k9UsUFN5VeOmoOFXfOa6RYw4pjhqZulNOvqEbiKbLZfU3/wBMw4/arWsOOgA3knQAd8vOh+xrUcTUqC9Sqjqe5cpsoPIZvW8nN+Nlqm/xscHl1J7zM9PQq2axCVLacVBa3mDMPE+vrPGKe1NzyIPlYg/SepufLFn/AI8/N5qV9kwdMdVT4HqqY07lEwYCkC9Spv7VrnfpvmXPkoBuVNbemky4ankRV4218Z4f7d/6e8SRlvNfE7Io1qZJVUqn4agUZr7+1+pTxB5yMS/YIm9TOiAcFF/OW8e7nXYrrMs9uLodG8QaqUmU5G+KotyuRbE68GPAHlxn0RKaqoVRZVCqB3AWmkj9q/BRN7D1QwFxYtfdPWzdazLpw25mrI8xJYW0kSUhkSZECDIMmQYERIiBIiRJgIiIEyQJ5dgASTYAEkncAN5MqsVtlTha2Lw7ZwlOqVsCWDqCArLvBBt5QOO6fdIGqO2EpNakhs5B+N+Kn9q7rc78hONS9u+ay12LXvcsLkk+NyTLHBp1nw28TqfEKOHjNZyImbq+ms0wYlNBfQczoPLnLg4UDTOf9ICzw2FQC9izc31MmtJ4dftUUQVpM2qgE7h2tRvvwG7d/wAzJ0aQGnVc/md7czoq/Uz1j+xQqHddh9BMmwkK4Yd5bx1Y29llf20ziZr3VpKJpV05CWj2YA8xNSumnrFjStTZQKToMPXvLtuioKLUpi5yDMnG4GpXn4TBQ2cDpPP3lbF/poAkz0KLt8IvOjw2zVtulps7ZSk5ivYB1/ceQ+plM4uryNNamZ2uYw2xzTVatX/Eclaa8ET87nvIuB4k8p3WyaOSlTHHKGP+rX6yi2g3X18q6ouRLjddzuHkD6TqUEjyzmuT9MZr5Z7/AG+Q7VwL0q9WmyE5HIBGl1Nipvx0IlRtADqqoBNyjCxFuR337p9txeHWoMjAFSNdJR7V6MYYYer1dMCoStiSdLm07p5L8O3+nPcz58btI9YlFOa02bwAB+dpvu2+VHR6nUVGNRrtoB4AWlk50M8iuxq1TfSb71AvoPlK6nq0nF1b1Ml/0313AKCfmJp/Hz8tyKea/HFrdpt2RzY3Pym4lXtoBu3DylbSe7DuBP0E2EP4tId7ewnuXLyZqrh9fG3rMc9AnNfhMaVA1+42mNjomv0kxEiQsSDEiAiREBJEiIEwIiBzvTHawoJSpA9urUFxx6tLM/kTlXwYz5xR2niMJVqLh6hUFswsRldM2ZdDodCfUiWX2l4lnxX4ba0qap4FhnPqrj/bOOoY02RG+JL5DzU6lD53I9JbPr7HQbUxmGxdMVBh8mKGXP1ZC03s2udDuNiTccQL91LRrGnVVhzAN9Lg6G82ALWdPGa+JrWqUqgGqVKZKnUdlgdRxBt7y1nGuNTjod7WGvhLDDbAxVf4aZROLuCiD11PkDPotPFvZSpABA3KBMGMdmIuSZblZ6/levUchtfY+HweHzJ+JWJtndRlW+8onA95vObpVM6nMTmJBNhw1HlvE7bpVhHq01RN97yl2Js16RYPxT/7Uybn0yx57Ndvtz2VNRm8NBf5zwiIXpqW1Z0GoGtyBzn2DBUlVAFAGnATBtbDpURUZQS1RLaXtlOc+GimYb1zNrpnktvOPGHcK1ibXbTlflMj7MpOxYgqx35bWJ52I3zzVw9wd9+8m1xqPebWErXVSOIG8bpyeDXynx1+l/J3N+WShsqmv6m8Tp7WmTGuEU7h2dw3ATZBPP0EoNvYrKj98685k+nPrWtfdcpsbaoG0+raplpOhBBHZL6lD3cr987utiMjCnbt8R+kcz9J8t2Psg4rE1me4pCx73sxQKDwF0a/HTvvPpOGQL3sd5OplNeLOrNVaauZyN9BxmntJ7oyjiyj5n6TbvYTTqrmyn9ze1h/Mr5r8cVPjndRFFciWkVmssl23CYMU2lp5NdsRhl4zSxDn7xVJ3BKar5i597ekscMNJRbax4p1mUjUojXvw1H0nb/AAOf8v8Apzfy+/D0tcLV1I8B9TLHB6uah3KCq95O/wCQ95Q7PJO/z8Tw+nlLyje3IcJ7Go8zN9t6ricovx4CTQpPdSTwJbvZv4sJrrqQTuE3abaTK+o1nu9ejIMh6ir1YJsz5so55bE28pMyraIkSYhKIiIEREQJiIgfE+l9e+0cWCey7qngyBUU+o9GMoK2HzDkwNpMS8+kV62fiTc023jdO3pbApUsHQxtRM1Y1M4GbQLYhQRuOpDeg4REjyWzPr+0ye3a7Lq5qVM/tX5TZqDURE2cv6Ym1JlXUP4qj9rfK/0iJa/VVn5R0dDcJT9JsZVwy069NVZFJDqTYkNYAg8CLe8ROXUllduftk2Tteli0LU7gi2ZWGqnx3Hym9h6O+x0uYicXinPJeN9fi22OVTON25WzELwvJid8+nL+2l9m1MtSxFRjcGuQBwGmc+pqH0naUk1iJCxXbhPToBTU8mPvrIiZef8Kt4/zjTB1JmviDcxE8h3xtUPhnDdI6TPtGmv5Oqpt6M/DyiJ2fw/+yOb+R+FdJRolQLeQv8AObtHrL/iPccgPmYie3Xkz7WSETMrk6RExraOQ6XbWP3paSEjqQoB/c1mYjyy+k6vZWOGIprUGh3MLbmG+3d/MRKX8Y2n23JERKLIiIgf/9k=" width="17"></a>
                    <button onclick="konfirmasi(<?php echo $Get['id_kelas'] ?>)">Delete</button>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>
<script>
    function konfirmasi(id_kelas) {
        if (window.confirm("Apakah anda ingin menghapus data ini?")) {
            window.location.href = '../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo base64_encode($Get['id_kelas']) ?>';
        };
    }
</script>