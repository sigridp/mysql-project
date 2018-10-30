 <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Web Developer</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="<?=PAGES_URL?>/over-mij.php">Over Mij</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <?php include (LIB_ROOT . '/Includes/login.php');?>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>