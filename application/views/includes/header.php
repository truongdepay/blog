<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Zenn
 * @Date:   2018-04-25 00:44:08
 * @Last Modified by:   Ngoc Truong
 * @Last Modified time: 2018-05-27 17:29:12
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/assets/images/favicon.png') ?>">
	<title><?= $siteTitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/fonts/fontello/css/fontello.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/js/jquery.uniform/uniform.default.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/js/jquery.magnific-popup/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/js/jquery.fluidbox/fluidbox.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/js/owl-carousel/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/js/selection-sharer/selection-sharer.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/js/responsive-image-gallery/elastislide.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/align.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/main.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/768.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/992.css') ?>">
    <script src="<?=base_url('assets/js/jquery-1.11.1.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery-migrate-1.2.1.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/modernizr.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/modernizr.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.fitvids.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.validate.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.uniform/jquery.uniform.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/imagesloaded.pkgd.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.isotope.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.magnific-popup/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.fluidbox/jquery.fluidbox.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/owl-carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?=base_url('assets/js/readingTime.js') ?>"></script>
    <script src="<?=base_url('assets/js/selection-sharer/selection-sharer.js') ?>"></script>
    <script src="<?=base_url('assets/js/responsive-image-gallery/r-gallery.js') ?>"></script>
    <script src="<?=base_url('assets/js/main.js') ?>"></script>
</head>

<body>
<!-- page -->
<div id="page" class="hfeed site">

    <!-- header -->
    <?= modules::run('blogHome/index/loadMenu'); ?>
    <!-- header -->




    <!-- site-main -->
    <div id="main" class="site-main">




        <!-- primary -->
        <div id="primary" class="content-area">

            <!-- site-content -->
            <div id="content" class="site-content" role="main">





                <!-- InstanceBeginEditable name="FeaturedContent" -->



                <!-- post-slider -->
                <!--<div class="post-slider owl-carousel" data-items="3" data-loop="false" data-center="false" data-mouse-drag="true" data-nav="false" data-dots="false" data-autoplay="true" data-autoplay-speed="600" data-autoplay-timeout="2000">-->
                <div class="post-slider owl-carousel" data-items="3" data-loop="true" data-dots="false" data-nav="true" data-nav-prev-text="prev" data-nav-next-text="next">

                    <!-- post -->
                    <div class="post-thumbnail" style="background-image:url(images/blog/01.jpg)">

                        <!-- .entry-header -->
                        <header class="entry-header">

                            <!-- .entry-meta -->
                            <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#" rel="category tag">TRAVEL</a>
                                    </span>
                            </div>
                            <!-- .entry-meta -->

                            <!-- .entry-title -->
                            <h1 class="entry-title"><a href="blog-single.html">There's always light at the end of the tunnel</a></h1>
                        </header>
                        <!-- .entry-header -->

                    </div>
                    <!-- post -->

                    <!-- post -->
                    <div class="post-thumbnail" style="background-image:url(images/blog/02.jpg)">

                        <!-- .entry-header -->
                        <header class="entry-header">

                            <!-- .entry-meta -->
                            <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#" rel="category tag">Life</a>
                                    </span>
                            </div>
                            <!-- .entry-meta -->

                            <!-- .entry-title -->
                            <h1 class="entry-title"><a href="blog-single.html">The Life of Stuff</a></h1>
                        </header>
                        <!-- .entry-header -->

                    </div>
                    <!-- post -->


                    <!-- post -->
                    <div class="post-thumbnail" style="background-image:url(images/blog/03.jpg)">

                        <!-- .entry-header -->
                        <header class="entry-header">

                            <!-- .entry-meta -->
                            <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#" rel="category tag">Nature</a>
                                    </span>
                            </div>
                            <!-- .entry-meta -->

                            <!-- .entry-title -->
                            <h1 class="entry-title"><a href="blog-single.html">Cuckoo Events</a></h1>
                        </header>
                        <!-- .entry-header -->

                    </div>
                    <!-- post -->

                    <!-- post -->
                    <div class="post-thumbnail" style="background-image:url(images/blog/04.jpg)">

                        <!-- .entry-header -->
                        <header class="entry-header">

                            <!-- .entry-meta -->
                            <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#" rel="category tag">Life</a>
                                    </span>
                            </div>
                            <!-- .entry-meta -->

                            <!-- .entry-title -->
                            <h1 class="entry-title"><a href="blog-single.html">Stay Calm And Surf</a></h1>
                        </header>
                        <!-- .entry-header -->

                    </div>
                    <!-- post -->

                    <!-- post -->
                    <div class="post-thumbnail" style="background-image:url(images/blog/05.jpg)">

                        <!-- .entry-header -->
                        <header class="entry-header">

                            <!-- .entry-meta -->
                            <div class="entry-meta">
                                    <span class="cat-links">
                                        <a href="#" rel="category tag">Fashion</a>
                                    </span>
                            </div>
                            <!-- .entry-meta -->

                            <!-- .entry-title -->
                            <h1 class="entry-title"><a href="blog-single.html">Becoming a Dragonfly</a></h1>
                        </header>
                        <!-- .entry-header -->

                    </div>
                    <!-- post -->

                </div>
                <!-- post-slider -->




                <!-- InstanceEndEditable -->



                <!-- layout-fixed -->
                <div class="layout-fixed">



                    <!-- InstanceBeginEditable name="LayoutFixedContent" -->


                    <!-- blog-regular -->
                    <div class="blog-regular">



                        <!-- .hentry -->
                        <article class="hentry post">

                            <!-- .entry-header -->
                            <header class="entry-header">


                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single.html">Runaway A Road Adventure</a></h1>

                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                        	<time class="entry-date" datetime="2014-07-13T04:34:10+00:00">April 13, 2015</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">7 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Travel" rel="category tag">Travel</a>
                                        </span>
                                    <!--<span class="edit-link">
                                        <a class="post-edit-link" href="#">Edit</a>
                                    </span>-->
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->

                            <!-- .featured-image -->
                            <div class="featured-image">
                                <a href="blog-single.html">
                                    <img src="images/blog/06.jpg" alt="blog-image">
                                </a>
                            </div>
                            <!-- .featured-image -->

                            <!-- .entry-content -->
                            <div class="entry-content">

                                <p>We circled for some time without doing much damage on either side; the long, straight, needle-like swords flashing in the sunlight, and ringing out upon the stillness as they crashed together with each effective parry.  </p>
                                <p>I was only partially successful, as a sharp pain in my left shoulder attested, but in the sweep of my glance as I sought to again locate my adversary, a sight met my astonished gaze which paid me well for the wound the temporary blindness had caused me.
                                    <span class="more">
                                            <a href="blog-single.html" class="more-link">Continue reading <span class="meta-nav">→</span></a>
                                        </span>
                                </p>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- .hentry -->



                        <!-- .hentry -->
                        <article class="hentry post sticky">


                            <!-- .entry-header -->
                            <header class="entry-header">

                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single-with-sidebar.html">All In Our Head</a></h1>


                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">64 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Adventure" rel="category tag">Adventure</a>
                                        </span>
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->

                            <!-- .featured-image -->
                            <div class="featured-image">
                                <a href="blog-single.html">
                                    <img src="images/blog/07.jpg" alt="blog-image">
                                </a>
                            </div>
                            <!-- .featured-image -->


                            <!-- .entry-content -->
                            <div class="entry-content">

                                <p>It's just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. Also he got a race car. Is any of this getting through to you? I wish! It's a nickel. Okay, it's 500 dollars, you have no choice of carrier, the battery can't hold the charge and the reception isn't very&hellip;
                                    <span class="more">
                                            <a href="blog-single-with-sidebar.html" class="more-link">Continue reading <span class="meta-nav">→</span></a>
                                        </span>
                                </p>

                            </div>
                            <!-- .entry-content -->


                        </article>
                        <!-- .hentry -->


                        <!-- .hentry -->
                        <article class="hentry post">


                            <!-- .entry-header -->
                            <header class="entry-header">

                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single.html">Smaller Plate</a></h1>

                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">124 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Adventure" rel="category tag">LIFE</a>
                                        </span>
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->

                            <!-- .featured-image -->
                            <div class="featured-image">
                                <a href="blog-single.html">
                                    <img src="images/blog/08.jpg" alt="blog-image">
                                </a>
                            </div>
                            <!-- .featured-image -->

                            <!-- .entry-content -->
                            <div class="entry-content">

                                <p>Oh God, what have I done? All I want is to be a monkey of moderate intelligence who wears a suit&hellip; that's why I'm transferring to business school! Perhaps, but perhaps your civilization is merely the sewer of an even greater society above you!</p>

                                <p>Tell her you just want to talk. It has nothing to do with mating. You're going to do his laundry? They're like sex, except I'm having them! I daresay that Fry has discovered the smelliest object in the known universe!

                                    <span class="more">
                                            <a href="blog-single.html" class="more-link">Continue reading <span class="meta-nav">→</span></a>
                                        </span>
                                </p>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- .hentry -->



                        <!-- .hentry -->
                        <article class="hentry post format-video">

                            <!-- .entry-header -->
                            <header class="entry-header">

                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single.html">Scrap Surf</a></h1>

                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">21 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Adventure" rel="category tag">Street</a>
                                        </span>
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->


                            <!-- .entry-content -->
                            <div class="entry-content">


                                <iframe src="https://player.vimeo.com/video/50315573?color=AB977A&amp;title=0&amp;byline=0&amp;portrait=0" width="800" height="450"></iframe>

                                <p>You don't know how to do any of those. It's a T. It goes "tuh". Okay, I like a challenge. Son, as your lawyer, I declare y'all are in a 12-piece bucket o' trouble. But I done struck you a deal: Five hours of community service cleanin' up that ol' mess you caused. I feel like I was mauled by Jesus. Tell her you just want to talk. It has nothing to do with mating.
                                </p>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- .hentry -->



                        <!-- .hentry -->
                        <article class="hentry post format-audio">

                            <!-- .entry-header -->
                            <header class="entry-header">

                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single.html">Alice On The Roof</a></h1>

                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">98 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Music" rel="category tag">Music</a>,
                                            <a href="#" title="View all posts in Rythm" rel="category tag">Rythm</a>
                                        </span>
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->

                            <!-- .entry-content -->
                            <div class="entry-content">


                                <iframe height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/202812975&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

                                <p>I'm sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in. You don't know how to do any of those. But existing is basically all I do! No, she'll probably make me do it. Meh.
                                </p>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- .hentry -->




                        <!-- .hentry -->
                        <article class="hentry post format-gallery">

                            <!-- .entry-header -->
                            <header class="entry-header">

                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single.html">Well It's The Time</a></h1>

                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">34 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Life" rel="category tag">Life</a>
                                        </span>
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->

                            <!-- .entry-content -->
                            <div class="entry-content">

                                <!-- .owl-carousel -->
                                <div class="owl-carousel" data-items="1" data-loop="false" data-center="false" data-mouse-drag="true" data-nav="true" data-dots="true" data-autoplay="false" data-autoplay-speed="600" data-autoplay-timeout="2000" data-nav-prev-text="prev" data-nav-next-text="next">

                                    <div>
                                        <img src="images/blog/slide-01.jpg" alt="slide">
                                    </div>

                                    <div>
                                        <img src="images/blog/slide-02.jpg" alt="slide">
                                    </div>

                                    <div>
                                        <img src="images/blog/slide-03.jpg" alt="slide">
                                        <p class="owl-title">memories last forever.</p>
                                    </div>

                                </div>
                                <!-- .owl-carousel -->

                                <p>I wish! It's a nickel. I'm sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in. Oh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. Also Zoidberg.
                                </p>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- .hentry -->


                        <!-- .hentry -->
                        <article class="hentry post format-gallery">

                            <!-- .entry-header -->
                            <header class="entry-header">

                                <!-- .entry-title -->
                                <h1 class="entry-title"><a href="blog-single.html">Finding Perfect Spot For Surfing</a></h1>

                                <!-- .entry-meta -->
                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            <a href="blog-single.html#comments">83 Comments</a>
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Life" rel="category tag">Life</a>
                                        </span>
                                </div>
                                <!-- .entry-meta -->

                            </header>
                            <!-- .entry-header -->

                            <!-- .entry-content -->
                            <div class="entry-content">

                                <!-- .gallery -->
                                <div class="gallery gallery-columns-3 gallery-size-thumbnail">

                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a href="images/blog/slide-01-big.jpg"><img width="150" height="150" src="images/blog/slide-01.jpg" class="attachment-thumbnail" alt="Golden Gate Bridge"></a>
                                        </div>
                                    </figure>

                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a href="images/blog/slide-02-big.jpg"><img width="150" height="150" src="images/blog/slide-02.jpg" class="attachment-thumbnail" alt="Golden Gate Bridge"></a>
                                        </div>
                                    </figure>

                                    <figure class="gallery-item">
                                        <div class="gallery-icon landscape">
                                            <a href="images/blog/slide-03-big.jpg"><img width="150" height="150" src="images/blog/slide-03.jpg" class="attachment-thumbnail" alt="Golden Gate Bridge"></a>
                                        </div>
                                        <figcaption class="wp-caption-text gallery-caption">
                                            Surfing Spot
                                        </figcaption>
                                    </figure>

                                </div>
                                <!-- .gallery -->

                                <p>It may comfort you to know that Fry's death took only fifteen seconds, yet the pain was so intense, that it felt to him like fifteen years.</p>

                            </div>
                            <!-- .entry-content -->

                        </article>
                        <!-- .hentry -->




                        <!-- .hentry -->
                        <!--<article class="hentry post format-image">



                            <header class="entry-header">


                                <h1 class="entry-title"><a href="blog-single.html" title="Adaptive Vs. Responsive Layouts And Optimal Text Readability">This is an image post!</a></h1>



                                <div class="entry-meta">
                                    <span class="entry-date">
                                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                    </span>
                                    <span class="comment-link">
                                        <a href="blog-single.html#comments">83 Comments</a>
                                    </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                        <a href="#" title="View all posts in Adventure" rel="category tag">Street</a>
                                    </span>
                                </div>


                            </header>




                            <div class="entry-content">

                                <p>
                                    <img src="images/blog/slide-03.jpg" alt="image">
                                </p>

                                <p>This is a text of an image post format.</a></p>

                            </div>



                        </article>-->
                        <!-- .hentry -->




                        <!-- .hentry -->
                        <!--<article class="hentry post format-link">

                            <header class="entry-header">


                                <h1 class="entry-title"><a href="blog-single-audio-embed.html" title="Link">Format Link</a></h1>


                                <div class="entry-meta">
                                    <span class="entry-date">
                                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                    </span>
                                    <span class="comment-link">
                                        <a href="blog-single.html#comments">83 Comments</a>
                                    </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                        <a href="#" title="View all posts in Music" rel="category tag">Music</a>
                                    </span>
                                </div>


                            </header>


                            <div class="entry-content">
                                <p>
                                    <a title="smashing magazine" href="http://www.smashingmagazine.com/" target="_blank">Smashing Magazine</a>
                                </p>
                                <p>You should definetly visit this site, lots of useful stuff for web designers!</p>
                            </div>


                        </article>-->






                        <!-- .hentry -->
                        <!--<article class="hentry post format-chat">

                            <header class="entry-header">


                                <h1 class="entry-title"><a href="blog-single-audio-embed.html" title="Chat">Just A Little Chat</a></h1>

                                <div class="entry-meta">
                                    <span class="entry-date">
                                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                    </span>
                                    <span class="comment-link">
                                        <a href="blog-single.html#comments">83 Comments</a>
                                    </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                        <a href="#" title="View all posts in Music" rel="category tag">Music</a>
                                    </span>
                                </div>

                            </header>


                            <div class="entry-content">

                                <div class="chat-transcript">

                                    <div class="chat-row chat-speaker-1">
                                        <div class="chat-author"><cite class="fn">John</cite></div>
                                        <div class="chat-text"><p>Hey there</p></div>
                                    </div>

                                    <div class="chat-row chat-speaker-2">
                                        <div class="chat-author"><cite class="fn">Mary</cite></div>
                                        <div class="chat-text"><p>Aye, matey!</p></div>
                                    </div>

                                    <div class="chat-row chat-speaker-1">
                                        <div class="chat-author"><cite class="fn">John</cite></div>
                                        <div class="chat-text"><p>Huh?</p></div>
                                    </div>

                                </div>

                            </div>

                        </article>-->





                        <!-- .hentry -->
                        <!--<article class="hentry post format-status">

                            <header class="entry-header">


                                <h1 class="entry-title"><a href="blog-single-audio-embed.html" title="Chat">Status Post</a></h1>

                                <div class="entry-meta">
                                    <span class="entry-date">
                                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                    </span>
                                    <span class="comment-link">
                                        <a href="blog-single.html#comments">83 Comments</a>
                                    </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                        <a href="#" title="View all posts in Music" rel="category tag">Music</a>
                                    </span>
                                </div>

                            </header>


                            <div class="entry-content">

                                <p>I am having good time with my friends at Starbucks, classic!</p>

                            </div>

                        </article>-->





                        <!-- .hentry -->
                        <!--<article class="hentry post format-aside">

                            <header class="entry-header">


                                <h1 class="entry-title"><a href="blog-single-audio-embed.html" title="Chat">Aside Post Format</a></h1>

                                <div class="entry-meta">
                                    <span class="entry-date">
                                        <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                    </span>
                                    <span class="comment-link">
                                        <a href="blog-single.html#comments">83 Comments</a>
                                    </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                        <a href="#" title="View all posts in Music" rel="category tag">Music</a>
                                    </span>
                                </div>

                            </header>


                            <div class="entry-content">

                                <h4>A Story About Nothing</h4>
                                <p>Responsive web design offers us a way forward, finally allowing us to design for the ebb and flow of things.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.
                                </p>


                            </div>

                        </article>-->






                        <!-- .hentry -->
                        <article class="hentry post format-quote">

                            <header class="entry-header">

                                <h1 class="entry-title"><a href="blog-single.html">Post Format Quote</a></h1>

                                <div class="entry-meta">
                                        <span class="entry-date">
                                            <time class="entry-date" datetime="2014-07-13T04:34:10+00:00">June 7, 2014</time>
                                        </span>
                                    <span class="comment-link">
                                            124 Comments
                                        </span>
                                    <span class="read-time"><span class="eta"></span> read</span>
                                    <span class="cat-links">
                                            <a href="#" title="View all posts in Quote" rel="category tag">Quote</a>
                                        </span>
                                </div>

                            </header>

                            <div class="entry-content">

                                <blockquote>A problem is a chance for you to do your best.
                                    <cite>Duke Ellington</cite>
                                </blockquote>

                            </div>

                        </article>
                        <!-- .hentry -->


                        <!-- post nav -->
                        <nav class="navigation" role="navigation">
                            <div class="nav-previous"><a href="#"><span class="meta-nav">←</span> Older posts</a></div>
                            <!--<div class="nav-next"><a href="#">Newer posts <span class="meta-nav">→</span></a></div>-->
                        </nav>
                        <!-- post nav -->



                    </div>
                    <!-- blog-regular -->



                    <!-- InstanceEndEditable -->



                </div>
                <!-- layout-fixed -->




            </div>
            <!-- site-content -->

        </div>
        <!-- primary -->




    </div>
    <!-- site-main -->


    <!-- site-footer -->
    <footer id="colophon" class="site-footer" role="contentinfo">

        <!-- layout-medium -->
        <div class="layout-medium">

            <!-- footer-social -->
            <div class="footer-social">

                <ul class="social">
                    <li><a class="facebook" href="#"></a></li>
                    <li><a class="twitter" href="#"></a></li>
                    <li><a class="google-plus" href="#"></a></li>
                    <li><a class="dribbble" href="#"></a></li>
                    <li><a class="instagram" href="#"></a></li>
                    <li><a class="vine" href="#"></a></li>
                </ul>

            </div>
            <!-- footer-social -->

            <!-- footer-sidebar -->
            <div class="footer-sidebar widget-area" role="complementary">

                <!-- widget -->
                <aside class="widget widget_text">
                    <h3 class="widget-title">About Me</h3>
                    <div class="textwidget">
                        <img src="images/site/about-small.jpg" alt="avatar"> <p>Hello. I am a freelance writer. I live in a small town somewhere in the world.</p>
                    </div>
                </aside>
                <!-- widget -->

                <!-- widget -->
                <aside class="widget widget_tag_cloud">
                    <h3 class="widget-title">Tags</h3>
                    <div class="tagcloud"> <a href="#" title="1 topic" style="font-size: 8pt;">adaptive</a> <a href="#" title="2 topics" style="font-size: 22pt;">design</a> <a href="#" title="1 topic" style="font-size: 8pt;">html</a> <a href="#" title="2 topics" style="font-size: 22pt;">responsive</a> <a href="#" title="2 topics" style="font-size: 22pt;">think</a> <a href="#" title="1 topic" style="font-size: 8pt;">web design</a> <a href="#" title="1 topic" style="font-size: 8pt;">css</a> <a href="#" title="2 topics" style="font-size: 22pt;">animations</a> <a href="#" title="1 topic" style="font-size: 8pt;">layout</a> <a href="#" title="2 topics" style="font-size: 14pt;">mobile</a> <a href="#" title="2 topics" style="font-size: 22pt;">think</a> <a href="#" title="1 topic" style="font-size: 8pt;">typography</a> </div>
                </aside>
                <!-- widget -->

                <!-- widget : categories -->
                <aside class="widget widget_categories">
                    <h3 class="widget-title">Categories</h3>
                    <ul>
                        <li class="cat-item"><a href="#" title="View all posts filed under Nature">Nature</a></li>
                        <li class="cat-item"><a href="#" title="View all posts filed under Life">Life</a></li>
                        <li class="cat-item"><a href="#" title="View all posts filed under Adventure">Adventure</a></li>
                        <li class="cat-item"><a href="#" title="View all posts filed under Freebies">Travel</a></li>
                        <li class="cat-item"><a href="#" title="View all posts filed under Sport">Sport</a></li>
                    </ul>
                </aside>
                <!-- widget : categories -->


                <!-- widget -->
                <aside class="widget widget_recent_entries">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul>
                        <li><a href="#">Runaway A Road Adventure</a></li>
                        <li><a href="#">All In Our Head</a></li>
                        <li><a href="#">Smaller Plate</a></li>
                        <li><a href="#">Alice On The Roof</a></li>
                        <li><a href="#">Becoming A DragonFly</a></li>
                    </ul>
                </aside>
                <!-- widget -->


            </div>
            <!-- footer-sidebar -->


        </div>
        <!-- layout-medium -->


        <!-- .site-info -->
        <div class="site-info">

            <!-- layout-medium -->
            <div class="layout-medium">

                <p>crafted with <i class="pw-icon-heart"></i> <em>by</em> Pixelwars</p>

            </div>
            <!-- layout-medium -->

        </div>
        <!-- .site-info -->



    </footer>
    <!-- site-footer -->


</div>
<!-- page -->