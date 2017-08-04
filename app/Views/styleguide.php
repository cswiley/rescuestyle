<header>
    <div class="styleguide-top-bar bg-primary">
        <div class="top-bar-left">
            <h2 class="hide-for-small-only text-white">Style Guide</h2>
            <ul class="menu">
                <li class="menu-text show-for-small-only">
                    <button type="button" class="button primary inverse" data-toggle="offCanvas">
                        <i class="fa fa-bars fa-fw" aria-hidden="true"></i>
                        <span>Styleguide</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</header>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
    <div class="header">
        <a href="/admin">Menu</a>
    </div>
    <div class="content">

        <!-- Menu -->
        <ul class="vertical menu nav-menu styleguide-font">
            <li><a href="<?php o($base); ?>">All</a></li>
            <?php foreach ($navListing as $header => $sections) : ?>
                <li href="#"><?php o($header); ?></li>
                <ul class="nested vertical menu">
                    <?php foreach ($sections as $section) : ?>
                        <li><a href="<?php o($base) ?><?php o($header) ?>/<?php o($section['file']); ?>"><?php o($section['name']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="row collapse expanded" data-equalizer>
    <div class="column medium-2 hide-for-small-only" data-equalizer-watch data-sticky-container>
        <ul class="vertical menu nav-menu bg-transparent styleguide-font" data-sticky data-margin-top="0">
            <li><a class="padding-left-0" href="<?php o($base) ?>">All</a></li>
            <?php foreach ($navListing as $header => $sections) : ?>
                <li><a href="<?php o($base) ?><?php o($header) ?>"><?php o($header); ?></a></li>
                <ul class="nested vertical menu">
                    <?php foreach ($sections as $section) : ?>
                        <li><a class="text-black" href="<?php o($base) ?><?php o($header) ?>/<?php o($section['file']); ?>"><?php o($section['name']); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="column small-12 medium-10" data-equalizer-watch>
        <div class="content">
            <h2 class="text-black margin-bottom-2"><?php o(strtoupper($name)); ?></h2>
            <?php echo $page ?>
        </div>
    </div>
</div>

