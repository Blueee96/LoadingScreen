<?php

/*----------------------------------------------------------GENERAL CONFIG-----------------------------------------------------------*/
// The name of your server goes here.
$servertitle = "MALLARD LOADSCREEN";

// *REQUIRED* Replace below with your server IP, if you're hosting the loading screen alongside your gameserver on the same server instead of a web host, keep it as is! 
$serverip = "127.0.0.1";

// *REQUIRED* Set the port of your server here, this is typically 27015!
$serverport = "27015";

// Whether or not to have the color stripes on each loading screen box.
$stripes = true;

// If stripes are enabled, the color of the stripes. RGBA color - colorpicker.com
$stripesColor = "rgb(255, 136, 0, 0.8)";

// The opacity of each of the boxes on the loading screen. To have no opacity, set to 1.0
$boxOpacity = 0.8;

// There is a slight dark tint over the backgrounds, true = on, false = off.
$bgtint = true;

// If you have tint enabled, here you can edit how dark the tint is, highest = 1 (solid), lowest = 0 (transparent)
$bgtintlevel = "0.2";

// Toggle whether OGG files in the music folder should play or not, true = on, false = off.
$musicenabled = false;

// If music is enabled, set what volume you want it to be here, highest = 1 (100%), lowest = 0 (0%).
$musicvolume = 0.2;

/*-------------------------------------------------------------HEADER BOX------------------------------------------------------------*/
// The header box will use the server name above as the text unless you have headerlogo set to true.

// The box behind the server title/logo. true = on, false = off. (The logo/text will still show if you turn this off)
$headerbox = true;

// Use an image instead of plain text? true = on, false = off.
// The loading screen will use logo.png, logo.jpg or logo.jpeg in the main directory by default. LOGOS SHOULD BE NO BIGGER THAN 875x145 PIXELS!
$headerlogo = false;


/*----------------------------------------------------------DESCRIPTION BOX----------------------------------------------------------*/
// Text that shows at the top of the description box (If your mode includes the box).
$descriptionheading = "About Us"; 

// Do you want the text to align to the right, left, center or to justify over the whole width?
// Options: left || right || justify || center
$descalign = "justify";

// Text that you put here will be displayed in your description box (If your mode includes the box).
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$description = "Mallard Loadscreen is a very customizable and semi-modular loading screen with an easy configuration. I aimed to offer 
				the sleek sexiness of other great loading screens, all while keeping things easy on users who aren't as well knowledgeable 
				in web development and design.";


/*-------------------------------------------------------------RULES BOX-------------------------------------------------------------*/
// Text that shows at the top of the rules box (If your mode includes the box).
$rulesheading = "Core Rules";

// Rules - The maximum is 8 but less may be shown depending on your mode.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$rule1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus lacinia hendrerit.";
$rule2 = "Maecenas cursus sapien nisi, at egestas metus auctor nec. Donec sagittis eleifend magna vel sagittis.";
$rule3 = "Maecenas tempus diam at augue ullamcorper, et aliquam odio ultricies. Donec nec malesuada eros.";
$rule4 = "Nulla massa tellus, sollicitudin vel facilisis id, sodales id leo. Cras lectus sem, efficitur sollicitudin vehicula dictum, maximus ac elit.";
$rule5 = "Mauris maximus, sem id laoreet porta, lorem libero vulputate lectus, non volutpat orci tellus id felis.";
$rule6 = "Maecenas mauris leo, posuere at libero nec, vestibulum tempus augue. Donec nec malesuada eros. ";
$rule7 = "Etiam quis nulla aliquet, rhoncus leo vel, placerat turpis. Proin id nunc quis lacus sodales imperdiet. Praesent volutpat id eleifend.";
$rule8 = "Proin sagittis at sem at vestibulum. Suspendisse potenti. In placerat ligula lacinia aliquet eleifend.";


/*--------------------------------------------------------------USER BOX-------------------------------------------------------------*/
// Show the user's full name as shown on Steam. true = on, false = off.
$showname = true;

// Show the user's country code as shown on Steam. true = on, false = off.
$showlocation = true;

// Show the user's current IP address. true = on, false = off.
$showip = true;

/*-------------------------------------------------------------SERVER BOX------------------------------------------------------------*/
// Text that shows at the top of the server info box (If your mode includes the box).
$serverheading = "Server Info";

// If your server is lacking in players and you want to influence people to join, turning off online players being shown may be useful.
// true = on, false = off.
$showplaying = true;

/*-------------------------------------------------------------QUOTE BOX-------------------------------------------------------------*/
// Text that shows at the top of the quote box (If your mode includes the box).
$quoteheading = "Pro Tips";

// To add more messages, just follow the syntax. The messages are displayed in the order you have them in.
// <br /> = New line || <b>Text</b> = Bold || <i>Text</i> = Italics || \" = To use speech marks, put a backslash infront of them
$quotes = array(
	'quote1' => "Showing Quote 1",
    'quote2' => "Showing Quote 2",
    'quote3' => "Showing Quote 3",
	'quote4' => "Thanks for buying Mallard LoadScreen",
);
?>