---
title: "Rumfitt on Multiple Conclusions, Part 1"
author: Greg Restall
published: true
created_at: 2009-06-01 22:56:00.293242 +10:00
date: 2009-06-01 
comments: yes
filter:
  - erb
  - markdown
  - rubypants
dirty: true
---
[Thanks to Ole Hjortland](http://notofcon.blogspot.com/2009/05/its-end-of-logic-as-we-know-it.html), I've been alerted to Ian Rumfitt's paper "Knowledge by Deduction" (*Grazer Philosophische Studien*, vol. 77 (2008) pp. 61--84.).  In it, he makes a number of critical comments on multiple conclusion accounts of logical consequence, and in particular, he makes some critical remarks on my paper "[Multiple Conclusions](http://consequently.org/writing/multipleconclusions/)."  Now, the criticism of mutiple conclusion consequence isn't the main point of the paper---the main topic is how one can acquire knowlege by deduction, as the title indicates. On that topic, it's a really interesting paper, and I hope to comment on those parts at some time.   

However, since the paper ends with the sentence

> But we have found reason to leave multiple-conclusion logics to the boy racers, and focus on the single-conclusion rules, by following which we can splice together the deliverances of various sources of knowledge to come to know things that we could not know otherwise.  (page 83)

I've got to respond.  

<!--more-->

It's clear that the criticism of multiple conclusion consequence plays a significant role in the paper, and in how Rumfitt thinks of the topic of acquiring knowledge by deduction.  The 'boy racer' image---which I _think_ is not intended to be flattering to people like me who have advocated multiple conclusion logics---arises out of an argument to the effect that multiple conclusion logics are finely tuned machines, which are fiddly to maintain, like a sports car.  I'll leave the metaphor for readers to judge.

Given the criticism I should reply in some kind of public forum, to get a response out there.  It doesn't seem appropriate to write an extensive essay just in response to a few points made in one paper, though I may make the remarks in some other paper I'm writing if it is appropriate to the topic at hand.  But I have a weblog, it seems like the appropraite avenue for responding.

I've got three comments to make. They are, in turn.

1. On Rumfitt's explicit criticism of my 'overplaying my hand,' as [cited by Ole](http://notofcon.blogspot.com/2009/05/its-end-of-logic-as-we-know-it.html) in the post that drew my attention to Ian's paper.  This is taken up [here](http://consequently.org/news/2009/06/01/Rumfitt_Part_1/#readon).

2. On Rumfitt's point that multiple conclusion deductions aren't found in nature.  (This point is, of course, not limited to Rumfitt.  It's found throughout the literature, predominantly in response to [Shoesmith and Smiley's book](http://www.amazon.com/Multiple-Conclusion-Logic-D-J-Shoesmith/dp/0521093325/consequentlyorg).)  This is taken up in [Part 2](http://consequently.org/news/2009/06/03/Rumfitt_Part_2).

3. On Rumfitt's interesting argument concerning the multiple conclusion _Cut Rule_ being properly stronger than mere transitivity. (This is the point at which the metaphor of the sports car appears.)

Making all three comments in the one post seems excessive.  So I'll make the first comment here, and leave the other two for later posts in the next little while.

<!-- BREAK -->

Before I can tell you *that* story, I'll have to tell you *this* story.<sup><a href="#fn">&darr;</a></sup><a id="ret"></a>  What is multiple conclusion consequence?  It is what is presented in Gentzen's sequent calculus for classical logic.  A multiple conclusion consequence links a number (maybe zero, maybe more) of premises *X* with a number (maybe zero, maybe more) of conclusions *Y*.  We say that *X* entails *Y* if there's a sequent derivation of *Y* from *X*.  The soundness and completeness theorem linking Gentzen's sequent calculus to models for classical logic tells us that *X* entails *Y* if and only if there is no model (and assignment of values to the variables, if we allow free variables in *X* and *Y*) in which each member of *X* is satisfied and no member of *Y* is satisfied.   Formally speaking, multiple conclusion consequence is impeccable when it comes to classical logic, and its fragments such as distributive lattice logic.

In my favoured approach (discussed [here](http://consequently.org/writing/multipleconclusions/), [there](http://consequently.org/writing/tvpt/) and [everywhere](http://consequently.org/writing/adnct/)), the multiple conclusion consequence from *X* to *Y* makes *sense* as saying that a position in which every member of *X* is asserted and every member of *Y* is denied is self-defeating.  (I'll have more to say about what it is to be self-defeating in the salient sense, below.)  For example, (*p* or *q*) entails *p*,*q* --- and yes, asserting the inclusive disjunction of *p* and *q* while at the very same time denying *p* and denying *q* is to make a mistake---it's for the very claims to undercut one another in a very special way.

Now, Rumfitt doesn't like this approach. Let's consider Rumfitt's explicit criticism of the earliest exposition I have given of the ideas, in "[Multiple Conclusions](http://consequently.org/writing/multipleconclusions/)".  He writes

> Something like this case for multiple conclusions is presented in [Restall 2005](http://consequently.org/writing/multipleconclusions/). But he overplays his hand in suggesting that '*Y* is a multiple-conclusion consequence of *X*' can be explained as meaning 'The mental state of accepting all of *X* and rejecting all of *Y* would be self-defeating'. The mental state that consists of accepting that there will never be sufficient grounds for accepting or rejecting 'There is a god', while rejecting that very statement, is self-defeating. But 'There is a god' is in no sense a consequence of 'There will never be sufficient grounds for accepting or rejecting "There is a god"'. (p. 80)

Here's how I respond.

First: I just don't agree with Rumfitt's premise in the argument.  I don't agree that accepting (a) that there will never be sufficient grounds for accepting or rejecting 'There is a god' and (b) rejecting 'There is a god' are jointly self-defeating.

Of course, (a) and (b) jointly involve doing something for which there will never be sufficient grounds, but _that's_ not what is required for self-defeat in anything like any of the senses I was discussing.  

Here's why.  You wouldn't notice this from Rumfitt's summary of the position in "Multiple Conclusions" but I was careful to _not_ restrict the story of self-defeat (later traded in for the notion of incoherence) to occurrent beliefs or other mental states.  In fact, though I talk about accepting and rejecting in the paper, I was careful to allow that this makes sense even in those cases where we accept claims *hypothetically*, or *for the sake of the argument*. "Suppse *p*", I say.  If you're following along, then under the scope of this supposition, you accept *p*.   You reaon *from* *p*.  If you also accept *q* then, under this scope, it would be a mistake to reject *q*.  This is clearly something we do, and we want a notion of logical consequence to apply under the scope of such suppositions or hypotheses.  (It's hard to see how we could make sense of the rule of conditional proof and what goes on when we reason like *that* without some such move.)

So, in this discussion, one should never limit accepting and rejecting to occurrent mental states like belief and disbelief.  That will limit the range of applicability of the notion of logical consequence too much.  This was one reason I used 'accept' rather than 'believe', and why I was careful to also talk of 'assertion' and 'denial', for one can similarly assert under the scope of a supposition, in a dialogue.

Now, consider what we might say about Rumfitt's case and the position in which I accept that there is not and will never be any sufficient grounds for accepting or rejecting the statement 'There is a god.'  OK. Let's, for the sake of the argument, *grant* that.  And let's suppose that we *believe* it.  Now, consider this:  I ask you to consider what would be the case if, as a matter of fact, there were a god.  You are quite well within your rights to say that in that case, there would be a god and that despite that fact, there would still be no grounds for accepting or rejecting the claim.  

And I think you'd be right, and I think that in that discussion, under the scope of that supposition, we have a case where we (conditionally) accept 'there is a god' and accept 'there is no grounds for accepting or rejecting the statement 'there is a god',' and where we do so completely coherently, with no self-defeat at all.  There is something epistemically defective, of course, in thinking that we are _in_ such a circumstance as described under that supposition.  But that's not required.  That's the joy of assertion and denial, and of accepting and rejecting.  We can make them fly beyond the limits of what we happen to believe (and disbelieve) at the present moment.

In other words, I don't accept the premise of Rumfitt's argument: I submit that it's a too-narrow reading of 'accepting' and 'rejecting' (not allowing enough to count) and a too-wide reading of 'self-defeat' (allowing too much to count).  If you understand 'accept' and 'reject' broadly enough---as I think we must---then the right notion of self-defeat is much easier to pin down.

What else do I say about the notion of self-defeat?  In my [later](http://consequently.org/writing/tvpt/) [writing](http://consequently.org/writing/adnct/) [on this](http://consequently.org/writing/s5nets/) I have not used the term 'self-defeat' for it is too easily confused with epistemic notions of assertion without warrant.  (Lloyd Humberstone pointed out a few years ago in conversation that you might worry about Moore paradoxical sentences on my approach, so I have been aware of this issue for some time.)  Instead, I have used the more abstract terms of art such as involving a 'clash,' being 'incoherent' or being 'out of bounds' when talking about positions [*X*:*Y*] where *X* entails *Y*.   What is involved in such a clash?  The clash in the assertion of each member of *X* and the denial of each member of *Y*, whatever it is, is the kind of clash involved in asserting *A* and denying *A*.  Its normative force, whatever it is, is not just any old force (like that of asserting something for which there is no evidence, or of denying something true).  The connective rules for the sequent calculus show how _other_ clashes can be reduced to this basic clash between assertion and denial of the one thing.  Exactly how that reduction goes, and what one can say about the Cut Rule (which also connects clashes with other clashes), I'll leave for another time.  For now, I hope to have shown that Rumfitt's case, and other Moore paradoxical cases, don't cause any concern for the position in "[Multiple Conclusions](http://consequently.org/writing/multipleconclusions/)."

Later, I'll consider other points from Rumfitt's interesting article, but that seems like enough for now.  

What do you think?  I'd value feedback on this, as I'm trying to make sure that the position is _clearly explained_, _convincing_ and _correct_.  I'd settle for _clearly explained_ though I'm aiming for all three.

<hr>
<a id="fn"></a>I've got a prize to send to the first person who posts a comment explaining what highbrow cultural reference I just made: the offer is valid for one week, until June 8, 2009.  I'll post the answer if no-one has got it by then. <a href="#ret">&uarr;</a>