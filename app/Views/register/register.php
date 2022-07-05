<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YukDonor</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/register.css')?>">
</head>
<body>
    <section class="login flex">
        <div class="form">
            <h2>Buat Akun</h2>
            
            <?php 
                $session = session();
                $error = $session->getFlashdata('error');
            ?>
            
            <?php if($error){ ?>
                <p style="color:red">Terjadi Kesalahan:
                    <ul>
                        <?php foreach($error as $e){ ?>
                        <li style="margin: 2px"><small style="color: red"><?php echo $e ?></small></li>
                        <?php } ?>
                    </ul>
                </p>
            <?php } ?>
            <form method="post" action="/register/valid_register">
                <div>
                    <input type="text" placeholder="Email" name="email">
                </div>

                <div>
                    <input type="password" placeholder="Password" name="password">
                </div>

                <div>
                    <button type="submit" name="register">Daftar</button>
                </div>

                <p>Sudah Memiliki Akun? <a href="/login">Login</a></p>
            </form>
        </div>

        <div class="image">
            <img src="<?= base_url('assets/images/image 2.png')?>">
        </div>
    </section>
</body>
</html>