<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate</title>
    <link rel="stylesheet" href="/tutorial/css/stle.csss">
    
</head>
<body>
<main>
<div class="calc">
    <input id="display" class="display"></input>
    <div class="keys">
      <button onclick="clearChar()">C</button>
      <button onclick="deleteChar()">⌫</button>
      <button onclick="press('%')">%</button>
      <button class="op" onclick="press('/')">÷</button>

      <button onclick="press('7')">7</button>
      <button onclick="press('8')">8</button>
      <button onclick="press('9')">9</button>
      <button class="op" onclick="press('*')">×</button>

      <button onclick="press('4')">4</button>
      <button onclick="press('5')">5</button>
      <button onclick="press('6')">6</button>
      <button class="op" onclick="press('-')">−</button>

      <button onclick="press('1')">1</button>
      <button onclick="press('2')">2</button>
      <button onclick="press('3')">3</button>
      <button class="op" onclick="press('+')">+</button>

      <button class="wide" onclick="press('0')">0</button>
      <button onclick="press('.')">.</button>
      <button class="eq" onclick="calculate()">=</button>
    </div>



</main>

<script>
let display = document.getElementById("display");

function press(char)
{
    display.value += char;
}
function clearChar()
{
    display.value = "";
}
function deleteChar()
{
    display.value = display.value.slice(0, -1);
}
function calculate()
{
   try{
    display.value = eval(display.value.replace('×', '*').replace('÷', '/'));
   }catch{
    display.value = "Error";
   } 
}
</script>

<style>
    body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: Arial, sans-serif;
    background: #f3f4f6;
    }

.calculator {
    padding: 20px;
    border-radius: 16px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    width: 280px;
    background: #fff;
}

.display {
    color: white;
    text-align: right;
    padding: 15px;
    border-radius: 10px;
    font-size: 28px;
    margin-bottom: 15px;
    height: 50px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background: #2b2b2b;
}

.keys {
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
    display: grid;
}

button {
    padding: 15px;
    font-size: 20px;
    border-radius: 10px;
    cursor: pointer;
    border:#2b2b2b;
}

button:active {
    transform: scale(0.96);
}

.key {
    background: #f7f7f7;
    color: #333;
}

.op {
    background: #fca311;
    color: white;
}

.wide {
    grid-column: span 2;
}
</style>
<footer>
        
</footer>
    
</body>
</html>