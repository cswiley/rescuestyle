<?php StyleGuide::code('colors', '
<a class="button primary" href="#">Primary</a>
<a class="button secondary" href="#">Secondary</a>
<a class="button success" href="#">Success</a>
<a class="button alert" href="#">Alert</a>
<a class="button warning" href="#">Warning</a>
') ?>

<?php StyleGuide::code('sizes', '
<a class="button tiny" href="#">So Tiny</a>
<a class="button small" href="#">So Small</a>
<a class="button" href="#">So Basic</a>
<a class="button large" href="#">So Large</a>
<a class="button expanded" href="#">Such Expand</a>
<a class="button small expanded" href="#">Wow, Small Expand</a>
')
?>

<?php StyleGuide::code('groups', '
<div class="button-group radius">
    <a class="button ">One</a>
    <a class="button ">Two</a>
    <a class="button ">Three</a>
</div>

'); ?>

<?php StyleGuide::code('shadows', '
<button type="button" class="button radius bordered shadow primary">Primary</button>
<button type="button" class="button rounded bordered shadow secondary">Secondary</button>
<button type="button" class="button radius bordered shadow success">Success</button>
<button type="button" class="button rounded bordered shadow alert">Alert</button>
<button type="button" class="button radius bordered shadow warning">Warning</button>
')
?>


<?php StyleGuide::code('hollow', '
<a class="hollow button" href="#">Primary</a>
<a class="hollow button secondary" href="#">Secondary</a>
<a class="hollow button success" href="#">Success</a>
<a class="hollow button alert" href="#">Alert</a>
<a class="hollow button warning" href="#">Warning</a>
<a class="hollow button" href="#" disabled>Disabled</a>
') ?>

<?php StyleGuide::code('clear', '
<a class="clear button" href="#">Primary</a>
<a class="clear button secondary" href="#">Secondary</a>
<a class="clear button success" href="#">Success</a>
<a class="clear button alert" href="#">Alert</a>
<a class="clear button warning" href="#">Warning</a>
<a class="clear button" href="#" disabled>Disabled</a>
') ?>

<?php StyleGuide::code('inverse', '
<a class="inverse button primary" href="#">Primary</a>
<a class="inverse button secondary" href="#">Secondary</a>
<a class="inverse button success" href="#">Success</a>
<a class="inverse button alert" href="#">Alert</a>
<a class="inverse button warning" href="#">Warning</a>
<a class="inverse button" href="#" disabled>Disabled</a>
') ?>

<?php StyleGuide::code('disabled', '
<a class="button disabled" href="#" aria-disabled>Disabled</a>
<button type="button" class="button primary" disabled>Disabled</button>
<button type="button" class="button secondary" disabled>Disabled</button>
<button type="button" class="button success" disabled>Disabled</button>
<button type="button" class="button alert" disabled>Disabled</button>
<button type="button" class="button warning" disabled>Disabled</button>
') ?>

<?php StyleGuide::code('with icons', '<a class="button tiny icon">
    <span class="fa-stack fa-2x">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-fw fa-cutlery fa-stack-1x fa-inverse"></i>
    </span>
</a>
<a class="button small icon">
    <span class="fa-stack fa-2x">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-fw fa-cutlery fa-stack-1x fa-inverse"></i>
    </span>
</a>
<a class="button icon">
    <span class="fa-stack fa-3x">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-fw fa-cutlery fa-stack-1x fa-inverse"></i>
    </span>
</a>
<a class="button large icon">
    <span class="fa-stack fa-3x">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-fw fa-cutlery fa-stack-1x fa-inverse"></i>
    </span>
</a>

<a class="button radius tiny "><i class="fa fa-cutlery"></i></a>
<a class="button radius small "><i class="fa fa-cutlery"></i></a>
<a class="button radius "><i class="fa fa-cutlery"></i></a>
<a class="button radius large "><i class="fa fa-cutlery"></i></a>
'); ?>

<?php StyleGuide::code('with icons and text', '
<a class="button tiny "><i class="fa fa-cutlery fa-fw"></i>Pork and beans</a>
<a class="button small "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>
<a class="button "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>
<a class="button large "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>

<br>

<a class="button tiny ">Pork and beans<i class="fa fa-fw fa-cutlery"></i></a>
<a class="button small ">Pork and beans<i class="fa fa-fw fa-cutlery"></i></a>
<a class="button ">Pork and beans<i class="fa fa-fw fa-cutlery"></i></a>
<a class="button large ">Pork and beans<i class="fa fa-fw fa-cutlery"></i></a>

<br>

<a class="button rounded tiny "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>
<a class="button rounded small "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>
<a class="button rounded "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>
<a class="button rounded large "><i class="fa fa-fw fa-cutlery"></i>Pork and beans</a>

'); ?>

<?php StyleGuide::code('social buttons', '
<button type="button" class="button radius facebook ">
    <i class="fa fa-facebook-square"></i> Post to Facebook
</button>

<button type="button" class="button radius twitter ">
    <i class="fa fa-twitter"></i> Post to Twitter
</button>
') ?>



