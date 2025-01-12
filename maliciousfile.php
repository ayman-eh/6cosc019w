<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>You Have Been Hacked</title>';
echo '<style>';
echo 'body {';
echo '  background-color: black;';
echo '  color: #ff0000;';
echo '  font-family: "Courier New", Courier, monospace;';
echo '  text-align: center;';
echo '  padding-top: 100px;';
echo '  margin: 0;';
echo '  font-size: 30px;';
echo '  animation: glitch 1s infinite;';
echo '}';

echo 'h1 {';
echo '  font-size: 50px;';
echo '  text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000;';
echo '}';

echo 'p {';
echo '  font-size: 20px;';
echo '  color: #ff0000;';
echo '  text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000;';
echo '}';

echo '@keyframes glitch {';
echo '  0% { text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000, 0 0 20px #ff0000; }';
echo '  20% { text-shadow: 2px 2px 0px #ff0000, -2px -2px 0px #ff0000, 2px -2px 0px #ff0000, -2px 2px 0px #ff0000; }';
echo '  40% { text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000, 0 0 20px #ff0000; }';
echo '  60% { text-shadow: -2px 2px 0px #ff0000, 2px -2px 0px #ff0000, -2px -2px 0px #ff0000, 2px 2px 0px #ff0000; }';
echo '  80% { text-shadow: 0 0 5px #ff0000, 0 0 10px #ff0000, 0 0 15px #ff0000, 0 0 20px #ff0000; }';
echo '  100% { text-shadow: -2px -2px 0px #ff0000, 2px 2px 0px #ff0000, -2px 2px 0px #ff0000, 2px -2px 0px #ff0000; }';
echo '}';

echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>YOU HAVE BEEN HACKED!</h1>';
echo '<h2>6COSC019W RFI activitiy completed</h2>';
echo '<p>Warning: The system is vulnerable to not only . Take immediate action!</p>';
echo '<p>Stay calm, and Think about the .....</p>';
echo '<p> Remote File Inclusion question in your assignment.</p>';

echo '</body>';
echo '</html>';
?>
