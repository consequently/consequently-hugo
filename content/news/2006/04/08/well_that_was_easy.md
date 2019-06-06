---
author: Greg Restall
title: "Well, that was easy..."
date: 2006-04-08T21:33:50+11:00
aliases:
  - /news/2006/04/08/well_that_was_easy/index.php
filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

Sometimes technologies can be use for purposes the inventors didn't really intend.  I'm sure that when the designers of the iTunes music store set the thing up, they didn't expect that you'd be able to use it to download esoteric papers in philosophical logic.  But you can.

<a href="http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=138002605&s=143460">![consequently.org/writing in iTunes](https://consequently.org/pictures/consequentlyorg_in_itunes.png)</a>

All I had to do was submit the [RSS feed of my papers](http://consequently.org/writing/index.xml) to the iTunes store [on this form](https://phobos.apple.com/WebObjects/MZFinance.woa/wa/publishPodcast), after tweaking it to include the [information that the iTunes store is looking for](http://www.apple.com/itunes/podcasts/techspecs.html).  A day later, there it is.  Now you can use iTunes to automatically download any papers I write.  (Though, you can't yet get them automatically downloaded onto your iPod for you to read, as the iPod doesn't have a pdf reader -- at least not yet.)

This works since iTunes knows what to do with pdf files: if you buy tracks from the music store with lyrics or booklets, they can come as pdf files, which iTunes can store and hand over to your system to display.  My [feed](http://consequently.org/writing/index.xml) that I use to serve up pointers to my recent publications has the same general structure as the feeds used in podcasting.  The difference is that my publications feed just contained pointers to webpages on which you could download pdf files, while podcasting feeds contain *enclosures* of pdf files.  It was simple enough to tweak the feed to link to the pdf files directly as enclosures.  I did that [last week](http://consequently.org/news/2006/04/02/enclosures).  Then I submitted the feed to iTunes and here it is.

So, here's the [link to the me on iTunes](http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=138002605&s=143460).  Notice that the site features customer reviews.  Why don't you write one?

If you publish papers online and would like people to get your stuff as conveniently as possible, then feel free to a look at [my RSS Feed](http://consequently.org/writing/index.xml) and use that as a template for your own.  As far as I can tell, using iTunes in this way is just a bit of a joke. (It gives me a laugh to see the feed appearing there, I don't expect people to come across it very much or for those that do get to it that way to know what to do with it.) However, using feeds to enable subcriptions to documents, whether mp3 files, pdf files or anything else, will only become more prevalent in the future.

My next job is to enable feedreading for the *[Australasian Journal of Logic](http://www.philosophy.unimelb.edu.au/ajl)*.  That will require a fair bit of work.  Currently, I'm just handcoding the site. I'm awaiting the OK from the *Powers That Be* for us to use some software on the server to facilitate more interesting communication (feeds for subscribing to papers, and comments on articles) for the journal.  I'll let you know here when the system is in place.