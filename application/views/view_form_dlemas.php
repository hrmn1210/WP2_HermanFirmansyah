<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(315deg, rgba(101, 0, 94, 1) 3%, rgba(60, 132, 206, 1) 38%, rgba(48, 238, 226, 1) 68%, rgba(255, 25, 25, 1) 98%);
        animation: gradient 15s ease infinite;
        background-size: 400% 400%;
        background-attachment: fixed;
        margin: 0;
        text-align: center;
    }

    .logo img {
        border-radius: 50%;
        border: 3px solid black;
        width: 50%;
    }

    .container {
        width: 40%;
        margin: 50px auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
    }

    .container a {
        color: black;
        text-align: center;
        padding: 1rem
    }

    label {
        margin-bottom: 8px;
    }

    input {
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        padding: 10px;
        background: linear-gradient(315deg, rgba(101, 0, 94, 1) 3%, rgba(60, 132, 206, 1) 38%, rgba(48, 238, 226, 1) 68%, rgba(255, 25, 25, 1) 98%);
        animation: gradient 15s ease infinite;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
        border: 2px solid black;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 0%;
        }

        50% {
            background-position: 100% 100%;
        }

        100% {
            background-position: 0% 0%;
        }
    }

    .wave {
        background: rgb(255 255 255 / 25%);
        border-radius: 1000% 1000% 0 0;
        position: fixed;
        width: 200%;
        height: 12em;
        animation: wave 10s -3s linear infinite;
        transform: translate3d(0, 0, 0);
        opacity: 0.8;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    .wave:nth-of-type(2) {
        bottom: -1.25em;
        animation: wave 18s linear reverse infinite;
        opacity: 0.8;
    }

    .wave:nth-of-type(3) {
        bottom: -2.5em;
        animation: wave 20s -1s reverse infinite;
        opacity: 0.9;
    }

    @keyframes wave {
        2% {
            transform: translateX(1);
        }

        25% {
            transform: translateX(-25%);
        }

        50% {
            transform: translateX(-50%);
        }

        75% {
            transform: translateX(-25%);
        }

        100% {
            transform: translateX(1);
        }
    }


    /* CSS */
    #button-78 {
        align-items: center;
        appearance: none;
        background-clip: padding-box;
        background-color: initial;
        background-image: none;
        border-style: none;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        flex-direction: row;
        flex-shrink: 0;
        font-family: Eina01, sans-serif;
        font-size: 16px;
        font-weight: 800;
        justify-content: center;
        line-height: 24px;
        margin: 0;
        min-height: 64px;
        outline: none;
        overflow: visible;
        padding: 19px 26px;
        pointer-events: auto;
        position: relative;
        text-align: center;
        text-decoration: none;
        text-transform: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: middle;
        width: auto;
        word-break: keep-all;
        z-index: 0;
    }

    @media (min-width: 768px) {
        #button-78 {
            padding: 19px 32px;
        }
    }

    #button-78:before,
    #button-78:after {
        border-radius: 80px;
    }

    #button-78:before {
        background-image: linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
        content: "";
        display: block;
        height: 100%;
        left: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: -2;
    }

    #button-78:after {
        background-color: initial;
        background-image: linear-gradient(#541a0f 0, #0c0d0d 100%);
        bottom: 4px;
        content: "";
        display: block;
        left: 4px;
        overflow: hidden;
        position: absolute;
        right: 4px;
        top: 4px;
        transition: all 100ms ease-out;
        z-index: -1;
    }

    #button-78:hover:not(:disabled):before {
        background: linear-gradient(92.83deg, rgb(255, 116, 38) 0%, rgb(249, 58, 19) 100%);
    }

    #button-78:hover:not(:disabled):after {
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        transition-timing-function: ease-in;
        opacity: 0;
    }

    #button-78:active:not(:disabled) {
        color: #ccc;
    }

    #button-78:active:not(:disabled):before {
        background-image: linear-gradient(0deg, rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), linear-gradient(92.83deg, #ff7426 0, #f93a13 100%);
    }

    #button-78:active:not(:disabled):after {
        background-image: linear-gradient(#541a0f 0, #0c0d0d 100%);
        bottom: 4px;
        left: 4px;
        right: 4px;
        top: 4px;
    }

    #button-78:disabled {
        cursor: default;
        opacity: .24;
    }

    #fps {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 320px;
        height: 320px;
        background: transparent;
        z-index: 2;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>
    <center>
        <form action="<?= base_url('dlemas/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" class="<?= form_error('nama') ? 'invalid' : '' ?>" placeholder="isikan data" value="<?= set_value('nama') ?>" />
                        <div class="invalid-feedback"><?= form_error('nama') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" class="<?= form_error('nis') ? 'invalid' : '' ?>" placeholder="isikan data" value="<?= set_value('nis') ?>" />
                        <div class="invalid-feedback"><?= form_error('nis') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas" class="<?= form_error('kelas') ? 'invalid' : '' ?>" placeholder="isikan data" value="<?= set_value('kelas') ?>" />
                        <div class="invalid-feedback"><?= form_error('kelas') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggal" id="tanggal" class="<?= form_error('tanggal') ? 'invalid' : '' ?>" placeholder="yyyy-mm-dd" value="<?= set_value('tanggal') ?>" />
                        <div class="invalid-feedback"><?= form_error('tanggal') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat" class="<?= form_error('tempat') ? 'invalid' : '' ?>" placeholder="isikan data" value="<?= set_value('tempat') ?>" />
                        <div class="invalid-feedback"><?= form_error('tempat') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" class="<?= form_error('alamat') ? 'invalid' : '' ?>" placeholder="isikan data" value="<?= set_value('alamat') ?>" />
                        <div class="invalid-feedback"><?= form_error('alamat') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis" id="jenis" value="Pria">Pria</input>
                        <input type="radio" name="jenis" id="jenis" value="Wanita">Wanita</input>
                        <div class="invalid-feedback"><?= form_error('jenis') ?></div>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                        <div class="invalid-feedback"><?= form_error('agama') ?></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>