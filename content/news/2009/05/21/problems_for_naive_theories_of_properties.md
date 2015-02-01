---
title: "Problems for Naïve Property Theories"
author: Greg Restall
published: true
created_at: 2009-05-21 02:08:00.293242 +10:00
date: 2009-05-21 
comments: yes
filter:
  - erb
  - markdown
  - rubypants
dirty: true
---
I've been thinking about generalisations of Russell's paradox, cleaning things up so you can't get around the problem by changing the logic of connectives. I don't think that mucking around with *negation* or *implication* gets to the heart of the issue.  (This view is shared by some very [insightful](http://cognet.mit.edu/library/books/view?isbn=0262071444) [people](http://dx.doi.org/10.1007/s11225-009-9177-2).  I haven't come to it alone.)  

Getting around negation and conditionals is surprisingly easy, once you get the proof theory sorted out.  I've been noodling about with this issue for a year or so now.  I presented on this in a [talk at the World Congress of Paraconsistency](http://consequently.org/writing/adnct/) last year, and a bit of it has appeared in my draft [discussion of some themes from Hartry Field's *Saving Truth From Paradox*](http://consequently.org/writing/stp/). 

There, the paradoxical derivations are done in sequent calculi, and they're not the most perspicuous presentation.  I managed to sharpen it up a bit tonight, and the resulting proof is [here](http://consequently.org/papers/bang.pdf).  It's not explained in the text of that note: that gives just the definitions and the proof. I hope to get to that soon.  But let me use this site to get the ideas out in a rough and ready form.

<!--more-->

The gist of the idea is this.  Folks like [Graham Priest](http://www.amazon.com/Contradiction-Study-Transconsistent-Graham-Priest/dp/0199263302/consequentlyorg), [Hartry Field](http://www.amazon.com/Saving-Truth-Paradox-Hartry-Field/dp/0199230757/consequentlyorg) and [Jc Beall](http://www.amazon.com/Spandrels-Truth-Jc-Beall/dp/0199268738/consequentlyorg) think that for every description &phi;(*x*) there's a property <*x*:&phi;(*x*)> of being an *x* such that &phi;(*x*).  An object *a* instantiates the property  <*x*:&phi;(*x*)> if and only if &phi;(*a*).  The traditional problem is this: consider the property <*x*:*x* doesn't instantiate *x*>.  Does this instantiate itself or not?  If it does, it doesn't.  If it doesn't, it does.

The solutions favoured by [Priest](http://www.amazon.com/Contradiction-Study-Transconsistent-Graham-Priest/dp/0199263302/consequentlyorg), [Field](http://www.amazon.com/Saving-Truth-Paradox-Hartry-Field/dp/0199230757/consequentlyorg) and [Beall](http://www.amazon.com/Spandrels-Truth-Jc-Beall/dp/0199268738/consequentlyorg) (and [my](http://consequently.org/writing/onlogics/) [former self](http://consequently.org/writing/dlpsr)), though they differ in details, all agree that we should muck around with the logic of negation.  (And also the logic of the conditional, as the property <*x*: if *x* instantiates *x* then I'm a monkey's uncle> is just as problematic: see [Curry's paradox](http://plato.stanford.edu/entries/curry-paradox/).) 

Now, it's a *pain* to worry about each different tweak to the logic of negation and the logic of the conditional, and worry about whether this patch or that fix really does solve the problem.  (It's a fun pain, if you like that kind of thing, but a pain nonetheless.)

I've been looking at formulations of the problem that avoid all talk of negation, conditionals and other stuff my friends and colleagues can argy bargy about.  Instead, I'm trying to make do with the logic of instantiation (that's implicit in the so-called na&iuml;ve theory of properties, for which each description &phi;(*x*) has a corresponding  property <*x*:&phi;(*x*)> of being an *x* which is &phi;.  An object *a* instantiates the property  <*x*:&phi;(*x*)> if and only if &phi;(*a*).)  So, we adopt two inference rules:

[&epsilon;*I*] From &phi;(*a*) infer *a* &epsilon; <*x*:&phi;(*x*)>

[&epsilon;*E*] From *a* &epsilon; <*x*:&phi;(*x*)> infer &phi;(*a*)

for each open sentence &phi;(&nbsp;).  (The '&epsilon;' is our shorthand for 'instantiates.')

Then, we need two more things.  First, a sentence that is pretty bad.  One from which we can infer everything will do the trick.  (If you have a universal quantifier around, 'everything instantiates everything' will do nicely.  But it isn't mandatory.)  In other words, we have a '&perp;' for which

[&perp;*E*]  From &perp; infer any sentence you like.

Finally, we need the logic of identity for properties.  You need to have *some* account of when <*x*:&phi;(*x*)> = <*x*:&psi;(*x*)> for different sentences &phi; and &psi;.  It'd be odd to say that the property of being red and square was a different property from the property of being square and red, wouldn't it?  (The extant na&iuml;ve theories of properties say little about this.  The extant consistency or non-triviality proofs for na&iuml;ve theories of properties, alas, make different descriptions denote *different* properties, which is not what you should want.)

So, what can we say that would rule out out distinctions where there is no difference at all?  What identity condition works for this sort of property?  Extensionality is the identity condition for *sets*.  If the things in set *A* are the same as the things in set *B*, then *A* and *B* are the same set.  That's clearly too strong for properties.  (Think renates and cordates, or featherless bipeds and humans.)  But if I can deduce that *a* &epsilon; *S* from *a* &epsilon; *T*, and vice versa (where *a* is aribtrary), using deduction alone and no contingent side conditions, then what difference could there be between property *S* and property *T*?  None that I can see, that's for sure.  This motivates the following condition.

[=*I*]  If I can deduce *a* &epsilon; *S* from *a* &epsilon; *T*, and *a* &epsilon; *T* from *a* &epsilon; *S*, with no other side conditions, discharge those assumptions and infer *S* = *T*.

(Parenthetical remark: that *doesn't* mean that being H<sub>2</sub>O is the same property as being water, unless you think you can infer that *a* is H<sub>2</sub>O  from *a* is water, and vice versa, using logic alone.  You can think that they are necessarily coextensive without thinking *that*.  We're not identifying properties coarsely.)

The rule [=*I*] tells us when two properties are identical.  We need to know what we can infer from the claim that two properties are identical.  That seems straightforward.  You only get out what you put in:

[=*I*]  From *t* &epsilon; *S* and *S* = *T*, infer *t* &epsilon; *T*.

That's five simple inference principles.  

Those five inference principles are enough for you to deduce &perp;.

This is bad, since from &perp; one can validly deduce everything.

How can we deduce &perp;?  We use identity and &perp; to do what we wanted negation to do before our friends and colleagues said negation didn't do that.  That is, consider *this* property:

<*x*:<*y*:*x* &epsilon; *x*> = <*y*:&perp;>>

That is, consider the property of being an *x* such that the property that anything has when *x* instantiates itself as a property is the same thing as the property that nothing has.  (In other words, consider the property of not being self instantiating, but we won't say that, since we have nice arguments about the logic of negation.)

Using [&perp;*E*], [&epsilon;*I*], [&epsilon;*E*], [=*I*] and [=*E*] alone, we can deduce &perp;.  [Here's the proof](http://consequently.org/papers/bang.pdf).  It has fifteen steps, each one of which is one of those five rules.

I think that this is a serious problem for anyone who likes na&iuml;ve theories of properties.  You've got to say which of those rules break down: and by 'break down' I mean something very precise.  For which of the rules [&perp;*E*], [&epsilon;*I*], [&epsilon;*E*], [=*I*] and [=*E*]  are you prepared to accept the premise and reject the conclusion?  If you can't do that, then a forced march down [the proof](http://consequently.org/papers/bang.pdf) suffices to commit you to &perp;.

So, what will it be?



