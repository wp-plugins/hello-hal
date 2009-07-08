<?php
/*
Plugin Name: Hello HAL
Plugin URI: http://www.doc4design.com/plugins/hello-hal
Description: Adds Sci-Fi movie quotes to your admin header
Version: 1.5
Author: Doc4
Author URI: http://www.doc4design.com
*/

/******************************************************************************

Copyright 2008  Doc4 : info@doc4design.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
The license is also available at http://www.gnu.org/copyleft/gpl.html

*********************************************************************************/


$quotes = "I'm sorry Dave, I'm afraid I can't do that.<div id=\"notes\">[ HAL 9000 - 2001 Space Odyssey ]</div>
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
Doc are you telling me you built a time machine . . . out of a Delorean?<div id=\"notes\">[ Marty McFly - Back to The Future ]</div>
Mein Fuhrer, I can walk!<div id=\"notes\">[ Dr. Strangelove - Dr. Strangelove ]</div>
By Grabthar's hammer, by the sons of Worvan, you shall be avenged.<div id=\"notes\">[ Alexander Dane - Galaxy Quest ]</div>
I never broke the law. I am the law!<div id=\"notes\">[ Judge Dredd - Judge Dredd ]</div>
Did you know there's a guy living in our closet?<div id=\"notes\">[ Mitch Taylor - Real Genius ]</div>
Satan, stop! Where do you think you're going?<div id=\"notes\">[ Father Luke Brophy - Repossessed ]</div>
Pocket Jack, Megazone invasion!<div id=\"notes\">[ Splatterpunk 1 - Robocop 3 ]</div>
What's the worst thing that can happen? We'll all die, right?<div id=\"notes\">[ Kevin Donaldson - SpaceCamp ]</div>
Lastday, Capricorn 29's. Year of the City: 2274. Carousel begins.<div id=\"notes\">[ P.A. System - Logan's Run ]</div>
You're beautiful. Let's have sex. <div id=\"notes\">[ Logan - Logan's Run ]</div>
Runner...you are terminated.<div id=\"notes\">[ Francis 7 - Logan's Run ]</div>
At Delos, you get your choice of the vacation you want.<div id=\"notes\">[ Interviewer - WestWorld ]</div>
Doesn't anything work around here?<div id=\"notes\">[ Chief Supervisor - WestWorld ]</div>
It's so beautiful. It's hard to believe these spores could kill me.<div id=\"notes\">[ Nausicaa - Kaze no tani no Naushika ]</div>
Your father would kill me if saw us in bed together.<div id=\"notes\">[ Christopher - Awaken the Dead ]</div>
Of course I came back for you. I'm sorry it took me so long.<div id=\"notes\">[ Rob Hawkins - Cloverfield ]</div>
So you're a Paladin and I'm a Jumper. What happens now?<div id=\"notes\">[ David Rice - Jumper ]</div>
Last night at the station, you told the officer your car transformed. Enlighten me.<div id=\"notes\">[ Agent Simmons - Transformers ]</div>
The boy's pheromone levels suggest he wants to mate with the female.<div id=\"notes\">[ Ratchet - Transformers ]</div>
Don't make me hungry. You wouldn't like me when I'm hungry.<div id=\"notes\">[ Bruce Banner - The Incredible Hulk ]</div>
Stick this hot glue gun in my ear? OkeeDokee!<div id=\"notes\">[ Donkey - Retarded Animal Babies ]</div>
Well, at least we know your bionic arm still works.<div id=\"notes\">[ Steve Austin - The Return of the Six-Million-Dollar Man and the Bionic Woman ]</div>
What's my name? 14K, that's my name!<div id=\"notes\">[ 14K - Death Race 2008 ]</div>
My logic is undeniable.<div id=\"notes\">[ V.I.KI. - I, Robot ]</div>
They blew up Congress! Ha ha ha ha!<div id=\"notes\">[ Grandma Florence Norris - Mars Attacks! ]</div>
...and if you forget one thing, I will have you shaved, sterilized, and destroyed!<div id=\"notes\">[ Jeffrey Goines - 12 Monkeys ]</div>
";

// Here we split it into lines
$quotes = explode("\n", $quotes);
$notes = explode("\n", $notes);

// And then randomly choose a line
$chosen = wptexturize( $quotes[ mt_rand(0, count($quotes) - 1) ] );

// This just echoes the chosen line
function hello_hal() {
	global $chosen;
	echo "<div class='clear'></div><div id='hal'><a href='http://www.doc4design.com'></a><p id='main-quote'>$chosen</p></div>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_notices', 'hello_hal');


// We need some CSS to position the quotes
function hal_css() {
	echo '<link href="'.get_bloginfo('siteurl').'/wp-content/plugins/d4-helloHAL/css/hello-hal.css" rel="stylesheet" type="text/css" />'."\n";
}

add_action('admin_head', 'hal_css');

?>