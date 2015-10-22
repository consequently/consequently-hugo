---
author: Greg Restall
title: "Logic Colloquium 2005 Day 3"
date: 2005-07-30T16:20:50+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

It's another busy day with lots of things to learn.  Here's my impressions so far, updated through the day.

- - - 

*9:20*: [Phokion Kolaitis](http://www.almaden.ibm.com/cs/people/kolaitis/) is giving his second lecture &mdash; he's good, and it's been interesting to learn about *dichotomy* theorems in CSPs.  [Schaefer's dichotomy results](http://users.info.unicaen.fr/~zanutti/rechch/identif.htm) cast in terms of constraint satisfaction problems, are really interesting.  The idea is that we can think of a class of constraints as expressed as the problem of whether or not there's a homomorphism betwen your structure and another one (which is thought of as expressing the constraints).  So, 3-colourability might be expressed as the existence or nonexistence of a homomorphism between your graph and the complete graph K<sub>3</sub>.  If there is such a homomorphism, your graph is 3-colourable, if there isn't, your graph *is*.   Phokion's talk yesterday explained why CSPs can be expressed as homomorphism existence fact.  The idea is that conjunctive queries (predicate logic expressions using existential quantification and conjunction only) have exactly the right kind of preservation properties to express these homomorphism existence facts on relational structures.

Well, Schaefer's result is that the problem of whether or not (for a given boolean algebra *B*), the issue of whether or not you've got a homomorphism from your structure into *B*, is either solvable in polynomial time (like 2-colourability) or is NP-complete (like 3-colourability -- K<sub>3</sub> isn't a boolean algebra, but 3-colourability apparently can be expressed as CSP(*B*) for some boolean algebra).  This is nice.  Even if P isn't NP, CSP(*B*) is not in the gap.

Phokion is now explaining Feder &amp; Vardi's conjecture that *every* structure *B* has this dichotomy &mdash; not only boolean algebras. There are some nice results approaching this.  [Andrei Bulatov](http://web.comlab.ox.ac.uk/oucl/work/andrei.bulatov) [showed that](http://web.comlab.ox.ac.uk/oucl/work/andrei.bulatov/FOCS02.ps) the conjecture works for structures of size up to *3*.  So, there's only 4,5,6,&hellip; to go!

- - -

*1:30*: Now some impressionistic comments on [Deirdre Haskell](http://www.math.mcmaster.ca/haskell/)'s talk on 'Independence types in algebraically closed valued fields'.  This was a model theory talk, and I'm not a mathematical model theorist, so I didn't follow everything by any means.  Deirdre is exploring how independence results from the analysis of *stable* theories cross over to *unstable* theories, and in particular, valued fields.  

This is in the program started by [Shelah](http://shelah.logic.at/): we're interested in the number, I(*T*,&lambda;) of models cardinality &lambda; of a first-order theory *T*.  What can I(*T*,&lambda;) be?  Given an *unstable* theory (typically, that's a theory with a linear ordering or something like it, such as a valuation function onto a linear ordering), I(*T*,&lambda;) is 2<sup>&lambda;</sup>, which is as big as it can be.  (Theories with orderings, such as the theory of rationals, are unstable, so are theories with orderings on a definable subset -- such as theories with *valuations*.)

(As an aside, an anyone recommend the best introduction to stability in the model theoretic sense?  Should I just read Shelah's [initial paper on the topic](http://shelah.logic.at/short000.html)?  I don't have access to it now, so I can't tell what it's like.  Hodges' [Stanford Encyclopedia entry](http://plato.stanford.edu/entries/modeltheory-fo/) is great, but it doesn't scratch my itch.)

Anyway, if the theory we're interested in is *stable*, then we don't have as much information about this.  And hence, *stability* theory.  (This talk was the clearest explanation of stability theory I've had the pleasure of hearing).  Stable theories are algebraically closed fields, differentiably closed fields, etc.   The notion of forking (or non-forking), in pure model theories is important for studying stable theories, and in this case -- in classification theory -- model theorists exclusively studied stable theories since the problem of finding I(*T*,&lambda;) was solved for unstable *T*.  But we're interested in unstable *T* for other reasons.  Now people (like Deirdre Haskell) are using the tools from the study of stable theories in work on unstable theories.  She talked about the application of independence notions in the study of algebraically closed fields (they're fields in which polynomials have solutions) with valuations.  A valuation is a map *v* from the field to some ordered group with an infinite element &infin; added, where 

+ *v*(*ab*) = *v*(*a* + *b*), 
+ *v*(*a*+*b*) = min(*v*(a),*v*(b))
+ *v*(0) = &infin;

Here *v* measures a kind of size (backwards!) and it gives the field a kind of stratification (and, for extra fun, a topology).  It also induces enough of an ordering on the field to make the theory unstable.

But, algebraically closed valued fields (AVCFs to their friends) are neat, because they are often (always? I didn't catch how this worked in general) characterised by their maximal ideal (the elements *x* where *v*(*x*) > 0) and their residue field (the quotient of the AVCF with the maximal ideal). 

One example is generated by [Formal Laurent series](http://en.wikipedia.org/wiki/Laurent_series) over a field F in some term *t*.  These are power series, each going from index -*M* to infinity (you go negative to get inverses), and you let the valuation measure of a series to be its choce for -*M*, the first degree for which its coefficient is non-zero.  It doesn't have to be negative.  (So, only finitely many of the negative degree coefficients are zero, but you *can* have all of the positive coefficients non-zero.)  

(In fact, this is just a valued field, not an algebraically closed one, as we don't have roots of the term *t*.  To fix this it's enough to consider power series in each term *t*<sup>1/*n*</sup> for any *n*, so-called [Puiseux series](http://planetmath.org/encyclopedia/FractionalPowerSeries.html).)

The super-neat *aha* moment for me was when Deirdre drew the power series as a path in a tree.  The idea is that you list the exponents one at a time, and at each index, you have a branch for each element of the coefficient field.  (Lovely!  A talk with pictures!  It's a pity that I won't draw one for you here if for some weird reason you've read this far.)  That insight (simple enough that it is) was worth the price of admission alone for me.

Anyway, the first-order theory of AVCFs can be axiomatised with a predicate for the relation *v*(*x*) > *v*(*y*), and an axiom scheme for being algebraically closed.  Deirdre then explained the definable sets (which turn out to be boolean combinations of open and closed *balls* in the underlying topology), and then she got to work defining different notions of independence in these critters.  It turned out to be quite pretty, because in this case, even though the structure wasn't stable, it seemed to have 'enough' stability to get nice notions out.  I've got to the limit of my understanding, so if you've heroically read this far, I'll point you to [two](http://www.math.mcmaster.ca/%7Ehaskell/revisedACVF1.pdf) [preprints](http://www.math.mcmaster.ca/%7Ehaskell/ACVF-independence.pdf) on this material.

(I notice that I've come out sounding a *lot* like a mathematician here, but I'm not one.  You might wonder why a philosophical logician like me gets excited by talks like this outside my field.  It's simple.  I like understanding things, and proving things, and seeing new constructions and ways of representing things.  Being stretched out of my own zone of familiarity and experience really does help. That's what makes conferences like this neat.)

- - -

Later today, my second talk, and also a series of contributed papers.

- - -
*Much later*: OK, I've survived giving my talk.  (I even finished with time for questions and discussion in the timeslot, without being too rushed at the end.)  Discussion with people afterwards was *great*.  I've had good, constructive, feedback from [Melvin Fitting](http://comet.lehman.cuny.edu/fitting/), [Helmut Schwichtenberg](http://www.mathematik.uni-muenchen.de/~schwicht/), [Sara Negri](http://www.helsinki.fi/~negri/), [Neil Leslie](http://www.mcs.vuw.ac.nz/~neil/), [Giovanna Corsi](http://www.cs.unibo.it/~corsi/) and [Hannes Leitgeb](http://www.sbg.ac.at/phs/people/leitgeb_e.html), and someone else whose name I didn't catch but who asked a really perceptive question about the actual world in my proof circuits for S5.  (I must catch up with him to properly acknowledge him.)  Thanks, everyone!  There are obviously more people I'd like to talk to ([Richard](http://www.ucalgary.ca/~rzach/logblog/), where did you get to?) but time today seemed to run out.  I suppose I've got to use Monday wisely, as I'm not at the conference on Tuesday -- I've got to fly back out to rejoin my family.  

Anyway, I managed to get lots of ideas about how to improve the material, pointers to similar work done before, and possibilities for future investigation.  If you've got any thoughts about the material, feel free to [add them to the wiki page](http://consequently.org/edit/page/LC2005).

- - -

In the afternoon's contributed sessions, I got to see [Phiniki Stouppa](http://www.iam.unibe.ch/~til/staff/stouppa.html) present her material on [Calculus of Structures for S5](http://www.linearity.org/cas/phiniki/phiniki04sbm.pdf).  That was really nice to see: especially to see how she compared the CoS treatment of S5 with other treatments like Display Logic.  I didn't have time to explain in [my talk](http://consequently.org/edit/page/LC2005) how my circuits for S5 relates to display logic, but I obviously come down on the side of dispaly logic as making sense here, and I take the display calculus 'connectives' to ways (complicated as they may be) to talk about these circuits.  The other (hyper-)sequent system for S5 that comes out of the circuits is in one sense a 'reduction' of the display sequent calculus in which display equivalent sequents are identified.  (Anyway, I need to write all of that up before I say too much more.)

Alas, two of the other contributed talks I wanted to go to were cancelled because the speakers didn't show up.   Nonetheless, I got to hear a nice talk by Dimeter Vakarelov on modal correspondence theory (the topic of when it is that a modal formula *corresponds to* a first order condition on a modal frame).  He has a nice technique of getting more than the usual Sahlqvist formulas (a syntactically characterised class of formulas) by means of an algorithm instead of a simple description of the syntax.  The idea is that the class of formulas is decided by an algorithm (turn the handle, do this, if it succeeds you have a first order correspondent, and if you don't, well, you don't).  This paper was a generalisation of some earlier work by Vakarelov and Conradie and Goranko [available here](http://www.aiml.net/volumes/volume5/Goranko.ps), in which the class of formulas is *even bigger*.  It's the state of the art in correspondence theory.  (A nice short overview of correspondence theory is in [this paper](http://staff.science.uva.nl/~johan/SL-stanford.pdf) by [Johan van Benthem](http://staff.science.uva.nl/~johan) who *invented* correspondence theory in the 1970s.)

That's it from me.  Tomorrow is a break day (when I'll explore some of the city), and I'll resume posting conference information on Monday.