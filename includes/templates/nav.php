<?php if(!isset($page)) $page = "" ?>

<header id="siteHeader">
    <div class="container layout center justified">
        <a id="brandLogo" href="index.php" class="layout center">
            <img src="assets/images/logo.png" alt="" style="height: 70%; display: inline-block; margin-right: 16px;">
            <?php echo $site_name ?>
        </a>
        <nav class="layout center justified">
            <a href="index.php" class="<?php if($page == "home") echo 'active'; ?>">Home</a>
            <a href="about.php" class="<?php if($page == "about")echo 'active'; ?>">About Us</a>
            <a href="products.php" class="<?php if($page == "products") echo 'active'; ?>">Product Catalog</a>
            <!-- <a href="events.php" class="<?php if($page == "events") echo 'active'; ?>">Events</a> -->
            <a href="contacts.php" class="<?php if($page == "contacts") echo 'active'; ?>">Contact Us</a>
        </nav>
    </div>
</header>
