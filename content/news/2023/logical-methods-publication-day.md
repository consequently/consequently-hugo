+++
date = "2023-01-03T06:55:00+00:00"
title = "Logical Methods Publication Day"
description = "Celebrating the release of Shawn's and my book, Logical Methods."
draft = false
+++

Today [MIT Press](https://mitpress.com) releases [our book, *Logical Methods*](/writing/logical_methods/) into the big wide world. It was an absolute delight to work on this long-term project with my co-author and friend, [Shawn Standefer](http://www.standefer.net).

<figure>
	<img src="/images/a-stack-of-copies-of-logical-methods.jpeg" alt="A Stack of Copies of the book Logical Methods, written by Greg Restall and Shawn Standefer, MIT Press, 2023" width="80%">
	<figcaption>A Stack of Copies of <em>Logical Methods</em></figcaption>
</figure>


<!--more-->

I’m particularly pleased about two features of the book and its pedagogy, which are hard won, out of years of teaching logic, all the way from [elementary](/class/2020/unib10002) [introductions](/class/2022/py1012) to much more [advanced](/class/2020/phil30043) [classes](/class/2022/py4634/). *Logical Methods* is the result of our work teaching the [*second-year* logic class](/class/2020/phil20030/) at Melbourne. For that class, around half had some prior exposure to logic, and the others were interested and keen to hit the ground running. So, we needed to start from the beginning, with no assumptions about what students bring to the class except for curiosity, and a bit of experience at university, and some general introductory background in philosophy.

1. Each chapter has a summary of the key concepts, and a set of exercises students can use (a) to practice working with those concepts; (b) check that they have mastered the material, and finally (c) explore some of the interesting philosophical issues that arise, and…

2. We structured the material in a way that gives equal emphasis to _proofs_ and to _models_ as key ways to _introduce_, _analyse_ and _apply_ logical notions.

In <span class="caps">Part I</span>, we introduce propositional logic by way of natural deduction (Gentzen/Prawitz style) and only after getting that sorted, do we introduce truth tables as models. Along the way, we explain how _normal_ natural deduction proofs (those not containing any detours in which some concept is introduced only to be immediately eliminated) are in an important sense _analytic_. Then we show why it's the case that if you have a proof, you can transform it into a normal proof &ndash; in the case of our system of intuitionistic logic, at least. We've found that students tend to look for _normal_ proofs when constructing proofs, so explaining why it is that this is a good strategy (and when it _isn't_) helps explain what is going on here.

Then, in <span class="caps">Part II</span>, with truth tables under our belts, we look at modal concepts, starting with the modal logic S5, since this is a natural extra step to take. Then from there we explore S4 and multimodal S5 (as a gesture toward introducing accessibility relations), but then spend more time on actuality, & double-indexed frames for two-dimensional modal logic. Our audience is primarily _philosophers_, it makes sense to spend more time here than in giving a general theory of accessibility relations and the distinctive features of S4.3 when compared to S4.2, or the delicate details of correspondence theory. Instead, we give students a framework for distinguishing the concepts of _logical necessity_, _analyticity_, _a priori knowability_ and _counterfactual_ or “_metaphysical_” _necessity_, since philosophy students are all using these concepts (at least implicitly), and the tools of two-dimensional semantics are very useful (whether you end up _endorsing_ it or not) in seeing one way these notions might come apart.

Once we've understood two-dimensional modal logic, we turn to the question of natural deduction for modal logic, which introduces the idea of a _side condition_ in a natural deduction proof. (How do you prove that *A* is necessary? Prove *A*, but only from *modal* assumptions.)

This might ring a bell for some folks, because we do the same thing when we reason about universal claims. So, we have reached <span class="caps">Part III</span>, on _Predicate Logic_, in which we start with natural deduction for first-order predicate logic, and when we've done that, it's a quick jump to a systematic treatment of models of the quantifiers, which are a simple generalisation of the models for S5 we’ve seen. The proofs and the models are a little more complicated than in <span class="caps">Part II</span>, since we now have the extra complexity of variable binding and substitution, but given that students have seen proofs with side conditions and models in which formulas are evaluated at different “worlds” (or even, pairs of “worlds”), the idea of evaluating open formulas with respect to different assignments of values to variables -- for example: _x is taller than y_ is true relative to assignment (_x_: Gandalf; _y_: Frodo), but not with respect to assignment (_x_: Frodo; _y_: Gandalf) --  comes as a simple generalisation of what has gone before, and the students are _thoroughly_ ready for an account of models of first-order predicate logic where we do not need to assume that every object in the domain of a model has a name in the language under interpretation.

Finally, a little coda looks at the fun issues ahead if you want to combine modality and the quantifiers, and the different ways to go deeper in logic.

Along the way, the conceptual complexity builds step by step, and students don’t get taught &ndash; even implicitly &ndash; that proofs (or models) are merely derivative notions, having nothing to do with how logical concepts have been defined, understood or applied. The overarching aim is to introduce the tools of proofs and models.

(If you'd like to read more about how [Shawn](http://www.standefer.net) and I developed this material, and what we have learned from teaching it, [this news entry from 2019](/news/2019/teaching-logical-methods/) goes into more of the details.)

If *you* [pick up a copy of _Logical Methods_](https://mitpress.mit.edu/9780262544849/), and use it in your own learning or your own teaching, [Shawn](http://www.standefer.net) and I would love to hear from you how it goes.