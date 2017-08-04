<?php StyleGuide::code('default', '

<div class="callout">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

'); ?>


<?php StyleGuide::code('colors', '

<div class="callout primary">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

<div class="callout secondary">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

<div class="callout success">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

<div class="callout error">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

<div class="callout warning">
  <h5>This is a callout.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

'); ?>

<?php StyleGuide::code('sizes', '

<div class="callout small">
  <h5>This is a small callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

<div class="callout large">
  <h5>This is a large callout</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It\'s dangerous to go alone, take this.</a>
</div>

') ?>

<?php StyleGuide::code('closable', '

<div class="alert callout" data-closable>
  <h5>This is Important!</h5>
  <p>But when you\'re done reading it, click the close button in the corner to dismiss this alert.</p>
  <p>I\'m using the default <code>data-closable</code> parameters, and simply fade out.</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="success callout" data-closable="slide-out-right">
  <h5>This a friendly message.</h5>
  <p>And when you\'re done with me, I can be closed using a Motion UI animation.</p>
  <button class="close-button" aria-label="Dismiss alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>
</div>

'); ?>

