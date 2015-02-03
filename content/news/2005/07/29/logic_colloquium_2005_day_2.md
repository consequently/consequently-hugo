---
author: Greg Restall
title: "Logic Colloquium 2005 Day 2"
date: 2005-07-29T16:18:47+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

*9:25*: There's wireless access in the large lecture theatre, so I'll take notes and upload comments occassionally through the day.  At the moment, [Phokion Kolaitis](http://www.almaden.ibm.com/cs/people/kolaitis/) is [giving his first short course lecture](/phonecam/Phokion%20Kolaitis%20giving%20his%20CSP%20Course,%20Logic%20Colloquium,%20July%2029,%202005.jpg) on constraint satisfaction problems.  So far he's talking about examples of CSPs (graph colourings and 3-SAT are his first examples) and he's just looking now at homomorphisms of relational structures, and the [Feder](http://theory.stanford.edu/~tomas/) &amp; [Vardi](http://www.cs.rice.edu/~vardi/) claim ([1993](http://theory.stanford.edu/~tomas/constraint.ps)) that CSPs may be idenified with (or may be represented by) the problem of whether or not there's a homomorphism between two relational structures.  (This bit is new to me, so I'll listen closely.)

- - -

*11:20*: [Sergey Goncharov](http://mmfd.nsu.ru/mmf/persons/gonch.htm) giving an invited lecture on 'Isomorphisms and Definable Relations on Computable Models'.  It's always struck me as *weird* that infinite ordinals have something to do with the characterisation of computable structures (where being computable is an essentially finitary notion in one sense -- any computation process can be finitely described), but then, ordinal notations are finite too.  Sergey's talk is about constucting interesting structures (boolean algebras, rings etc.) that are computable, but have the Scott Rank of &omega;<sub>1</sub><sup>CK</sup> (that's big).  This generalises some earlier results of Makkai (who showed that there were arithmetical structures of that rank) and Knight and Sheard (who showed that there were *computable* structures with that high a rank).  Goncharov's results (proved by coding structures inside other structures) show how to construct familiar structures that are this complex.  A related recent preprint is [here](http://www.nd.edu/~wcalvert/preprints/moreo1ck.pdf).

- - -

*13:13*: [Itay Ben-Yaacov](http://www.math.wisc.edu/~pezz/) is on now, with the first of two classes on model theory in positive and continuous logics.  (His is the first presentation using *[beamer](http://latex-beamer.sourceforge.net/)* -- the slides look very nice indeed.  I can't find the slides online, but an introductory paper on the same topic was recently [published in the *Bulletin of Symbolic Logic*](http://www.math.ucla.edu/~asl/bsl/1101/1101-002.ps), and so can be downloaded. (Thanks, *BSL*!)

Itaj's work is interesting, because seeing odd logics motivated by mathematical considerations.  In this case, he's interested in *positive* logics (he likes to do without Boolean negation).  The idea is that in certain known model constructions (adding so-called 'imaginary' elements to a model), the entire first-order theory of the original model is true in the extension.  This *doesn't* work with the addition of 'hyperimaginaries'. (While imaginaries are  classes of tuples (modulo a definable equivalence relation on the original model -- think of imaginary numbers as equivalence classes of pairs of reals), hyperimaginaries are definable classes of *infinite* tuples.)  Looking at what is preserved in model extension with hyperimaginaries, it turns out that you want to avoid Boolean negation.  

These seem to be much more finely controlled results than the kinds of preservation under completely *arbitrary* extension discussed by [Gill Russell](http://logicandlanguage.net) and me [here](http://consequently.org/writing/barriers/).  There must be interesting results involved in classifying what kinds of statements are preserved in what kinds of expansions of models.

- - -

*15:15*: I'm [on](http://consequently.org/edit/page/LC2005) in 15 minutes.  Wish me luck!

- - -

*Much, much later*: OK, the live-blogging has ceased with me giving my talk, talking to people afterwards, and then going to the contributed talks in the later afternoon in the rooms where there's no WiFi.  Presumably the heavy day, early mornings, late nights and being drained after giving my talk partially explain why I wasn't particularly good at concentrating during the all-to-short contributed talks in the afternoon.  There were some nice highlights however.  I caught up with some interesting material on fixpoint quantifiers and bisimulation quantifiers in modal logics (in a talk by Giacomo Lenzi), and in Dumitru Busneag's talk, I was introduced to some nice algebra: the notion of a *normal* filter in a lattice ordered non-commutative doubly residuated algebra.  It's a filter of which left implication is a member iff the corresponding right implication is a member.  Then for any normal filter *F* and an element *x* * *F* = *F* * *x* (*x* * *F* is the set of all *x* * *y* where *y* is in *F*, and *F* * *x* is defined similarly) just like with normal subgroups.  That's kind-of nice.  I'm not sure if these filters will play quite as *much* of an important role in these algebras as normal subgroups pay in group theory, but it's pleasing to see the parallel.

Now, I need sleep.  I won't be *quite* as keen tomorrow in the long day sessions, as I plan to be conscious in more of the contributed sessions in the later afteroon.