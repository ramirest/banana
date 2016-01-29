{ci_config name="assets"}

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">


        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="{$assets}images/logo@2x.png" width="120" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->

            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>



            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>






        <ul id="main-menu" class="">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <!-- Search Bar -->
            <li id="search">
                <form method="get" action="">
                    <input type="text" name="q" class="search-input" placeholder="Search something..."/>
                    <button type="submit">
                        <i class="entypo-search"></i>
                    </button>
                </form>
            </li>
            {include file="menu.tpl"}
        </ul>

    </div>
    <div class="main-content">
        <h2>Here starts everything...</h2>

        <br />

        <!-- lets do some work here... --><!-- Footer -->
        <footer class="main">


            &copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

        </footer>	</div>


</div>




<!-- Bottom Scripts -->
<script src="{$assets}js/gsap/main-gsap.js"></script>
<script src="{$assets}js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="{$assets}js/bootstrap.js"></script>
<script src="{$assets}js/joinable.js"></script>
<script src="{$assets}js/resizeable.js"></script>
<script src="{$assets}js/neon-api.js"></script>
<script src="{$assets}js/neon-custom.js"></script>
<script src="{$assets}js/neon-demo.js"></script>

</body>
</html>