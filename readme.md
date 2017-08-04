# Project Style Guide

### Setup
1. Require with composer
2. Move dist/styleguide.php to served document root (ie. /public)
3. Setup StyleGuide instance
  * (new StyleGuide(options))->render(..)
  * options:
    * base      => 'base url path',
    * scripts   => 'array of script to load'
    * styles    => 'array of styles to load'
    * directory => 'directory of additional styleguide files, directory is automatically parsed into the styleguide navigation menu'

4. Style Guide file methods:
  * StyleGuide::code('section name', 'html', 'code', 'additional notes');
