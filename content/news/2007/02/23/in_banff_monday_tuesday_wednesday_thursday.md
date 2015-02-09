---
author: Greg Restall
title: "In Banff: Monday, Tuesday, Wednesday, Thursday..."
date: 2007-02-23T04:50:12+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
aliases:
  - /news/2007/02/23/in_banff_monday_tuesday_wednesday_thursday/index.php
---

Liveblogging talks was a bit beyond me, but I've been keeping up with a few notes on the talks [here in Banff](http://consequently.org/news/2007/02/20/in_banff/).  They're not as extensive as my notes on [Branden](http://consequently.org/news/2007/02/20/in_banff_branden_fitelson_on_formal_epistemology/#commentbox) and [Delia](http://consequently.org/news/2007/02/20/in_banff_delia_graff_fara)'s talks, but they'll give you an idea of the fun we've been having here.  (After lunch today, there's a batch of five talks, including mine.  I'm not sure when I'll be able to write up comments on those, since before dinner I have to catch a shuttle to Calgary to catch a plane early tomorrow morning.)

So, after the jump, comments on the talks:

<!-- BREAK -->

### Monday afternoon

* [JC Beall](http://www.philosophy.uconn.edu/department/beall/beall.html) & [Michael Glanzberg](http://philosophy.ucdavis.edu/glanzberg/home.htm) *[Truth and Paradox](http://www.ucalgary.ca/~rzach/static/banff/beall-glanzberg.pdf)*

  Apparently, this was a very nice talk, but I wasn't there!  I misread the program, and thought it was at 3pm and not 2pm.  So, I missed out on it.  At least it gave JC a chance to make some jokes at my expense...  I'm looking at the [slides](http://www.ucalgary.ca/~rzach/static/banff/beall-glanzberg.pdf) to catch up, since I am [talking about](http://consequently.org/papers/bradwardine-banff-talk.pdf) truth and paradoxes too. 

* [Kai Wehmeier](http://members.cox.net/wehmeier/): *Identity is not a relation*

  Kai's elegant talk was on Wittgensteinian predicate logic: logic in which distinct variables must denote distinct objects, and in which we do not have an identity predicate.  It seems well suited to introductory logic classes -- or at least, better suited to some untutored judgements about how to say things -- since to say "there are two *F*s" you simply say (&#8707;*x*)(&#8707;*y*)(*Fx* &amp; *Fy*), and we don't require the usual (*x* &#8800; *y*) conjunct.  Kai looked at how one might extend this logic to include names.  This is a tricky thing to get right.  

 This is interesting material.  There are a number of different reasons one might want Wittgensteinian predicate logic: the metaphysical reason (identity just *isn't* a relation, as it doesn't *relate*), and the linguistic data.  Kai thinks the metaphysical reason is the most interesting one.  That's probably right.   I _suspect_ parallels with linguistic data will draw you further away from Wittgensteinian logic since it stays quite close to the syntax of classical predicate logic.  I think that the linguistic data is better modelled by including even more _dynamic_ features in the formal language.
 
* [Yiannis Moschovakis](http://www.math.ucla.edu/~ynm/): *Synonymy*

  Yiannis gave a clear talk looking at [his development](http://www.math.ucla.edu/~ynm/papers/lcmsfinal.pdf) of the &#955;-calculus with recursion clauses as model or account of _sense_, giving an account of synonymy.  The calculus is very elegant: it treats a *sense* as an *algorithm* for determining a reference (an idea that is common in everyday explanations of the relationship between sense and reference).  One sweet feature of the calculus is that it can distinguish between synonymy or non-synonymy of different paradoxical senses, which have no reference.  The liar algorithm (to check *p*, check *~p*, to check this, check *p*, to check this...) differs as an algorithm from the truth-teller algorithm (to check *p*, check *p*, to check this, check *p*, to check this...), even though neither have a reference.  

* [Byeong-Uk Yi](http://www.philosophy.utoronto.ca/people/~byi): *Is Logic axiomatisable?*

  Byeong-Uk talked about compactness and the logic of plurals.  There were lots of examples of arguments that show that if we take plural constructions to be within the scope of logic (and surely, why shouldn't they be?), then we'll have failures of compactness.  (Some arguments with infinitely many premies are not valid if we use any finite subset of those premises.)  The examples are good, though I don't know what to make of them.   I think it will help if we have an idea of what logic is _for_, or other ways to demarcate the logical from the non-logical, to see the pros-and-cons of choices concerning compactness and non-compactness.

### Monday evening

In the evening we had four wonderful short (15 minute!) talks by graduate students: Kate Manne (formerly of Melbourne, now at MIT), on supervaluations; [Kenny Easwaran](http://www.ocf.berkeley.edu/~easwaran/) (Berkeley) on probability and dominance reasoning; Eleni Kalyvianaki (Athens) developing Yainnis' calculus for meaning, and [Rafal Urbaniak](http://homepages.ucalgary.ca/~rurbania/) (Calgary) on Lesniewski's calculus.  All four were slick, elegant and interesting.

### Tuesday morning

Tuesday morning was [Modality Morning](http://www.ucalgary.ca/~rzach/logblog/2007/02/modality-morning.html).  First up:

* [Marcus Kracht](http://kracht.humnet.ucla.edu/marcus/index.html): *The certain past and possible future of modal logic*

 This was a survey talk: the first part, on propositional modal logic, and the second part, on modal *predicate* logic.  Modal predicate logic is *hard*, and it's full of philosophical questions.  In the survey, Marcus looked at different options for giving semantics for modal predicate logic. Marcus mentioned the work of Shehtman & Skvortsov  on modal "metaframes".  This was new to me.  These metaframes treat don't contain a domain of 'objects' -- the quantifier is treated as another kind of context shift -- between different horizontal 'slices' -- the individual frames. This was interesting.    [Aldo](http://kleene.ss.uci.edu/~aldo/) and I had the same thought: another connection between quantifiers and modalities is that quantifiers themselves are _families_ of modal operators -- one for each variable.  In a frame semantics we should have points of evaluation, and the quantifiers and modalities each shift us around in the frame.  Different conditions give us different interactions between quantifiers and modalities.  It'd be nice to get a very general picture of how this works, and when the different accessibility conditions 'factor out' into a domain of worlds and a domain of objects.  For more of Marcus's line on this material, see his paper "[Logically Possible Worlds and Counterpart Semantics for Modal Logic](http://www.linguistics.ucla.edu/people/Kracht/html/counterparts.pdf)" with [Oliver Kutz](http://www.cs.man.ac.uk/~okutz/).

* [Steve Awodey](http://www.andrew.cmu.edu/user/awodey/): *[Topological semantics for first-order modal logic](http://www.ucalgary.ca/~rzach/static/banff/awodey.pdf)* (joint with [Kohei Kishida](http://www.pitt.edu/~kok6/))

 This was a very different talk.  It was not general, but highly specific: Steve presented a very elegant topological (sheaf) semantics for quanitfied S4.  The logic is not complete for the obvious frame semantics.  However, the sheaf semantics is completely natural and completely elegant.  There are "worlds" (the points in the space underlying the sheaf) and objects (the elements in the fibres), and the objects can generally vary from "world" to "world."  The difference with standard frame semantics comes in the interpretation of the modality: in the natural models it is not intrepreted by an accessibility relation, but generally by a topological interior operator (as is well known in the interpretation of propositional S4 in topological spaces).  The heavy duty mathematics comes from the sheaf theory required to prove completeness.  The *result* is elegant.  I have not yet seen the *proof*.

 The philosophical work will come in the interpretation of these results. What does it *mean*?  The exciting technical work comes in the extensions.  For what other systems do techniques like these work? I'd love to find out.

### Tuesday afternoon

The first two talks in the afternoon were on *truth*.  

* [Volker Halbach](http://users.ox.ac.uk/~sfop0114/): *The Kripke-Feferman theory of truth*

  Volker explained how the internal and external logic of truth differ for the Kripke--Feferman (KF) theory of truth.  It's a *classical* theory, but what it says about *truth* is not classical.  We have *A* &#8744; ~*A* as a theorem, but we don't have T*A* &#8744; T~*A*.  One way to make them match up is to *weaken* the external logic to be *partial*.  Volker showed that doing this would weaken the theory considerably.  It wasn't a part of the paper, but this is an argument for his favoured theory of truth Friedman--Sheard (FS).

* [Jeff Ketland](http://homepages.ed.ac.uk/jketland/): *Truth and Reflection*

 This talk was on the structure of *deflationism*, the view that truth is a purely formal notion and not a substantial one. (Whatever that means -- Jeff noted that it's hard to make these much more than slogans.)  One way to make this clearer is to focus on some precise issues.  Should adding a truth predicate be *conservative* over a theory without the truth predicate (should it leave the ground-level theory *untouched* meaning that you can't prove anything new about the basic theory)?  Should it give you *reflection*?  That is, the addition of truth to a theory *Th* enable you to prove, relative to that theory, that every claim of that theory is *true*?  This seems plausible -- it's just a generalisation of the claim that if *A* (in the old theory) then T*A*.  Jeff rehearsed the argument why you can't have both conservativity and reflection in general.  Why not?  Take a theory of arithmetic.  If we have reflection, then we can prove that the original theory is consistent (at least if the truth predicate behaves sensibly).  He went on to explain why you want *reflection*.  

 I'm not sure what I think about this.  Reflection *seems* reasonable, given that we don't have a *fixed* favourite (axiomatisable, consistent) theory of arithmetic -- they're all incomplete -- would it be so bad to have a series of theories of arithmetic, of increasing strength, such that when we add a truth predicate to one of the theories in the series, you get another theory in the series.  Is this enough conservativity, and enough reflection?

* [Hannes Leitgeb](http://www.bris.ac.uk/philosophy/department/staff/hl.html): *[Applications of mathematics to philosophy: four case studies](http://www.ucalgary.ca/~rzach/static/banff/leitgeb.pdf)*

 Hannes Leitgeb has written [many](http://www.springerlink.com/content/h7813l8j5g324766/) [papers](http://www.springerlink.com/content/j85373r152218p0m/) [on](http://www.springerlink.com/content/g2731731994655g3/) [tr](http://www.springerlink.com/content/mg628jx481l41785/)[uth](http://projecteuclid.org/Dienst/UI/1.0/Summarize/euclid.ndjfl/1012429715).  But he didn't give talk about truth this time.  Instead we had very-elegant explanations of four (no, five! -- we had a free extra) different ways mathematics can be applied to philosophical problems. It was a great example of Hannes's work.   As Alasdair Urquhart said in conversation, it was very *Carnapian* in its optimism for how creative formal theorising can clarify philosophical issues.  It was *very* neat.  Go read the [slides](http://www.ucalgary.ca/~rzach/static/banff/leitgeb.pdf) to get some idea of the many intresting ideas.

Yet more to come...