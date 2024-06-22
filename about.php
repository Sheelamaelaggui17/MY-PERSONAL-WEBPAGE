<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.pager a{
  color: white;
  font-size: 20px;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 5px;
  text-align: center;
  background-color: #375737;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color:  #375737;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color: #37576f;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #375737;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>


<div class="about-section">
  <ul class="pager">
  <a href="home.php"><span aria-hidden="true">&larr;</span>Home</a>
  </ul>
 
</div>
  <h1 style="text-align:center">About Us</h1>

<div class="row">
<?php
$team_members = [
    [
        'img' => 'picture/maui.jpg',
        'name' => 'Maui M. Osabal',
        'age' => '21 years old',
        'hobbies' => 'Eating, playing games, watching movies.',
        'contact' => '09859022153'
    ],
    [
        'img' => 'picture/shee.jpg',
        'name' => 'Sheela Mae M. Laggui',
        'age' => '20 years old',
        'hobbies' => 'Playing online games, sleeping, and photography.',
        'contact' => '09071591469'
    ],
    [
        'img' => 'picture/cha.jpg',
        'name' => 'Chabelita M. Zipagan',
        'age' => '23 years old',
        'hobbies' => 'Reading wattpad, eating, and watching movies.',
        'contact' => '09685334395'
    ]
];

foreach ($team_members as $member) {
    echo '<div class="column ">
            <div class="card">
              <img src="' . $member['img'] . '" alt="' . $member['name'] . '" style="width:70%; border-radius: 100%;">
              <div class="container">
                <h2>' . $member['name'] . '</h2>
                <p class="title">' . $member['age'] . '</p>
                <p>My hobbies are: ' . $member['hobbies'] . '</p>
                <p><button class="button">Contact: ' . $member['contact'] . '</button></p>
              </div>
            </div>
          </div>';
}
?>
</div>

</body>
</html>
