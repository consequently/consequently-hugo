---
title: "Rumfitt on Multiple Conclusions, Part 2"
author: Greg Restall
published: false
created_at: 2009-06-02 20:48:00.293242 +10:00
date: 2009-06-02 
comments: yes
filter:
  - erb
  - markdown
  - rubypants
dirty: true
---
This is Part 2 of [a series of comments](http://consequently.org/news/2009/06/01/Rumfitt_Part_1) on Ian Rumfitt's paper "Knowledge by Deduction" (*Grazer Philosophische Studien*, vol. 77 (2008) pp. 61--84).  In [Part 1](http://consequently.org/news/2009/06/01/Rumfitt_Part_1), I focussed on Rumfitt's direct criticism of my approach in "[Multiple Conclusions](http://consequently.org/writing/multipleconclusions/)," and I tried to show that his criticism missed the mark, and that it missed the mark in an important way. The norms of logical consequence and logical coherence apply not only to occurrent beliefs but to all manner of states of accepting and rejecting (or acts of assertion and denial), whether they express our deep standing beliefs or hypotheses we simply entertain lightly.

In this part, I want to consider the comments on the possibility of genuine _proofs_ with multiple conclusions.  

<!--more-->

Rumfitt writes (and I'll quote him at some length here), on page 79:

> The rarity, to the point of extinction, of naturally occurring multiple-conclusion arguments has always been the reason why mainstream logicians have dismissed multiple-conclusion logic as little more than a curiosity. (See e.g. [Tennant 1997](http://www.amazon.com/Taming-True-Neil-Tennant/dp/0198237170/consequentlyorg), 320.) And attempts by enthusiasts to alleviate the embarrassment here have often ended up compounding it. In the introduction to their textbook on the subject, Shoesmith and Smiley concede that multiple-conclusion proofs can scarcely be said to form part of the everyday repertoire of mathematics. 'Perhaps the nearest one comes to them', they go on, "is in proof by cases, where one argues "suppose _A_<sub>1</sub> then _B_; &hellip; suppose _A_<sub>_m_</sub> then _B_; but _A_<sub>1</sub> &or; &hellip; &or; _A_<sub>_m_</sub>, so _B_". A diagrammatic representation of this argument exhibits the downward branching which we shall see is typical of formalised multiple-conclusion proofs &hellip; But the ordinary proof by cases is at best a degenerate form of multiple-conclusion argument, for the different conclusions are all the same (in our example they are all instances of the same formula _B_)" ([Shoesmith and Smiley 1978](http://www.amazon.com/Multiple-Conclusion-Logic-D-J-Shoesmith/dp/0521093325/consequentlyorg), 4–5). "At best degenerate", though, hardly says it. I do not know how the word "multiple" is used in Cambridge, but in the rest of the English-speaking world it is understood to mean "more than one". So an example of an argument in which all the conclusions (_sic_) are identical provides little justification for taking multiple-conclusion logic seriously. But since this is all that Shoesmith and Smiley provide by way of a positive case for deeming their system to be a branch of logic, readers of their book may be forgiven for closing it with a sigh on reaching p. 5 of the introduction.  

What can I say about *that*?

<!-- BREAK -->

First of all, in defence of Shoesmith and Smiley, the one example of proof by cases (in which the intermediate formula are all the same) is not the only consideration they provide in favour of taking their system to be a branch of logic.  Showing that it is a codification of a notion of (let's call it) *quasi*-proof which delivers logical consequence on Gentzen's sequents, and which, when restricted to single conclusion deductions agrees with traditional natural deduction should count for something.  If it's not a branch of logic, what is it?  

To be sure, a single case where the only multiple conclusions aren't very multiple is not very satisfying. But there is a genuine sense, of course, in which even in this case the conclusions *are* multiple.  Surely they have heard of the type--token distinction outside of Cambridge?  There is a perfectly admissible sense in which the rule of conjunction introduction (in Gentzen's natural deduction) requires *two* premises, even when the instance used is a derivation of _P_ &and; _P_ from the premises _P_ and _P_.  (To rewrite this to be a proof from one instance of _P_ to _P_ &and; _P_ may radically change the structure of the proof, especially if both instances of _P_ are proved in very different ways.)

But that is a minor point, not worth any more of our time.  More important is the way that Rumfitt missed what is going on in proofs by cases.  I don't mind that he missed my example of a proof featuring multiple conclusions, discussed in "[Multiple Conclusions](http://consequently.org/writing/multipleconclusions)" on page 199 to address just the point Rumfitt raised here.

> Suppose everyone is either happy or tired. Choose a person. It follows that this person is either happy or tired. There are two cases. Case (i) this person is happy. Case (ii) this person is tired, and as a result someone is tired. As a result, either this person is happy or someone (namely that person) is tired. But the person we chose was arbitrary, so either everyone is happy or someone is tired. 

This seems to me to be perfectly valid reasoning: It's a proof.  It's a renderng in (somewhat) natural language of a sequent derivation of "everything is an _F_ or something is a _G_" from "everything is either _F_ or _G_."  (For the sequent derivation I used, see [the paper](http://consequently.org/writing/multipleconclusions).)  

In this proof, there are two conclusions active at a number of points.  Stop the proof before the sentence starting "As a result".  Consider the state of play at this point in the derivation.  We have a proof from "Everyone is either happy or tired" to the two conclusions: "Case (i) _a_ is happy." (where _a_ is an eigenvariable standing for 'that person', which in turn points back to the choice made after the supposition.)  "Case (ii) someone is tired."  In other words, we have a proof corresponding to the sequent (everything is either _F_ or _G_ &rArr; _Fa_, something is _G_.)

I cannot think of any way of understanding the deduction up to that point in such a way as to (a) see it as a single deduction, and (b) not introduce irrelevant connectives not explicitly used in the text.  This example seems to me to be strong evidence that one can find in nature real-life uses of multiple conclusions in action, if you know where to look.  

If you know where to look, you know that you don't need tricky cases of intuitionistically invalid arguments to make the point.  The point is there in Shoesmith and Smiley's _own_ examples of proof by cases.  If you stop a proof by cases (in the middle of the ellipses eliding the interesting bits of the subproofs, in the bit of [Shoesmith &amp; Smiley](http://www.amazon.com/Multiple-Conclusion-Logic-D-J-Shoesmith/dp/0521093325/consequentlyorg) quoted by Rumfitt) you will get more interesting cases where the conclusions in play differ.  For example, take this proof of (_p_ &and; _q_) &or; (_p_ &and; _r_) from _p_ &and; (_q_ &or; _r_). (Ignore the bracketed markers [a], [b] and [c] for the moment.)

> Suppose _p_ &and; (_q_ &or; _r_).  Then it follows that _p_.  It follows that _q_ &or; _r_.  So, we have two cases: (i) _q_, and (ii) _r_. [a] Consider case (i).  Here, _q_, and we already have _p_, so _p_ &and; _q_.  Consider case (ii). Here, _r_, and we already have _p_, so _p_ &and; _r_. [b].  Back in case (i), it follows that (_p_ &and; _q_) &or; (_p_ &and; _r_).  In (ii), it also follows that (_p_ &and; _q_) &or; (_p_ &and; _r_) [c].  So, we conclude, (_p_ &and; _q_) &or; (_p_ &and; _r_).

Again, this seems to me to be perfectly understandable reasoning.  The point at which Rumfitt jokes about 'multiple' instances of the conclusion _B_ corresponds to our point [c], where we have proved the conclusion (_p_ &and; _q_) &or; (_p_ &and; _r_) in each case, but have not yet drawn them together to a single conclusion in the argument.  True, at this point we have a proof with two instances of the one concluding formula.  This is no better or worse than a proof with two instances of the one premise formula.  

But [c] is only one place to stop the proof.  Suppose we pause at point [b].  What do we have there?  It's a proof from one premise _p_ &and; (_q_ &or; _r_), leading to two cases, one in which we've proved _p_ &and; _q_, and the other in which we've proved _p_ &and; _r_.  This corresponds to the sequent _p_ &and; (_q_ &or; _r_) &rArr; _p_ &and; _q_, _p_ &and; _r_, and the two concluding formulas are different.

Now, let me confess: I engineered this case by interleaving the two cases in the text, to get to an intermediate step in both of them.  But this does not render the case any less salient.  I could have stopped at point [a], and here, what we have got to is a sequent _p_ &and; (_q_ &or; _r_) &rArr; _q_,  _r_.  In other words, we have just got to the point at which the disjunction is broken up into two cases, and each case is ready for further processing using the rules.

That is the core idea of multiple conclusion _natural deduction_.  The disjunction rule can be understood simply, as taking us from _p_ &or; _q_ to the two conclusions _p_, _q_,  which can then be operated on as usual, in the _one_ proof.  If you don't like this, that's fine.  However, that is not an argument to the effect that multiple conclusion structures can't be found in natural reasoning.  They are there if you know where to look.

In a few days I'll post a response to what I take to be the most interesting of Rumfitt's arguments, his considerations against the Cut Rule.  But that, I suspect, will take a little more time, and other duties are pressing for the next few days.

As ever, comments on these ideas are most welcome.  