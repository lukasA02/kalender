<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>
    <link rel="stylesheet" href="stil.css">
</head>
<body onload="hamtaEvents();">

<div id="kalender">
<div class="month">      
  <ul>
    <li onclick="changeMonth(this.className);" class="prev">&#10094;</li>
    <li onclick="changeMonth(this.className);" class="next">&#10095;</li>
    <li id="manad">
      <span>januari</span><br>
      <span id="ar" style="font-size:18px">2022</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Må</li>
  <li>Ti</li>
  <li>On</li>
  <li>To</li>
  <li>Fr</li>
  <li>Lö</li>
  <li>Sö</li>
</ul>

<ul class="days">
  <li></li>
  <li></li>  
  <li></li>
  <li></li>
  <li></li>
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div>

<div class="event">
  <span onclick="stangFonster();">❌</span>
  <h2>Event</h2>
  <div id="data"></div>
</div>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="skript.js"></script>
</body>
</html>
