<style>
    @import "compass/css3";

    .navigation {
        list-style: none;
        margin: 0;

        background: deepskyblue;

        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;

        -webkit-flex-flow: row wrap;
        justify-content: flex-end;
    }

    .navigation a {
        text-decoration: none;
        display: block;
        padding: 1em;
        color: white;
    }

    .navigation a:hover {
        background: darken(deepskyblue, 2%);
    }

    @media all and (max-width: 800px) {
        .navigation {
            justify-content: space-around;
        }
    }

    @media all and (max-width: 600px) {
        .navigation {
            -webkit-flex-flow: column wrap;
            flex-flow: column wrap;
            padding: 0;
        }

        .navigation a {
            text-align: center;
            padding: 10px;
            border-top: 1px solid rgba(255,255,255,0.3);
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }


        .navigation li:last-of-type a {
            border-bottom: none;
        }
    }
    .wrapper {
        display: flex;
        flex-flow: row wrap;
        font-weight: bold;
        text-align: center;
    }

    .wrapper > * {
        padding: 10px;
        flex: 1 100%;
    }

    .header {
        background: #cccccc;
    }

    .footer {
        background: #ececec;
    }

    .main {
        text-align: left;
        background: #dbdbdb;
    }

    .aside-2 {
        background: #e0e0e0;
    }

    @media all and (min-width: 600px) {
        .aside { flex: 1 auto; }
    }

    @media all and (min-width: 800px) {
        .main    { flex: 3 0px; }
        .aside-1 { order: 1; }
        .main    { order: 2; }
        .aside-2 { order: 3; }
        .footer  { order: 4; }
    }

    body {
        padding: 2em;
    }
</style>

<ul class="navigation">
    <li><a href="#">Home</a></li>
    <li><a href="#">Technews</a></li>
    <li><a href="#">Artikelen</a></li>
    <li><a href="#">Hardware</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">Login</a></li>
</ul>
<div class="wrapper">
    <header class="header">Overzicht</header>
    <article class="main">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
    </article>
    <aside class="aside aside-2">
    <li><a href="#"> Nieuw artikel aanmaken</a></li>
    <li><a href="#"> Mijn artikels bewerken</a></li>
    </aside>
    <footer class="footer">Footer</footer>
</div>
