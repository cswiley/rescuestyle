<?php StyleGuide::code('sample',
    '<div class="row column small-8 centered">
    <div class="card card-inverse radius bordered shadow">
        <div class="card-section">
            <div class="column small-12">
                <div class="grid_100 columns">
                
            <div class="card-title padding-2">
                <h4 class="text-center">Sign Up</h4>
            </div>
            <form>
                <div class="input-group icon">
                    <span class="input-group-label clear"><i class="fa-users fa"></i></span>
                    <input class="input-group-field rounded " type="text" placeholder="Name...">
                </div>
                <div class="input-group icon">
                    <span class="input-group-label clear"><i class="fa-envelope-o fa"></i></span>
                    <input class="input-group-field rounded " type="text" placeholder="Email...">
                </div>
                <div class="input-group icon">
                    <span class="input-group-label clear"><i class="fa-unlock-alt fa"></i></span>
                    <input class="input-group-field rounded " type="password" placeholder="Password...">
                </div>
            </form>
                </div>
            </div>
        </div>
        <div class="card-section">
            <div class="text-center">
                <input type="submit" class="button primary rounded bordered margin-top-2" value="Get Started"/>
            </div>
        </div>
    </div>
</div>
') ?>


<?php StyleGuide::code('sample primary',
    '<div class="row column small-8 centered">
    <div class="card card-inverse primary radius bordered shadow">
        <div class="card-section">
            <div class="column small-12">
                <div class="grid_100 columns">
                
            <div class="card-title padding-2">
                <h4 class="text-center text-white">Sign Up</h4>
            </div>
            <form>
                <div class="input-group icon">
                    <span class="input-group-label clear text-white"><i class="fa-users fa"></i></span>
                    <input class="input-group-field rounded primary" type="text" placeholder="Name...">
                </div>
                <div class="input-group icon">
                    <span class="input-group-label clear text-white"><i class="fa-envelope-o fa"></i></span>
                    <input class="input-group-field rounded primary" type="text" placeholder="Email...">
                </div>
                <div class="input-group icon">
                    <span class="input-group-label clear text-white"><i class="fa-unlock-alt fa"></i></span>
                    <input class="input-group-field rounded primary" type="password" placeholder="Password...">
                </div>
            </form>
                </div>
            </div>
        </div>
        <div class="card-section">
            <div class="text-center">
                <input type="submit" class="button primary rounded bordered margin-top-2" value="Get Started"/>
            </div>
        </div>
    </div>
</div>
') ?>

<?php StyleGuide::code('input', '
<form>
  <div class="row">
    <div class="medium-6 columns">
      <label>Input Label
        <input type="text" placeholder=".medium-6.columns">
      </label>
    </div>
    <div class="medium-6 columns">
      <label>Input Label
        <input type="text" placeholder=".medium-6.columns">
      </label>
    </div>
  </div>
</form>

') ?>


<?php StyleGuide::code('textarea', '
<label>
  What books did you read over summer break?
  <textarea placeholder="None"></textarea>
</label>

<label>
  What books did you read over summer break?
  <textarea placeholder="10 rows" rows="10"></textarea>
</label>

'); ?>


<?php StyleGuide::code('select', '
<label>Select Menu
  <select>
    <option value="husker">Husker</option>
    <option value="starbuck">Starbuck</option>
    <option value="hotdog">Hot Dog</option>
    <option value="apollo">Apollo</option>
  </select>
</label>

<label>Multiple Select Menu
  <select multiple>
    <option value="showboat">Showboat</option>
    <option value="redwing">Redwing</option>
    <option value="narcho">Narcho</option>
    <option value="hardball">Hardball</option>
  </select>
</label>
') ?>


<?php StyleGuide::code('checkboxes and radio buttons', '
<div class="row">
  <fieldset class="large-6 columns">
    <legend>Choose Your Favorite</legend>
    <input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label for="pokemonRed">Red</label>
    <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label>
    <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
  </fieldset>
  <fieldset class="large-6 columns">
    <legend>Check these out</legend>
    <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
    <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
    <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
  </fieldset>
</div>
') ?>

<?php StyleGuide::code('inline labels', '
<form>
  <div class="row">
    <div class="small-3 columns">
      <label for="middle-label" class="text-right middle">Label</label>
    </div>
    <div class="small-9 columns">
      <input type="text" id="middle-label" placeholder="Right- and middle-aligned text input">
    </div>
  </div>
</form>
') ?>


