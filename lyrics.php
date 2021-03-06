<?php
	$uri = $_SERVER['QUERY_STRING'];
	$uri = explode('s=', $uri);
	$song = $uri[1];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Crossings Community Church - 1 West Campbell Avenue, Campbell, CA 95008</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
		<script type="text/javascript" charset="utf-8" src="/js/jquery-1.2.6.js"></script>
		<style type="text/css" media="screen">
			#lyrics-container {
				border:10px solid #5c2719;
				background-color:#fff;
				margin:20px;
			}
			#lyrics-content {
				text-align:left;
			}
			#lyrics-content h1 {
				margin:20px;
			}
			blockquote {
				font-style:normal;
			}
			blockquote span {
				font-style:italic;
			}
			.print {
				background:url('/css/img/icons/printer.png') no-repeat;
				height:16px;
				width:16px;
				display:block;
				float:right;
				padding:10px;
			}
		</style>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				// console.log('<?= $song; ?>');
				$('#<?= $song; ?>').show();
			});
		</script>
	</head>
	<body>
		<div id="lyrics-container">
			<div id="lyrics-content">
				<a class="print" href="javascript:window.print();"><span class="hide">Print these lyrics</span></a>
				<div id="cryinmyheart" style="display:none;">
					<h1>Cry in My Heart</h1>
					<blockquote>
						There's a cry in my heart<br />
						For Your glory to fall<br />
						For Your presence to fill up my senses<br />
						There's a yearning again<br />
						A thirst for discipline<br />
						A hunger for things that are deeper<br />
						<br />
						<span>
							Could You take me beyond?<br />
							Could You carry me through?<br />
							If I open my heart<br />
							Could I go there with You?<br />
						</span>
						<br />
						For what do I have if I don't have You, Jesus?<br />
						What in this life could mean any more?<br />
						You are my Rock, You are my Glory<br />
						You are the Lifter of my head<br />
						Lifter of my head<br />
						<br />
						<span>(repeat)</span>
					</blockquote>
				</div>
				<div id="ilookuponyourhill" style="display:none;">
					<h1>I Look Upon Your Hill</h1>
					<blockquote>
						I look upon Your hill<br />
						Your broken body hanging still<br />
						Your blood drips down<br />
						Your face and brow<br />
						You brought me life through death<br />
						No greater Love than this<br />
						<br />
						<span>
						Surely He's borne our grief<br />
						Carried our sorrow<br />
						Though we've gone astray<br />
						It's by His stripes and wounds<br />
						We were healed<br />
						On that glorious day<br />
						</span>
						<br />
						(repeat)<br />
						<br />
						Oh Lord, You've worn the crown<br />
						I've placed upon Your head<br />
						Oh Lord, I've pierced Your hands<br />
						Yet Your blood declares my innocence<br />
					</blockquote>
				</div>
				<div id="myjesusilovethee" style="display:none;">
					<h1>My Jesus, I Love Thee</h1>
					<blockquote>
						My Jesus, I love Thee, I know Thou art mine;<br />
						For Thee all the follies of sin I resign.<br />
						My gracious Redeemer, my Savior art Thou;<br />
						If ever I loved Thee, my Jesus, ‘tis now.<br />
						<br />
						I love Thee because Thou has first loved me,<br />
						And purchased my pardon on Calvary’s tree.<br />
						I love Thee for wearing the thorns on Thy brow;<br />
						If ever I loved Thee, my Jesus, ‘tis now.<br />
						<br />
						I’ll love Thee in life, I will love Thee in death, <br />
						And praise Thee as long as <br />
						Thou lendest me breath;<br />
						And say when the death dew<br />
						Lies cold on my brow,<br />
						If ever I loved Thee, my Jesus, ‘tis now.<br />
						<br />
						In mansions of glory and endless delight,<br />
						I’ll ever adore Thee in heaven so bright;<br />
						I’ll sing with the glittering crown on my brow;<br />
						If ever I loved Thee, my Jesus, ’tis now.<br />
					</blockquote>
				</div>
				<div id="sweetlybroken" style="display:none;">
					<h1>Sweetly Broken</h1>
					<blockquote>
						To the cross I look, to the cross I cling<br />
						Of its suffering I do drink<br />
						Of its work I do sing<br />
						<br />
						For on it my Savior <br />
						both bruised and crushed <br />
						Showed that God is love<br />
						And God is just<br />
						<br />
						<span>
						At the cross You beckon me<br />
						You draw me gently to my knees, and I am<br />
						Lost for words, so lost in love,<br />
						I’m sweetly broken, wholly surrendered<br /> 
						</span>
						<br />
						What a priceless gift, <br />
						undeserved life<br />
						Have I been given<br />
						Through Christ crucified<br />
						<br />
						You’ve called me out of death<br />
						You’ve called me into life<br />
						And I was under Your wrath<br />
						Now through the cross I’m reconciled<br />
						<br />
						<span>(chorus)</span><br />
						In awe of the cross I must confess<br />
						How wondrous Your redeeming love and<br />
						How great is Your faithfulness <br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="fairestlordjesus" style="display:none;">
					<h1>Fairest Lord Jesus</h1>
					<blockquote>
						Fairest Lord Jesus, ruler of all nature<br />
						O Thou of God and man the Son<br />
						Thee I will cherish, Thee I will honor<br />
						Thou, my soul's glory, joy and crown<br />
						<br />
						Fair is the sunshine, <br />
						Fairer still the moonlight<br />
						and all the twinkling, starry host<br />
						Jesus shines brighter, Jesus is purer<br />
						Than all the angels heaven can boast<br />
						<br />
						Beautiful Savior, Lord of all nations<br />
						Son of God and Son of man<br />
						Glory and honor, praise, adoration<br />
						now and forevermore be Thine<br />
					</blockquote>
				</div>
				<div id="grace" style="display:none;">
					<h1>Grace</h1>
					<blockquote>
						Ever constant, ever surging, <br />
						Around and within us<br />
						Your grace, perfect for our state<br />
						Atonement for our failing, <br />
						Reconciled, Called, Redeemed<br />
						Your grace, in spite of our hate<br />
						<br />
						And now we wait<br />
						For your coming again<br />
						For the awesome day of the Lord<br />
						By your power You’ll complete <br />
						what Your cross began<br />
						We exalt you our Redeemer, friend<br />
						<br />
						<span>
						We join creation’s song to you<br />
						For your brilliance and wisdom and love<br />
						Our failing met by the cross of your grace<br />
						Our brokenness healed by magnificent love<br />
						</span>
						<br />
						Our heart our mind our will, slow to conform<br />
						Your patience, Your love in return<br />
						You showed us how<br />
						To love to forgive and to bless<br />
						We love you because you first loved us.<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						Though now we see only partly<br />
						Then we will know in full<br />
						We eagerly are waiting to see Your face<br />
						To know you fully as we are fully known<br />
						<br />
						<span>(chorus)</span><br />
						<br />
					</blockquote>
				</div>
				<div id="hearourcrieslord" style="display:none;">
					<h1>Hear Our Cries, Lord</h1>
					<blockquote>
						Hear our cries Lord,<br />
						Hear our prayers.<br />
						Take our burdens,<br />
						Calm our fears.<br />
						<br />
						<span>
						God will you make us<br />
						A people that love You.<br />
						Please take our offerings<br />
						That we set before You.<br />
						God hear our prayers<br />
						That we're lifting up to You.<br />
						God see our tears<br />
						That we're struggling to see through.<br />
						God, hear our prayers to You.<br />
						</span>
						<br />
						In our weakness,<br />
						You remain.<br />
						When we're broken,<br />
						You sustain.<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						God hear our prayers.<br />
						We lift them to You.<br />
						God hear our prayers,<br />
						Lord make our hearts true.<br />
						Will You make our hearts true?<br />
						Hear our prayers Lord.<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						God hear our prayers<br />
						As we lift them to heaven.<br />
						We're praying the angels<br />
						Receive and embrace them.<br />
						The hopes of the empty,<br />
						The cries of the broken.<br />
						We're reaching our hands out,<br />
						Oh Lord will You hold them?<br />		
					</blockquote>
				</div>
				<div id="yourmajesty" style="display:none;">
					<h1>Your Majesty</h1>
					<blockquote>
						King of Kings, majesty, <br />
						God of heaven living in me<br />
						Gentle Savior, closest friend,<br />
						Strong Deliverer, Beginning and End<br />
						All within me falls at Your throne<br />
						<br />
						<span>
						Your majesty I can but bow<br />
						I lay my all before You now<br />
						In royal robes I don't deserve<br />
						I live to serve Your majesty<br />
						</span>
						<br />
						Earth and heaven worship You <br />
						God eternal faithful and true<br />
						All the nations ransomed souls, <br />
						Promise sinner kneel at His throne<br />
						All within me cries out in praise<br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="prayerfortheephesians" style="display:none;">
					<h1>Prayer for the Ephesians</h1>
					<blockquote>
						Strengthen us in the inner man <br />
						By Your Spirit dwell in our hearts<br />
						By faith<br />
						<br />
						Root us Lord in Your love <br />
						That we might comprehend with all the saints<br />
						The length and width and height and depth<br />
						<br />
						<span>
						To Him be the glory in the church and in Jesus<br />
						To all generations forever and ever <br />
						</span>
						<br />
						To know the love of Christ which <br />
						Passes knowledge<br />
						To be filled with<br />
						All the fullness of God<br />
						<br />
						Now to Him who is able to do far beyond <br />
						All we ask or think<br />
						Or imagine<br />
						According to the power that works within us<br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="howgreatthouart" style="display:none;">
					<h1>How Great Thou Art</h1>
					<blockquote>
						O, Lord my God!<br />
						When I in awesome wonder <br />
						Consider all the worlds<br />
						Thy hands have made,<br />
						I see the stars, I hear the rolling thunder,<br />
						Thy pow’r throughout the universe displayed<br />
						<br />
						<span>
						Then sings my soul<br />
						My Savior God to Thee; <br />
						How great Thou art! How great Thou art!<br />
						Then sings my soul<br />
						My Savior God to Thee,<br />
						How great Thou art, how great Thou art!<br />
						</span>
						<br />
						And when I think that God<br />
						His Son not sparing,<br />
						Sent him to die, I scarce can take it in;<br />
						That on the cross<br />
						My burden gladly bearing,<br />
						He bled and died to take away my sin;<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						When Christ shall come<br />
						with shout of acclamation<br />
						And take me home<br />
						What joy shall fill my heart!<br />
						Then I shall bow in humble adoration<br />
						And there proclaim<br />
						My God, how great Thou art!<br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="allforyou" style="display:none;">
					<h1>All For You</h1>
					<blockquote>
						Nothing compares to, life I have in You<br />
						Nothing of this world satisfies<br />
						So, I want to let go<br />
						I want to let You know<br />
						All that I have is Yours<br />
						<br />
						Here I am, as gold to the fire<br />
						I will surrender to Your hand<br />
						To this place, Lord<br />
						I have come ready for Your touch<br />
						<br />
						What is it me, that hangs on for so long<br />
						Why do I fight the tears that come?<br />
						I work so hard to keep in control when<br />
						All that I want to is let go<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						<span>
						I’ll take this life, and lay it down<br />
						I’m letting go, I’m letting go<br />
						My hopes and dreams, here at Your feet<br />
						I’m letting go, I’m letting go<br />
						</span>
					</blockquote>
				</div>
				<div id="opentheeyesofmyheartlord" style="display:none;">
					<h1>Open the Eyes of My Heart, Lord</h1>
					<blockquote>
						Open the eyes of my heart, Lord,<br />
						Open the eyes of my heart; <br />
						I want to see You, I want to see You<br />
						<br />
						To see You high and lifted up,<br />
						Shining in the light of Your glory.<br />
						Pour out Your power and love;<br />
						As we sing Holy, Holy, Holy.<br />
						<br />
						As we sing Holy, Holy, Holy,<br />
						I want to see You<br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="solidrock" style="display:none;">
					<h1>Solid Rock</h1>
					<blockquote>
						My hope is built on nothing less<br />
						Than Jesus’ blood and righteousness<br />
						I dare not trust the sweetest frame<br />
						But wholly lean on Jesus’ Name.<br />
						<br />
						<span>
						On Christ the solid rock I stand<br />
						All other ground is sinking sand<br />
						</span>
						<br />
						His oath, His covenant, His blood<br />
						Support me in the whelming flood<br />
						When all around my soul gives way<br />
						He then is all my hope and stay<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						When darkness veils His lovely face<br />
						I rest on His unchanging grace<br />
						In every high and stormy gale<br />
						My anchor holds within the veil.<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						When He shall come with trumpet sound<br />
						O may I then in Him be found<br />
						Dressed in His righteousness alone<br />
						Faultless to stand before the throne.<br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="allcreaturesofourgodandking" style="display:none;">
					<h1>All Creatures of Our God and King</h1>
					<blockquote>
						All creatures of our God and King<br />
						lift up your voices with us sing<br />
						Oh praise Him, Hallelujah<br />
						<br />
						Thou burning sun with golden beams<br />
						Thou silver moon with softer gleam<br />
						Oh praise Him, Oh praise Him<br />
						Hallelujah, Hallelujah, Hallelujah<br />
						<br />
						Thou rushing wind that art so strong<br />
						Ye clouds that seldom have no long<br />
						Oh praise Him, Hallelujah<br />
						<br />
						Thou raising morning praise rejoice<br />
						Ye lights of evening find a voice<br />
						Oh praise Him, Oh praise Him<br />
						Hallelujah, Hallelujah, Hallelujah<br />
						<br />
						Let all things their creator bless<br />
						and worship Him in humbleness<br />
						Oh praise Him, Hallelujah<br />
						<br />
						Praise, Praise the Father, praise the Son<br />
						Praise the Spirit three in one<br />
						Oh praise Him, Oh praise Him<br />
						Hallelujah, Hallelujah, Hallelujah<br />
					</blockquote>
				</div>
				<div id="youremyhope" style="display:none;">
					<h1>You're My Hope</h1>
					<blockquote>
						As I think upon You<br />
						And Your sacrifice<br />
						I’m lost for words<br />
						My unworthiness and Your greatness<br />
						Fill my heart<br />
						<br />
						Oh the matchless King coming for me<br />
						To set me free<br />
						<br />
						So I lift the cup of salvation<br />
						And I lay my life at Your feet<br />
						Lord, keep me hold me close to You<br />
						You’re my hope<br />
						You’re my joy<br />
						(You’re my peace)<br />
						(You’re my praise)<br />
						<br />
						Perfect Word come search me <br />
						Reveal to me<br />
						My every sin, my lack of trust<br />
						How can I stand<br />
						<br />
						I stand in You justified and clean<br />
						For Your glory and for Your name<br />
					</blockquote>
				</div>
				<div id="meetwithme" style="display:none;">
					<h1>Meet With Me</h1>
					<blockquote>
						I'm here to meet with You<br />
						Come and meet with me<br />
						I'm here to find You<br />
						Reveal Yourself to me<br />
						<br />
						As I wait, You make me strong<br />
						As I long, You draw me to Your arms<br />
						As I stand and sing Your praise<br />
						You come, You come and You fill this place<br />
						Won't You come, Won't You come and fill this place<br />
					</blockquote>
				</div>
				<div id="psalm23" style="display:none;">
					<h1>Psalm 23</h1>
					<blockquote>
						You prepare a table before me<br />
						In the presence of my enemies<br />
						You anoint my head with oil<br />
						And my cup it overflows<br />
						With love, peace, and Joy<br />
						<br />
						Surely goodness and mercy<br />
						Will follow me all the days of my life<br />
						<br />
						And I will dwell in the house of the Lord<br />
						Forever, forever, forever, amen<br />
					</blockquote>
				</div>
				<div id="manofsuffering" style="display:none;">
					<h1>Man of Suffering</h1>
					<blockquote>
						He was despised and rejected by men<br />
						He had no beauty to attract us to Him<br />
						A man of sorrows and familiar with suffering<br />
						Like one from whom men hide their faces and we esteemed Him not<br />
						<br />
						Who has believed our message?<br />
						To whom has the arm of the Lord been revealed?<br />
						Surely He took up our infirmities<br />
						And Surely He carried our sorrows<br />
						He was pierced for our transgressions<br />
						He was crushed for our iniquities<br />
						<br />
						To bring us peace our punishment was placed upon Him<br />
						He was cut off from the land of the living<br />
						He was assigned a grave with the wicked and the rich<br />
						Though He had done no violence nor in Him was any deceit<br />
						<br />
						Yet it was the will of the Lord to crush Him and to cause Him to suffer<br />
						And though He makes His life an offering<br />
						<br />
						He will see His offspring and prolong His days<br />
						The will of the Lord will prosper in His hand<br />
						After the suffering of His soul He will see the light of life and be satisfied<br />
						And by His knowledge He will justify the many<br />
						<br />
						Because He poured His life out unto death<br />
						And was numbered with the sinners<br />
					</blockquote>
				</div>
				<div id="onlyyou" style="display:none;">
					<h1>Only You</h1>
					<blockquote>
						Take my heart I lay it down<br />
						At the feet of You who's crowned<br />
						<br />
						Take my life, I’m letting go<br />
						I lift it up to you who's throned<br />
						<br />
						<span>
						And I will worship You Lord<br />
						Only You Lord<br />
						And I will bow down before You<br />
						Only You Lord<br />
						</span>
						<br />
						Take my fret, take my fear<br />
						All I have, I’m leaving here<br />
						<br />
						Be all my hopes, be all my dreams<br />
						Be all my delights, be my everything<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						Just You and me here now<br />
					</blockquote>
				</div>
				<div id="offering" style="display:none;">
					<h1>Offering</h1>
					<blockquote>
						Rain down Your mercy, draw me near<br />
						Cause my heart, to see You clear<br />
						This song of praise, I offer up<br />
						It flows from grace, You’ve filled my cup<br />
						<br />
						<span>
						All I have is all of You<br />
						All of You is what I cling to<br />
						<br />
						Savior my great King<br />
						Here I bring<br />
						My life to You an Offering<br />
						</span>
						<br />
						In Your goodness, sustain my breath<br />
						To serve You Lord, until my death<br />
						Step by step, day after day<br />
						Make me wholly Yours always<br />
						<br />
						<span>(chorus)</span>
					</blockquote>
				</div>
				<div id="whiteassnow" style="display:none;">
					<h1>White As Snow</h1>
					<blockquote>
						Have mercy on me, O<br />
						GodAccording to Your unfailing love<br />
						According to Your great compassion<br />
						Blot out my transgressions<br />
						<br />
						<span>
						Would you create in me a clean heart, O God?<br />
						Restore in me the joy of Your salvation<br />
						</span>
						<br />
						The sacrifices of our God<br />
						Are a broken and contrite heart<br />
						Against You, and You aloneHave I sinned<br />
						<span>(chorus)</span><br />
						<br />
						Wash me white as snow<br />
						That I would be made whole<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
				<div id="canifind" style="display:none">
					<h1>Can I Find</h1>
					<blockquote>
						There's been times before<br />
						When I've said the words<br />
						There's been times before<br />
						When I've paid You lip service<br />
						<br />
						But, I was untrue<br />
						There's been times before,<br />
						When You've opened my eyes.<br />
						And all I saw was You<br />
						Can I find the words, Can I find the time<br />
						<br />
						There will come a time<br />
						When I'll stand before You<br />
						And as I bow, I'll see You in glory<br />
						And there at Your feet, I'll think to myself<br />
						<br />
						<span>
						Can I find the words,<br />
						To describe Your beauty Lord<br />
						Can I find the time, to describe You<br />
						</span>
						<br />
						If words are all I have<br />
						And eternal time is all I have<br />
						Then I'll stand in silent wonder forever<br />
						<br />
						<span>(chorus)</span>
						
					</blockquote>
				</div>
				<div id="howdeep" style="display:none;">
					<h1>How Deep</h1>
					<blockquote>
						How deep, how real,<br />
						How true is Your care for me<br />
						How high, How wide,<br />
						How great is Your love for me<br />
						<br />
						As deep as the ocean's darkest depths<br />
						As real as the air that I breathe<br />
						As true as Your Word<br />
						That’s changing me<br />
						<br />
						As high as the heavens,<br />
						As far as I can see<br />
						Wider than the distance<br />
						Between east and west<br />
						Greater than mountains in majesty<br />
						<br />
						<span>
						I want to love You the same<br />
						I want You to bring glory to Your name<br />
						Use me, Take me, make me like You<br />
						</span>
					</blockquote>
				</div>
				<div id="kingofmyworld" style="display:none;">
					<h1>King Of My World</h1>
					<blockquote>
						Salvation’s sure<br />
						Your blood secured<br />
						You died once for all<br />
						Your grace is strong<br />
						<br />
						<span>
						King of my world bring peace within<br />
						Teach me Your way that I may stay<br />
						</span>
						<br />
						Sensing Your gaze, Bringing You joy<br />
						Composing to You, This life’s a song<br />
						This life’s a song<br />
					</blockquote>
				</div>
				<div id="whatjoyisfound" style="display:none;">
					<h1>What Joy Is Found</h1>
					<blockquote>
						What joy is found<br />
						In communion with You<br />
						In beholding Your beauty<br />
						In knowing Your truth<br />
						In living a life<br />
						That pleases Your heart<br />
						Responding with praises<br />
						To all that You are<br />
						<br />
						<span>
						Singing (And) oh how lovely<br />
						Is the King in all His glory<br />
						Is the Christ who is holy<br />
						Who was and is<br />
						And how amazing<br />
						Is His love so unfailing<br />
						Is His grace that draws us near<br />
						</span>
						<br />
						What joy is found<br />
						At the foot of Your throne<br />
						Bowing in reverence<br />
						Giving thanks to the One<br />
						Joining the angels<br />
						And the heavenly throng<br />
						Along with the saints<br />
						In unending song<br />
					</blockquote>
				</div>
				<div id="considerme" style="display:none;">
					<h1>Consider Me</h1>
					<blockquote>
						Consider me, Lord<br />
						Here am I, waiting for You<br />
						Take my life, I give it to You<br />
						<br />
						Move me, change me<br />
						<br />
						<span>
						I want to know You, Jesus<br />
						I want You to look me in the eyes and say<br />
						"Well done, faithful one<br />
						Come, know peace"<br />
						</span>
						<br />
						Delight in me, Lord<br />
						Let me see, Your gift at work<br />
						And may it be, of greatest worth<br />
						<br />
						Move me, change me<br />
						<br />
						<span>(chorus)</span><br />
						<br />
						To walk in a way that’s pleasing to You<br />
						That’s worthy of the Call<br />
						All that I have, I give to You<br />
						To magnify Your Name<br />
						<br />
						Magnify, magnify,<br />
						To magnify Your Name<br />
						Magnify, magnify<br />
						<br />
						<span>(chorus)</span><br />
					</blockquote>
				</div>
			</div>
		</div>
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/inc/_footer.php'); ?>
	</body>
</html>
