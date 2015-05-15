<?php
/*
Plugin Name: Hello HAL
Plugin URI: http://www.doc4design.com/plugins/hello-hal
Description: Adds Sci-Fi movie quotes to the dashboard
Version: 3.0
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

function hello_hal_get_quotes() {
$quotes =
"Leeloo Dallas, Multipass.<div id=\"note\">[  Leeloo - The Fifth Element  ]</div>
E.T. phone home<div id=\"note\">[ E.T. - The Extraterrestrial ]</div>
Live long and prosper<div id=\"note\">[ Spock - Star Trek  ]</div>
Get away from her, you bitch!<div id=\"note\">[ Ellen Ripley - Aliens ]</div>
There is no spoon?<div id=\"note\">[ Spoon Boy - The Matrix ]</div>
Do or do not, There is no try.<div id=\"note\">[ Yoda - Empire Strikes Back ]</div>
No Nukes! No Nukes!<div id=\"note\">[ Rockhound - Armageddon ]</div>
I'm not the person I remember.<div id=\"note\">[ Rheya - Solaris ]</div>
Sunlight poses a problem to our 'ethnic group'.<div id=\"note\">[ Gremlin - Gremlins II ]</div>
Wow, he just made the international sign of the doughnut.<div id=\"note\">[ Richie Norris - Mars Attacks ]</div>
We didn't choose this place! We didn't choose these people! They were invited!<div id=\"note\">[ David Laughlin - Close Encounters of the Third Kind ]</div>
Algorithms I trust. Boolean logic I trust. Beautiful women... they just mystify me.<div id=\"note\">[ Zane Zaminski - The Arrival ]</div>
My God, it's full of stars!<div id=\"note\">[ David Bowman - 2010 ]</div>
That's it man, game over man, game over!<div id=\"note\">[ Hudson - Aliens ]</div>
I am fearful when I see people substituting fear for reason.<div id=\"note\">[ Klaatu - The Day The Earth Stood Still ]</div>
But one thing's sure. Inspector Clay is dead, murdered, and somebody's responsible. <div id=\"note\">[ Detective - Plan 9 from Outer Space ]</div>
Yes, you have a great body. May I use it?<div id=\"note\">[ Benson - Saturn 3 ]</div>
I dunno what the hell's in there, but it's weird and pissed off, whatever it is.<div id=\"note\">[ Clark - The Thing ]</div>
Well, forget it! I'm not doing it! This episode was badly written!<div id=\"note\">[ Gwen DeMarco - Galaxy Quest ]</div>
Death is a primitive concept. I prefer to think of them as battling evil, in another dimension.<div id=\"note\">[ Grig - The Last Starfighter ]</div>
Ladies and gentlemen, boys and girls, diein' time's here.<div id=\"note\">[ Dr. Dealgood - Max Mad: Beyond Thunderdome ]</div>
Do you know the Klingon proverb that tells us revenge is a dish that is best served cold?<div id=\"note\">[ Khan Noonian Singh - Star Trek: The Wrath of Khan ]</div>
I'm not the person I remember.<div id=\"note\">[ Rheya - Solaris ]</div>
What is it that is exactly the same about every vacation you've  ever taken?<div id=\"note\">[ Quaid - Total Recall ]</div>
I take a dim view of watching my own destruction.<div id=\"note\">[ Jack - Invasion of the Body Snatchers ]</div>
This is not a democracy. We are a collection of scientists and astronauts.<div id=\"note\">[ Captain Kaneda - Sunshine ]</div>
I'm sorry Dave, I'm afraid I can't do that.<div id=\"note\">[ HAL 9000 - 2001 Space Odyssey ]</div>
Take your stinking paws off me, you damned dirty ape!<div id=\"note\">[ George Taylor - Planet of the Apes ]</div>
I say we take off and nuke the entire site from orbit.<div id=\"note\">[ Ripley - Aliens ]</div>
You've gotta tell them! Soylent Green is people!<div id=\"note\">[ Detective Thorn - Soylent Green ]</div>
Most impressive. Obi-Wan has taught you well.<div id=\"note\">[ Darth Vader - The Empire Strikes Back ]</div>
I know kung fu.<div id=\"note\">[ Neo - The Matrix ]</div>
Hey, Luke. May the force be with you.<div id=\"note\">[ Han Solo - Star Wars ]</div>
Sorry, miss. I was giving myself an oil-job.<div id=\"note\">[ Robby the Robot - Forbidden Planet ]</div>
ET, phone home.<div id=\"note\">[ ET - ET The Extra-Terrestrial ]</div>
I'll be back.<div id=\"note\">[ The Terminator - Terminator ]</div>
Roads? Where we're going we don't need... roads.<div id=\"note\">[ Emmet Brown - Back to the Future ]</div>
Be afraid. Be very afraid.<div id=\"note\">[ Ronnie - The Fly ]</div>
It's life, Captain, but not life as we know it.<div id=\"note\">[ Spock - Star Trek: The Motion Picture ]</div>
Scotty, I need warp speed in three minutes or we're all dead.<div id=\"note\">[ Kirk - Star Trek: The Wrath of Khan ]</div>
We came, we saw, we kicked its ass!<div id=\"note\">[ Dr. Peter Venkman - Ghostbusters ]</div>
You know Garry, for the first time in my life, I don't feel like a total dick.<div id=\"note\">[ Wyatt - Weird Science ]</div>
Consider that a divorce.<div id=\"note\">[ Douglas Quaid - Total Recall ]</div>
They sucked his brains out.<div id=\"note\">[ Lt Jean Rasczak - Starship Troopers ]</div>
Gort! Klaatu barada nikto!<div id=\"note\">[ Helen Benson - The Day The Earth Stood Still ]</div>
Come quietly or there will be... trouble.<div id=\"note\">[ Robocop ]</div>
We only have fourteen hours to save the Earth!<div id=\"note\">[ Dale Arden - Flash Gordon ]</div>
Negative, I am a meat popsicle.<div id=\"note\">[ Korben Dallas - The Fifth Element ]</div>
He who controls the Spice, controls the universe!<div id=\"note\">[ Baron Harkonnen - Dune ]</div>
This is your receipt for your husband... and this is my receipt for your receipt.<div id=\"note\">[ Arresting Officer - Brazil ]</div>
I've had people walk out on me before, but not when I was being so charming.<div id=\"note\">[ Deckard - BladeRunner ]</div>
I have come here to chew bubblegum and kick ass... and I'm all out of bubblegum.<div id=\"note\">[ Nada - They Live ]</div>
Don't give me any of that intelligent life crap, just give me something I can blow up. <div id=\"note\">[ Doolittle - Dark Star ]</div>
Crom, I have never prayed to you before.<div id=\"note\">[ Conan - Conan The Barbarian ]</div>
Good. Bad. I'm the guy with the gun<div id=\"note\">[ Ash - Army Of Darkness ]</div>
Im a Mog. Half man, half dog. I'm my own best friend.<div id=\"note\">[ Barf - SpaceBalls ]</div>
We gotta find ourselves a Smurfette. <div id=\"note\">[ Sean Smith - Donnie Darko ]</div>
Zhenghia! Zhenghia! <div id=\"note\">[ Dead Alive ]</div>
The password will be: Llanfairpwllgwyngyllgogerychwyrndrobwllllantysiliogogogoch<div id=\"note\">[ Dildano - Barbarella ]</div>
You have been recruited by the Star League to defend the frontier against Xur and the Ko-Dan armada. <div id=\"note\">[ Centauri - The Last Starfighter ]</div>
After all this time, Greyskull is ours. <div id=\"note\">[ Evil-Lyn - Masters Of The Universe ]</div>
Sit on this, buttplug!<div id=\"note\">[ Vince Latello - My Science Project ]</div>
Five Alive!<div id=\"note\">[ Johnny Five - Short Circuit ]</div>
Otisburg?<div id=\"note\">[ Lex Luthor - Superman ]</div>
See ya later, Navigator!<div id=\"note\">[ Max - Flight Of The Navigator ]</div>
Yes I'm old. Old enough to remember when the MCP was just a chess program!<div id=\"note\">[ Dumont - Tron ( For Joe Grand ) ]</div>
No problem, Master C. If you've seen one consumer electronics show, you've seen them all.<div id=\"note\">[ Ed Dillinger - Tron ( For Joe Grand ) ]</div>
This is Gold-1 to Gold-2 and 3. Split up. Take them one-on-one.<div id=\"note\">[ Tron - Tron ( For Joe Grand ) ]</div>
Most of them died instantly, but a few had time to go quietly nuts.<div id=\"note\">[ Dr. Mark Hall - The Andromeda Strain ]</div>
Come get some.<div id=\"note\">[ Ash - Army Of Darkness ]</div>
Gentlemen, you can't fight in here! This is the War Room!<div id=\"note\">[ President Merkin Muffley - Dr. Strangelove ]</div>
This is the most uncomfortable coffin I've ever been in.<div id=\"note\">[ Bela Lugosi - Ed Wood ]</div>
Ladies and gentlemen, boys and girls, diein' time's here.<div id=\"note\">[ Dr. Dealgood - Mad Max: Beyond Thunderdome ]</div>
There's something out there waiting for us, and it ain't no man.<div id=\"note\">[ Billy Sole - Predator ]</div>
I'm warning you, I get sick: air sick, car sick. I'm gonna throw-up all over you.<div id=\"note\">[ Amber Mendez - The Running Man ]</div>
Greetings, professor Falken.<div id=\"note\">[ Joshua - WarGames ]</div>
Get the I.C.B.M.'s in the bullpen warmed up and ready to fly.<div id=\"note\">[ General Beringer - WarGames ]</div>
Skybird, this is Dropkick with a Red-Alpha message in two parts. Break. Break.<div id=\"note\">[ Dropkick - WarGames ]</div>
Come to me, son of Jor-El! Kneel before Zod!<div id=\"note\">[ General Zod - Superman II ]</div>
Rise before Zod. Now, kneel before Zod.<div id=\"note\">[ General Zod - Superman II ]</div>
Doc are you telling me you built a time machine . . . out of a Delorean?<div id=\"note\">[ Marty McFly - Back to The Future ]</div>
Mein Fuhrer, I can walk!<div id=\"note\">[ Dr. Strangelove - Dr. Strangelove ]</div>
By Grabthar's hammer, by the sons of Worvan, you shall be avenged.<div id=\"note\">[ Alexander Dane - Galaxy Quest ]</div>
I never broke the law. I am the law!<div id=\"note\">[ Judge Dredd - Judge Dredd ]</div>
Did you know there's a guy living in our closet?<div id=\"note\">[ Mitch Taylor - Real Genius ]</div>
Satan, stop! Where do you think you're going?<div id=\"note\">[ Father Luke Brophy - Repossessed ]</div>
Pocket Jack, Megazone invasion!<div id=\"note\">[ Splatterpunk 1 - Robocop 3 ]</div>
What's the worst thing that can happen? We'll all die, right?<div id=\"note\">[ Kevin Donaldson - SpaceCamp ]</div>
Lastday, Capricorn 29's. Year of the City: 2274. Carousel begins.<div id=\"note\">[ P.A. System - Logan's Run ]</div>
You're beautiful. Let's have sex. <div id=\"note\">[ Logan - Logan's Run ]</div>
Runner...you are terminated.<div id=\"note\">[ Francis 7 - Logan's Run ]</div>
At Delos, you get your choice of the vacation you want.<div id=\"note\">[ Interviewer - WestWorld ]</div>
Doesn't anything work around here?<div id=\"note\">[ Chief Supervisor - WestWorld ]</div>
It's so beautiful. It's hard to believe these spores could kill me.<div id=\"note\">[ Nausicaa - Kaze no tani no Naushika ]</div>
Your father would kill me if saw us in bed together.<div id=\"note\">[ Christopher - Awaken the Dead ]</div>
Of course I came back for you. I'm sorry it took me so long.<div id=\"note\">[ Rob Hawkins - Cloverfield ]</div>
So you're a Paladin and I'm a Jumper. What happens now?<div id=\"note\">[ David Rice - Jumper ]</div>
Last night at the station, you told the officer your car transformed. Enlighten me.<div id=\"note\">[ Agent Simmons - Transformers ]</div>
The boy's pheromone levels suggest he wants to mate with the female.<div id=\"note\">[ Ratchet - Transformers ]</div>
Don't make me hungry. You wouldn't like me when I'm hungry.<div id=\"note\">[ Bruce Banner - The Incredible Hulk ]</div>
Stick this hot glue gun in my ear? OkeeDokee!<div id=\"note\">[ Donkey - Retarded Animal Babies ]</div>
Well, at least we know your bionic arm still works.<div id=\"note\">[ Steve Austin - The Return of the Six-Million-Dollar Man and the Bionic Woman ]</div>
What's my name? 14K, that's my name!<div id=\"note\">[ 14K - Death Race 2008 ]</div>
My logic is undeniable.<div id=\"note\">[ V.I.KI. - I, Robot ]</div>
They blew up Congress! Ha ha ha ha!<div id=\"note\">[ Grandma Florence Norris - Mars Attacks! ]</div>
...and if you forget one thing, I will have you shaved, sterilized, and destroyed!<div id=\"note\">[ Jeffrey Goines - 12 Monkeys ]</div>
We are all, by any practical definition of the words, foolproof and incapable of error.<div id=\"note\">[ Hal 9000 - 2001 A Space Odyssey ]</div>
Beware the beast Man, for he is the Devil's pawn. Alone among God's primates, he kills for sport or lust or greed.<div id=\"note\">[ Cornelius - Planet of the Apes ]</div>
Admiral, if we go 'by the book'. like Lieutenant Saavik, hours could seem like days.<div id=\"note\">[ Spock: - Star Trek: The Wrath of Khan ]</div>
Ooh. Ah. That's how it starts. Then comes the running and the screaming.<div id=\"note\">[ Dr. Ian Malcolm - The Lost World: Jurassic Park ]</div>
Tastes like shit and smells like a fart! Got ourselves a real winner here!<div id=\"note\">[ F. Ross Johnson: - Barbarians at the Gate ]</div>
The defense system is perfect, Mark, it'll even bury our mistakes!<div id=\"note\">[ Dr. Jeremy Stone - The Andromeda Strain ]</div>
We have come to visit you in peace, and with goodwill.<div id=\"note\">[ Klaatu - The Day the Earth Stood Still ]</div>
I got the better end of the deal. I only lent you my body. You lent me your dream.<div id=\"note\">[ Jerome Eugene Morrow - Gattaca ]</div>
K-PAX is a planet. But don't worry, I'm not going to leap out of your chest.<div id=\"note\">[ Prot - K-PAX ]</div>
That would be great! Yeah, we could turn the thing in the wrong order and materialize in the vacuum of outer space.<div id=\"note\">[ Soldier -  Stargate ]</div>
Elvira's got no electric. She can't see her soaps, she'll hyperventilate.<div id=\"note\">[ Trailer Park Man - The Last Starfighter ]</div>
Why would he come in here and kill a guy for a lousy hundred bucks and a radio?<div id=\"note\">[ Tom Beck - The Hidden ]</div>
Are you enjoying your Kep-mok blood ticks, Dr. Lazarus?<div id=\"note\">[ Quellek - Galaxy Quest ]</div>
That damn dragon lady can bend people's minds around, what the hell does she need a blowtorch for! <div id=\"note\">[ Mike Donovan - V: The Final Battle ]</div>
I make more money selling hamburgers than I did selling reefer.<div id=\"note\">[ Elias Taylor - V: The Final Battle ]</div>
You know, I've never lost in mortal combat.<div id=\"note\">[ Lydia - V: The Complete Series ]</div>
Anything is possible, but the odds are astronomically against it.<div id=\"note\">[ Lucifer - Battlestar Galactica '78 ]</div>
By Your Command.<div id=\"note\">[ Cylon Centurion - Battlestar Galactica '78 ]</div>
You're a machine. You're a synthetic woman, a robot.<div id=\"note\">[ Baltar - Battlestar Galactica '03 ]</div>
I'm familiar with their technology because I've been having sex with a Cylon for the last two years now.<div id=\"note\">[ Baltar - Battlestar Galactica '03 ]</div>
There's no Earth. You made it all up.<div id=\"note\">[ Laura Roslin - Battlestar Galactica '03 ]</div>
You had a gorram time bomb living with us! Who we gonna find in there when she wakes up?<div id=\"note\">[ Capt. Malcolm Reynolds - Serenity ]</div>
Everything's shiny, Cap'n. Not to fret.<div id=\"note\">[ Kaylee Frye - Serenity ]</div>
Mal. Guy killed me, Mal. He killed me with a sword. How weird is that?<div id=\"note\">[ Lenore - Serenity ]</div>
";

// Here we split it up
$quotes = explode("\n", $quotes);
$notes = explode("\n", $notes);

// And then randomly choose a quote
return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

// This just echoes the chosen line
function hello_hal() {
	$chosen = hello_hal_get_quotes();
	echo "<div class='clear'></div><div id='hal9000'><a href='http://www.doc4design.com'></a><p id='quote'>$chosen</p></div>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_menu', 'hello_hal');


// We need some CSS to position the paragraph
function hal_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

    $site_url = get_bloginfo('siteurl' );
	echo "
	<style type='text/css'>
	#hal9000 {
      margin: 0 13px 0 0;
      padding: 1px 10px;
      color: #333;
      border-bottom: 1px solid #DFDFDF;
      } 
      
	#quote{
      margin: 15px 0 0 5px;
      padding: 0;
      font-size: 13px;
      }
   
	#note {
      margin: 0 0 15px 5px;
      padding: 0;
      font-size: 10px;
      }
	</style>
	";
}

add_action( 'admin_head', 'hal_css' );

?>