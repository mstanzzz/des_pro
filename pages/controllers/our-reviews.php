<?php

////our_reviews

/*
$all_reviews = array();
$all_reviews[0]['name']="Aubree W.";
$all_reviews[0]['addr']="Charlotte, North Carolina";
$all_reviews[0]['stars']=$stars; 
$all_reviews[0]['msg']="I would recommend Closets To Go. 
The system installs easily and their designers did a great job.";

$all_reviews[1]['name']="Reggie D.";
$all_reviews[1]['addr']="Nashville, Tennessee";
$all_reviews[1]['stars']=$stars; 
$all_reviews[1]['msg']="I love my closet. 
I now want to do some of the other closets in the house. 
The service was great.";

$all_reviews[2]['name']="Bethany D.";
$all_reviews[2]['addr']="Sacramento, California";
$all_reviews[2]['stars']=$stars; 
$all_reviews[2]['msg']="I used Closets To Go when I lived in Portland. 
We moved recently so I used their online service. 
Our designer was great with working with our very custom needs. 
She redid the design a few times, after asking a lot of questions, 
that I hadn’t thought of. We have a coffee bar and wine frig in our 
closet so she designed for those areas and it all turned out so well. 
I couldn’t be happier.";

$all_reviews[3]['name']="Brandon W.";
$all_reviews[3]['addr']="New York, New York";
$all_reviews[3]['stars']=$stars; 
$all_reviews[3]['msg']="My wife wanted to go with a local full service. 
She thought I would order the system and then let it sit. 
I kind of wanted to try to do this myself. 
I was very pleased with the whole process. 
The packaging was extremely sturdy, 
but somehow we did receive one broken piece. 
Closets To Go shipped out the replacement piece the same day we called. 
The installation went way better than I expected. Highly recommend.";

$all_reviews[4]['name']="Roxanne H.";
$all_reviews[4]['addr']="Los Angeles, California";
$all_reviews[4]['stars']=$stars_four; 
$all_reviews[4]['msg']="There were a couple of handles missing, but they 
were sent out right away. Otherwise our experience was very good.";

$all_reviews[5]['name']="Shawna H.";
$all_reviews[5]['addr']="Houston, Texas";
$all_reviews[5]['stars']=$stars; 
$all_reviews[5]['msg']="I would definitely recommend Closets To Go.";

$all_reviews[6]['name']="Sidney W.";
$all_reviews[6]['addr']="San Antonio, Texas";
$all_reviews[6]['stars']=$stars_four; 
$all_reviews[6]['msg']="Good job by everyone. Our designer did a great job. 
I had some questions while installing and once I understood about the 
corner shelves I was on my way. The install went well and we are pleased.";

$all_reviews[7]['name']="Daniel C.";
$all_reviews[7]['addr']="San Diego, California";
$all_reviews[7]['stars']=$stars; 
$all_reviews[7]['msg']="I was apprehensive about taking this on. 
I am not really a DIY type of guy, but it actually went okay. 
I would do this again.";

$all_reviews[8]['name']="Kerry B.";
$all_reviews[8]['addr']="Austin, Texas";
$all_reviews[8]['stars']=$stars; 
$all_reviews[8]['msg']="We love our closets. We’d buy from you again.";

$all_reviews[9]['name']="Micah E.";
$all_reviews[9]['addr']="Seattle, Washington";
$all_reviews[9]['stars']=$stars_three; 
$all_reviews[9]['msg']="Not everything went well, but problems did get 
resolved right away. I would recommend you.";

$all_reviews[10]['name']="Katie W.";
$all_reviews[10]['addr']="Baltimore, Maryland";
$all_reviews[10]['stars']=$stars_four; 
$all_reviews[10]['msg']="I feel the whole process went better than expected. 
It’s not my cup of tea, but your system made it easy.";

$all_reviews[11]['name']="Edward C.";
$all_reviews[11]['addr']="Hillsboro, Oregon";
$all_reviews[11]['stars']=$stars_four; 
$all_reviews[11]['msg']="Overall the process was good. I measured wrong 
and so the last unit on one of the walls didn’t fit. CTG was great and 
sent replacement shelves, but only charged me for the shipping. I am not 
very good at this sort of thing, so I think it took me a little longer than 
average, but I still finished in a few hours.";

$all_reviews[12]['name']="Nora C.";
$all_reviews[12]['addr']="Fresno, California";
$all_reviews[12]['stars']=$stars; 
$all_reviews[12]['msg']="This was part of a large reno project that we kept 
on putting off as we weren’t sure we wanted to tackle the installation. 
When all was said and done, the closet was the easiest part of the entire 
house. I would recommend you.";

$all_reviews[13]['name']="Brian K.";
$all_reviews[13]['addr']="Boston, Massachusetts";
$all_reviews[13]['stars']=$stars_three; 
$all_reviews[13]['msg']="I am not complaining about the closet, but there 
was some miscommunication and so we had some initial problems. 
They did get resolved quickly.";

$all_reviews[14]['name']="Melody B.";
$all_reviews[14]['addr']="Denver, Colorado";
$all_reviews[14]['stars']=$stars; 
$all_reviews[14]['msg']="I understand the need to package everything well
 for shipping, but I think we could have filled a large dumpster with
 cardboard. Overall the process went well. I would buy from you again.";

$all_reviews[15]['name']="Conrad R.";
$all_reviews[15]['addr']="Asheville, North Carolina";
$all_reviews[15]['stars']=$stars_three; 
$all_reviews[15]['msg']="We had a bad experience with the delivery. 
I know that CTG can’t control this, but it put a bad taste in my mouth. 
There was some breakage. I was afraid I was going to have to wait for a 
claim to go through, but CTG sent out the parts right away. The closet 
turned out great, so I hope they change shippers.";

$all_reviews[16]['name']="Emile B.";
$all_reviews[16]['addr']="Portsmouth, New Hampshire";
$all_reviews[16]['stars']=$stars_four; 
$all_reviews[16]['msg']="I wish the instructions had less pages, 
so that it would be easy to get through. I didn’t pay enough attention 
due to the multitude of pages and forgot a step in the installation process. 
Because of this the system came crashing down. A couple of pieces broke. 
You guys were great though and only charged me for the shipping.";

$all_reviews[17]['name']="Matt G.";
$all_reviews[17]['addr']="Beaufort, North Carolina";
$all_reviews[17]['stars']=$stars_four; 
$all_reviews[17]['msg']="We like our closet and thought the installation 
was pretty easy.";

$all_reviews[18]['name']="Hubert K.";
$all_reviews[18]['addr']="Lewes, Delaware";
$all_reviews[18]['stars']=$stars_four; 
$all_reviews[18]['msg']="We like our closet and thought the installation 
was pretty easy.";

$all_reviews[19]['name']="Sebastien S.";
$all_reviews[19]['addr']="Montauk, New York";
$all_reviews[19]['stars']=$stars; 
$all_reviews[19]['msg']="We didn’t actually purchase a closet recently, 
but bought parts. We purchased our closet a few years ago, 
but since retirement have different needs. It was great to be 
able to switch out some taller hanging for rods on top and bottom. 
We were also able to add some drawers.";

$all_reviews[20]['name']="Dennis B.";
$all_reviews[20]['addr']="Petoskey, Michigan";
$all_reviews[20]['stars']=$stars_four; 
$all_reviews[20]['msg']="We like our closet. The service was good.";

$all_reviews[21]['name']="Bob K.";
$all_reviews[21]['addr']="Stuart, Florida";
$all_reviews[21]['stars']=$stars_four; 
$all_reviews[21]['msg']="Good company, good service.";

$all_reviews[22]['name']="Louis H.";
$all_reviews[22]['addr']="Ft. Myers, Florida";
$all_reviews[22]['stars']=$stars_four; 
$all_reviews[22]['msg']="I thought the whole process was great. Our designer 
put up with our many changes and was quick to answer all questions.
We received everything in good shape and installed all 3 closets in one day. 
Great company.";

$all_reviews[23]['name']="Hugo O.";
$all_reviews[23]['addr']="Las Vegas, Nevada";
$all_reviews[23]['stars']=$stars; 
$all_reviews[23]['msg']="I actually enjoyed installing this system. 
They have made it very easy to get through the process.";

$all_reviews[24]['name']="Camille M.";
$all_reviews[24]['addr']="Ft. Lauderdale, Florida";
$all_reviews[24]['stars']=$stars_three; 
$all_reviews[24]['msg']="We had some issues with some missing items. The 
delay was a little frustrating. We did get everything installed and the 
installation itself went well.";

$all_reviews[25]['name']="Benjamin G.";
$all_reviews[25]['addr']="Fort Bragg, California";
$all_reviews[25]['stars']=$stars; 
$all_reviews[25]['msg']="My in-laws recommended you and we are very happy 
with the results.";

$all_reviews[26]['name']="Caryn B.";
$all_reviews[26]['addr']="Portland, Oregon";
$all_reviews[26]['stars']=$stars; 
$all_reviews[26]['msg']="I am an engineer, so you can imagine I am a little 
picky. I was very impressed with your system. The hanging bracket is genius. 
I also appreciate the hardware already being installed. I was a little 
concerned about buying a system online, but Pam, our designer, explained 
everything ahead of time and assured me that it would fit well and look great. 
She was correct. I would highly recommend you.";

$all_reviews[27]['name']="Wendi H.";
$all_reviews[27]['addr']="Virgin Islands";
$all_reviews[27]['stars']=$stars; 
$all_reviews[27]['msg']="We are located in the Caribbean, so I wasn’t sure 
this would get here in one piece. Once you shipped it to Miami we had our 
shipper send it to the Bahamas. Everything arrived in one piece and we are 
very pleased. The closet looks great.";

$all_reviews[28]['name']="Eva A.";
$all_reviews[28]['addr']="Vancouver, Washington";
$all_reviews[28]['stars']=$stars; 
$all_reviews[28]['msg']="I requested designs from 3 companies and Closets 
To Go was the only one who paid attention to all of my notes and designed 
something that would work for me. I am very happy with the result and will 
buy more closets.";

$all_reviews[29]['name']="Brittney C.";
$all_reviews[29]['addr']="Portland, Oregon";
$all_reviews[29]['stars']=$stars_four; 
$all_reviews[29]['msg']="I could write a book, but will keep it short. 
I forgot to tell CTG about an obstruction in the closet and when I went 
to install of course ran into problems. I was embarrassed to tell them, 
but they were great about it. They sent out the new parts, but then there 
was breakage. So lots of delays, but I got it done.";

$all_reviews[30]['name']="Matthew G.";
$all_reviews[30]['addr']="Rochester, New York";
$all_reviews[30]['stars']=$stars; 
$all_reviews[30]['msg']="My neighbor used Closets To Go and told me how easy 
the installation was, so I thought I would give it a try. I just had a 
small closet in my home office, but the wall was bowed. I wasn’t sure the 
last side was going to work without having to shim off the bottom. Thanks to 
the Camar hanging bracket you use, I was able to adjust the hanging bracket 
and everything fit great. I do not like doing these types of projects, but 
this went very smooth.";

$all_reviews[31]['name']="Andy Z.";
$all_reviews[31]['addr']="Dallas, Texas";
$all_reviews[31]['stars']=$stars_four; 
$all_reviews[31]['msg']="I was surprised at how well everything was packaged. 
Once we figured out what went on which wall the installation went quite well. 
Having all of the hardware pre-installed saved us so much time. 
We finished our small walk in closet in just 3 hours.";

$all_reviews[32]['name']="Georgina P.";
$all_reviews[32]['addr']="Honolulu, Hawaii";
$all_reviews[32]['stars']=$stars; 
$all_reviews[32]['msg']="I was so excited to get my new closet done. 
Everything fit so well and it looks very high end. Having a closet 
organizer definitely keeps you organized. I would highly recommend Closets 
To Go.";

$all_reviews[33]['name']="Mark W.";
$all_reviews[33]['addr']="Fresno, California";
$all_reviews[33]['stars']=$stars; 
$all_reviews[33]['msg']="I needed to save some money, so I decided to do this 
myself. I was sort of dreading the ordeal, but my wife had been after me 
for a long time to get this done. After looking at a few online closet 
companies, I chose Closets To Go, due to their hanging bracket. I definitely 
chose the right company. With the hanging bracket, and having all of the 
hardware pre-installed, it was very easy. We now have a beautiful walk in 
closet and my wife is very happy.";

$all_reviews[34]['name']="Alexis J.";
$all_reviews[34]['addr']="Orlando, Florida";
$all_reviews[34]['stars']=$stars; 
$all_reviews[34]['msg']="This is a great product and was easy to install. 
I did this myself as my husband was out of town. I wasn’t sure I was going 
to be able to do it, but found once I got the rail installed, the rest was 
pretty easy. It was a reach in closet for my baby and it only took me a 
couple of hours.";

$all_reviews[35]['name']="Francis E.";
$all_reviews[35]['addr']="El Paso, Texas";
$all_reviews[35]['stars']=$stars; 
$all_reviews[35]['msg']="I have brought several closets through Closets To Go 
through the years and I keep on going back to them as the installation is very 
easy. The first closet I did with them was a little bit of a learning curve, 
as I had not done anything like that before. Always an easy transaction.";

$all_reviews[36]['name']="Victor E.";
$all_reviews[36]['addr']="Arlington, Virginia";
$all_reviews[36]['stars']=$stars_four; 
$all_reviews[36]['msg']="There were a couple of problems, but were resolved 
immediately. The product is great and the service before and after the sale 
were top notch.";

$all_reviews[37]['name']="Jessie F.";
$all_reviews[37]['addr']="Washington DC";
$all_reviews[37]['stars']=$stars; 
$all_reviews[37]['msg']="We got our shipment on Friday afternoon. The closet 
was installed by noon on Saturday. A great experience.";

$all_reviews[38]['name']="Katherine B.";
$all_reviews[38]['addr']="New York, New York";
$all_reviews[38]['stars']=$stars; 
$all_reviews[38]['msg']="We ordered several closets for our new home. 
We had our contractor do the installation. He said that he had not used 
Closets To Go before, but was impressed with the hanging bracket. 
He said this saved him a lot of time during the installation. 
He said he would use them on his next spec home.";

$all_reviews[39]['name']="Jaylee A.";
$all_reviews[39]['addr']="Davis, California";
$all_reviews[39]['stars']=$stars_four; 
$all_reviews[39]['msg']="This was a positive experience and I would recommend 
Closets To Go.";

$all_reviews[40]['name']="Joandra D.";
$all_reviews[40]['addr']="Las Cruces, New Mexico";
$all_reviews[40]['stars']=$stars_three; 
$all_reviews[40]['msg']="Two pieces came damaged, which was a problem as my 
installer was here and then had to come back to finish up. CTG send the 
pieces out right away, but there was still a delay. My installer said it 
was one of the best systems he has installed.";

$all_reviews[41]['name']="Kelley F.";
$all_reviews[41]['addr']="Eureka, California";
$all_reviews[41]['stars']=$stars; 
$all_reviews[41]['msg']="The first closet was a learning curve. I am glad 
I started with the smallest one. It made the other closets easier to install. 
The instructions were kind of confusing as they are long, but I only had to 
use a few of the pages. Would prefer instructions that are just for my design. 
Overall though it went well.";

$all_reviews[42]['name']="Nikola F.";
$all_reviews[42]['addr']="Miami, Florida";
$all_reviews[42]['stars']=$stars_four; 
$all_reviews[42]['msg']="Good quality product. Pretty easy install.";

$all_reviews[43]['name']="Katelyn W.";
$all_reviews[43]['addr']="Santa Fe, New Mexico";
$all_reviews[43]['stars']=$stars_three; 
$all_reviews[43]['msg']="We had some issues with the drawer fronts having 
the wrong holes for our handles. Due to this we had to wait quite a while 
as we had raised panels. So that was kind of frustrating. The closet turned 
out nice though.";

$all_reviews[44]['name']="Brittany S.";
$all_reviews[44]['addr']="Portland, Oregon";
$all_reviews[44]['stars']=$stars; 
$all_reviews[44]['msg']="Compared to what you get from the big box stores, 
there is no comparison. Everything is custom made to fit your closet and 
what you want. Way better quality. I would recommend.";

$all_reviews[45]['name']="Heaven A.";
$all_reviews[45]['addr']="El Paso, Texas";
$all_reviews[45]['stars']=$stars; 
$all_reviews[45]['msg']="We are very happy with our closet. The install was 
easier than we thought with all of the hardware already installed and the 
adjustable hangi5ng bracket. We would buy from you again.";

$all_reviews[46]['name']="Kate E.";
$all_reviews[46]['addr']="Hillsboro, Oregon";
$all_reviews[46]['stars']=$stars; 
$all_reviews[46]['msg']="I had a weird layout for my closet, so I was very 
grateful for all of the help in getting a design that would fit the area 
and fit our needs at the same time. The delivery went well and so did the 
installation. We will be doing more closets for sure.";

$all_reviews[47]['name']="Nithin R.";
$all_reviews[47]['addr']="Fremont, CA";
$all_reviews[47]['stars']=$stars; 
$all_reviews[47]['msg']="We are very happy with the closet systems from 
Closets To Go. We ordered five reach-in closet systems, and they arrived 
in meticulously packed boxes after about 5 days. What drew me to Closets 
To Go was the ease of installation. I did not want to spend time assembling 
drawers, figuring out which sides the screws went on, or which pieces went 
where, or cutting pieces to non-standard widths. Basically Closets To Go 
did all the work they possibly could before shipping the closets to us. 
In the end, the biggest closet (about 10 feet long) took us about 5 hours 
of installation, while medium closets (about 5 feet) took us about 3 hours. 
I am also impressed with the quality of the product. The pieces of the system 
seem to be very strong. This includes the wood, the metal rods, and the drawers. 
The couple of snags we had were dealt with promptly by their great Customer 
Service Department. We were missing a couple of pieces, and another pieced 
(a drawer railing) was broken. All of these pieces were sent out immediately 
and arrived within 2 days. I have enthusiastically recommended Closets To 
Go to friends and relatives, and will continue to promote their wonderful 
product.";

$all_reviews[48]['name']="Kerry C.";
$all_reviews[48]['addr']="Savannah, GA";
$all_reviews[48]['stars']=$stars; 
$all_reviews[48]['msg']="We have really enjoyed our 'closets to go' system. 
Although it took a bit longer to install than we were expecting, it is well 
worth it. The ease of the website use and flexibility of design were both 
very important factors in our purchase. Our closet was so easy to organize 
after installation and months later it is still just as neat. Overall very 
happy with purchase";

$all_reviews[49]['name']="Tiphani H.";
$all_reviews[49]['addr']="Stuart, FL";
$all_reviews[49]['stars']=$stars; 
$all_reviews[49]['msg']="My husband and I could not be any happier with our 
closet. Your website was so easy to use. It truly made designing a perfect 
closet, well perfect. My husband was so impressed with everything from the 
delivery being complete and undamaged to the installation being a snap. 
We have told everyone about you. Thank-you for giving us a beautiful closet.";

$all_reviews[50]['name']="Erik D.";
$all_reviews[50]['addr']="Whittier, CA";
$all_reviews[50]['stars']=$stars; 
$all_reviews[50]['msg']="This is the second time I've worked with Pam Wells 
to build the inside of our closets. She had great ideas and was able to 
quickly get us our design and replacement parts. I screwed up one of the 
original measurements by writing 80\" rather than 90\" and she was able to 
get me the corrected order within the day. I will, of course, use 
Closetstogo.com again if I need to build out another closet in the future."; 

$all_reviews[51]['name']="Erik Brian";
$all_reviews[51]['addr']="Redondo Beach, CA";
$all_reviews[51]['stars']=$stars; 
$all_reviews[51]['msg']="I contacted a sales rep because the website wasn't 
working the way I needed. The sales rep was more than helpful and worked 
with me to adjust the dimensions to my liking. The order arrived in tact 
and was fairly simple to install. If I had any more closets I would order 
from them again.";

$all_reviews[52]['name']="Joann H.";
$all_reviews[52]['addr']="Anchorage, Alaska";
$all_reviews[52]['stars']=$stars; 
$all_reviews[52]['msg']="Love, love my closet. My husband surprised me for 
my birthday. I had been out of town taking care of my mother and when I came 
back there was a beautiful closet for me. The designer must have asked all 
of the right questions, as there was a place for everything. Now my husband 
wants to do his closet.";

$all_reviews[53]['name']="Dale S.";
$all_reviews[53]['addr']="Honolulu, Hawaii";
$all_reviews[53]['stars']=$stars; 
$all_reviews[53]['msg']="My closet turned out great. I mostly enjoyed the 
process of getting it designed. My designer really listened to me and also 
came up with some great solutions to my ever growing shoe collection.";

$all_reviews[54]['name']="Robert L.";
$all_reviews[54]['addr']="Albuquerque, New Mexico";
$all_reviews[54]['stars']=$stars_four; 
$all_reviews[54]['msg']="My teenage daughter’s bedroom was chaos, so I 
thought a new closet would help out. She was excited to get the closet 
and with all of the customization for all of her stuff, it has worked out 
really well. Her room is almost clean. Thanks Closets To Go.";
*/

$all_reviews=$reviews->getAll($dbCustom);

$pagenum = (isset($_POST['pagenum'])) ? $_POST['pagenum'] : 0;
$url_str = SITEROOT."our-reviews.html";
$total_rows = sizeof($all_reviews);
$rows_per_page = 10;

$last = ceil($total_rows/$rows_per_page); 
if($last == 0) $last = 1;
if($pagenum > $last){ 
	$pagenum = $last; 
}
if($pagenum < 1){ 
	$pagenum = 1; 
}

$start = ($pagenum - 1) * $rows_per_page;
$end = $pagenum * $rows_per_page;

$t_reviews = array_slice($all_reviews, $start, $rows_per_page, true);


function getPagination($total_rows = 0
	,$rows_per_page=1 
	,$pagenum = 1
	,$start=1
	,$last=1	
	,$path=''){

	$previous = $pagenum-1;
	$next = $pagenum+1;
	if($previous < 1) $previous = 1; 
	if($next > $last) $next = $last; 

	$block = '';
		
	if($pagenum > 1){
		$block .= "<div style='float:left;'>";
		$block .= "<form action='".$path."' method='post'>";	
		$block .= "<input type='hidden' name='pagenum' value='".$previous."'>";		
		$block .= "<button class='pagination-button'><</button>";
		$block .= "</form>";
		$block .= "</div>";
	}	

	for($i = 1; $i <= $last; $i++){
		$block .= "<div style='float:left;'>";
		$block .= "<form action='".$path."' method='post'>";	
		$block .= "<input type='hidden' name='pagenum' value='".$i."'>";		
		$block .= "<button class='pagination-number'>";
		if($i==$pagenum){
			$block .= "<span style='color:red;'>".$i."</span>";
		}else{
			$block .= "<span style='color:blue;'>".$i."</span>";			
		}
		$block .= "</button>";
		$block .= "</form>";
		$block .= "</div>";		
	}

	if($pagenum < $i){
		$block .= "<div style='float:left;'>";
		$block .= "<form action='".$path."' method='post'>";	
		$block .= "<input type='hidden' name='pagenum' value='".$next."'>";		
		$block .= "<button class='pagination-button'>></button>";
		$block .= "</form>";
		$block .= "</div>";		
	}
	$block .= "<div style='clear:both;height:20px;'></div>";
	
	return $block;
	
}


?>