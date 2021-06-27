<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/stylesheet.css" type="text/css" />

    <title>Document</title>
  </head>
  <body>
    <div class="form-container">
      <form action="motors-action.php" method="Post">
        <p>
          <span id="joint1-angle">0</span>
        </p>
        <p>
          <input
            type="range"
            min="0"
            max="180"
            value="0"
            id="joint1"
            class="range"
            name="motor1"
          />
        </p>
        <p>
          <span id="joint2-angle">0</span>
        </p>

        <p>
          <input
            type="range"
            min="0"
            max="180"
            value="0"
            id="joint2"
            class="range"
            name="motor2"
          />
        </p>
        <p>
          <span id="joint3-angle">0</span>
        </p>

        <p>
          <input
            type="range"
            min="0"
            max="180"
            value="0"
            id="joint3"
            class="range"
            name="motor3"
          />
        </p>

        <p>
          <span id="joint4-angle">0</span>
        </p>
        <p>
          <input
            type="range"
            min="0"
            max="180"
            value="0"
            id="joint4"
            class="range"
            name="motor4"
          />
        </p>
        <p>
          <span id="joint5-angle">0</span>
        </p>

        <p>
          <input
            type="range"
            min="0"
            max="180"
            value="0"
            id="joint5"
            class="range"
            name="motor5"
          />
        </p>
        <p>
          <span id="joint6-angle">0</span>
        </p>

        <p>
          <input
            type="range"
            min="0"
            max="180"
            value="0"
            id="joint6"
            class="range"
            name="motor6"
          />
        </p>
        <div class="bottom">
          <p>
            <label class="switch">
              <input type="checkbox" name="switch"/>
              <span class="slider round"></span>
            </label>
          </p>
        
          <p>
            <input type="submit" value="Save" name="save" />
          </p>
        </div>
      </form>
    </div>
  </body>
  <script src="assets/js/script.js"></script>

</html>
