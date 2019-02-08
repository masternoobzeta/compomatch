

<div class="compomatch-logo">
    <a href="/"><img src="{{ asset('img/logo.png') }}" alt="Compomatch" style="width:auto;"></a>
</div>

<div class="navbar">
    <label for="show-menu" class="show-menu">Show</label>

    <input type="checkbox" id="show-menu" role="button">
    <ul id="menu">
        <li><a href="/">Home</a></li>
        <li><a href="technews">Tech news</a></li>
        <li><a href="articles">Blog</a></li>
        <li>
            <a href="list">Hardwares</a>
            <ul class="hidden">
                <li><a href="motherboards">Motherboard</a></li>
                <li><a href="cpus">CPU</a></li>
                <li><a href="videocards">Videocard</a></li>
                <li><a href="memories">Memory</a></li>
                <li><a href="harddrives">Harddrive</a></li>
                <li><a href="powersupplies">Powersupply</a></li>
                <li><a href="towers">Case</a></li>
            </ul>
        </li>
        <li>
            <a href="hardwares">Computer</a>
        </li>

        @auth()

            <li><a href="" </li>

        @endauth

        <li><a href="login">Login</a></li>
        <li><a href="register">Register</a></li>
    </ul>
</div>