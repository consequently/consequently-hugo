---
author: Greg Restall
title: "University Library Proxy Bookmarklet"
date: 2005-03-12T21:02:43+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
aliases:
  - /news/2005/03/12/university_library_proxy_bookmarklet/index.php

---

If you're like me, you do research on the web, and you browse around different sites for journals, seeing what's been published, and what you should read.  Our [library](http://www.lib.unimelb.edu.au/) has online subscriptions for lots of these journals, so I can download the papers, file them, read them, etc.  It's all very nice.

But it's not always easy to get from the site to actually download the paper.  Recently, our university introduced a [proxy server](http://mate.lib.unimelb.edu.au/) as the means to keep track of whether someone attempting to download material under the banner of a University of Melbourne subscription is actually authorised to do so (i. e., is a member of staff or a student).  So, if I'm at a page for a journal like this 

> [http://mind.oupjournals.org/current.dtl](http://mind.oupjournals.org/current.dtl)

and I want to download a paper like this

> [http://mind.oupjournals.org/cgi/content/abstract/114/453/1](http://mind.oupjournals.org/cgi/content/abstract/114/453/1)

I need to manually edit the address, by sticking ".mate.lib.unimelb.edu.au" at the end of the hostname, before the path. (Between ".org" and "/cgi" here).  I am _lazy_ and I don't like having to type ".mate.lib.unimelb.edu.au" time and again when browsing the journals.  

So, I use a little link I made -- '<a href="javascript:void(location.href='http://'+location.host+'.mate.lib.unimelb.edu.au'+location.pathname+location.search)">+mate.lib</a>' -- in the bookmarks bar of my browser, and whenever I'm on a site, it takes me directly to the relevant page viewed through proxy site, and I can download at will.  The bookmark is a simple bit of javascript:

    javascript:void(location.href = 
          'http://' + location.host 
          + '.mate.lib.unimelb.edu.au'
          + location.pathname
          + location.search)

and it works like a charm.  One click, and you're there.  Feel free to utilise a version of this yorself if <a href="http://www.usefulutilities.com/support/institutions.html">your library</a> uses an  <a href="http://www.usefulutilities.com">ezproxy server</a> like ours.

*Update*:  Don't use the text I've displayed here for your own bookmarklet (it contains linebreaks and won't be quite the right form for your browser).  Just drag this link -- <a href="javascript:void(location.href='http://'+location.host+'.mate.lib.unimelb.edu.au'+location.pathname+location.search)">+mate.lib</a> -- to your bookmarks bar.

*Update 2*: Thanks to a [pointer from Richard Zach](http://consequently.org/news/2005/03/12/university_library_proxy_bookmarklet/index.php#c1449), I've updated the link to preserve the search component of the URL.