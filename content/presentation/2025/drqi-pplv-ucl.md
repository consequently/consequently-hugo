+++
date = "2025-02-20T02:00:00+01:00"
title = "Defining Rules for Quantifiers and Identity"
host = "Programming Principles, Logic, and Verification Group, Computer Science Department, University College London"
publishdate = "2025-01-31"
author = "Greg Restall"
+++
*Abstract*: 
Suppose we have a language involving non-denoting singular terms.
(The language of everyday mathematics provides one example. Terms
like \\(\frac{n}{m}\\) and \\(\lim_{x\to\infty} f(x)\\) do not denote, for
appropriate choices of \\(m\\) and of \\(f\\).) It is not too difficult to
define inference rules for an appropriately free logic that incorporates
non-denoting terms. If \\(t\\) does not denote, then \\(\phi(t)\\) need not
entail \\(\exists x\phi(x)\\), and neither is \\(\phi(t)\\) entailed by
\\(\forall x\phi(x)\\).  We now have a very good understanding of well-behaved
cut-free sequent calculi for a variety of different free logics, appropriate
for languages with non-denoting singular terms. 

There is a tradition, in proof-theoretic semantics, of thinking of well-behaved
inference rules for some concept as defining that concept.  If the rules are
well-enough behaved (whatever that notion of good behaviour might be—whether a
notion of harmony, or conservative extension and unique definability, or
something else—then we are tempted to take the concept that can be introduced
by such rules to be defined by them, and hence to be apt for introduction to
our vocabulary.  

In this talk, I will show how, in the natural sequent calculus for negative free logic, we are able to define “outer” quantifiers \\(\Pi\\) and \\(\Sigma\\)
where \\(\phi(t)\\) entails \\(\Sigma x\phi(x)\\), and is entailed by \\(\Pi x\phi(x)\\), for any term \\(t\\), whether denoting or not, 
since the rules for such quantifiers meet the strictures for defining
concepts in proof-theoretic semantics mentioned above.

These rules meet those original proof-theoretic strictures, but they nonetheless seem to differ from the inner quantifiers, in that a statement like \\(\Sigma x\phi(x)\\) can be true without there being a genuine *value* for the variable \\(x\\) to take that would satisfy \\(\phi(x)\\). The substitution occurs at the level of the term, and not the value of that term. I will consider an approach to enforcing a term/value distinction more thoroughly in the proof calculus, and show how this gives us means to not only distinguish the differing theoretical commitments of inner and outer quantification, but also show how it follows that there are at least two different ways we can understand the identity predicate.


If there is time, I will also discuss the
significance of these result for proof-theoretic semantics and our understanding
of how inference rules might be used in definitions.

* This talk is a presentation at the [Programming Principles, Logic, and Verification Group](http://pplv.cs.ucl.ac.uk/),
  in the [UCL Computer Science Department](http://www.cs.ucl.ac.uk).

* Here are the [slides for the talk](/slides/drqi-pplv-ucl.pdf).


