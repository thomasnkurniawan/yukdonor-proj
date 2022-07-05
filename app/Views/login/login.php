<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YukDonor</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
</head>
<body>
    <section class="login flex">
        <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $email = $session->getFlashdata('email');
            $password = $session->getFlashdata('password');
        ?>
        
        <div class="form">
            <h2>Masuk</h2>
            <?php if($email){ ?>
                <p style="color:red"><?php echo $email?></p>
            <?php } ?>
            
            <?php if($password){ ?>
                <p style="color:red"><?php echo $password?></p>
            <?php } ?>
            
            <?php if($login){ ?>
                <p style="color:green"><?php echo $login?></p>
            <?php } ?>
            <form method="post" action="/login/valid_login">
                <div>
                    <input type="text" placeholder="Email" name="email">
                </div>

                <div>
                    <input type="password" placeholder="Password" name="password">
                </div>

                <div>
                    <button type="submit" name="login">Login</button>
                </div>

                <p>Belum Memiliki Akun? <a href="/register">Daftar</a></p>
            </form>
        </div>

        <div class="image">
            <img src="<?= base_url('assets/images/image 2.png')?>">
        </div>
    </section>
</body>
</html>