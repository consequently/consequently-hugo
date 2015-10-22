---
author: Greg Restall
title: "Fun with Playlists: Squeezing your music library onto a 2GB iPod"
date: 2006-02-04T21:06:19+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
aliases:
  - /news/2006/02/04/fun_with_playlists_squeezing_your_music_library_onto_a_2gb_ipod/index.php
---

I've finally joined the ranks of the zombies with white earbuds.  My trusty 2GB black [iPod nano](http://www.apple.com/ipodnano) was acquired on the way home from our Sabbatical, in a duty free store at Changi Airport.  I've had a little while to experiment with it, and so far, it's been working better than I'd expected.  I take it with me on my early morning walks, sometimes listening to spoken word things and sometimes listening to music.  My taste in podcasts is [pretty](http://theblog.philosophytalk.org/2006/01/the_best_of_phi.html) [conservative](http://www.abc.net.au/rn/talks/lnl/) -- I seem to treat this as time-shifted radio, rather than anything more cutting-edge.  However, it's pretty mind-bending that you can get [esoteric](http://www.dur.ac.uk/kevin.bywater/) [seminars](http://www.usyd.edu.au/time/conferences/Brandom-2005.htm) off the web, so academic seminars I'm interested in but didn't go to can be downloaded onto my computer and put on the iPod.

I've been having even *more* fun seeing how to get my middling sized (20+GB) music collection into my very svelte (2GB) iPod.  If you're interested in how I do that, read on.   It's a long post, but I don't feel like doing anything else this evening as I've sprained my ankle and I'm lying down giving my foot a rest.  It's just the time to write a long blog post you've been ruminating on for a week or so.  

The executive summary goes like this: you can live really well with a small iPod, and the "smart playlists" in iTunes help you get a nice mix of unpredictability and choice in keeping your iPod fed with music.  Oh, and knowing some elementary logic helps too.

<!-- BREAK -->

So, here's the story.  Hold on for the ride.

My aim is to load up my iPod with music and other audio I want to listen to at the moment; podcasts I'm subscribing to; stuff I haven't listened to recently but *like*, and stuff I've recently ripped from a CD or downloaded from one of the [free, legal MP3 sites on the web](http://3hive.com).  I don't like just listening to a big random *mush* of stuff on my computer, so just loading a random selection of material from iTunes onto the iPod doesn't appeal to me.  But I don't want to just listen to the things *I* choose to put on the machine either.  If I were to do that, I'd just cycle through my favourites like I do with my CD collection.  I've got a computer here, and computers are good at _computing_, so I may as well use some of this computational power to figure out some of what I can listen to.   I _like_ the synchronicity of new stuff bubbling up out of the mix as well as what I've chosen.  So, I wanted to find a way to mix choice and serendipity.  Here's what I'm doing at the moment.

I've set up iTunes to sync some of the playlists on my computer to the iPod.  Here's the setting in the preferences for iTunes:

![playlist settings in iTunes](http://consequently.org/pictures/itunes/ipod_playlist_settings.png)

I've set the system up to sync playlists to sync *nine* of my playlists onto the iPod.  Here's the list of playlists in the sidebar of the iTunes window.  I've filed them away in the "* iPod Management" folder.

![list of playlists](http://consequently.org/pictures/itunes/list_of_playlists.png)

It would be *way* too much work to manage nine playlists each time I wanted to fill my iPod up with music, but this works, since all but one of the playlists is *[smart](http://smartplaylists.com/)* (they're the purple playlists, with gear on the icon).  iTunes updates the playlist and chooses music on the basis of criteria that you set up.  If I want to choose music to put on the iPod, it goes in the (you guessed it) "Choices" playlist.  I've named it with a reminder that I should put around 1GB on there.  (If I put any more on, my playlists will overfill my iPod, and iTunes will tell me that not everything will fit.)   It's usually in the "Choices" playlist that I put entire albums that I'm listening to, or talks I've downloaded that I want to listen to, then file away or delete. This is pretty standard, I suppose.  It's 1GB of my 2GB iPod: It's a bit more than a half of its storage for sound, as I store a few photos (around 186 at the moment: my five star photos from my collection) and my calendar too.  This other stuff takes up a few megabytes.

It's the *other* playlists that do the work in getting stuff on the iPod automatically.  Four of these playlists collect files to put on the iPod. Two of them (*Not Recent 4 Stars* and *Not Recent 5 stars*) choose highly rated songs that I haven't listened to lately.  They're smart playlists with the following conditions.  First, the 5-star playlist:

* _My Rating_ is __five stars__
* _Playlist_ is not __Choices__
* _Genre_ is not __Spoken Word__
* _Genre_ is not __Children's Music__
* _Podcast_ is __false__
* Limit to __266MB__
* Selected by __least recently played__

And the 4-star playlist:

* _My Rating_ is __four stars__
* _Playlist_ is not __Choices__
* _Genre_ is not __Spoken Word__
* _Genre_ is not __Children's Music__
* _Podcast_ is __false__
* Limit to __100MB__
* Selected by __least recently played__

Notice that the playlists _Choices_, _Not Recent 4 Stars_ and _Not Recent 5 Stars_ are disjoint.  No track can appear on more than one of these playlists.   So we have around 1.36GB on the iPod so far.  

These two playlists select music I like (not Spoken Word stuff, and not Kids' music -- I don't want tracks from [The Wiggles](http://www.thewiggles.com.au) to appear on my iPod without my foreknowledge!  I just put them on in the "Choices" playlist if we're giving the iPod to Zachary on a long drive or flight or something).  These playlists select more 5-star tracks than 4-star tracks, as I like 5-star tracks more than 4-star tracks.  (At least, when I rate something 5-star, I mean "this is really great -- I could listen to this again and again and again, I can't imagine getting bored of this" and when I rate something 4-star, I mean "this is a great track -- I want to listen to this again regularly.")  So, _ratings_ help make this system work.

So do _playcounts_.  iTunes keeps track of two pieces of information for every track -- _how many times it's been played_, and _when it was last played_.  The really cool feature is that playcount information is copied from the iPod into iTunes each time you 
sync the iPod.  This means that if I'm playing a track through iTunes at home or at work, or through my iPod when I'm on the move, iTunes is keeping track of that. So, things not recently played are _really_ not recently played.  (We recently acquired an [AirPort Express](http://www.apple.com/airportexpress/) which means that I can play from iTunes through our sound system at home.  It's really neat!)

The other playlists help me get things rated.  First, _Unrated Most Played_ selects tracks as follows:

* _My Rating_ is __empty__
* _Playlist_ is not __Choices__
* _Genre_ is not __Spoken Word__
* _Genre_ is not __Children's Music__
* _Podcast_ is __false__
* Limit to __82MB__ 
* Selected by __most often played__

These get tracks that are unrated onto the iPod. When I listen to an unrated track on the iPod, I try to rate it when I first play it.  I didn't rate songs much before getting the iPod.  Now it chooses unrated songs, in order of frequency played.  Notice that the tracks on this playlist cannot be in any of the other playlists so far, so now we have around 1.44GB on the iPod.  No more, but probably a little bit less because of rounding (if I limit to 82MB, it's an _upper_ limit -- at the moment I write this, the playlist has 78.6MB worth of tracks, not 82MB).

What's the rest of the music on the iPod?  The last playlist in this batch chooses recent stuff:

* _Playcount_ is __0__
* _Podcast_ is __false__
* _Genre_ is not __Spoken Word__
* _Genre_ is not __Children's Music__
* _Playlist_ is not __Choices__
* _Playlist_ is not __Not recent 4 Stars__
* _Playlist_ is not __Not recent 5 Stars__
* Limit to __300MB__
* Selected by __most recently added__

Here we have stuff that I've recently added into iTunes, but I haven't yet played.  This is _not_ necessarily disjoint with the other playlists (exercise for the reader: find the circumstances in which a track is on this playlist and another one on the iPod -- that should tell you why I don't care about this happening).  It puts things I've recently added to iTunes into the iPod, for listening and rating.  

The result is around 1.74GB (usually less than 1.65GB, with all that approximation) of stuff on the iPod. But I can fit more than that on a 2GB iPod, even with photos and calendars.  The rest is the _Podcasts_ that I've subscribed to and decided to upload into the iPod.  Here, I subscribe to a bit of [ABC Radio National](http://www.abc.net.au/rn/podcast/default.htm), some [Triple R](http://www.rrr.org.au/byteintoit/) (community radio based here in Melbourne) and [Philosophy Talk](http://theblog.philosophytalk.org/2006/01/the_best_of_phi.html#more).  It's nice that some programs (like the [ABC's podcasts](http://www.abc.net.au/services/podcasting.htm)) tell you the approximate filesize of their podcasts, which helps people like me who sync one episode from each subscription to an iPod.  This way I can tell that podcasts take up around 100MB, so my playlists won't take my iPod over the limit.

So, that's how tracks get on the iPod.  The _other_ playlists help me access these tracks.  Here's how they fit together.

![playlist chart](http://consequently.org/pictures/itunes/playlist_chart.png)

The "Everything" playlist contains everything on the five playlists I've mentioned.   (It's a smart playlist just selecting the stuff on the other playlists.)  It's there because I use it to construct my other playlists.  Two are simple.  _?Unrated_ selects tracks from _Everything_ that are yet to be rated.  _!Hits_ selects tracks from _Everything_ that are rated four or five stars.  Sometimes I want to listen to the 4- and 5-star tracks, chosen at random.  This is for when I want to enjoy some music and not particularly worry about _evaluating_ it.  Sometimes I want to evaluate things (I'm sitting in a tram and I want to rate some more of my music so that it's in "the system"), so I use the _?Unrated_ playlist. (The punctuation marks "!" and "?" put these playlists at the top of the list in the iPod.)  Finally, when I'm working and I want to listen to music, most often I want music _without words_, which would compete with the words I'm trying to write.  So, _Instrumental_ picks out tracks from _Everything_ that contain the string "Instrumental" in the comments field.  I've got around to tagging 50% of my music as "Vocal" or "Instrumental", so this is not yet complete.  At the moment "Instrumental" on the iPod contains 500MB of music, chiefly [late Shostakovich String Quartets](http://www.amazon.com/exec/obidos/redirect?link_code=ur2&tag=consequentlyorg&camp=1789&creative=9325&path=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fproduct%2FB0000042HV%2Fqid%3D1139043132%2Fsr%3D1-1%2Fref%3Dsr_1_1%3Fs%3Dclassical%26v%3Dglance%26n%3D5174), some [Keith Jarrett](http://www.amazon.com/exec/obidos/redirect?link_code=ur2&tag=consequentlyorg&camp=1789&creative=9325&path=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fproduct%2FB00002EPJH%2F) and [Anouar Brahem](http://www.amazon.com/exec/obidos/redirect?link_code=ur2&tag=consequentlyorg&camp=1789&creative=9325&path=http%3A%2F%2Fwww.amazon.com%2Fgp%2Fproduct%2FB00006EXHT%2F), lasting more than 5 hours.

So that's the system.  It seems to work for me.  I get new stuff on the iPod each time I sync (mostly, if I've listened to anything or rated anything) and I have control over what I put on it as well.  It's a mix of control and serendipity.  When I've rated more things on the iPod, I can modify the sizes on the playlists to suit, but I think I'm happy with the general scheme.

Here's what I've learned.

* A little familiarity with classical propositional logic helps when constructing smart playlists.  They'll be an example when I teach first-year [Logic](http://webraft.its.unimelb.edu.au/161115/pub) this year. It's a nice thing to think about: if a single condition on a playlist is a propositional literal, and a smart playlist is a conjunction or disjunction of literals, then what is a track in your library?  Is the playlist "language" rich enough to discriminate between _any_ two tracks?  Can it construct arbitrary boolean combinations of the conditions?  (_Exercise to the reader_.  What happen when you set up two playlists in iTunes: _Playlist A_ contains tracks on _Playlist B_.  _Playlist B_ contains tracks __not__ on _Playlist A_.  That is, what is Apple's account of the liar paradox?)

* Five rating stars are a little bit _more_ than I need.  I mostly _like_ the music I have on my iPod, and I have more 4-star tracks than tracks between 3 and 1 stars.  I have tried to be more discriminating (like [these](http://jwz.livejournal.com/578440.html) [guys](http://akma.disseminary.org/archives/2006/01/stars.html), but my judgements about music seem to be much more context-relative than linear.  My preference ranking between (1) a Keith Jarrett rendition of a jazz standard, (2) a movement of a Shostakovich string quartet, (3) a grand performance of the last movement of Beethoven's 9th, (4) Bruce Cockburn singing with righteous indignation and finger-picking skill, and (5) a finely structured minimalist piece by Arvo P&auml;rt simply _isn't_ linearizable beyond selecting them all as either _hmm, OK_ or _good_ or _great_ (and, I suppose _bad_, but I don't tend to rip irredemably bad stuff into iTunes if I can help it).   A track can be great without being great-to-play-all-the-time, and I let my "skip track" finger do the talking when I'm not in the mood for that _kind_ of musical greatness.

* Playcounts and last-played dates are just _super_.  Since most of the music I play flows through iTunes, the database has a good representation of what I've been listening to.  This is one reason to prefer an [iPod nano](http://apple.com/ipodnano) over an [iPod shuffle](http://apple.com/ipodshuffle).  A shuffle will update your _playcounts_ if you set it to sync, but since the little thing doesn't have a clock, it doesn't update the information about when the track wasn't last played.  Without that, the whole thing won't work.  We were tossing up between getting a shuffle and getting a nano, and this (together with the gorgeous screen, and the fact that 1GB shuffles weren't available in London, Oxford or Singapore when I was looking) was enough to tip the balance for me.

    When people talk about [what you need to do to make a viable competitor to the iPod and iTunes](http://www.dashes.com/anil/2006/01/05/dos_and_donts_), they don't seem to mention the ease of getting music (and other stuff) onto the player.  This is where the whole Apple thing works so well.  It's easy to get stuff onto the iPod, it's easy to navigate through it when it's on there, and the information you can use (ratings, playcounts, etc.) is kept and made accessible. It's the kind of thing that is _very_ easy to use -- both at an elementary level and also a sophisticated one -- and the other media players I've looked at have nothing to match it.

* I now approach my music in a new way.  I'm listening to old stuff I haven't listened to lately, and I'm actually weeding _out_ from my music library stuff I'll never listen to again, now that I've been asking myself the question: is this good enough to listen to again?  I'm enjoying my music more, as I can be surprised by an old friend or make a new musical acquaintance on the tram on the way to work, or taking a morning walk.

* It'd be nice to eke out _all_ of the space on the iPod.  The more playlists you have like mine, the more the rounding-off adds up and you are left with a little bit of space on the iPod -- maybe enough for two or three or more tracks, but it depens on what is  on each of the playlists.  You could optimise this by limiting playlists not by a set amount, but by an amount which is some function of the size of other playlists.  (Instead of getting 300MB of music, get 400MB minus the size of the "Podcasts" playlist, for example.)  That would satisfy my sense of frugality and elegance, but, alas, I can't think of a way of designing a user interface for that which would make sense in the _Smart Playlists_ dialog so I don't think this is the kind of thing Apple is going to do. 

That's what I do at the moment.  Thanks to my cousin [Peter](http://www.uts.edu.au/fac/edu/ostaff/staff/peter_devries.html), who asked me how I used my iPod.  (Peter asks this kind of question [for a living](http://www.uts.edu.au/fac/edu/ostaff/staff/peter_devries.html).) This is the long, _technical_ explanation of the _mechanics_.  After  I've used it some more, I might post again about how my relationship to the music (and to the other podcast audio) has developed and changed with more experience.

If you use an iPod or something like it, how do you manage it?  What do you do?