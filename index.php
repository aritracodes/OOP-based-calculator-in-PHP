<?php 

declare(strict_types = 1);
require 'classes/calc.class.php';


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"
    />
  </head>
  <body>
    <div class="columns">
      <div class="column"></div>

      <div class="column">
        <form action="includes/calc.inc.php" method="POST">
          <h1 class="title is-1 has-text-centered mt-4">Calculator</h1>

          <div class="field">
            <label class="label">First Number</label>
            <div class="control">
              <input
                class="input"
                name="num1"
                type="number"
                placeholder="Number 1"
              />
            </div>
          </div>

          <div class="field">
            <label class="label">Calculation Type</label>
            <div class="control">
              <div class="select">
                <select name="oper">
                  <option value="add">Addition</option>
                  <option value="sub">Subtraction</option>
                  <option value="div">Division</option>
                  <option value="mul">Multiplication</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Second Number</label>
            <div class="control">
              <input
                class="input"
                name="num2"
                type="number"
                placeholder="Number 2"
              />
            </div>
          </div>

          <div class="control">
            <button class="button is-link" type="submit" name="submit">Calculate</button>
          </div>
        </form>
      </div>

      <div class="column"></div>
    </div>
  </body>
</html>
