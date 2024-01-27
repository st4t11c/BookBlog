<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: Login.php");
    exit();
}

$loggedInUserRole = isset($_SESSION['roli']) ? $_SESSION['roli'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookBlog</title>
    <link rel="stylesheet" href="books.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <div class="navbar">
    <div class="logo">
        <a id="dashboard" href="Home.php"><img style="width: 10%; margin-right:100%;" src="book1.png">
        <h2>BookBlog</h2></a>
    </div>
    <ul>
        <li><a href="Home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="About.php"><i class="fa fa-info" aria-hidden="true"></i> About</a></li>
        <li><a href="Quotes.php"><i class="fa fa-book" aria-hidden="true"></i> Quotes</a></li>
    </ul>
    <div class="logged-in-user">
    <span> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
        <div class="dropdown-menu">
            <a href="qkyqu.php">Logout</a>
        </div>
    </div>

</div>

  

  <section class="packages" id="packages">
    <div class="content">
      <div class="h2">
        <h2>Comedy</h2>
      </div>
        <br>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="LaughterTheBestMedicine.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Laughter The Best Medicine</h3>
                    
                    <div class="reviews">Reader's Digest Laughter is the Best Medicine: All Time Favorites: The funniest jokes, stories, and cartoons from 100 years of Reader's Digest</div>
                    <a href="https://en.wikipedia.org/wiki/Reader%27s_Digest" class="btn">Author: Reader's Digest</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheDoOver.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Do Over</h3>
                    
                    <div class="reviews">It is a romantic comedy that tells the story of Persephone “Perci” Mayfield, a woman who is putting up with a lot of crap from her friends and family.</div>
                    <a href="https://sharonmpeterson.com/about/" class="btn">Author: Sharon M Peterson</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheSilverLadiesOfPennyLane.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Silver Ladies Of Penny Lane</h3>
                    
                    <div class="reviews">They make you laugh-out-loud one minute, and then have you crying the next… they’re really emotional and tug at the heart strings but are fun, life-affirming reads!</div>
                    <a href="https://www.booknotification.com/authors/dee-macdonald/" class="btn">Author: Dee MacDonald</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheTanglewoodTeaShop.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Tanglewood Tea Shop</h3>
                    
                    <div class="reviews">The Tanglewood Tea Shop  A laugh out loud romantic comedy of new starts and finding home.</div>
                    <a href="https://www.lilacmills.com/" class="btn">Author: Lilac Mills</a>
                </div>
                
            </div>
          </div>
            <br>
            <h2>Science Fiction </h2>
            <br>
            <div class="box-container">
            <div class="box">
              
                <div class="image">
                    <img src="ProjectHailMary.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Project Hail Mary</h3>
                    
                    <div class="reviews">Project Hail Mary is a science-based thriller about a lone astronaut who must save the earth from disaster.</div>
                    <a href="https://en.wikipedia.org/wiki/Andy_Weir" class="btn">Author: Andy Weir</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="DarkMatter.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Dark Matter</h3>
                   
                    <div class="reviews">Jason Dessen, a former quantum mechanics physicist, is a college physics professor who lives in Chicago with his wife, Daniela and their son Charlie. One day Jason is kidnapped and drugged. He wakes up in a science laboratory and stumbles out of a metal cube.</div>
                    <a href="https://en.wikipedia.org/wiki/Blake_Crouch" class="btn">Author: Blake Crouch</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheWager.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Wager</h3>
                    
                    <div class="reviews">The Wager covers accounts of the 18th century shipwreck of a British naval ship, the Wager, during the War of Jenkins’ Ear between Spain and Britain. The survivors of the shipwreck and their captain, David Cheap, were stranded on an island off the South American region of Patagonia, later named Wager Island.</div>
                    <a href="https://en.wikipedia.org/wiki/David_Grann" class="btn">Author: David Grann</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheSpyAndTheTraitor.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Spy And The Traitor</h3>
                    
                    <div class="reviews">The Spy and the Traitor discusses the story of Oleg Gordievsky, a Soviet double agent who helped end the Cold War through his historic efforts.</div>
                    <a href="https://en.wikipedia.org/wiki/Ben_Macintyre" class="btn">Author: Ben Macintyre</a>
                </div>
            </div>
        </div>
        <br>
            <h2>Romance</h2>
            <br>
            <div class="box-container">
            <div class="box">
              
                <div class="image">
                    <img src="ForOnceInMyLife.jpg" alt="">
                </div>
                <div class="content">
                    <h3>For Once In My Life</h3>
                    
                    <div class="reviews">Twenty-nine-year-old Lily Buckley planned to be happily married and in her dream job by now. Instead she’s been single since being left at the altar three years ago, and works at her local paper, writing about giant vegetables at the village fete and a dog who looks exactly like Chewbacca.</div>
                    <a href="https://colleencolemanauthor.com/about" class="btn">Author: Colleen Coleman</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheSummerHouse.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Summer House</h3>
                   
                    <div class="reviews">Callie Weaver and best friend Olivia Dixon have finally done it: put their life savings into the beach house they admired through childhood summers, on the dazzling white sand of North Carolina’s Outer Banks.</div>
                    <a href="https://en.wikipedia.org/wiki/Jenny_Hale" class="btn">Author: Jenny Hale</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Love&OtherWords.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Love & Other Words</h3>
                    
                    <div class="reviews">Macy Sorensen, a successful paediatric resident who, after eleven years apart, reconciles with Elliot Petropoulos, her childhood sweetheart and first love. </div>
                    <a href="https://en.wikipedia.org/wiki/Christina_Lauren" class="btn">Author: Christina Lauren</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="In5Years.jpg" alt="">
                </div>
                <div class="content">
                    <h3>In Five Years</h3>
                    
                    <div class="reviews">In Five Years is about a successful and recently engaged woman, Dannie, who sees a vision of herself five years into the future. In that vision, she's engaged and in love with a man she's never met and living in an apartment she doesn't recognize.</div>
                    <a href="https://en.wikipedia.org/wiki/Rebecca_Serle" class="btn">Author: Rebecca Serle</a>
                </div>
            </div>
        </div>
        <br>
            <h2>Thriller</h2>
            <br>
            <div class="box-container">
            <div class="box">
              
                <div class="image">
                    <img src="ThenSheWasGone.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Then She Was Gone</h3>
                    
                    <div class="reviews">Ellie Mack was the perfect daughter. She was fifteen, the youngest of three. She was beloved by her parents, friends, and teachers. She and her boyfriend made a teenaged golden couple. She was days away from an idyllic post-exams summer vacation, with her whole life ahead of her. And then she was gone.</div>
                    <a href="https://en.wikipedia.org/wiki/Lisa_Jewell" class="btn">Author: Lisa Jewell</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheHuntingPart.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Hunting Party</h3>
                   
                    <div class="reviews">A shivery, atmospheric, page-turning novel of psychological suspense in the tradition of Agatha Christie, in which a group of old college friends are snowed in at a hunting lodge … and murder and mayhem ensue.</div>
                    <a href="https://en.wikipedia.org/wiki/Lucy_Foley" class="btn">Author: Lucy Foley</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="NeverLie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Never Lie</h3>
                    
                    <div class="reviews">'Never Lie' by Freida McFadden is a gripping psychological thriller that explores the consequences of deceit and the lengths one will go to protect their secrets. Newlyweds look at buying their dream house. Unfortunately, it comes with a dark psychological past. </div>
                    <a href="https://www.freidamcfadden.com/about-freida.html" class="btn">Author: Freida McFadden</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="AManWithOneOfThoseFaces.jpg" alt="">
                </div>
                <div class="content">
                    <h3>A Man With One Of Those Faces</h3>
                    
                    <div class="reviews">Currently, he passes his time visiting old and dying people, keeping them company and pretending to be someone from their past. However, this little act gets him far more than he bargained for when an old man mistakes him for the nephew of a Dublin crime lord and tries to stab him.</div>
                    <a href="https://en.wikipedia.org/wiki/Caimh_McDonnell" class="btn">Author: Caimh McDonnell</a>
                </div>
            </div>
        </div>
        <br>
            <h2>History</h2>
            <br>
            <div class="box-container">
            <div class="box">
              
                <div class="image">
                    <img src="ABriefHistoryOfHumankind.jpg" alt="">
                </div>
                <div class="content">
                    <h3>A Brief History Of Humankind</h3>
                    
                    <div class="reviews">Harari surveys the history of humankind from the Stone Age up to the 21st century, focusing on Homo sapiens. He divides the history of Sapiens into four major parts</div>
                    <a href="https://en.wikipedia.org/wiki/Yuval_Noah_Harari" class="btn">Author: Yuval Harari</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="DemocracyAwakening.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Democracy Awakening</h3>
                   
                    <div class="reviews">“Democracy Awakening” starts in the 1930s, when Americans who’d been wiped out in the 1929 stock market crash were not about to let the rich demolish the economy again.</div>
                    <a href="https://en.wikipedia.org/wiki/Heather_Cox_Richardson" class="btn">Author: Heather Cox Richardson</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="Napoleon.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Napoleon</h3>
                    
                    <div class="reviews">With immense detail and captivating storytelling, Roberts unfolds the military genius of Napoleon, who seized the reins of power in a coup d'état in 1799, effectively ending the French Revolution, and establishing himself as the First Consul of France.</div>
                    <a href="https://en.wikipedia.org/wiki/Andrew_Roberts,_Baron_Roberts_of_Belgravia" class="btn">Author: Andrew Roberts</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheReadheadOfAuschwitz.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Readhead Of Auschwitz</h3>
                    
                    <div class="reviews">The Redhead of Auschwitz tells the story of Rosie Greenstein, a young Jewish woman who was sent to Auschwitz-Birkenau concentration camp during the Holocaust. Rosie was known for her fiery red hair, which made her a target for the Nazis. She was forced to work in the camp’s labor force, and she witnessed the horrors of the Holocaust firsthand. </div>
                    <a href="https://www.jpost.com/jerusalem-report/article-698507" class="btn">Author: Nechama Birnbaum</a>
                </div>
            </div>
        </div>
        <br>
            <h2>Action</h2>
            <br>
            <div class="box-container">
            <div class="box">
              
                <div class="image">
                    <img src="ThoseEmptyEyes.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Those Empty Eyes</h3>
                    
                    <div class="reviews">Most shocking of all—as Alex digs into Laura’s disappearance, she realizes there are unexpected connections to the murder of her own family.</div>
                    <a href="https://freshfiction.com/author.php?id=38821" class="btn">Author: Charlie Donlea</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheEdge.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Edge</h3>
                   
                    <div class="reviews">When CIA operative Jenny Sikwell is murdered in rural Maine, government officials have immediate concerns over national security. Her laptop and phone were full of state secrets that, in the wrong hands, endanger the lives of countless operatives.</div>
                    <a href="https://www.davidbaldacci.com/" class="btn">Author: David Baldacci</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="TheSecret.jpg" alt="">
                </div>
                <div class="content">
                    <h3>The Secret</h3>
                    
                    <div class="reviews">Eight respectable, upstanding people have been found dead across the US. These deaths look like accidents and don’t appear to be connected. Until one body – the victim of a fatal fall from a hospital window – generates some unexpected attention.</div>
                    <a href="https://en.wikipedia.org/wiki/Lee_Child" class="btn">Author: Lee Child</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="RainbowSix.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Rainbow Six</h3>
                    
                    <div class="reviews">A group of terrorists like none the world has ever encountered before - so extreme that their success could literally mean the end of life on this earth as we know it.</div>
                    <a href="https://en.wikipedia.org/wiki/Tom_Clancy" class="btn">Author: Tom Clancy</a>
                </div>
            </div>
        </div>
        <br>
        <h2>Spiritual</h2>
        <br>
        <div class="box-container">
        <div class="box">
          
            <div class="image">
                <img src="TheSecretLanguageOfTheUniverse.jpg" alt="">
            </div>
            <div class="content">
                <h3>The Secret Language Of The Universe</h3>
                
                <div class="reviews">Laura possesses an incredible gift: the ability to communicate with loved ones who have passed, convey messages of love and healing, and impart a greater understanding of our interconnectedness. </div>
                <a href="https://tvovermind.com/laura-lynne-jackson/" class="btn">Author: Laura Lynne Jackson</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="ThePowerOfNow.jpg" alt="">
            </div>
            <div class="content">
                <h3>The Power Of Now</h3>
               
                <div class="reviews">A word of mouth phenomenon since its first publication, The Power of Now is one of those rare books with the power to create an experience in readers, one that can radically change their lives for the better.</div>
                <a href="https://en.wikipedia.org/wiki/Eckhart_Tolle" class="btn">Author: Eckhart Tolle</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="TheSevenSpiritualLawsOfSuccess.jpg" alt="">
            </div>
            <div class="content">
                <h3>The Seven Spiritual Laws Of Success</h3>
                
                <div class="reviews">In The Seven Spiritual Laws of Success, Deepak Chopra distills the essence of his teachings into seven simple, yet powerful principles that can easily be applied to create success in all areas of your life. Based on natural laws that govern all of creation, this book shatters the myth that success is the result of hard work, exacting plans, or driving ambition.</div>
                <a href="https://en.wikipedia.org/wiki/Deepak_Chopra" class="btn">Author: Deepak Chopra</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="Lighter.jpg" alt="">
            </div>
            <div class="content">
                <h3>Lighter</h3>
                
                <div class="reviews">#1 NEW YORK TIMES BESTSELLER • “An empathetic and wise book that will guide you on a journey toward a deeper understanding of self.”</div>
                <a href="https://yungpueblo.com/about" class="btn">Author: Yung Pueblo</a>
            </div>
        </div>
    </div>
    <br>
        <h2>Albanian Old Books</h2>
        <br>
        <div class="box-container">
        <div class="box">
          
            <div class="image">
                <img src="Elegy for Kosovo A Novel.jpg" alt="">
            </div>
            <div class="content">
                <h3>Elegji për Kosovën</h3>
                
                <div class="reviews">"Kjo permbledhje prej 3 tregimesh, ngjarjet te cilat jane vendosur me 1389, pas dhe gjate Betejes se Kosoves, shtjellojne ngjarjet, pasojat e te cilave i ndjejne edhe brezat e ardhshem.</div>
                <a href="https://en.wikipedia.org/wiki/Ismail_Kadare" class="btn">Author: Ismail Kadare</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="EngjejtNukZbresinNeToke.jpg" alt="">
            </div>
            <div class="content">
                <h3>Engjëjt Nuk Zbresin Në Tokë</h3>
               
                <div class="reviews">Historia e vecantë e jetës së një gruaje, e vendosur në tri periudha kohore: monarki, Luftën e Dytë Botërore dhe komunizëm; sfida që ajo i bën shoqërisë dhe moralit të saj fals në emër të një dashurie të madhe. Një histori për të gjitha gratë që sfidojnë kohën e tyre, një histori për të gjithë burrat që u qëndrojnë pranë.</div>
                <a href="https://sq.wikipedia.org/wiki/Viktor_Canosinaj" class="btn">Author: Viktor Canosinaj</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="DashuriaDheDhomaEErret.jpg" alt="">
            </div>
            <div class="content">
                <h3>Dashuria dhe Dhoma e Errët</h3>
                
                <div class="reviews">"Poezia e Shpresa Ymerajt i beson gjuhës figurative për të krijuar hapësirën e vet intime. Pena e saj, nëpërmjet një reflektimi të veçantë thellësisht emocional, inkurajon analizën e brendshme."</div>
                <a href="https://www.shpresaymeraj.net/" class="btn">Author: Shpresa Ymeraj</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="MilloshGjersgjNikolla.jpg" alt="">
            </div>
            <div class="content">
                <h3>Millosh Gjergj Nikolla</h3>
                
                <div class="reviews">Migjeni (pseudonimi i Millosh Gjergj Nikollës) është nga shkrimtarët më të shquar të letërsisë shqiptare. Me një realizëm të thellë, të panjohur deri atëherë në letërsinë tonë, ai pasqyroi jetën e përditshme të shoqërisë shqiptare, sidomos të shtresave të varfëra të qytetit e fshatit, duke demaskuar sistemin e prapambetur shoqëror si dhe fashizmin që po kërcënonte Evropën.</div>
                <a href="https://en.wikipedia.org/wiki/Migjeni" class="btn">Author: Migjeni</a>
            </div>
        </div>
    </div>
    </div>
  
</section>

<p style="margin-left: 35%; font-family: cursive;">~~~~...WE WILL HAVE MORE IN THE FUTURE STAY TUNED...~~~~</p>

<footer class="footer">   

<footer class="footer">    
>>>>>>> ee69335edefa2c3a771919d2a09a9dc25778e2b7
    <div class="f">
        <h2 style=" margin-right: 9%;">BookBlog</h2>
        <h2 style="margin-right: 10%;">Our Links</h2>
        <div class="ff">
            <a href="www.facebook.com"><img src="facebook.png" alt="" width="32px" height="32px"></a>
            <a href="www.twitter.com"><img src="twitter.png" alt="" width="32px" height="32px" style="margin-left: 80%;"></a>
            <a href="www.instagram.com"><img style="margin-left: 150%;" src="instagram.png" alt="" width="32px" height="32px" ></a>
            
        </div>
    </div>
    <div class="fm">
            <div class="fl">
                <p>BookBlog, the place for a book lover.</p>
            </div>
            <div class="fc" style="margin-right: 7%;">
                <p><a href="Home.php" style="color: bisque;">Home</a></p>
                <p><a href="About.php"style="color: bisque;">About</a></p>
                <p><a href="Books.php"style="color: bisque;">Books</a></p>
            </div>
            <div class="fr" style="margin-right: 8.2%;">
                <a href="" style="color: bisque;"><p>Terms of use</p></a>
                <a href="" style="color: bisque;"><p>Privacy Policy</p></a>
            </div>
        </div>
        <div class="fi" >
        <p style="margin-left: 40%;"> ©Copyright ~ 2023 BookBlog. All rights reserved.</p>
          
        </div>
    </footer>
    

</body>
</html>