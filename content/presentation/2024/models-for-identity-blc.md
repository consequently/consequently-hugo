+++
date = "2024-09-05T14:50:00+01:00"
title = "Models for Identity in Three-Valued Logics"
host = "British Logic Colloquium 2024"
publishdate = "2024-08-25"
author = "Greg Restall"
aliases = [‘/p/2024/blc’]
+++

*Abstract*: 
There is a natural way to interpret the propositional connectives and
quantifiers in terms of the three semantic values _0_, _i_, and _1_, where _0_
and _1_ are understood as falsity and truth, and i is understood as some
intermediate value. These three-valued valuations do not, by themselves,
determine a logic, because for that, you need to settle how models are used to
provide a counterexample to a sequent.  

If you take a counterexample to the argument from _A_ to _B_ to be a model that
assigns _A_ the value _1_ and _B_ some value other than _1_ (either _0_ or
_i_), the resulting logic is Kleene’s strong three-valued logic, **K3**. If a
counterexample is a model assigning _A_ the value _1_ or _i_ and _B_ the value
_0_, the resulting logic is Priest’s logic of paradox, **LP**. If a
counterexample is a model assigning _A_ the value _1_ and _B_ the value _0_,
then the result is the logic **ST** of Strict–Tolerant validity. The three
logics are different generalisations of two-valued Boolean logic to a
tri-valuational setting.

The logic **ST** is distinctive, in that it is, in some sense, a reformulation of
classical logic&mdash;every classically valid sequent in this language is 
**ST**-valid&mdash;but since *ST* allows for strictly non-classical models, there are *ST*
theories which are not classical theories. The _Cut_ rule is not unrestrictedly
valid in *ST*. For example, if the formula *P* takes the value *i* in every model,
and in the resulting theory, each sequent _A_ ⊢ _P_ and _P_ ⊢ _B_ is valid, while _A_
⊢ _B_ need not be valid.  

There have been a number of different proposals
concerning the logic of the identity predicate in this three-valued setting,
mostly involving making minimal changes to the classical evaluation
conditions, given the underlying ideology of **K3** or **LP** evaluations and their
respective treatments of the indeterminate semantic value _i_. In this talk, I
will use the relationship between **ST** evaluations and classical logic to show
how there is a well-behaved class of three-valued models for the identity
predicate that is much wider than has been previously proposed.

The key result involves characterising the three-valued models that provide no **ST** 
counterexamples to sequents valid in classical first-order predicate logic with
identity. In this talk, I provide independent characterisation of such
models, showing how the class generalises prior three-valued models for
identity, and exploring how these models can be understood from the point of
view of the logics **ST**, **K3** and **LP**.

* The talk is a presentation at the [British Logic Colloquium 2024](https://blc24.github.io) at the University of 
Birmingham. 

* The [slides for the talk are available here](/slides/models-for-identity-blc.pdf).


