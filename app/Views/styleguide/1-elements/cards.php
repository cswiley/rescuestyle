
<?php StyleGuide::code('basic', '
<div class="card">
    <div class="card-section">

        <h4 class="card-title">Title</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam
            luctaus
        </p>
    </div>
</div>
    
') ?>

<?php StyleGuide::code('with image', '
    
<div class="card">
  <img src="http://placehold.it/1500x300">
  <div class="card-section">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
  </div>
  <div class="card-section">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
  <div class="card-section">
        <a class="button alert">Cancel</a>
        <a class="button">Save</a>
</div>
</div>
    
') ?>

<?php StyleGuide::code('with image on bottom', '<div class="card">
    <div class="card-section">
        <h4>This is the title</h4>
        <p>This is a paragraph</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
    <div class="card-section">
        <a class="button alert">Cancel</a>
        <a class="button">Save</a>
    </div>
    <img src="http://placehold.it/1500x300">
</div>
    
') ?>

<?php StyleGuide::code('with header and footer', '
    
<div class="radius bordered shadow card">
  <div class="card-header">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
  </div>
  <div class="card-divider">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
  </div>
  <div class="card-section divider">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
  
  </div>
  <div class="card-section">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
  </div>
  <div class="card-footer">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
  </div>
</div>
    
') ?>

<?php StyleGuide::code('with a list', '

<div class="card">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        <div class="list item divider">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <div class="content">
                <div class="header">My Name Is</div>
                This is the content
            </div>
        </div>
        <div class="list item">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <div class="content">
                <div class="header">Hi</div>
                This is the content
            </div>
        </div>
    </div>
    <div class="card-divider">
       <div class="list item">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
            </span>
            <div class="content">
                <div class="header">Hi</div>
                This is the content
            </div>
        </div>
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

'); ?>


<?php StyleGuide::code('inverse colors', '
<div class="card card-inverse primary">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-inverse secondary">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-inverse alert">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-inverse warning">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>


<div class="card card-inverse success">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-inverse muted">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-inverse faded">
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
    <div class="card-divider">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

    
') ?>

<?php StyleGuide::code('outline', '
<div class="card card-outline primary" data-closable>
    <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-outline secondary">
    <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-outline alert">
    <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-outline warning">
   <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>


<div class="card card-outline success">
    <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-outline muted">
    <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

<div class="card card-outline faded">
     <div class="card-section">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat tempus diam, facilisis condimentum purus sollicitudin ut. Donec eget sem ac urna aliquam luctus
    </div>
</div>

    
') ?>


