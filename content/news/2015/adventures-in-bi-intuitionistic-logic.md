+++
date = "2015-05-30T4:04:25+11:00"
title = "Adventures in Bi-Intuitionistic Logic"

+++

In yesterday's [Logic Seminar](http://philevents.org/event/show/17572), [Tomasz](http://www.latrobe.edu.au/psy/about/staff/profile?uname=TKowalski) [Kowalski](http://tomasz-kowalski.ltumathstats.com) introduced some lovely results about analytic cut and interpolation in sequent systems for bi-intuitionistic logic. After the seminar, Lloyd Humberstone, Dave Ripley, Tomasz and I got talking about various features of bi-intuitionistic logic, some of which should be more well known than they are &hellip; so I may as well post them here. Read on, if you're into non-classical logic, algebras and frames.

<!--more-->

The conditional in intuitionistic logic satisfies the lovely residuation principle:
\\[
p\land q \le r
\quad
\Leftrightarrow
\quad
p\land q\supset r
\\]
where \\(\le\\) is entailment&mdash;the underlying lattice ordering on propositions&ndash;and \\(\land\\) is conjunction.  Bi-intuitionistic logic is found by adding to the vocabulary a  two-place connective (*dual* to the conditional) of *subtraction*, satisfying the dual residuation principle:
\\[
p\le q\lor r
\quad
\Leftrightarrow
\quad
p-q \le r
\\]
This has lots of lovely (and strange) properties. If \\(p\supset 0\\) defines the strong intuitionist negation (which is a contrary but not sub-contrary forming operator) then \\(1-p\\) forms a weak dual negation (which is a sub-contrary but not contrary forming operator). It is a conservative addition to the *propositional* inuitionist logic. (All complete and completely distributive lattices can be equipped with a subtraction operator, defined by setting \\(p-q\\) to be \\(\bigwedge\\{r:p\le q\lor r\\}\\), and all Heyting lattices can be embedded into complete and completly distributive Heyting lattices.) It is *not* a conservative extension of first-order intuitionist logic. (With subtraction, you can show that \\(\forall x(Fx\lor Gx)\\) entails \\(\forall x Fx\lor \exists xGx\\), which is underivable in intuitionist logic.)

The result I thought should be more well known is that the dual intuitionist substraction can be *defined* if you add a de Morgan negation to intiutionst logic, and this addition is also conservative in the propositional case. A de Morgan negation is an operator \\(\sim\\) such that \\({\mathord\sim}{\mathord\sim}p=p\\) and \\(p\le q\\) only if \\({\mathord\sim}q\le {\mathord\sim}p\\). It's called a &ldquo;de Morgan negation&rdquo; because in a *lattice*, these conditions mean that all four de Morgan laws hold connecting \\({\mathord\sim}\\), \\(\land\\) and \\(\lor\\). 

Lemma 9.35 in my substructural logic book (*[An Introduction to Substructural Logics](http://consequently.org/writing/isl)*) is a construction that embeds a lattice into one including a de Morgan negation. (This construction&mdash;like many results in this field&mdash;uses techniques due to [Bob Meyer](http://projecteuclid.org/euclid.ndjfl/1093890896).) The construction is straightforward. It doesn't *quite* work in the Heyting lattice case, but it's very close to working. That construction takes the original lattice, adds a top element (if not already present) and adds an inverted copy of the structure below the original structure. This construction doesn't preserve the bottom element (that's no good, as we can express this in intuitionistic logic, with \\(p\land\neg p\\)), and it's fiddly to see how you might do that using algebraic surgery. Perhaps you can, but I worry about getting the cases correct.

However, it suggest a way to do it relatively straightforwardly, using Kripke frames. 

It's well known that in frame semantics, a de Morgan negation can be modelled using a [Routley star](http://consequently.org/writing/negrl/) operation. A unary function on points in the frame such that \\(x^{&ast;&ast;}=x\\) and if \\(x\sqsubseteq y\\) then \\(y^{&ast;}\sqsubseteq x^{&ast;}\\). Then we define
\\[
x\Vdash {\mathord\sim}A
\quad
\Leftrightarrow
x^{&ast;}\not\Vdash A
\\]
and the result is a de Morgan negation. That's fair enough. But there's no way, in general, to take a Kripke frame for intuitionistic logic and slap a de Morgan negation onto it. Take the three-point tree on the set \\(\\{a,b,c\\}\\) where \\(a\sqsubset b\\) and \\(a\sqsubset c\\). There aren't enough candidates for \\(b^{&ast;}\\) and \\(c^{&ast;}\\). They need to be *different* and they need to be *earlier* than \\(a^{&ast;}\\) in the ordering, but there's not enough objects in the frame to satisfy this. To do this, we need three objects \\(\\{e,f,g\\}\\)&mdash;somewhere&ndash;where \\(f\sqsubset e\\) and \\(g\sqsubset e\\), so we can let \\(a^{&ast;}=e\\), \\(b^{&ast;}=f\\) and  \\(c^{&ast;}=g\\). 

One way to do this to *any* Kripke model \\(\langle P,\sqsubseteq,\vDash\rangle\\) is to add a new set \\(P^{&ast;}\\)---an extra copy of \\(P\\), so we operate on the disjoint union \\(P\cup P^{&ast;}\\).  We define the operation \\({&ast;}\\) in the obvious way: if \\(x\\) is in \\(P\\), then its star is the copy \\(x^{&ast;}\\) in \\(P^{&ast;}\\). Define the ordering by allowing \\(x\sqsubseteq y^{&ast;}\\) but not \\(y^{&ast;} \sqsubseteq x\\) for each \\(x,y\\) in \\(P\\) (so each of the \\(P^{&ast;}\\) points come *after* the \\(P\\) points) and setting \\(x^{&ast;} \sqsubseteq y^{&ast;}\\) iff \\(y \sqsubseteq x\\). 

(In other words, we take a copy of our Kripke frame, *invert* it, and have all of those points come *after* each of the original points.)

The operation &ast; is a [Routley star](http://consequently.org/writing/negrl/) on the structure, and it's still a poset, so we have a Kripke frame. We can use &ast; on the frame to define a de Morgan negation.

Given the original model \\(\langle P,\sqsubseteq,\Vdash\rangle\\), extend the valuation to the new domain \\(P \cup P^{&ast;}\\) as required by heredity on frames. Any atom true at some point in \\(P\\) is true at all points in \\(P^{&ast;}\\), but any atom not true anywhere in \\(P\\) can remain not true everywhere in \\(P^{&ast;}\\). An easy induction shows that if formula is true at a point in \\(P\\) in the original model iff it’s true at that point in the extended model.

This construction shows how to embed the new propositions between the bottom element and anything else in the original Heyting algebra.

A *dual* construction could add the elements in the Kripke frame *before* the original elements (and then everything gets embedded just below the top element), or they could be *[incomparable](https://www.theincomparable.com)* with the objects in original frame.

So there are at least 3 different ways to take a Kripke model for intuitionistic logic and to embed it into a structure supporting a de Morgan negation, and thus allowing the de Morgan laws to interdefine the intuitionistic conditional and dual intuitionistic subtraction. This shows that intuitionistic propositional logic is conservatively extended by a de Morgan negation, and this de Morgan negation can be used to define the weird binary connective of subtraction&mdash;all without doing damage to the underlying propositional logic.

Thanks, Tomasz, for a fun [logic seminar](http://philevents.org/event/show/17572) yesterday, and for reminding me of these results. After spending over seven years concentrating on proof theory, it feels comfortable to slip back into working with algebras and frames.