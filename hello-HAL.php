<?php
/*
Plugin Name: Hello HAL
Plugin URI: http://wordpress.org/#
Description: Adds Sci-Fi movie quotes to your admin header
Author: Doc4
Version: 0.13
Author URI: http://www.doc4design.com
*/


$lyrics = "I'm sorry Dave, I'm afraid I can't do that.<div id=\"notes\">[ HAL 9000 - 2001 Space Odyssey ]</div>
Take your stinking paws off me, you damned dirty ape!<div id=\"notes\">[ George Taylor - Planet of the Apes ]</div>
I say we take off and nuke the entire site from orbit.<div id=\"notes\">[ Ripley - Aliens ]</div>
You've gotta tell them! Soylent Green is people!<div id=\"notes\">[ Detective Thorn - Soylent Green ]</div>
Most impressive. Obi-Wan has taught you well.<div id=\"notes\">[ Darth Vader - The Empire Strikes Back ]</div>
I know kung fu.<div id=\"notes\">[ Neo - The Matrix ]</div>
Hey, Luke. May the force be with you.<div id=\"notes\">[ Han Solo - Star Wars ]</div>
Sorry, miss. I was giving myself an oil-job.<div id=\"notes\">[ Robby the Robot - Forbidden Planet ]</div>
ET, phone home.<div id=\"notes\">[ ET - ET The Extra-Terrestrial ]</div>
I'll be back.<div id=\"notes\">[ The Terminator - Terminator ]</div>
Roads? Where we're going we don't need... roads.<div id=\"notes\">[ Emmet Brown - Back to the Future ]</div>
Be afraid. Be very afraid.<div id=\"notes\">[ Ronnie - The Fly ]</div>
It's life, Captain, but not life as we know it.<div id=\"notes\">[ Spock - Star Trek: The Motion Picture ]</div>
Scotty, I need warp speed in three minutes or we're all dead.<div id=\"notes\">[ Kirk - Star Trek: The Wrath of Khan ]</div>
We came, we saw, we kicked its ass!<div id=\"notes\">[ Dr. Peter Venkman - Ghostbusters ]</div>
You know Garry, for the first time in my life, I don't feel like a total dick.<div id=\"notes\">[ Wyatt - Weird Science ]</div>
Consider that a divorce.<div id=\"notes\">[ Douglas Quaid - Total Recall ]</div>
They sucked his brains out.<div id=\"notes\">[ Lt Jean Rasczak - Starship Troopers ]</div>
Gort! Klaatu barada nikto!<div id=\"notes\">[ Helen Benson - The Day The Earth Stood Still ]</div>
Come quietly or there will be... trouble.<div id=\"notes\">[ Robocop ]</div>
We only have fourteen hours to save the Earth!<div id=\"notes\">[ Dale Arden - Flash Gordon ]</div>
Negative, I am a meat popsicle.<div id=\"notes\">[ Korben Dallas - The Fifth Element ]</div>
He who controls the Spice, controls the universe!<div id=\"notes\">[ Baron Harkonnen - Dune ]</div>
This is your receipt for your husband... and this is my receipt for your receipt.<div id=\"notes\">[ Arresting Officer - Brazil ]</div>
I've had people walk out on me before, but not when I was being so charming.<div id=\"notes\">[ Deckard - BladeRunner ]</div>
I have come here to chew bubblegum and kick ass... and I'm all out of bubblegum.<div id=\"notes\">[ Nada - They Live ]</div>
Don't give me any of that intelligent life crap, just give me something I can blow up. <div id=\"notes\">[ Doolittle - Dark Star ]</div>
Crom, I have never prayed to you before.<div id=\"notes\">[ Conan - Conan The Barbarian ]</div>
Good. Bad. I'm the guy with the gun<div id=\"notes\">[ Ash - Army Of Darkness ]</div>
Im a Mog. Half man, half dog. I'm my own best friend.<div id=\"notes\">[ Barf - SpaceBalls ]</div>
We gotta find ourselves a Smurfette. <div id=\"notes\">[ Sean Smith - Donnie Darko ]</div>
Zhenghia! Zhenghia! <div id=\"notes\">[ Dead Alive ]</div>
The password will be: Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch<div id=\"notes\">[ Dildano - Barbarella ]</div>
You have been recruited by the Star League to defend the frontier against Xur and the Ko-Dan armada. <div id=\"notes\">[ Centauri - The Last Starfighter ]</div>
After all this time, Greyskull is ours. <div id=\"notes\">[ Evil-Lyn - Masters Of The Universe ]</div>
Sit on this, buttplug!<div id=\"notes\">[ Vince Latello - My Science Project ]</div>
Five Alive!<div id=\"notes\">[ Johnny Five - Short Circuit ]</div>
Otisburg?<div id=\"notes\">[ Lex Luthor - Superman ]</div>
See ya later, Navigator!<div id=\"notes\">[ Max - Flight Of The Navigator ]</div>
Yes I'm old. Old enough to remember when the MCP was just a chess program!<div id=\"notes\">[ Dumont - Tron ( For Joe Grand ) ]</div>
No problem, Master C. If you've seen one consumer electronics show, you've seen them all.<div id=\"notes\">[ Ed Dillinger - Tron ( For Joe Grand ) ]</div>
This is Gold-1 to Gold-2 and 3. Split up. Take them one-on-one.<div id=\"notes\">[ Tron - Tron ( For Joe Grand ) ]</div>
Most of them died instantly, but a few had time to go quietly nuts.<div id=\"notes\">[ Dr. Mark Hall - The Andromeda Strain ]</div>
Come get some.<div id=\"notes\">[ Ash - Army Of Darkness ]</div>
Gentlemen, you can't fight in here! This is the War Room!<div id=\"notes\">[ President Merkin Muffley - Dr. Strangelove ]</div>
This is the most uncomfortable coffin I've ever been in.<div id=\"notes\">[ Bela Lugosi - Ed Wood ]</div>
Ladies and gentlemen, boys and girls, diein' time's here.<div id=\"notes\">[ Dr. Dealgood - Mad Max: Beyond Thunderdome ]</div>
There's something out there waiting for us, and it ain't no man.<div id=\"notes\">[ Billy Sole - Predator ]</div>
I'm warning you, I get sick: air sick, car sick. I'm gonna throw-up all over you.<div id=\"notes\">[ Amber Mendez - The Running Man ]</div>
Greetings, professor Falken.<div id=\"notes\">[ Joshua - WarGames ]</div>
Get the I.C.B.M.'s in the bullpen warmed up and ready to fly.<div id=\"notes\">[ General Beringer - WarGames ]</div>
Skybird, this is Dropkick with a Red-Alpha message in two parts. Break. Break.<div id=\"notes\">[ Dropkick - WarGames ]</div>
Come to me, son of Jor-El! Kneel before Zod!<div id=\"notes\">[ General Zod - Superman II ]</div>
Rise before Zod. Now, kneel before Zod.<div id=\"notes\">[ General Zod - Superman II ]</div>
";

// Here we split it into lines
$lyrics = explode("\n", $lyrics);
$notes = explode("\n", $notes);
// And then randomly choose a line
$chosen = wptexturize( $lyrics[ mt_rand(0, count($lyrics) - 1) ] );
// This just echoes the chosen line, we'll position it later
function hello_scifi() {
	global $chosen;
	echo "<p id='scifi'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'hello_scifi');

// We need some CSS to position the paragraph
function scifi_css() {
	echo "
	<style type='text/css'>
	#scifi {
		position: absolute;
		top: 3.3em;
		margin: 0;
		padding: 0;
		right: 16px;
		font-size: 13px;
		color: #d54e21;
	}
	#notes {
	    position: absolute;
		top: 6.3em;
		margin: 0;
		padding: 0;
		right: 16px;
		font-size: 10px;
		color: #d54e21;
		}
	</style>
	";
}

add_action('admin_head', 'scifi_css');

?>