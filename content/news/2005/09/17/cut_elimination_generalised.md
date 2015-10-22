---
author: Greg Restall
title: "Cut elimination generalised"
date: 2005-09-17T12:04:13+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

This post is a change of scene for those of you that have come to expect [gentle](http://consequently.org/news/2005/09/03/reflections_on_iona_part_1) [meditations](http://consequently.org/news/2005/09/05/reflections_on_iona_part_2) on matters personal.  

I'm going to experiment with posting some of my work scribblings as an irregular record of thoughts I'm having while working on sabbatical.  It may well confirm the impression that you might have that I'm crazy, but hey, I have tenure, so I won't worry about that too much.  

Over the last couple of days I've been thinking about cut elimination arguments, and in particular, the general cut elimination argument that you can find in <a href="http://www.amazon.com/exec/obidos/tg/detail/-/041521534X/consequentlyorg">my book</a> (look around <a href="http://print.google.com/print?id=8u-IU3xTHrcC&pg=PA120&lpg=PA120&dq=cut+elimination&sig=lgHAlb56O39iT6gIVkimS7P_j8g">here</a>). 

It struck me last night -- as I was trying to find the right mix of generality and clarity -- that there's nothing in Gentzen's original argument that <em>requires</em> that formulas have just two distinct positions in a sequent (the traditional two positions are *antecedent* and *consequent*, or *left* and *right*, or if you like, *premise* and *conclusion* or *input* and *output*).  Every presentation of cut elimination that I'm aware of (even for single sided systems which don't have an explicit left or right to a sequent) has two "positions" in which a formula can reside.  (In single sided systems this is represented by the dualising map on formulas).  The point is seen in the structure of the identity rule (an instance of the formula on each position, left and right, is what gives you an *identity*) and the cut rule (take two sequents, one with the formula in *antecedent* position, the other with it in *consequent* position -- the *cut* rule tells you how to combine them).

Well, as I was saying, it struck me last night (at approximately 1:30am -- I indulge myself by working late when my spouse is [out of town](http://www.ps.au.dk/showpage.asp?lPageID=34)) that the form of the traditional cut-elimination argument -- when you look at it in the right way, at least -- in no way requires that there are just two positions in a sequent.  You could have *four* if you like.  Or maybe *three*.  Or soemthing else entirely.  All you need is for identity and cut to interact in the right kind of way (cuts composed with identities disappear), for the rules to commute with cuts in parametric positions, and for cuts on principal formulas to be eliminable.  It works quite generally, which is very pretty.  (I have an example scrawled on pages of my notebook as I was taking a coffee after lunch this afternoon of a cut elimination theorem for a sequent system in which sequents have *four* different slots.  You can visualise proofs in this system as having input and output going from top to bottom on the page *and* different inputs and outputs going left-to-right.  In this picture, there are two kinds of cut: *horizontal* and *vertical*.)

Now, the question for you, gentle reader (if you have read this far, as you seem to have): Can you think of any reason why we would *want* such a thing, beyond the insane desire to generalise well-known theorems and constructions?  Can you think of any applications in which you might want proof-like-objects to go in "more than one direction" in this sense, or analogously, in which you might have attitudes of more than just assertion and denial to propositional content and more importantly, have vocabulary that is sensitive to these different features?  I can think of [one possibility](http://scholar.google.com/scholar?q=bilattice).