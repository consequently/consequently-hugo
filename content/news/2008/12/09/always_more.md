---
title: "Always More..."
author: Greg Restall
date: 2008-12-09
filter:
  - erb
  - markdown
  - rubypants
dirty: true
comments: yes
aliases:
  - http://consequently.org/news/2008/12/09/always_more/index.php
---
(What follows is a bundle of ideas I've been trying to write up for some time.  Instead of making it a fully fledged paper, I've decided to rough it out first as a blog post.  If anything comes of it, I'll polish it up.  Let me know what you think.)

Are there any possible worlds?  The idea of a _point_ in logical space -- at which every proposition is either True or False -- seems at the one and the same time compelling and repellant.  The notion plays a vital role in the semantics of logics of modality and conditionality, and so, is compelling.  It is hard to take modal logic seriously without points in models that play the role of deciding every statement one way other the other.  But to take possible worlds seriously as more than a useful fiction has seemed too great a price for many to pay.  This squeamishness seems, to many, to have a distinctly 'ontological' flavour.  Places at which there are blue swans or in which kangaroos have no tails seems to crowd the halls of being with blue swans and tailless kangaroos.  We would do better without such things if we can.   If we can explain possible worlds away -- as propositions, or stories or abstracta or something else relatively tame -- then we should.  But ontological squeamishness is not my complaint about non-actual possible worlds.  Instead of their non-actuality, my worry about possible worlds is their _worldishness_.  

In particular, I worry about the way that these infinitely precise _points_ are then put to use in semantics.  Given that worlds are Deciders of Every Proposition, does it make sense to then turn around and think of a proposition as an arbitrary set of worlds: to think of any set of worlds as the kind of thing that can _be_ a proposition? (David Lewis' _[On the Plurality of Worlds](http://books.google.com/books?id=mdVur1qVLr8C)_ (Chapter 1) is a very good defence of this position, but it is not just his. The view is everywhere.)  

I'll use this post to explain why this might not be a good idea.

<!-- BREAK -->

I grant you: worldlike entities are rife in the study of logics.  Tarski's models for the first-order predicate logic decide every statement in the language as either true or false.  A model is worldlike because it provides consistent and complete scenario, down to the finest detail the language can muster.  It seems inherent in the very notion of classical logic, with its two valued semantics.  Since every statement is either true or false, a world is exactly the kind of think we seem to be talking about when we use some arrangement of truth values consistent with the rules of the logic.

But maybe this is not how we need to think about things: consider the case of classical propositional logic, and think back to how you were taught truth tables.  To show that '((_p_ &rarr; _q_) &rarr; _p_) &rarr; _p_' is a tautology, you showed that it received the value _True_ in every row of a truth table.  Now, how many rows did you use? Hopefully, _four_, one for each different possible assignment of _true_ and _false_ to the sentence letters '_p_' and '_q_'.  Any fewer than four rows would have left out some possibilities you should have checked, and any more than four rows would have been more than you needed to look at.  The truth or falsity of '((_p_ &rarr; _q_) &rarr; _p_) &rarr; _p_' depends only on the truth or falsity of '_p_' and of '_q_', and not on the Values of '_r_', '_s_' or any other sentence letter.  You check the value of your sentence not at a _world_, but at a row of a truth table which is a much blunter instrument: it cares not about most of the sentences in the language.  It knows just enough to decide the truth of the sentences in its remit, in this case, sentences formed out of '_p_' and '_q_'.

As for '((_p_ &rarr; _q_) &rarr; _p_) &rarr; _p_', so for every sentence.  Assuming that the stock of sentence letters is boundless (say, _p_<sub>1</sub>, _p_<sub>2</sub>, _p_<sub>3</sub>,&hellip;) _no_ sentence will exhaust the vocabulary.  Each sentence can be decided by a row of a truth table, and no (finite) truth table will decide every sentence.  Each sentence in the vocabulary of propositional logic is finite, and so, no matter how long it goes on, there is always more vocabulary left to use.

In fact, we can formalise this. For any sentence _A_, let #_A_ be the first sentence letter not included in _A_.  So, #(_p_<sub>1</sub> &and; &not;_p_<sub>3</sub>) is _p_<sub>2</sub>.  _A_ and #_A_ are related in interesting ways.  In particular, if you can show that 

>  If #_A_ &#x22A6; _A_ then &#x22A6; _A_.

If any row of a truth table where #_A_ is true is one where _A_ is true too, then _A_ is true _everywhere_.  Why?  Since #_A_ is a sentence letter not occurring in _A_, the absence of a row in which _#A_ is true and _A_ false means that there's no row where _A_ is false.  It's a tautology.

In fact, we have three more facts like this:

> If &#x22A6; _A_, #_A_ then &#x22A6; _A_.

> If _A_ &#x22A6; #_A_ then  _A_ &#x22A6;&nbsp;.

> If _A_, #_A_ &#x22A6; then _A_ &#x22A6;&nbsp;.

Where, in general, _X_ &#x22A6; _Y_ holds when there is no row of a truth table where each member of _X_ is true and each member of _Y_ is false.   In general, if there is no row of the table where _A_ has some value (say false) and where #_A_ has some value (say false, also) then there is no row where _A_ is false, since the value of #_A_ is completely independent from the value of _A_.

Is there an operator like '#'?  It encodes the idea of indefinite extensibility: no matter what our sentence says, there is always something more to say.  (Call these four conditions the *rules of extensibility*.)

If there _is_ an operator like '#', then if there are possible worlds, not every set of possible worlds counts as a proposition.   Here is why.  Take the set _W_ of possible worlds, and take a particular world _w_ from _W_.  If {_w_} is a proposition, what about #{_w_}?  Since {_w_} isn't contradictory (it's true _somewhere_, namely, at _w_), we don't have {_w_} &#x22A6; #{_w_}, and similarly, we don't have #{_w_},{_w_} &#x22A6;.  In other words, we need somewhere that {_w_} is true and #{_w_} isn't, and we need somwhere that {_w_} and #{_w_} are both true.  That's impossible.  There's only one place {_w_} is true, namely _w_ itself.  

In other words, if singletons of worlds are propositions, then there is no operator like '#'. (There is a dual argument concerning complement propositions, which are true at every world except for one.  They cause just as much havoc to '#'.)

If we have indefinite extensibility for propositions, then no statement can single out a world, for that would be a "final proposition" for which no extensibility is possible.  If for every proposition _A_ we can find some proposition #_A_ independent of it, possible worlds are always idealisations, out of reach of a proposition.  We can always _approximate_ worlds relative to a given vocabulary, but if vocabularies an be extended, what we take to be a world is really a collection of worlds, to be further subdivided as new vocabulary is added.  If '#' is an operator, not all set of _worlds_ (those infinitely precise "Deciders of Every Proposition") count as a proposition.

Well, that would be all well and good, if there were an operator like '#'.  Is there any operator like it?

Maybe not: the first problem is that '#' as it stands is not really an operator or a connective like '&not;' or '&and;' or '&or;', since #_A_ depends on how _A_ is presented.  For example, _p_<sub>1</sub> is equivalent to _p_<sub>1</sub> &and; (_p_<sub>1</sub> &or; _p_<sub>2</sub>), but #_p_<sub>1</sub> is _p_<sub>2</sub>, and #(_p_<sub>1</sub> &and; (_p_<sub>1</sub> &or; _p_<sub>2</sub>)) should be _p_<sub>3</sub> instead.

We could smooth this wrinkle by defining '#_A_' to be not the first sentence letter not occuring in '_A_', but rather, the first sentence letter not occuring in any sentence _equivalent_ to '_A_'.  In that case, if _A_ is equivalent to _B_, #_A_ is equivalent to #_B_, so that is better.  But now the question must remain: if '#' is a genuine operator we can nest it: what is ##_A_? It is the first sentence letter not occurring in anything equivalent to #_A_.   Consider ##_p_<sub>1</sub>.  The first sentence letter not occuring in anything equivalent to #_p_<sub>1</sub> is, of course, p_<sub>2</sub>_, since #_p_<sub>1</sub> is equivalent to itself, and _p_<sub>2</sub> doesn't occur in #_p_<sub>1</sub>.  But on the other hand, #_p_<sub>1</sub> is _p_<sub>2</sub>, so ##_p_<sub>1</sub> should really be _p_<sub>1</sub> itself!  Perhaps '#' works as a way to transform sentences into other sentences, but it shouldn't be thought of as an operator like the logical connectives.  Maybe it cannot be coherently defined in such a way to satisfy the four rules of extensibility.  Maybe there is no threat to propositions as arbitrary sets of infinitely precise worlds.

It might seem like that, but to conclude that there is no '#' would be wrong.  Although the definition of '#' in terms of sentence letters is dubious, and does not give rise to a coherent operator when we attempt to nest it, it turns out that we _can_ model a connective satisfying the rules of extensibility.  

Here is a model: 

Let's think in terms of worlds, to start.  Take the set _W_ of _worlds_ as the irrational numbers in the Real Line.  The propositions at _Level n_  are the unions of the any selection of irrational intervals of length 1/2<sup>_n_</sup>: (_z_/2<sup>_n_</sup>,(_z_+1)/2<sup>_n_</sup>) where _z_ is an integer.  These are closed under union (the union of any collections of intervals is a collection of intervals), intersection (there is no worry about endpoints of abutting intervals, as these don't reach their endpoints, which are rational) and complement (the complement of some collection of intervals is the collection of the _other_ intervals: since the endpoints are rational, they don't occur in either a set or its complement).  The propositions at each level are _finer_ classifications of points than at any of the previous level.  Propositions at Level 0 are collections of intervals such as (-2,-1), (0,1), (3,4), etc.  Propositions at Level 1 are collections of _finer_ intervals (-1.5,-1), (1.5,2), (3,3.5), etc., and so on&hellip;.  

Let's interpret sentences in the language of propositional logic -- enhanced with the operator '#' -- as propositions at _some_ level or other.  If _A_ and _B_ are interpreted as propositions at Level _n_, then &not;_A_, _A_&and;_B_ and _A_&or;_B_ are also interpreted as propositions at Level _n_, since the union, intersection or complement of propositions at Level _n_ are also at Level _n_.

To interpret #_A_, where _A_ is interpreted as a proposition at Level _n_, we will choose a proposition at Level _n_+1.  In particular, we will choose an _alternating_ proposition at Level _n_+1: the proposition consisting of all of the intervals (_z_/2<sup>_n_</sup>,(_z_+1)/2<sup>_n_</sup>) where _z_ is even integer.  The alternating proposition at Level _0_ is

> &hellip; (-4,-3) &cup; (-2,-1) &cup; (0,1) &cup; (2,3) &cup; (4,5) &hellip;

the alternating proposition at Level _1_ is

> &hellip; (-2,-1.5) &cup; (-1,-0.5) &cup; (0,0.5) &cup; (1,1.5) &cup; (2,2.5) &hellip;

and so on.  It turns out that this choice for #_A_ satisfies the four rules of extensibility.

Let _A_ be interpreted as a proposition at level _n_.  If _A_ is not true everywhere, then it is false at some interval (_z_/2<sup>_n_</sup>,(_z_+1)/2<sup>_n_</sup>).  Now consider #_A_.  It is _true_ at  (2_z_/2<sup>_n_+1</sup>,(2_z_+1)/2<sup>_n_+1</sup>), where _A_ is not true.  And #_A_ is _not true_ at ((2_z_+1)/2<sup>_n_+1</sup>,(2_z_+2)/2<sup>_n_+1</sup>), where _A_ is not true.  Similarly, if _A_ is not false everywhere, it is true at some interval (_z_/2<sup>_n_</sup>,(_z_+1)/2<sup>_n_</sup>).  #_A_ is _true_ at  (2_z_/2<sup>_n_+1</sup>,(2_z_+1)/2<sup>_n_+1</sup>), where _A_ is true.  And #_A_ is _not true_ at ((2_z_+1)/2<sup>_n_+1</sup>,(2_z_+2)/2<sup>_n_+1</sup>), where _A_ is true.  In other words, #_A_ is truly independent of _A_. If _A_ is true somewhere, at some such places, #_A_ is true, and at others, #_A_ is false.  If _A_ is false somewhere, at some such places, #_A_ is true, and at others, #_A_ is false.

This is completely general.  We for any proposition _A_ we have found another proposition #_A_.  #_A_ is more finely grained than _A_, and the four rules of extensibility are satisfied.  In models like these, it makes sense to think of '#' as an operator on propositions, and not merely a syntactic device for constructing sentences from other sentences.

The appeal to worlds in these models is not essential:  we refrain from all talk of worlds and appeal instead to _regions_ in a formal topological space.  The definition of propositions in terms of sets of points -- irrational numbers in our case -- is not essential.  The construction gives us an atomless boolean algebra, and these are well known algebraic structures.  The value of the relatively concrete construction here is the manner in which extensibility corresponds to propositions being more and more finely grained, without that ever coming to an end.  The model shows that the idea of indefinite extensibility of propositions is coherent.

I cannot tell if there are there any possible worlds, and if there are, if arbitrary sets of them count as propositions.   What I can say, however, is that if there is indefinite extensibility, such as expressed by '#' -- and the logic of '#' is coherent -- then not all sets of worlds are propositions.  For any proposition, there is always more.

[Thanks to Lloyd Humberstone, who got me first thinking about #, at a Melbourne Logic Seminar in 2006.] 

Comments are, of course, most welcome.  Is this crazy?  Sensible?  Anodyne?  Let me know what you think.