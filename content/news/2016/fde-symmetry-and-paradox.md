+++
date = "2016-07-27T0:36:40+11:00"
title = "First Degree Entailment, Symmetry and Paradox"
description = "I attempt to answer a puzzle about paradoxes, truth value gaps and gluts. The answer involves keeping track of what you accept and what your reject."

+++

Talking to [Jc Beall](http://entailments.net) during his recent visit to Australia got me thinking about *first degree entailment* again. Here is a puzzle, which I learned from Terence Parsons in his “[True Contradictions](http://www.jstor.org/stable/40231701)”. First degree entailment (FDE) is a logic which allows for truth value *gaps* as well as truth value *gluts*.  If you are agnostic between assigning paradoxical sentences gaps and gluts (and there seems to be no very good reason to prefer gaps over gluts or gluts over gaps if you're happy with FDE), then how does this differ, in effect, from assigning them a _gap_ value? After all, on both views you end up with a theory that doesn't commit you to the paradoxical sentence or its negation. 

I think I have a clear answer to this puzzle---an answer that explains how being agnostic between gaps and gluts is a genuinely different position than admitting gaps alone. But to explain the answer and show how it works, I need to spell things out in more detail. If you want to see how the answer goes, read on. 

<!--more-->
 

First degree entailment (<span class="caps">fde</span>) is a logic well suited to fixed point solutions to the paradoxes. Perhaps it is *too* well suited, because it allows paradoxical sentences to be evaluated in two distinct ways: Paradoxical sentences can be assigned the value \\(n\\) (neither true nor false: \\(\lbrace\rbrace\\)) or \\(b\\) (both true and false&mdash;or \\(\lbrace 0,1\rbrace\\)) equally well. Are two possible values better than one? And more importantly, is agnosticism between *which* value to assign a paradoxical sentence like the liar&mdash;a stance Terence Parsons calls “agnostaletheism”&mdash;any different from assigning it the truth value \\(n\\) instead of \\(b\\)? After all, on either stance, neither the liar sentence nor its negation are to be accepted. In this note, I explore the symmetry that is available in <span class="caps">fde</span>, and I show how agnostaletheism may be clearly distinguished from the view according to which paradoxes are simply neither true nor false.

### FDE and Relational Evaluations

*First Degree Entailment* (<span class="caps">fde</span>) is a simple and elegant logic, well suited to many different applications. It can be defined and understood in a number of different ways, but for our purposes it suits to introduce it as the generalisation of classical two-valued logic according to which evaluations are no longer functions assigning each sentence of a language a truth value from \\(\lbrace 0,1\rbrace\\), but relations to those truth values. Relaxing the constraint that evaluations be Boolean functions means that sentences can be be *neither* true nor false (the evaluation fails to relate the sentence to either \\(0\\) or \\(1\\)) or *both* true and false (the evaluation relates the sentence to both truth values). This generalisation allows us to interpret the  suite of connectives and quantifiers of predicate logic in a straightforward manner, generalising the traditional evaluation conditions due to Boole and Tarski as follows.

\\(\def\semv#1{{[\\![}#1{]\\!]}}\\)
Given a non-empty domain \\(D\\) of objects, an <span class="caps">fde</span>-model for a language consists of a multi-sorted relation \\(\rho\\) defined as follows: For each \\(n\\)-place predicate \\(F\\), \\(\rho\_F\\) relates \\(n\\)-tuples of objects from \\(D\\) to the truth values \\(0,1\\). For each constant \\(c\\) in the language, \\(\rho\_c\\) selects a unique object from \\(D\\). An assignment \\(\alpha\\) of values to the variables is a function from those variables to  the domain \\(D\\). Given an assignment \\(\alpha\\) and the interpretation \\(\rho\\) we define the semantic value \\(\semv{t}\_{\rho,\alpha}\\) of a term \\(t\\) to be given by \\(\rho\_t\\) if \\(t\\) is a name and \\(\alpha(t)\\) if \\(t\\) is a variable. Then, relative to each assignment \\(\alpha\\) we define the relation \\(\rho\_\alpha\\) which matches formulas in the language to truth values as follows:

* \\((Ft\_1\cdots t\_n)\rho\_\alpha i\\) iff \\(\langle \semv{t\_1}\_{\rho,\alpha},\ldots,\semv{t\_n}\_{\rho,\alpha}\rangle\rho\_F i\\)
* \\((A\land B)\rho\_\alpha 1\\) iff \\(A\rho\_\alpha 1\\) and \\(B\rho\_\alpha 1\\)
* \\((A\land B)\rho\_\alpha 0\\) iff \\(A\rho\_\alpha 0\\) or \\(B\rho\_\alpha 0\\)
* \\((A\lor B)\rho\_\alpha 1\\) iff \\(A\rho\_\alpha 1\\) or \\(B\rho\_\alpha 1\\)
* \\((A\lor B)\rho\_\alpha 0\\) iff \\(A\rho\_\alpha 0\\) and \\(B\rho\_\alpha 0\\)
* \\(\neg A\rho\_\alpha 1\\) iff \\(A\rho\_\alpha 0\\) 
* \\(\neg A\rho\_\alpha 0\\) iff \\(A\rho\_\alpha 1\\) 
* \\((\forall x)A\rho\_\alpha 1\\) iff \\(A\rho\_{\alpha[x:=d]} 1\\) for every \\(d\\) in \\(D\\).
* \\((\forall x)A\rho\_\alpha 0\\) iff \\(A\rho\_{\alpha[x:=d]} 0\\) for some \\(d\\) in \\(D\\).
* \\((\exists x)A\rho\_\alpha 1\\) iff \\(A\rho\_{\alpha[x:=d]} 1\\) for some \\(d\\) in \\(D\\).
* \\((\exists x)A\rho\_\alpha 0\\) iff \\(A\rho\_{\alpha[x:=d]} 0\\) for every \\(d\\) in \\(D\\).

The only deviation from classical first order predicate logic is that we allow for truth value gaps (\\(\rho\\) may fail to relate a given formula to a truth value) or gluts (\\(\rho\\) may relate a given formula to both truth values). Indeed, these features are, in a sense, *modular*. It is straightforward to show that if a given interpretation \\(\rho\\) is a partial function on the basic vocabulary of a language (if it never over-assigns values to the extension of any predicate in that language), then it remains so over every sentence in that language. Those sentences can be assigned gaps, but no gluts. Similarly, if an interpretation is decisive over the basic vocabulary of some language (it never under-assigns values to the extensions of any predicate in that language), then it remains so over every sentence of that language. These sentences can be assigned gluts, but no gaps. If an evaluation is *sharp* (if it allows for neither gaps nor gluts in the interpretation of any predicate), then it remains so over the whole language. 
  
Relational evaluations are a natural model for <span class="caps">fde</span>. They show it to be an elemenary generalisation of classical logic, allowing for gaps between truth values and over-assignment of those values. The interpretation of the connectives and the quantifiers remains as classical as in two-valued logic, except for the generalisation to allow for gaps and gluts between the two semantic values.

### FDE and four values

We can also see <span class="caps">fde</span> in another light, not as a logic allowing for gaps and gluts between two truth values, but as a logic allowing for *four* semantic values. For clarity, we will write these four values: \\(t\\), \\(b\\), \\(n\\) and \\(f\\). We can translate between the two-valued and four-valued languages as follows. Given a relational valuation \\(\rho\\) we define a functional valuation \\(v\\) which assigns 

* \\(v(A)=t\\) iff \\(A\rho 1\\) but not \\(A{\rho} 0\\)
* \\(v(A)=b\\) iff \\(A\rho 1\\) and \\(A\rho 0\\)
* \\(v(A)=f\\) iff \\(A\rho 0\\) but not \\(A{\rho} 1\\)
* \\(v(A)=n\\) iff neither \\(A{\rho} 1\\) nor \\(A{\rho} 0\\)

It follows then, that 

* \\(A\rho 1\\) iff \\(v(A)=t\\) or \\(v(A)=b\\), and
* \\(A\rho 0\\) iff \\(v(A)=f\\) or \\(v(A)=b\\).

Evaluation relations that are partial functions can be understood as functional evaluations taking semantic values from \\(t,n,f\\) --- and the evaluation clauses in this case give us the familiar logic <span class="caps">k3</span>: Kleene's strong three valued logic. Evaluation relations that are decisive, allowing for no gaps, can be understood as taking semantic values from \\(t,b,f\\) --- and the evaluation clauses in this case give us the familiar logic <span class="caps">lp</span>: Priest's logic of paradox. In what follows, I will move between functional and relational vocabulary as seems appropriate. 

\\(\def\ydash{\succ}\\)

### FDE and Sequents

There are many different ways we can use <span class="caps">fde</span> evaluations to analyse truth and consequence in the language of first order logic. One important notion goes like this: An interpretation \\(\rho\\) is said to be a *counterexample* to the sequent \\(X\ydash Y\\) if and only if \\(\rho\\) relates each member of \\(X\\) to \\(1\\) while it relates no member of \\(Y\\) to \\(1\\). In other words, an interpretation provides a counterexample to a sequent if it shows some way that the sequent fails to preserve truth. Given some set \\(\mathcal M\\) of evaluations, a sequent is said to be \\(\mathcal M\\)-valid if it has no counterexamples in the set \\(\mathcal M\\). We reserve the term <span class="caps">fde</span>-valid for those sequents which have no counterexamples at all. A sequent is said to be <span class="caps">k3</span>-valid if it has no counterexamples among partial function evaluations, and a sequent is said to be <span class="caps">lp</span>-valid if it has no counterexamples among decisive valuations. 

All this is very well known in the literature on non-classical logics---see, for example (Priest 2008, Chapter 8) for details. The <span class="caps">fde</span> validities include all of distributive lattice logic with a de Morgan negation.  Sequents such as these
\\[
\neg (A\land B)\ydash \neg A\lor \neg B\quad
 \neg (A\lor B)\ydash \neg A\land \neg B
\\]
\\[
\neg A\lor \neg B\ydash \neg (A\land B)\quad
\neg A\land \neg B\ydash \neg (A\lor B) 
\\]
\\[
A\ydash\neg\neg A \quad \neg\neg A\ydash A
\\]
are  <span class="caps">fde</span> valid. The next sequents are not valid in <span class="caps">fde</span>, but they are valid in <span class="caps">k3</span>:
\\[
{A,\neg A\ydash~}\quad
A\lor B,\neg A\ydash B 
\\]
In both cases, an <span class="caps">fde</span> interpretation which relates \\(A\\) to both \\(0\\) and \\(1\\) (but which fails to relate \\(B\\) to \\(1\\)) serves as a counterexample. 
Similarly, the following sequents are *not* valid in <span class="caps">fde</span>, but they are valid in <span class="caps">lp</span>:
\\[
{\ydash~A,\neg A}\quad
B\ydash A\land B,\neg A
\\]
In both cases, an <span class="caps">fde</span> interpretation which relates \\(A\\) to neither \\(0\\) nor \\(1\\) (but which relates \\(B\\) to \\(1\\)) serves as a counterexample.

### FDE, Theories and Bitheories

From sequents we move to theories. A the usual definition has it that a *theory* may be defined as a set of sentences closed under a logical consequence relation. So, given some collection \\(\mathcal M\\) of interpretations,  \\(T\\) is an \\(\mathcal M\\)-theory if and only if whenever the sequent \\(T\ydash A\\) (where \\(A\\) is a single formula) is \\(\mathcal M\\)-valid, then \\(A\\) is a member of \\(T\\). \\(\mathcal M\\)-theories contain their own \\(\mathcal M\\)-consequences. We can think of theories as representing what is held to be true according to a certain stance---a consequences of what is held true is also (implicitly) held true. Elsewhere (Restall 2013) I have argued that in logics like <span class="caps">fde</span> we have good reason to consider not only what is held true, but what is held *un*true. Sequents give us a straightforward vocabulary for describing this. We say that the disjoint pair \\(\langle T,U\rangle\\) is an \\(\mathcal M\\)-*bitheory* if and only if whenever the sequent \\(T\ydash A,U\\) (where \\(A\\) is a single formula) is \\(\mathcal M\\)-valid, then \\(A\\) is a member of \\(T\\), and whenever \\(T,A\ydash U\\) is \\(\mathcal M\\)-valid, then \\(A\\) is a member of \\(U\\). Now, \\(\langle T,U\rangle\\) is a pair, consisting of what is (according to that bitheory) held true (to be related to \\(1\\)) on the one hand and what is held untrue (to be unrelated to \\(1\\)), on the other.  Suppose \\(\mathcal M'\subseteq\mathcal M\\) is another set of interpretations. If we define \\(T\_{\mathcal M'}\\) to be the set of all sentences true (related to \\(1\\)) in all \\(\mathcal M'\\)-interpretations and likewise \\(U\_{\mathcal M'}\\) to be the set of all sentences untrue (not related to \\(1\\)) in those interpretations, then \\(\langle T\_{\mathcal M'},U\_{\mathcal M'}\rangle\\) is a \\(\mathcal M\\)-bitheory. Indeed, if \\(\mathcal M'\\) is a singleton set, consisting of one interpretation, then the bitheory \\(\langle T\_{\mathcal M'},U\_{\mathcal M'}\rangle\\) is a partition of the language, deciding every formula to be either true or untrue. If the set \\(\mathcal M'\\) is larger, containing interpretations which give a sentence \\(A\\) different verdicts, then the corresponding bitheory will no longer be a partition. If one interpretation judges \\(A\\) to be true, another judges it untrue, then \\(A\\) will neither feature in the left set nor the right set.

### FDE and Truth

The puzzle under consideration in this note arises from the behaviour of paradoxical sentences in <span class="caps">fde</span>. The details of the paradoxes are not important to us, but regardless, let's consider a concrete case, the paradoxes of truth. We will consider a transparent account of truth, so let us focus on first order languages in which we have a one-place predicate \\(T\\) for truth. Since the truth predicate is a *predicate*, it will apply to objects in the domain. To allow for fixed points (sentences which ascribe truth or falsity to sentences in the language, including themselves) we extend the language with quotation names for sentences in that very same language. So, for each sentence \\(A\\) we have a name \\(\ulcorner A\urcorner\\). Fixed point constructions for truth in the style of Kripke, Brady, Woodruff and Gilmore generate <span class="caps">fde</span>-interpretations for a language in which the sentence \\(A\\) and the sentence \\(T\ulcorner A\urcorner\\) are assigned the same semantic values. We will call such interpretations <span class="caps">fde</span>\\(^T\\) interpretations. The construction method for <span class="caps">fde</span>\\(^T\\)-interpretations assigns the extension of \\(T\\) in stages, keeping the rest of the evaluation as given, including the denotation for constants. The details of the proof are not important to us, but one essential idea is useful: the notion of _preservation_ between evaluations. For two evaluations \\(\rho\\) and \\(\rho'\\), we have \\(\rho\sqsubseteq\rho'\\) if and only if whenever \\(\rho\\) relates an atomic formula to a given truth value \\(0\\) or \\(1\\), so does \\(\rho'\\). It is a straightforward induction on the complexity of formulas that this then extends to all of the formulas in the language: for any formula \\(A\\), if \\(A\rho 0\\) then \\(A\rho' 0\\) too, and if \\(A\rho 1\\) then \\(A\rho' 1\\) too. The evaluations \\(\rho\\) and \\(\rho'\\) may still differ, because \\(\rho\\) might leave a _gap_ where \\(\rho'\\) fills in a value, \\(0\\) or \\(1\\), or where \\(\rho\\) assigned only one value, \\(\rho'\\) might assign _both_.

The only requirement on quotation names for this fixed point construction to succeed is that quotation names for different sentences are different. This means that the construction will work _whatever_ we take the denotation of other constants to be. So, let's consider a language with a countable supply of constants \\(\lambda,\lambda_1,\lambda_2,\ldots\\) whose denotation can be freely set however we please. 

So <span class="caps">fde\\(^T\\)</span> is the set of relational <span class="caps">fde</span> evaluations for this language in which \\(T\\) is a fixed point---that is, for any sentence \\(A\\), that sentence receives the same evaluation as \\(T\ulcorner A\urcorner\\). <span class="caps">fde\\(^T\\)</span> can also be considered as a theory (or bitheory), if we wish to consider what holds (and fails to hold) in all such evaluations. We can do the same for <span class="caps">k3\\(^T\\)</span> and <span class="caps">lp\\(^T\\)</span>, when we restrict our attention to evaluations in which there are no truth value gluts or gaps respectively. Kripke's original construction shows us how to make <span class="caps">k3\\(^T\\)</span> evaluations, and the construction generalises to <span class="caps">lp\\(^T\\)</span> and <span class="caps">fde\\(^T\\)</span> straightforwardly.

Now, to consider the behaviour of the paradoxical sentences, let's fix the referent of the term \\(\lambda\\) to be the same as the referent of  the quotation name \\(\ulcorner\neg T\lambda\urcorner\\), containing the term \\(\lambda\\) itself. It follows then that \\(T\lambda\\) has the same value as \\(T\ulcorner\neg T\lambda\urcorner\\), which has the same value as \\(\neg T\lambda\\). \\(\lambda\\) denotes a liar sentence, which says of itself that it's not true. That is, the sentence \\(\neg T\lambda\\) (and its mate, \\(T\lambda\\)) must be assigned the value \\(b\\) or \\(n\\), since it is a fixed point for negation. The fixed point construction allows us to generate interpretations for the truth predicate in which sentences like \\(\neg T\lambda\\) have the value \\(n\\), and interpretations where those sentences have the value \\(b\\)---in fact, one can make the fixed point construction purely in <span class="caps">k3</span> or in <span class="caps">lp</span>---and there are also mixed models in which some paradoxical sentences have the value \\(n\\) and others the value \\(b\\).

So, if we take <span class="caps">fde\\(^T\\)</span> to be an adequate *logic* of truth, then it seems as if we should be agnostic about whether a liar sentence like \\(\neg T\lambda\\) has value \\(n\\) or \\(b\\), unless we can find some consideration which breaks the tie between them. This position was named ``agnostaletheism'', by Terence Parsons (1990).

Perhaps there *is* a tie-breaking consideration. If we were to be agnostic between assigning \\(\neg T\lambda\\) the value \\(b\\) and the value \\(n\\), this looks a lot like assigning the value \\(n\\). After all, according to both theories, we don't assert \\(T\lambda\\) and we don't assert its negation.  This is the puzzling question: Is there an instability in <span class="caps">fde\\(^T\\)</span>? Does <span class="caps">fde\\(^T\\)</span> collapse into <span class="caps">k3\\(^T\\)</span>?

### Symmetry in FDE Theories

The profound symmetry between gaps and gluts in first degree entailment is manifest in the behaviour of the Routley star---a function on evaluations---introduced by Richard and Valerie Routley in the 1970s (Routley and Routley 1972). Given an evaluation \\(\rho\\), we can define its *dual* evaluation \\(\rho^\ast\\) as follows:

For each \\(n\\)-place predicate \\(F\\), we set:

* \\(\langle d_1,\ldots,d_n\rangle\rho^\ast\_F 1\\) holds iff \\(\langle d_1,\ldots,d_n\rangle\rho\_F 0\\) doesn't hold.
* \\(\langle d_1,\ldots,d_n\rangle\rho^\ast\_F 0\\) holds iff \\(\langle d_1,\ldots,d_n\rangle\rho\_F 1\\) doesn't hold.

In other words, an atomic formula is _true_ according to \\(\rho{^\ast}\\) if and only if to \\(\rho\\) it is not false, and it is _false_ according to \\(\rho{^\ast}\\) if and only if to \\(\rho\\) it is not true. This means that atomic formulas which are \\(t\\) by \\(\rho\\)'s lights are also \\(t\\) by \\(\rho^\ast\\)'s, and similarly for \\(f\\). But a formula that is \\(n\\) according to \\(\rho\\) is \\(b\\) to \\(\rho^\ast\\), and a formula that is \\(b\\) according to \\(\rho\\) is \\(n\\) to \\(\rho^\ast\\). The dual evaluation turns gaps into gluts, and gluts into gaps, for atomic formulas.

This fact generalises to all of the formulas in the language of <span class="caps">fde</span>. 

<span class="caps">fact</span>: For any formula \\(A\\) in the language of <span class="caps">fde</span>

* \\(A\rho^\ast 1\\) holds iff \\(A\rho 0\\) doesn't hold.
* \\(A\rho^\ast 0\\) holds iff \\(A\rho 1\\) doesn't hold.

This fact is established by a simple induction on the complexity of the formula \\(A\\). The crucial feature of the connectives that makes this proof work is the balance between the positive and negative conditions in an evaluation \\(\rho\\). For example, with conjunction we have

* \\((A\land B)\rho\_\alpha 1\\) iff \\(A\rho\_\alpha 1\\) and \\(B\rho\_\alpha 1\\)
* \\((A\land B)\rho\_\alpha 0\\) iff \\(A\rho\_\alpha 0\\) or \\(B\rho\_\alpha 0\\)

So we can proceed as follows (assuming that the fact holds for the simpler formulas \\(A\\) and \\(B\\)), \\((A\land B)\rho^\ast\_\alpha 1\\) iff \\(A\rho^\ast\_\alpha 1\\) and \\(B\rho^\ast\_\alpha 1\\) iff \\(A\rho\_\alpha 0\\) doesn't hold and \\(B\rho\_\alpha 0\\) doesn't hold, iff neither \\(A\rho\_\alpha 0\\) nor \\(B\rho\_\alpha 0\\) hold, iff \\(A\land B\rho\_\alpha 0\\) doesn't hold. We have appealed to the parallel between these two clauses:

* \\((A\land B)\rho\_\alpha 1\\) holds iff \\(A\rho\_\alpha 1\\) and \\(B\rho\_\alpha 1\\) don't hold.
* \\((A\land B)\rho\_\alpha 0\\) doesn't hold iff \\(A\rho\_\alpha 0\\) and \\(B\rho\_\alpha 0\\) don't hold.

In the same way, for example, with the existential quantifier:

* \\((\exists x)A\rho\_\alpha 1\\) holds iff \\(A\rho\_{\alpha[x:=d]} 1\\) holds for some \\(d\\) in \\(D\\).
* \\((\exists x)A\rho\_\alpha 0\\) doesn't hold iff \\(A\rho\_{\alpha[x:=d]} 0\\) doesn't hold for some \\(d\\) in \\(D\\).

and the same form of argument applies. What holds for the existential quantifier and conjunction holds for the other connectives and quantifier of first degree entailment.

*Excursus*: This argument would fail if we had connectives or quantifiers in our language whose truth and falsity conditions are less well matched. For example, we could have a connective which is conjunctive with regard to truth and disjunctive with regard to falsity:

* \\((A\times B)\rho\_\alpha 1\\) iff \\(A\rho\_\alpha 1\\) and \\(B\rho\_\alpha 1\\) 
* \\((A\times B)\rho\_\alpha 0\\) iff \\(A\rho\_\alpha 0\\) and \\(B\rho\_\alpha 0\\)

Given a evaluation \\(\rho\\) which relates the atomic formulas \\(p\\) to \\(1\\) only and \\(q\\) to \\(0\\) only, \\(\rho^\ast\\) does the same. According to both \\(\rho\\) and \\(\rho^\ast\\), \\(p\times q\\) is related to neither \\(1\\) nor \\(0\\), breaking the symmetry between gaps and gluts. *End of Excursus*

The Routley star sends relational evaluations to relational evaluations. It does not send theories to theories. It is natural to define the star of a set of sentences as follows: For any set \\(S\\) of formulas, \\(A\in S^\ast\\) if and only if \\(\neg A\not\in S\\). However, the dual \\(T^\ast\\) of a theory  \\(T\\)is not always itself a theory. Take, for example, the <span class="caps">fde</span>-theory \\((\neg p\lor\neg q){\mathord\downarrow}\\) consisting of all <span class="caps">fde</span>-consequences of \\(\neg p\lor\neg q\\) (it is the theory consisting of every sentence made true by by every evaluation \\(\rho\\) where either \\(p\rho 0\\) or \\(q\rho 0\\)). In particular, we have \\(\neg p\lor\neg q\in (\neg p\lor\neg q){\mathord\downarrow}\\) but \\(\neg p\not\in (\neg p\lor\neg q){\mathord\downarrow}\\) and \\(\neg q\not\in (\neg p\lor\neg q){\mathord\downarrow}\\). Now consider the dual set \\((\neg p\lor\neg q){\mathord\downarrow}^\ast\\). This is not a theory, because \\(p\in{(\neg p\lor\neg q){\mathord\downarrow}^\ast}\\) (since \\(\neg p\not\in(\neg p\lor\neg q){\mathord\downarrow})\\)) and \\(q\in{(\neg p\lor\neg q){\mathord\downarrow}^\ast}\\) (since \\(\neg q\not\in(\neg p\lor\neg q){\mathord\downarrow})\\)) but the conjunction is not in the set: \\(p\land q\not\in{(\neg p\lor\neg q){\mathord\downarrow}^\ast}\\) (since \\(\neg p\lor\neg q\in(\neg p\lor\neg q){\mathord\downarrow})\\) ensures that \\(\neg(p\land q)\in(\neg p\lor\neg q){\mathord\downarrow}\\) too).

However, it is straightforward to show the following fact, relating the Routley star and *bi*-theories.

<span class="caps">fact</span>: For any \\(\mathcal M\\)-bitheory \\(\langle T,U\rangle\\), the pair \\(\langle \overline{U^\ast},\overline{T^\ast}\rangle\\) is an \\(\mathcal M^\ast\\)-bitheory, where \\(\overline{U^\ast}\\) and \\(\overline{T^\ast}\\) are the sets of sentences _not_ in \\(U^\ast\\) and \\(T^\ast\\) respectively. 

Here is why: The interpretation \\(\rho\\) is a counterexample to \\(T \ydash U\\) has a counterexample iff \\(\rho^\ast\\) is a counterexample to \\(\neg U \ydash \neg T\\). It follows that \\(\overline{U^\ast}\ydash A,\overline{T^\ast}\\) fails at \\(\rho^\ast\\) iff \\(\neg\overline{T^\ast},\neg A\ydash\neg\overline{U^\ast}\\) fails at \\(\rho\\), but that means \\(T,\neg A\ydash U\\) fails at \\(\rho^\ast\\). So, \\(\overline{U^\ast}\ydash A,\overline{T^\ast}\\) holds in \\(\mathcal M^\ast\\) iff \\(T,\neg A\ydash U\\) holds in \\(\mathcal M\\). So, since \\(\langle T,U\rangle\\) is an \\(\mathcal M\\)-bitheory, we have \\(\neg A\in U\\), which means \\(A\in \overline{U^\ast}\\) as desired. The case for \\(\overline{U^\ast},A\ydash \overline{T^\ast}\\) to \\(A\in\overline{T^\ast}\\) is dual.

Armed with these facts concerning the Routley star, we can attend to the behaviour of our theories (and bitheories) with gaps and gluts.

### Two Kinds of Incompleteness

Theories in <span class="caps">fde</span> can be incomplete in two distinct ways. Consider the <span class="caps">fde</span>-theory consisting of every sentence true in those evaluations which relate \\(p\\) to \\(1\\) and relate \\(q\\) to neither \\(0\\) nor \\(1\\), and which relate \\(r\\) to either \\(1\\) or \\(0\\). This set of sentences contains \\(p\\) and it doesn't contain \\(\neg p\\). It holds \\(p\\) to be _true_. However, it is incomplete concerning \\(q\\) and \\(r\\)---the theory doesn't contain \\(q\\) or \\(\neg q\\), and it also doesn't contain \\(r\\) or \\(\neg r\\). However, the theory has _settled_ \\(q\\) to be neither true nor false. (In all of the evaluations, \\(q\\) receives the value \\(n\\).) On the other hand, the value of \\(r\\) is _unsettled_. In some evaluations, \\(r\\) is true, in others it is false.  In this way, <span class="caps">fde</span> allows for two different kinds of incompleteness. 

Now consider theories like <span class="caps">k3\\(^T\\)</span> and <span class="caps">fde\\(^T\\)</span>. Recall, <span class="caps">fde\\(^T\\)</span> is given by all <span class="caps">fde</span> evaluations for which \\(T\ulcorner A\urcorner\\) and \\(A\\) receive the same value, and  <span class="caps">k3\\(^T\\)</span> is given by all <span class="caps">k3</span> valuations with the same property. If we focus on the _theories_ determined by each class of valuations, we see that a liar sentence like \\(T\lambda\\) is _incomplete_ in both theories. In <span class="caps">k3\\(^T\\)</span>, it is because in any such valuation, \\(T\lambda\\) receives the value \\(n\\)---it is never true. In <span class="caps">fde\\(^T\\)</span> it is because in any such valuation, \\(T\lambda\\) either receives the value \\(n\\) or the value \\(b\\). In some valuations it is true (those where it is \\(b\\)) and in others, it fails to be true. Again, the theory is incomplete concerning \\(T\lambda\\).

Is there any way to distinguish these theories or distinguish this incompleteness? 

In one sense, the answer will be _no_. The following fact contains the core of the reason why:

<span class="caps">fact</span>: For any <span class="caps">k3</span> evaluation \\(\rho\\), the theory determined by \\(\rho\\) and the <span class="caps">fde</span> theory determined by the two evaluations \\(\rho\\) and \\(\rho^\ast\\) are identical.

It is easy to see that \\(\rho\sqsubseteq \rho^\ast\\) in the case where \\(\rho\\) is a <span class="caps">k3</span> evaluation. It follows that the truths according to \\(\rho\\) are exactly the truths according to both \\(\rho\\) and \\(\rho^\ast\\).

This fact *generalises*. Consider an evaluation \\(\rho\\), which may involve both gaps and gluts. We can define the evaluation \\(\rho^{n}\\), which assigns \\(n\\) to any atomic formula assigned either \\(n\\) or \\(b\\) by \\(\rho\\), and which leaves \\(t\\) and \\(f\\) fixed. It is straightforward to see that \\(\rho^{n}\sqsubseteq \rho\\). We can also define the evaluation \\(\rho^{b}\\), which assigns \\(b\\) to any atomic formula assigned either \\(n\\) or \\(b\\) by \\(\rho\\), and which leaves \\(t\\) and \\(f\\) fixed. In this case, we have \\(\rho\sqsubseteq \rho^b\\). So, in general any <span class="caps">fde</span> evaluation \\(\rho\\) is sandwiched between a <span class="caps">k3</span> evaluation and an <span class="caps">lp</span> evaluation like so: \\(\rho^n\sqsubseteq\rho\sqsubseteq \rho^b\\).  

The generalisation of our previous fact can now be stated:

<span class="caps">fact</span>: For any <span class="caps">fde</span> evaluation \\(\rho\\), the <span class="caps">k3</span> theory determined by \\(\rho^{n}\\) and the <span class="caps">fde</span> theory determined by the two evaluations \\(\rho\\) and \\(\rho^{n}\\) are identical.

The proof is as before: Now \\(\rho^n\sqsubseteq \rho\\), so it follows that the truths according to \\(\rho^n\\) are exactly the truths according to both \\(\rho^n\\) and \\(\rho\\).

Now, the operation of sending all gaps and gluts either to _gaps_ or to _gluts_ does not disturb the logic of truth.

<span class="caps">fact</span>: If \\(\rho\\) is an <span class="caps">fde\\(^T\\)</span> evaluation, then so are \\(\rho^n\\) and \\(\rho^b\\).

The only way that \\(\rho^n\\) could fail to be an an <span class="caps">fde\\(^T\\)</span> evaluation is if for some formula \\(A\\), the values in \\(\rho^n\\) of \\(A\\) and \\(T\ulcorner A\urcorner\\) differ. But if values of two formulas differ in \\(\rho^n\\), they also differ in \\(\rho\\). (The same holds for \\(\rho^b\\), too.)

Now we can state our general fact, concerning truth theories in <span class="caps">fde</span> and <span class="caps">k3</span>. The basic idea is that the theories are identical, since theories that take the paradoxical sentences to be \\(n\\) and those that are agnostic between \\(n\\) and \\(b\\) take the same claims to be _true_. This is fair enough as far as it goes, but stated in this bald way, it does not go very far at all. The theories <span class="caps">fde\\(^T\\)</span> and <span class="caps">k3\\(^T\\)</span> _obviously_ have the same theorems---they both have _no_ theorems. The _silent_ evaluation which sends absolutely every every formula to \\(n\\) is a <span class="caps">k3\\(^T\\)</span> (and hence, <span class="caps">fde\\(^T\\)</span>) evaluation, and this shows that both <span class="caps">k3\\(^T\\)</span> and <span class="caps">fde\\(^T\\)</span> have no theorems at all. So, merely showing that <span class="caps">k3\\(^T\\)</span> and <span class="caps">fde\\(^T\\)</span> share theorems does not say very much at all. We can do much better than this. 

Suppose we have a set \\(\mathcal M\\) of evaluations, such that whenever \\(\rho\in\mathcal M\\) we also have \\(\rho^n\in \mathcal M\\). Let \\(\mathcal M^n\\) be the set of <span class="caps">k3</span> evaluations in \\(\mathcal M\\)---so \\({\mathcal M^n}=\lbrace\rho^n:\rho\in\mathcal M\rbrace\\). We have the following result:

<span class="caps">fact</span>: The theory \\(T\_\mathcal{M}\\) of sentences true in all evaluations in \\(\mathcal{M}\\) is identical to the theory \\(T\_{\mathcal{M}^n}\\), of sentences  in all evaluations in \\(\mathcal{M}^n\\).

Clearly \\(T\_\mathcal{M}\subseteq T\_{\mathcal M^n}\\). To show the converse, suppose the formula \\(A\\) is not in \\(T\_\mathcal{M}\\). So, it fails to be true on some evaluation \\(\rho\in\mathcal{M}\\). It also fails in \\(\rho^n\\), which is in \\(\mathcal{M^n}\\).

So, for example, if we have some <span class="caps">k3</span> valuation \\(\rho\\) for a language without the truth predicate, and we consider the set \\(\mathcal M\\) of all <span class="caps">fde\\(^T\\)</span> evaluations, extending \\(\rho\\) with a truth predicate. Here, grounded \\(T\\)-sentences will receive values as determined by the underlying valuation \\(\rho\\), while other sentences will vary among all four values, \\(t\\), \\(f\\), \\(n\\) and \\(b\\), constrained only by the requirement that \\(A\\) and \\(T\ulcorner A\urcorner\\) agree in value. The set \\(\mathcal M^n\\) is the subset of such evaluations in which the \\(T\\)-sentences receive the values \\(t\\), \\(f\\) or \\(n\\), not \\(b\\). Our fact tells us the theories of \\(\mathcal M\\) and \\(\mathcal M^n\\) are indistinguishable. At the level of theories, we cannot distinguish between paradoxical sentences determinately receiving a gap value, and agnosticism between gaps and gluts.

Thankfully, we don't need to remain at the level of _theories_. The sets \\(\mathcal M\\) and \\(\mathcal M^n\\) determine the same set of theorems, but they determine different sets of cotheorems. While they rule _in_ the same sentences, they rule out different sentences. The liar sentence \\(\neg T\lambda\\) is _true_ in some valuations in \\(\mathcal M\\) (those that assign it the value \\(b\\)) while it is true in no valuations in \\(\mathcal M^n\\). In all valuations in \\(\mathcal M^n\\) a liar sentence must receive the value \\(n\\), so it is true in no valuation at all.  The _untruths_ of \\(\mathcal M\\) differ from the untruths of \\(\mathcal M^n\\).  

If we attend to bitheories, the symmetry between gaps and gluts is completely restored. For our facts concerning gaps, we have matching facts concerning gluts. 

<span class="caps">fact</span>: For any <span class="caps">fde</span> evaluation \\(\rho\\), the <span class="caps">lp</span> cotheory determined by \\(\rho^{b}\\) (the formulas \\(U\_{\rho^b}\\) untrue in \\(\rho^b\\)) and the <span class="caps">fde</span> cotheory determined by the two evaluations \\(\rho\\) and \\(\rho^{b}\\) (the formulas \\(U\_{\lbrace\rho,\rho^b\rbrace}\\)) are identical.


<span class="caps">fact</span>: If \\(\mathcal M\\) is a set of valuations where for every \\(\rho\\) in \\(\mathcal M\\) the valuation\\(\rho^b\\) is also in \\(\mathcal M\\), then the cotheory \\(U\_\mathcal{M}\\) of sentences untrue in all evaluations in \\(\mathcal{M}\\) is identical to the cotheory \\(U\_{\mathcal{M}^b}\\), of sentences untrue in all evaluations in \\(\mathcal{M}^b\\).

Symmetry is regained, and we can distinguish between agnostalethism concerning paradoxical sentences and those views which assign them a gap, or assign them a glut. Glut views are distinguished from agnostaletheism as _theories_---they hold different things to be true, while gap views are distinguished from 
agnostaletheism as _cotheories_---they hold different things to be untrue.

That is all well and good when it comes to formally distinguishing these three views of paradoxical sentences. However, the puzzle wasn't just a puzzle about the formal development of these views. It is also a puzzle concerning what it is to _hold_ those views, and this issue remains, even if we reject the model theory and the technical devices of theories, cotheories and bitheories. 

### Assertion and Denial in FDE, K3 and LP

To answer the puzzle in those terms, we should say something about the speech acts of assertion and denial, or the cognitive states of accepting and rejecting. These are the practical analogues of the theoretical and abstract notions of theory and cotheory.  To connect talk of accepting and rejecting (or assertion and denial) with logical notions, we need some kind of bridge principle. A principle I have endorsed elsewhere (Restall 2005, 2013, 2015) goes like this:

<span class="caps">bridge principle 1</span>: If the sequent \\(X\ydash Y\\) is valid, then don't accept (or assert) every member of \\(X\\) and reject (or deny) every member of \\(Y\\).

To constrain what you accept and reject in line with such a bridge principle is to maintain a kind of coherence in your cognitive state. Since \\(A\lor B\ydash A,B\\) is valid, you would not accept the disjunction \\(A\lor B\\) and reject both disjuncts \\(A\\) and \\(B\\). If (as <span class="caps">lp</span> would have it) \\(\ydash C\lor \neg C\\) is valid, you would not reject that instance of the law of the excluded middle. If (as <span class="caps">k3</span> would have it) \\(D\land\neg D\ydash\\) is valid, you would not accept that contradiction. 

With this bridge principle at hand, we can distinguish the agnostaletheist (who uses a range of <span class="caps">fde\\(^T\\)</span> valuations to define validity), the <span class="caps">k3</span>-theorist (who restricts her attention to <span class="caps">k3\\(^T\\)</span> valuations) and the <span class="caps">lp</span>-theorist (who restricts his attention to <span class="caps">lp\\(^T\\)</span> valuations). The <span class="caps">k3</span> theorist will not accept any contradiction. Contradictions are never true in any evaluation of theirs. The <span class="caps">lp</span> theorist will never reject any excluded middle. Excluded middle disjunctions are never untrue in their evaluations. The <span class="caps">fde</span> theorist, on the other hand, can reject excluded middles and accept contradictions. That concerns _validity_ and the first bridge principle, which amounts to a kind of coherence (or consistency) principle.

To accept a contingent _theory_, or _bitheory_ \\(\langle T,U\rangle\\) is to constrain your acceptings and rejectings further. 

<span class="caps">bridge principle 2</span>: To accept a bitheory \\(\langle T,U\rangle\\) is to accept each member of \\(T\\) and to reject each member of \\(U\\). 

This constraint is compatible with the first bridge principle if pair \\(\langle T,U\rangle\\) is indeed a bitheory. In that case, the sequent \\(T\ydash U\\) is not valid (if it were, then each formula \\(A\\) would be in \\(T\\), since \\(T\ydash A,U\\) is valid, and in \\(U\\), since \\(T,A\ydash U\\) is valid, but that is impossible, since \\(T\\) and \\(U\\) are, by definition, disjoint), so there is no issue with accepting all of \\(T\\) and rejecting all of \\(U\\).


If we consider our three different views of the truth predicate (1) <span class="caps">fde\\(^T\\)</span> allowing both gaps and gluts, (2) <span class="caps">k3\\(^T\\)</span> allowing only gaps, and (3) <span class="caps">lp\\(^T\\)</span> allowing only gluts as determining bitheories, we can see the difference in our acceptings and rejectings if we adopt bridge principle 2 for each bitheory in turn. If we accept <span class="caps">k3\\(^T\\)</span>, we reject all contradictions, even those involving the liar sentence \\(T\lambda\land\neg T\lambda\\). If we accept <span class="caps">lp\\(^T\\)</span>, we accept all excluded middles, including the excluded middle involving the liar: \\(T\lambda\lor\neg T\lambda\\). But the agnostalethic position, accepting <span class="caps">fde\\(^T\\)</span> commits us to neither: we are free to accept 
the contradiction  \\(T\lambda\land\neg T\lambda\\) or to reject the disjunction  \\(T\lambda\lor\neg T\lambda\\).

So, an agnostaletheist and a gap theorist indeed agree on what to accept, but they disagree on what is to be rejected. In a similar way, an agnostaletheist and an glut theorist agree on what to reject, but they disagree on what to accept. Keeping the symmetry between accepting and rejecting in view, we have parity between gaps and gluts, and the agnostalethic position can be distinguished from its two neighbours.

### References


Terence Parsons (1990), “[True Contradictions](http://www.jstor.org/stable/40231701)”
*Canadian Journal of Philosophy* 20:3, 335-353

Graham Priest (2008), [*An Introduction to Non-Classical Logic*: *From If to Is*](https://www.amazon.com/Introduction-Non-Classical-Logic-Introductions-Philosophy/dp/0521670268/consequentlyorg), Second Edition, Cambridge University Press.

Greg Restall (2005) “[Multiple Conclusions](https://consequently.org/writing/multipleconclusions/),” pages 189–205 in _Logic, Methodology and Philosophy of Science_: _Proceedings of the Twelfth International Congress_, edited by Petr Hajek, Luis Valdes-Villanueva and Dag Westerstahl, Kings' College Publications.

Greg Restall (2013) “[Assertion, Denial and Non-Classical Theories](https://consequently.org/writing/adnct),” pp. 81–99 in *Paraconsistency*: *Logic and Applications*, edited by Koji Tanaka, Francesco Berto, Edwin Mares and Francesco Paoli.

Greg Restall (2015) “[Assertion, Denial, Accepting, Rejecting, Symmetry and Paradox](https://consequently.org/writing/assertiondenialparadox/),” pages 310-321 in Foundations of Logical Consequence, edited by Colin R. Caret and Ole T. Hjortland, Oxford University Press.

Richard Routley and Val Routley (1972) “[The Semantics of First Degree Entailment](http://www.jstor.org/stable/2214309),” *No&ucirc;s* 6:4, 335--359.
