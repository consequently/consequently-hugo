+++
date = "2018-10-21T16:39:00+11:00"
title = "With help from Hugo, GitHub, Netlify, Working Copy and Shortcuts, I might update this website more frequently"
description = "An introduction to some of the changes I have made to make this site more easy to update from any device."
largeimage = false
+++

If you've been following my [travels](/presentation/), you'll get some sense that this has been a busy year. I’ve done lots of writing on my [book](/writing/ptrm), and I've managed to give lots of talks, both in the US and in Argentina, as well as at home. I haven’t posted here for nearly a year--writing elsewhere has been a higher priority.

However, this weekend, I've made a few changes to the website which means that I might post here a little more often. The site is produced by [Hugo](http://gohugo.io), a really sweet static site generator. Until yesterday, if I wanted to update my site, what I did was 

1. Write files on whatever device I was using--most probably my Mac, but maybe my iPad--and push them to my my [Git repository](https://github.com/consequently/consequently-hugo), which contains the source for the whole website.
2. Then, on my Mac, sync up the repository. 
3. Run hugo to update the generated files.
4. Sync the result up to GitHub.

That worked fine, but I needed to do steps 2--4 on my Mac, and I don't always have my Mac with me. Sometimes I prefer to write on my (smaller, less fiddly an distracting) iPad, and sometimes I only have my phone with me, and it’d be nice to update files on the website without having to run through my Mac to do that. I use [Working Copy](http://workingcopyapp.com) on my iPhone and iPad to keep local copies of my website files (as well as the papers and book I’m currently working on) so it’s as easy as anything to edit these files wherever I have one of these devices on hand.

Here's where [Netlify](http://netlify.com) comes in. It's a continuous integration service, that does step 2-4 in the cloud, without me having to be at my Mac. It's [very easy to wire up Netlify and Github](https://gohugo.io/hosting-and-deployment/hosting-on-netlify/) so that whenever I add a new file (or edit a file) in the source to my website, a little daemon spins up on the Netlify servers, runs hugo on the files, and syncs the result up to my website. It means that now I can edit files from any device connected to the internet, and the site is nicely generated, without me having to either edit in a web form (ugh!) or deal with a database driven website that either needs software maintenance or is prone to spam and server injection nastiness, or goes down at a drop of a hat. The site is still statically generated HTML, and I have control over how it is made. It's a lovely solution.

So, over the weekend I've set things up, flipped the switches, and if you're reading this, you’re reading the first entry written on my iPad and served up through the Netlify CI service.

The next step is to write some little [Shortcuts](https://support.apple.com/en-us/HT208309) which make the job of creating new entries in the [News](/news/), [Writing](/writing/), [Class](/class/) and [Presentation](/presentation/) categories, with the datestamps and other boilerplate set automatically, even quicker, so there's less friction in making new entries. I've done the first draft of the "News" shortcut already, and if you can see this entry, it means it's worked.

As always, this is a work in progress, and probably things broke as I shifted things around. If you notice anything broken, please let me know. Thanks!