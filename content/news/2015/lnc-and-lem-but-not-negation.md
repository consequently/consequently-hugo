+++
date = "2015-02-17T23:20:25+11:00"
title = "Do LNC and LEM suffice to define negation?"
image = "images/lnc-lem-for-p.png"

+++

What *is* negation? 

One answer you find in the literature is that negation is the operator that makes each instance of the *Law of the Excluded Middle* (<span class="caps">LEM</span>) and the *Law of Non-Contradiction* (<span class="caps">LNC</span>) turn out to be *true*. That is, every sentence of the form
\\[
p\lor \neg p
\qquad
\neg(p\land\neg p)
\\]
is true, no matter what sentence we use in the place of \\(p\\) (where \\(\neg\\) stands for negation, \\(\lor\\) for disjunction, and \\(\land\\) for conjunction).  

This is the *wrong* way to try to define negation. If you read on, I'll explain why.

<!--more-->

Before I explain why, though, I should explain that taking <span class="caps">LNC</span> and <span class="caps">LEM</span> as defining negation isn't an idiosyncratic view. If you read [Laurence Horn](http://ling.yale.edu/people/laurence-r-horn)'s [entry on Contradiction in the *Stanford Encyclopedia of Philosophy*](http://plato.stanford.edu/entries/contradiction) (and I recommend you do read it, it's a great discussion!), you'll see that he characterises negation in this way. [Graham Priest](http://grahampriest.net/)'s chapter "[Why Not? A Defence of a Dialethic Theory of Negation](http://grahampriest.net/?ddownload=773)" takes <span class="caps">LNC</span> and <span class="caps">LEM</span> in this form to be central to defining what it is for one thing to be contradictory to another, which is how Graham treats negation, in that paper. 

Here's why it's wrong to think that <span class="caps">LNC</span> and <span class="caps">LEM</span> define negation: It's easy to see (once you check) that <span class="caps">LNC</span> and <span class="caps">LEM</span> don't define *anything*. Altogether too many putative one-place connectives satisfy both <span class="caps">LNC</span> and <span class="caps">LEM</span>. Let's suppose that \\(\mathord\sim A\\) is just always interpreted as *true*, whatever \\(A\\) happens to be. Then it turns out (if disjunction is interpreted in the usual way) that \\(p\lor\mathord\sim p\\) is true (since its second disjunct is true) and so is \\(\mathord\sim(p\land\mathord\sim p)\\) since it has the form \\(\mathord\sim A\\). So, given this deviant "negations are always true" interpretation, <span class="caps">LNC</span> and <span class="caps">LEM</span> are always satisfied.

But this isn't the only way one could interpret a sentential operator so as to satisfy <span class="caps">LNC</span> and <span class="caps">LEM</span>. For an even more deviant reading, let's interpret \\(\mathord\sim A\\) as \\(\neg A\lor q\\) for any \\(A\\) and for some sentence \\(q\\). Then <span class="caps">LNC</span> and <span class="caps">LEM</span> for \\(\sim\\)-negation
\\[
p\lor \mathord\sim p
\qquad
\mathord\sim(p\land\mathord\sim p)
\\]
that is, 
\\[
p\lor (\neg p\lor q)
\qquad
\neg(p\land(\neg p \lor q))\lor q
\\]
are themselves *logically true* (I leave the verification of this is an exercise for you). But \\(\mathord\sim A\\)&mdash;that is, \\(\neg A\lor q\\)&mdash;really isn't the negation of \\(A\\). (If we choose \\(q\\) to be a *tautology* then \\(\mathord\sim A\\) is simply equivalent to \\(\top\\) which is the interpretation we saw before.)

In other words, if all we have to go on for interpreting "\\(\sim\\)" is that it satisfies  <span class="caps">LNC</span> and <span class="caps">LEM</span>, then there many different ways it can be interpreted, including taking it to be highly contingent, where the semantic value of \\(\mathord\sim A\\) depends on things other than the semantic value of \\(A\\) alone.

(<span class="caps">EXCURSUS</span>: If you're prepared to go further afield, notice that in reflexive classical modal logics, we have both \\(p\lor\Diamond\neg p\\) and \\(\Diamond\neg(p\land\Diamond\neg p)\\) so satisfying <span class="caps">LNC</span> and <span class="caps">LEM</span> isn't enough to tell us that we don't mean "possibly not" by the so-called "negation". And instead of \\(\Diamond\neg\\) you could use \\(\Diamond\Diamond\neg\\) or \\(\Diamond\Diamond\Diamond\neg\\)&hellip; etc. Or to make the same point in the context of first-order predicate logic, choose \\(x\\) to be a variable at random, and read \\(\mathord\sim A\\) as \\(\exists x\neg A\\), whether \\(x\\) is free in the formula \\(A\\) *or not*. Notice that this very strange variable-binding "negation" still satisfies <span class="caps">LNC</span> and <span class="caps">LEM</span>, but it is in no way *negation*.)

So, if <span class="caps">LNC</span> and <span class="caps">LEM</span> in the traditional form don't do enough by themselves to pin down negation, what can we say? Something I've argued *[elsewhere](/writing/lnclem/)* is that the right way to understand <span class="caps">LNC</span> and <span class="caps">LEM</span> is more like this:
\\[
\vdash p\lor \neg p
\qquad
p\land\neg p\vdash
\\]
*This* <span class="caps">LEM</span> (\\(\vdash p\lor \neg p\\)) tells us that \\(p\lor\neg p\\) is *undeniable* (to *deny* it is [out of bounds](/writing/multipleconclusions)), and this <span class="caps">LNC</span> (\\(p\land\neg p\vdash\\)) tells us that \\(p\land\neg p\\) is *unassertable* (to *assert* it is [out of bounds](/writing/multipleconclusions)). This pair of rules does a *much* better job of pinning down the behaviour of negation. 

Just how much better? Well, given a little more logic (the traditional sequent calculus rules for \\(\land\\) and \\(\lor\\), and the *Cut* rule), then if \\(\neg\\) and \\(\sim\\) both satisfy <span class="caps">LNC</span> and <span class="caps">LEM</span> in this form, then both negations are logically equivalent. Here's a demonstration that \\(\mathord\sim A\vdash\neg A\\) (you can generalise this to a proof of equivalence, though the dual proof of \\(\neg A\vdash\mathord\sim A\\)). Since \\(A\land\mathord\sim A\vdash\\), by the usual behaviour of \\(\land\\), we have \\(A,\mathord\sim A\vdash\\). Since \\(\vdash A\lor\neg A\\), by the usual behaviour of \\(\lor\\), we have \\(\vdash A,\neg A\\). From \\(\vdash A,\neg A\\) and \\(A,\mathord\sim A\vdash\\), by the *Cut* rule (cutting on \\(A\\)) we have \\(\mathord\sim A\vdash\neg A\\). 

So, if you are tempted by the idea that <span class="caps">LNC</span> and <span class="caps">LEM</span> together *define* negation, you should be careful to specify <span class="caps">LNC</span> as a *denial* or *rejection* rule (\\(p\land\neg p\vdash\\), which says that \\(p\land\neg p\\) is to be denied, or to be rejected), rather than \\(\neg(p\land \neg p)\\) which isn't strong enough to say what you want it to say&mdash;the *two* instances of negation gives you altogether too much wiggle room.

None of this is an argument that <span class="caps">LNC</span> and <span class="caps">LEM</span> actually *hold*. For that, you'll need to look elsewhere.

