+++
date = "2015-10-24T15:27:36+11:00"
title = "Cian Dorr on Defining Quantifiers (Verbal Disputes Workshop Report #2)"
image = "images/mvd-cian.JPG"
description = "Cian Dorr gave a great talk, \"Pinning Down the Meanings of Quantifiers\", at the Verbal Disputes Conference in Oxford in May 2015. This post is a long delayed reflection on that talk."
largeimage = true

+++
There's something very attractive in the idea that meanings of logical concepts—such as conjunction, negation, the quantifiers—can be specified by the role they play in proofs. If I learn the rules for conjunction:
\\(
\def\sem#1{[\\![#1]\\!]}
\\)
\\[
\frac{A\land B}{A}
\quad
\frac{A\land B}{B}
\qquad
\frac{A\quad B}{A\land B}
\\]
then I've “pinned down” what there is to know about the conjunction connective “\\(\land\\)”. The quantifiers are an interesting case. The rules for quantifiers, like \\((\exists x)\\) prove to be more complex. 
\\[
\frac{A(t)}{(\exists x)A(x)}
\qquad
\frac{
{{{}\atop{\large }}\atop{\large (\exists x)A(x)}}
\quad
{{{\LARGE A(n)}\atop{\large \vdots}}\atop{\large C}}
}
{C}
\\]
(where in the second rule, the name \\(n\\) is not present in \\(C\\) or in the other premises of the subproof from \\(A(n)\\) to \\(C\\)). In these rules, we unwrap the quantified expression \\((\exists x)A(x)\\) into a simpler expression which is an _instance_ of the schema \\(A(x)\\). In the introduction rule, \\(A(t)\\) is an instance formed by substituting any singular term \\(t\\) for \\(x\\), while in the elimination rule, it must be a _name_ (or an eigenvariable). The details can be worked out in many different ways, but one feature remains the same: the semantics of quantifiers is tied closely to the semantics of singular terms. Can we avoid this connection? Is there a way to define the semantics of quantifiers in by way of their rules in proof which do not tie them so closely to the semantics of singular terms. 

This was one of the goals of [Cian Dorr](https://files.nyu.edu/cd50/public/)’s talk “Pinning Down the Meanings of Quantifiers” at the [Verbal Disputes](https://verbaldisputesoxford.wordpress.com) conference, and is a central theme in his paper “[Quantifier Variance and the Collapse Theorems](http://philpapers.org/rec/DORQVA)”. There’s a lot in the paper (it's 67 pages long!), and I won’t engage with most of it, but I’d like to discuss this central theme of the paper here.

<figure>
	<img src="http://consequently.org/images/mvd-cian.JPG" alt="Cian Dorr">
	<figcaption>Cian Dorr</figcaption>
</figure>

<!--more-->


The crucial insight is that we can think of the quantifier proof rules not as relating propositions or sentences or judgements, but as relating _concepts_. The step from \\(Fx\\) to \\((\exists x)Fx\\) need not lead from a particular judgement that a given thing \\(x\\) is \\(F\\), but rather, from the concept _being \\(F\\)_. The step from ‘\\(x\\) is green’ to ‘\\(x\\) is coloured’ corresponds to a relationship between the concepts of being green and being coloured. The relationship of entailment between propositions is filled out to include entailment _between concepts_, and between concepts of higher rarities—for binary, ternary, relations, etc., and between concepts and propositions, which can be understood as zero-place concepts. The crucial point is that this relationship of concept entailment is not to be reduced to propositional entailment. We are not to define ‘\\(c\\) entails \\(d\\)’ as ‘Necessarily, everything that falls under \\(c\\) falls under \\(d\\)’ because this would be to put the cart before the horse. Instead of defining concept entailment in terms of quantifiers and propositional entailment, the goal is to define quantifiers in terms of concept entailment.

How are we to understand concept entailment? Cian gives an interesting discussion of the connection between concept entailment and concept _identity_ (offering analyses like this: \\(c\\) entails \\(d\\) if and only if to fall under \\(c\\) is to fall under \\(c\\) and to fall under \\(d\\)). The details of any such definition need not concern us now, suffice to note that all such analyses offered in the paper “Quantifier Variance and the Collapse Theorems” feature conjunction and some kind of concept identity. 

After some useful and clear thinking on how one is to identify and distinguish higher arity concepts---explaining the sense in which semantic values of predicates is related to the variables used in the presentation of those predicates:  \\({}^{\langle x,y\rangle}\sem{x\textrm{ loves }y} = {}^{\langle y,x\rangle}\sem{y\textrm{ loves }x}\\), which is the concept _loving_, while  \\({}^{\langle x,y\rangle}\sem{y\textrm{ loves }x}\\) is the concept _being loved by_, and specifying a sensible constraint on concept entailment, that it is indifferent to the choice of sequence of variables used to present the entailment---we get to the point where we can specify a reading of the quantifier rules free of singular terms. 

\\(\exists v\\) is an existential quantifier if and only if (for all sequences \\(\sigma\\) of variables including all free variables in \\(A\\) and \\(B\\), and where the variable \\(v\\) is not free in \\(B\\)) (1) \\({}^\sigma\sem{A}\\) entails \\({}^\sigma\sem{(\exists v)A}\\) (that's the introduction rule), and (2) if \\({}^\sigma\sem{A}\\) entails \\({}^\sigma\sem{B}\\) then \\({}^\sigma\sem{A}\\) entails \\({}^\sigma\sem{(\exists v)B}\\) (that's the elimination rule).

This is beautiful and elegant. The logic of concept identity and entailment determines the logic of the quantifiers. I say the quantifier<em><b>s</b></em> because what holds for the existential quantifier holds for the universal quantifier, too. In fact, Cian points out that the quantifier rules are exceedingly natural as the left and right adjoints of the _concept expansion_ function. (What is concept expansion? The expansion of a concept is the variant which adds a redundant argument place. The expansion of the concept _being red_ (or \\({}^{\langle x\rangle}\sem{x\textrm{ is red}}\\)) is the two-place concept \\({}^{\langle x,y\rangle}\sem{x\textrm{ is red}}\\) which says of two things that the first is red.) Adjoints (or Galois connections, residuals, display equivalences, wrapping and unwrapping) are wonderful things.

This is beautiful, but the _logic_ is not surprising or news to those who are familiar with proof theory or categories and logic. The central concepts are present, for example, in Lambek and Scott’s _[Introduction to Higher Order Categorical Logic](http://www.openisbn.com/isbn/0521356539/)_, though Cian explains them differently. What is new here is the philosophical setting and the applications. In the talk in Oxford, Cian explained the consequences of this view of the quantifiers for discussions of _necessitism_ and quantifier variance. 

Consider the concept “not being identical to anything” understood as 
\\({}^{\langle x\rangle}\sem{\neg (\exists y)x=y}\\) (there is no \\(y\\) to which \\(x\\) are identical). If objects exist contingently, it seems that the application of this concept to some contingently existing object (say, _me_) is contingently false. On this picture, I am identical to something, but had I not existed, I wouldn't have been identical to something. On the other hand, even for the contingentist, the proposition \\(\sem{(\exists x)\neg (\exists y)x=y}\\) is _necessarily_ false. It's impossible that there be an object which is not identical to any object, because---of necessity---all objects are self-identical. If the contingentist has granted both of those points, it’s relatively straightforward to show that the contingentist’s existential quantifier is _not_ the adjoint of expansion. In particular, it does not satisfy the elimination rule, because \\({}^{\langle x\rangle}\sem{\neg (\exists y)x=y}\\) does not entail \\(\sem{(\exists x)\neg (\exists y)x=y}\\), since nothing contingently false  entails anything necessarily false.

So far, so good, and Cian uses these results to put pressure on the contingentist and the quantifier variantist, and to lend support for necessitism. (I want to be careful not to misconstrue Cian's position—at the workshop, at least, he was not _committed_ to necessitism. He was exploring these arguments and seeing where they lead.) I think that the situation here is complex, and interesting, and worth exploring. In particular, I think that there's no direct route from concept entailment (and the definition of the quantifiers as adjoints) to necessitism. 

The key issue centres around the behaviour of concept entailment, and its definition of concept identity. For the analysis to work, concept identity is not to be identified with identity of _extension_. Even if all every object that happens to be a renate also happens to be a chordate, and _vice versa_, it doesn't follow that _being a renate_ is the same concept as _being a chordate_. If we collapse concept identity into identity of extension, there is no pressure towards necessitism. On the other hand, we cannot have a too-fine notion of concept identity which distinguishes logically equivalent sentences (or logically equivalent predicates). _Being a renate and chordate_ should be the same concept as _being a chordate and a renate_, and the same concept as _being a chordate and either a renate or a non-chordate_ (at least given the standard classical equivalence of \\(Fx\land Gx\\) with \\(Fx\land(Gx\lor\neg Fx)\\), which is not in question here).  Our concept identity is not _that_ intensional that it distinguishes logically equivalent statements or predicates. But requiring that logically equivalent statements determine the one concept still leaves much room for open questions concerning concept identity. Consider two names, \\(a\\) and \\(b\\), where it's an open question concerning whether they are identical or not. Then, it seems that the concepts
\\[
{}^{\langle x\rangle}\sem{(x=a)\land(x\neq b)}
\quad
{}^{\langle x\rangle}\sem{(x=a)\land(x=b)}
\\]
are non-trivial, since neither of them are logically equivalent to the inconsistent concept \\({}^{\langle x\rangle}\sem{\bot}\\), and it's an open question as to which one of them is satisfied by the object \\(a\\). If \\(a\\) and \\(b\\) are rigid designators, then on the orthodox Kripkean line, one of these concepts is necessarily false, but they need not be _analytically_ false or _known_ to be false. If we allow for concept identity to be more finely grained than simple agreement of extension in all possible worlds, and if we allow for modalities stronger than necessity (say, [analyticity, or a priori knowability](http://consequently.org/writing/cfss2dml)) then it seems that Cian's argument applies equally well to them, too. It's one thing to be a _necessitist_ about objects, and think that the same objects exist in all possible worlds. Do we also want to also take the objects to persist across all epistemic scenarios, whether possible or impossible?


<!--more--> 

