---
author: Greg Restall
title: "On applescript and php, and an archive page"
date: 2005-06-26T20:24:30+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

A half hour of php hacking has finally produced a working <a href="phonecam">archive page</a> for the photos I've been posting from my phonecam.  My little Sony Ericsson T630 phone has a terribly lo-res camera, but it's fun to take shots now and then when you wouldn't normally take photos.  Now, instead of sliding off the front page when I upload another one, you can see the old photos <a href="phonecam">on the archive page</a>.  

What makes the thing fun is that the process of uploading them is so easy.  The camera has a bluetooth connection to the computer, so I can get photos from the camera while the camera is still in my pocket.  (That's easy.)  Then I drag a photo to an icon on the <a href="http://www.apple.com/pro/training/macosx_basics/segment102663b.html">dock on my computer</a> and the little applescript I wrote pops up a dialogue box to enter a title, and the thing scales the image (the camera takes pictures at 288x352 and I scale them to 180x220 to fit in the sidebar) and uploads the result to the <a href="phonecam">/phonecam directory</a> on consequently.org.  The next bit of magic is two php scripts.  One on the main page takes the latest jpg file out of the /phonecam directory and puts it in the right sidebar.  (The title is the filename with ".jpg" stripped out.)  The other is the <a href="/phonecam">phonecam</a> page, which uses more php to read the entries in last-to-first order, insert month headers for every new month, and put them on the page.

Let me know if anything looks weird from your end.