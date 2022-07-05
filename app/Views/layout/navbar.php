<!-- Start of Navbar -->
 <?php $session = session() ?>
<section class="navbar">
        <div class="container flex">
            <h1>Yuk<span>Donor</span></h1>

            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="/pendonor/list">List Pendonor</a></li>
                    <li><a href="/pendonor/form">Form</a></li>
                    <li><a href="/urgent/list">Urgent</a></li>
                    <li><a href="/urgent/form">Form Urgent</a></li>
                </ul>
            </nav>
            <div>
                <?php   if($session->has('isLogin')){ ?>
                    <a href="/" class="btn">Hai, <?php echo $session->get('email')?>!</a>
                <?php }else{ ?> 
                    <a href="/login" class="btn">MASUK</a>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End of Navbar -->