<?php
// Displaying a Matrix-style page with falling green text and glitch effect
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>You Have Been Hacked</title>';
echo '<style>';
echo 'body {';
echo '  background-color: black;';
echo '  color: #00ff00;';
echo '  font-family: "Courier New", Courier, monospace;';
echo '  text-align: center;';
echo '  padding: 0;';
echo '  margin: 0;';
echo '  overflow: hidden;';
echo '  height: 100vh;';
echo '  position: relative;';
echo '}';

echo 'canvas {';
echo '  position: absolute;';
echo '  top: 0;';
echo '  left: 0;';
echo '  width: 100%;';
echo '  height: 100%;';
echo '}';

echo '@keyframes glitch {';
echo '  0% { text-shadow: 0 0 5px #00ff00, 0 0 10px #00ff00, 0 0 15px #00ff00; transform: skew(-5deg); }';
echo '  20% { text-shadow: 2px 2px 0px #00ff00, -2px -2px 0px #00ff00; transform: skew(5deg); }';
echo '  40% { text-shadow: -2px -2px 0px #00ff00, 2px 2px 0px #00ff00; transform: skew(-3deg); }';
echo '  60% { text-shadow: 1px 1px 5px #00ff00; transform: skew(2deg); }';
echo '  80% { text-shadow: 0 0 10px #00ff00, 0 0 15px #00ff00; transform: skew(-2deg); }';
echo '  100% { text-shadow: 0 0 20px #00ff00; transform: skew(0deg); }';
echo '}';

echo '.glitch-text {';
echo '  animation: glitch 1s infinite;';
echo '}';

echo '</style>';
echo '</head>';
echo '<body>';

echo '<canvas id="matrix"></canvas>';

echo '<script>';
echo 'const canvas = document.getElementById("matrix");';
echo 'const ctx = canvas.getContext("2d");';
echo 'canvas.width = window.innerWidth;';
echo 'canvas.height = window.innerHeight;';

echo 'const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";';
echo 'const fontSize = 14;';
echo 'const columns = canvas.width / fontSize;';
echo 'const drops = Array(columns).fill(0);';

echo 'function draw() {';
echo '  ctx.fillStyle = "rgba(0, 0, 0, 0.1)";';
echo '  ctx.fillRect(0, 0, canvas.width, canvas.height);';
echo '  ctx.fillStyle = "#00ff00";';
echo '  ctx.font = fontSize + "px Courier";';

echo '  for (let i = 0; i < drops.length; i++) {';
echo '    const char = chars[Math.floor(Math.random() * chars.length)];';
echo '    ctx.fillText(char, i * fontSize, drops[i] * fontSize);';
echo '    if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {';
echo '      drops[i] = 0;';
echo '    }';
echo '    drops[i]++;';
echo '  }';
echo '}';

echo 'setInterval(draw, 35);';
echo '</script>';

echo '<div class="glitch-text">';
echo '<h1>YOU HAVE BEEN HACKED!</h1>';
echo '<h2>6COSC019W RFI activitiy completed</h2>';
echo '<p>Warning: The system is vulnerable to not only . Take immediate action!</p>';
echo '<p>Stay calm, and Think about the .....</p>';
echo '<p> Remote File Inclusion question in your assignment.</p>';
echo '</div>';

echo '</body>';
echo '</html>';
?>


