<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Music Player</title>
    <style>
        header .song_side::before {
            background: url('img/jack/background.jpg');
            opacity: 50%;
        }
        header .song_side .content p {
        color: #fff;
    
}
    </style>
            
    
</head>

<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listened</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/jack/1.jpg" alt="Jack Harlow">
                    <h5>
                        Common Ground
                        <div class="subtitle">Jack Harlow</div>
                    </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/jack/1.jpg" alt="Jack Harlow">
                    <h5>
                        They Don't Love It
                        <div class="subtitle">Jack Harlow</div>
                    </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/jack/1.jpg" alt="Jack Harlow">
                    <h5>
                        Ambitious
                        <div class="subtitle">Jack Harlow</div>
                    </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/jack/1.jpg" alt="Jack Harlow">
                    <h5>
                        Is That Ight?
                        <div class="subtitle">Jack Harlow</div>
                    </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/jack/1.jpg" alt="Jack Harlow">
                    <h5>
                        Gang Gang Gang
                        <div class="subtitle">Jack Harlow</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/jack/1.jpg" alt="Jack Harlow">
                    <h5>
                        Denver 
                        <div class="subtitle">Jack Harlow</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
            </div>
        </div>


        <div class="song_side">
            <nav>
                <ul>
                    <a href="welcome.php"><li>Discover</li></a>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_result">
                        <!-- <a href="#" class="card">
                            <img src="img/1.jpg" alt="">
                            <div class="content">
                                Moscow Mule <br>
                                <div class="subtitle">Bad Bunny</div>
                            </div>
                        </a>     -->
                    </div>
                </div>
                <div class="user">
                    <img src="img/1.jpg" alt="User" title="Novas Music">
                    <a href="logout.php" title="Logout"><i class="bi bi-door-closed-fill"></i></a>
                </div>
            </nav>
            <div class="content">
                <h1>Jack Harlow - Jackman</h1>
                <p>
                Jackman is the third full-length studio album from Louisville, Kentucky native, Jack Harlow. 
                <br>
                The album follows his sophomore, Come Home The Kids Miss You released in May 2022. 
                </p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                        <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/jack/1.jpg" alt="Jack Harlow">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>No Enhancers
                            <br>
                            <div class="subtitle">Jack Harlow</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/jack/1.jpg" alt="Jack Harlow">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                            <!-- Change All Id -->
                        </div>
                        <h5>It Can't Be
                            <br>
                            <div class="subtitle">Jack Harlow</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/jack/1.jpg" alt="Jack Harlow">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>Blame On Me
                            <br>
                            <div class="subtitle">Jack Harlow</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/jack/1.jpg" alt="Jack Harlow">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>Questions
                            <br>
                            <div class="subtitle">Jack Harlow</div>
                        </h5>
                    </li>
                    <!-- <li class="songItem">
                        <div class="img_play">
                            <img src="img/drake/1.jpg" alt="Drake">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>I'm Upset
                            <br>
                            <div class="subtitle">Drake</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/drake/1.jpg" alt="Drake">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>Ratchet Happy Birthday
                            <br>
                            <div class="subtitle">Drake</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/drake/1.jpg" alt="Drake">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>8 out of 10
                            <br>
                            <div class="subtitle">Drake</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/drake/1.jpg" alt="Drake">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>That's How You Feel
                            <br>
                            <div class="subtitle">Drake</div>
                        </h5>
                    </li> -->
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i id="left_scrolls" class="bi bi-arrow-left-short"></i>
                        <i id="right_scrolls" class="bi bi-arrow-right-short"></i>
                    </div>
                </div>
                <div class="item">
                <li>
                      <a href="welcome.php"><img src="img/2.jpg" alt="Bad Bunny" title="Bad Bunny"></a> 
                    </li>
                    <li>
                        <a href="cyrus.php"><img src="img/cyrus.jpg" alt="Miley Cyrus" title="Miley Cyrus"></a> 
                     </li>
                     <li>
                        <a href="drake.php"><img src="img/drake.jpg" alt="Drake" title="Drake"></a> 
                     </li>
                     <li>
                        <a href="jack.php"><img src="img/jack.jpg" alt="Jack Harlow" title="Jack Harlow"></a> 
                     </li>
                     <li>
                        <a href="nas.php"><img src="img/nas.jpg" alt="Nas" title="Nas"></a> 
                     </li>
                     <li>
                        <a href="post.php"><img src="img/post.jpg" alt="Post Malone" title="Post Malone"></a> 
                     </li>
                     <li>
                        <a href="lana.php"><img src="img/rey.jpg" alt="Lana Del Rey" title="Lana Del Rey"></a> 
                     </li>
                     <li>
                        <a href="russ.php"><img src="img/russ.jpg" alt="Russ" title="Russ"></a> 
                     </li>
                     <li>
                        <a href="taylor.php"><img src="img/swift.jpg" alt="Taylor Swift" title="Taylor Swift"></a> 
                     </li>
                     <li>
                        <a href="tiller.php"><img src="img/tiller.jpg" alt="Bryson Tiller" title="Bryson Tiller"></a> 
                     </li>
                     <li>
                        <a href="wayne.php"><img src="img/wayne.jpg" alt="Lil Wayne" title="Lil Wayne"></a> 
                     </li>
                     <!-- Change All Images -->
                </div>
            </div>

        </div>


        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/jack/1.jpg" alt="Jack Harlow" id="poster_master_play">
            <h5 id="title">Common Ground <br>
                <div class="subtitle">Jack Harlow</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>   
            </div>
            <span id="currentEnd">0:00</span>


            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>

            </div>
        </div>
    </header>

    <script src="jack.js"></script>
</body>

</html>