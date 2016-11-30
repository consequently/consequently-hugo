+++
date = "2016-11-30T11:22:42+11:00"
title = "A Puzzle for Brandom's Account of Singular Terms"
description = "Robert Brandom has a distinctive inferentialist account of what it is to be a singluar term. I explain that account, and present what looks to me like a counterexample to it."
largeimage = false

+++

I've been interested in [Robert Brandom](http://www.pitt.edu/~rbrandom/)’s inferentialism since I picked up a copy of *[Making it Explicit](https://www.amazon.com/Making-Explicit-Representing-Discursive-Commitment/dp/0674543300/consequentlyorg)* back in 1996.  One interesting component of Brandom's inferentialism is his account of what it is to be a singular term. There are a number of ways to understand inferentialism, but the important point here is the centrality of *material inference* to semantics. An inference like “Melbourne is south of Sydney, therefore Sydney is north of Melbourne” is a materially good inference. Material inferences, for Brandom, are not to be understood as grounded in a more primitive notion of logical consequence—we shouldn’t explain the inference in terms of the validity of the form “\\(a\\) is south of \\(b\\), for all \\(x\\) and \\(y\\) if \\(x\\) is south of \\(y\\) then \\(y\\) is north of \\(x\\), therefore, \\(b\\) is north of \\(a\\)” and the fact that the extra premise is common knowledge or a part of the norms governing the concepts of north and south. No, according the inferentialist, we are to explain those facts in terms of materially good inferences, and not *vice versa*.

Well, one of the distinctive features of Brandom’s inferentialism is that he takes there to be an inferentialist account of what it is for a term to be a *singular term*---a name or other device that picks out an *object*, rather than a *predicate* that describes something, or some other kind of connective or modifier. 

Here’s a one sentence slogan summarising the account of what it is to be a singular term:

> A grammatical item is a *singular term* if and only if the *substitution inferences* in which that item is *materially involved* are *symmetric*. 

(See Brandom’s *[Articulating Reasons](https://www.amazon.com/Articulating-Reasons-Inferentialism-Robert-Brandom/dp/0674006925/consequentlyorg)*, Chapter 4, especially Section II for details and exposition.)

There are at least three complex concepts in this slogan that require explanation: 

1. **Substitution inferences**: A substitution inference involving a term \\(t\\) is an inference from a sentence using \\(t\\) to a sentence found by replacing the occurrences if \\(t\\) in the sentence with some other term of the same grammatical type. For example, the inference from “Greg is a philosophical logician” to “Greg is a philosopher” is a substitution inference involving “philosophical logician”—the term “philosopher” is substituted is in place of “philosophical logician.” The inference “Greg is a philosophical logician” to “The author of this note is a philosophical logician” is also a substitution inference.
2. **Material involvement**: A term is *materially involved* in an inference if it cannot be replaced without altering the status of the inference.
3. **Symmetric**: An inference from *A* to *B* is (materially) symmetric if and only if whenever that inference is materially good, so is the converse, from *B* to *A*.

There’s something insightful about this. The inference from “Greg is a philosophical logician” to “The author of this note is a philosophical logician” is materially good (at least, in some contexts), if that’s good so is the converse inference. Why? Because I (Greg) am the author of this note. But the inference from “Greg is a philosophical logician” to “Greg is a philosopher” is good in the way that the converse need not be. There are clearly asymmetric material inferences resulting from the substitution of weaker predicates for stronger predicates. There don’t seem to be anything “weaker” or “stronger” singular terms. What would such things be? It really looks like there is something important going on in the difference between substitution of singular terms and the substitution of predicates (or predicate modifiers, or other grammatical units) in these inferences.

However, I am struck by the following puzzle. Consider an inference like this:

> 23 is a small number, therefore 22 is small number.

I take this is a materially good inference. Whatever standard of smallness you invoke, if 23 counts as a small number, so does 22. Why? Because 22 is smaller than 23. 

In fact, each inference of the form:

> \\(m\\) is a small number, therefore \\(n\\) is a small number.

Looks materially good to me, for any numerals \\(m\\) and \\(n\\) where \\(n\\) names a larger number than \\(m\\) does. Because, as before, \\(m\\) is *indeed* smaller than \\(n\\), and in those cases, the inference is good.

However, the converse inferences seem nowhere near as good. While *some* of the converse inferences might be good (I have some [friends](http://davewripley.rocks) who take it that every inference of the form *\\(m\\) is small, so \\(m+1\\) is small* is good), but you shouldn’t think that *all* of them are good. If you can find a number \\(n\\) that is small and a larger number \\(m\\) that is *not* small, then the converse inference 

> \\(n\\) is a small number, therefore \\(m\\) is a small number.

is not only materially bad—it has a true premise and a false conclusion. It’s as bad as an argument can get.

This looks to me to be a clear counterexample to Brandom’s account of singular terms. Here’s why.  

1. Numerals really do look like they are singular terms. (In the formalised language of mathematics, we treat numerals as singular terms. It’s a natural thing to do.) While numbers aren’t the same sorts of objects as objects we can see or touch, measure or weigh, the terms certainly seem to act like singular terms. 
2. The inferences from \\(n\\) *is small* to \\(m\\) *is small* (where \\(m\\) is smaller than \\(n\\)) really do seem to be materially good. If we’re going to rule these out
3. The inference from \\(n\\) *is small* to \\(m\\) *is small* looks for all the world like a substitution inference where \\(n\\) is replaced by \\(m\\). It would be a strange grammatical analysis to take it to not be a substitution inference.
4. The term \\(n\\) appears materially in the inference from *\\(n\\) is small* to *\\(m\\) is small*. (If this inference is valid, replace \\(n\\) by something smaller than \\(m\\) to make the resulting inference invalid. Conversely if the inference is invalid, we replace \\(n\\) by some number smaller than \\(m\\), to find a valid inference.) I can’t see any way to understand material involvement if this is not a case of it.
5. These inferences, though materially valid, are not all symmetric, unless either *no* number is small or *every* number is.  But that’s to make a nonsense of our concepts of “small.”

Despite appearances, this has nothing to do with the sorites paradox, or to do with the context sensitivity of “small.” We could have run the same argument with the inference

> 23 is smaller than \\(N\\), therefore 22 is smaller than \\(N\\).

where \\(N\\) is some fixed (possibly known, possibly unknown) number, and the result would have been the same. All inferences 

> \\(n\\) is smaller than \\(N\\), therefore \\(m\\) is smaller than \\(N\\).

are materially good, in those cases where \\(m\\) is smaller than \\(n\\). And obviously, some of the converse inferences are bad.

(We could do the same with more prosaic examples, too. The inference from “Wellington is south of Melbourne” to “Wellington is south of Sydney” seems materially good, while the converse inference seems much less compelling.)

I *think* this means that Brandom’s account can’t work as it stands, unless I’ve misunderstood it. Even though there aren’t *general* inferential asymmetries between singular terms, there are *local* asymmetries, relative to particular substitution inferences. Any account of the distinctive behaviour of singular terms will need to paint the distinction somewhere other than the symmetry  or asymmetry of *all* substitution inferences.

What do *you* think? 

(Thanks to [Shawn Standefer](http://standefer.weebly.com) and Kai Tanter for conversations that prompted these thoughts.)



