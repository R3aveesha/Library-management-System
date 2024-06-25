// Get the screen width and height
var screenWidth = window.screen.availWidth;
var screenHeight = window.screen.availHeight;

// Calculate the dimensions and position for the right half of the screen
var windowWidth = screenWidth / 2;
var windowHeight = screenHeight;
var windowLeft = screenWidth / 2;

// Set the window size and position
window.resizeTo(windowWidth, windowHeight);
window.moveTo(windowLeft, 0);
