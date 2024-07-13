<!-- ///////////////////////// CUSTOM CSS
/////////////////////////////////////////////// -->
<style>
    .nav-classic{
        width: 100%;
        height: 70px;
        background-color: rgba(255, 255, 255, 0.7);
        z-index: 90;
        position: fixed;
    }
    
    .nav-classic-logo{
        position: absolute;
        top: 8px;
        left: 10%;
    }

    .nav-classic-menu{
        position: fixed;
        top: 26px;
        left: 30%;
    }

    .nav-classic-menu ul{
        list-style: none;
        display: inline-flex;
        text-transform: uppercase;
    }

    .nav-classic-menu ul li{
        padding-right: 30px;
    }

    .nav-classic-menu ul li a{
        font-weight: 600;
        text-decoration: none;
        color: var(--c1dark);
    }

    .nav-classic-menu ul li a:hover{
        color: var(--color);
        text-decoration: underline;
    }

    .nav-classic-cta{
        position: fixed;
        top: 20px;
        right: 10%;
    }

    .nav-classic-mobile {
        display: none;
        position: absolute;
        right: 20px;
        top: 14px;
    }

    .nav-classic-mobile a{
        text-decoration: none;
    }

    .nav-classic-mobile-menu{
        background-color: var(--c1dark);
        width: 100%;
        height: 100vh;
        position: fixed;
        z-index: 99;
        display: flex;
        align-items: center;
    }

    .nav-classic-mobile-menu ul{
        list-style: none;
        padding-left: 10%;
    }

    .nav-classic-mobile-menu ul li {
        padding-bottom: 30px;
    }

    .nav-classic-mobile-menu ul li a{
        color: var(--c2light);
        text-decoration: none;
        font-size: 26px;
    }

    .nav-classic-mobile-close a{
        color: var(--c2light);
        text-decoration: none;
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 50px;
    }

    @media (orientation: portrait) {
        .nav-classic-logo{
            top: 8px;
            left: 4px;
        }
        
        .nav-classic-cta{
            display: none;
        }

        .nav-classic-mobile{
            display: block;
            font-size: 40px;
        }

        .nav-classic-menu{
            display: none;
        }

        .nav-classic-cta{
            padding-left: 20px;
            padding-right: 20px;
        }
    }
</style>

<!-- ///////////////////////// UI
/////////////////////////////////////////////// -->

<div class="nav-classic-mobile-menu">
    <div class="nav-classic-mobile-close">
        <a onclick="closeNavClassicMobileMenu()"><i class="ph-fill ph-x-circle"></i></a>
    </div>

    <ul>
        <li><a href="#"> <i class="ph ph-house"></i> Item 1</a></li>
        <li><a href="#"> <i class="ph ph-address-book"></i> Item 2</a></li>
        <li><a href="#"> <i class="ph ph-question"></i> Item 3</a></li>
    </ul>
</div>

<nav class="nav-classic">
    <div class="nav-classic-logo">
        <a href="index">
            <img src="media/logo-horizontal.png">
        </a>
    </div>

    <div class="nav-classic-menu">
        <ul>
            <li><a href="#">Item 1</a></li>
            <li><a href="#">Item 2</a></li>
            <li><a href="#">Item 3</a></li>
        </ul>
    </div>

    <div class="nav-classic-cta">
        <a onclick="openContact()" class="btn-mini">Your CTA</a>
    </div>

    <div class="nav-classic-mobile">
        <a onclick="openNavClassicMobileMenu()"><i class="ph ph-list"></i></a>
    </div>
</nav>

<!-- ///////////////////////// CUSTOM SCRIPTS
/////////////////////////////////////////////// -->
<script type="text/javascript">
    $(".nav-classic-mobile-menu").hide();

    function openNavClassicMobileMenu(){
        $(".nav-classic-mobile-menu").fadeIn();
    }

    function closeNavClassicMobileMenu(){
        $(".nav-classic-mobile-menu").fadeOut();
    }
</script>