Music player App
Youtube Video Showing Off the project: https://youtu.be/PZvLX0RKwuo

For my final project, I decided to make a music player similar to Spotify.
This came with an extreme amount of challenges and design scope which ultimately ended up doing what just worked.


Most of this project is aethestic and has no functionality.
Some examples would be the "Playlist, Last Listened, and Recommended" buttons on the top left.
Also the "My Library, Radio, Play, and Follow" buttons on the top and center.

This project was built utilizing HTML, CSS, and JS with some server side PHP using XAAMP.
It's possible you may need to use XAAMP to get this functioning properly or to function at all.

I used PHP to create a database for stored users that sign up to get acesss.
I created a database called "login_user" with a table called "users"
that has 5 attributes
The users table has:
1. id
2. name
3. email
4. password
5. timestamp

That is for reference incase you may need to make your own just in case it doesn't work.

We first start this project on the "signup.php" which will prompt the user to register.
Once registered, they will be redirected to "welcome.php" which will serve as the front page 
for this project.

I organized each page by each artist and each page has a specific album for that particular artist which the user can listen to.
You can click each song to play them, you can skip ahead, skip behind, pause, and adjust volume. 
The user can shuffle, repeat, and even download a song.
There is also a search box which will find what the user typed for that particular artist and redirect to that song.
Unfortunately, I wasn't able to program the project to play the song from the search box.
That was a big challenge I was facing was how to get the search results to play the song you searched. 
At most, it would play the very first song and not the searched song.
I ended up leaving it as a location redirector instead.

The "discover" button on the top takes you back to "welcome.php" or the main page.
There is a "log out" button on the top right which will then redirect the user back to the login page.

Clicking the artists logos under the popular artist section will redirect the user
to that particular artists page with that artists specific album and songs.

Each page has the same layout. 
The only difference is that each page has a different artist and music related to that artist.

Hope you enjoy!
