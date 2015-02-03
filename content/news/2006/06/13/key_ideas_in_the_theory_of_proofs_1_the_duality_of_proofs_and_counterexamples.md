---
author: Greg Restall
title: "Key Ideas in the theory of proofs #1: The Duality of Proofs and Counterexamples"
date: 2006-06-13T11:05:52+11:00

filter:
  - erb
  - markdown
  - rubypants
dirty: true
---

Now that my undergraduate teaching is done for the semester, I can devote more time to research.  I'm going to use this place to post some material from my proof theory project.  My goal is to present some key ideas in an accessible way.

Today's idea is the duality between *proofs* and *counterexamples*.

*Proofs*: You can think of a valid argument as underwritten by a *proof*.  A proof leads from the premises to the conclusions, and shows how the conclusions follow from the premises.  An invalid argument from premises *P* to conclusions *C* is one for which there is no proof leading from *P* to *C*.  

Different theories of proofs will characterise these in different ways (natural deduction, Hilbert-style axiom systems, Gentzen-style sequent systems, tableaux, etc.) but at heart, a proof is a formal structure that bears witness to a valid argument.

*Counterexamples*: You can think of an invalid argument as witnessed by a *counterexample*.  A counterexample is a way of making the premises true and the conclusions untrue, and it shows how the conclusions say something *more* than what is present in the premises.  A valid argument from premises *P* to conclusions *C* is one for which there is no counterexample rendering *P* true and *C* not.

Different theories of counterexamples (call them *models* or *interpretations* if you like) characterise them in different ways: truth tables, many-valued algebras, models with domains of quantification or "worlds" models for intensional logics, but at its heart, a counterexample bears witness to an invalid argument.

Notice the duality: Proofs witness *validity* and counterexamples witness *invalidity*.  A proof gives you a *validity* fact.  Only an *absence* of proofs tells you about invalidity.   Conversely, a counterexample gives you an *invalidity* fact.  Only an *absence* of counterexamples tells you about validity.  These two different ways of characterising logical consequence have very very different properties.

Many key results in 20th Century logic, such as G&ouml;del's completeness theorem, pair together these two notions.  A *soundness* result (for a proof system, given some set of counterexamples) tells you that a proof system provides a proof from *P* to *C* *only when* the argument from *P* to *C* has no counterexample.  A *completeness* proof (for a proof system, given some set of counterexamples) tells us that a proof system provides a proof from *P* to *C* *whenever* the argument from *P* to *C* has no counterexample.

If you have a well-matched pair of a system of proofs and a system of counterexamples -- for a notion of logical consequence -- then you have two different ways to look at the one relation between premises and conclusions.  These different tools are useful for different purposes.  If you use just one of them, you might be selling yourself short.  

[*Aside*: This was my critical point in my essay "[One Way to Face Facts](http://consequently.org/writing/facts/)": I found Stephen Neale's excellent little book on slingshot arguments *[Facing Facts](http://www.amazon.com/exec/obidos/tg/detail/-/0199247153/consequentlyorg?v=glance)*) helpful, but one-sided.  In the book, we find detailed analysis of different slingshot *proofs*.  Neale charts which principles combine together to produce unwanted results.  What makes the work one-sided is that he never walks on the other side of the street to look at *counterexamples*.  (He never looks at models to show that particular combinations of premises *cannot* produce the unwarranted conclusions on their own, as you can easily do if you produce counterexamples.)  It is as if he is charting a boundary between territories by making occasional forays from *this* side of the boundary, never realising that you can jump the fence to see it from the *other* side as well. *End of the aside*.]

Now, if we have two different sorts of tools for characterising valid argument, a philosopher is constitutionally bound to ask a question: Is one of these tools more *fundamental* than the other?  Many would say *yes*.  My colleague [Graham Priest](http://www.st-andrews.ac.uk/academic/philosophy/gp.html) takes counterexamples to be primary, and proofs to only be a means for enumerating the notion of logical consequence given by means of the counterexamples. (See, for example, his paper "Validity" in Varzi's volume *[The Nature of Logic](http://csli-publications.stanford.edu/site/157586178X.html)*.)  Others, like Dummett's semantic anti-realist or Brandom's inferentialist, would seem to take proof as primary, as you explain the meanings of a concept by articulating its role in *proof*.

But do we have to choose?  Why think that one way of characterising logical consequence is any "deeper" than the other? To put things in an more cryptic manner: why think that there is just one direction of "depth" or "priority"?   

What do you think?